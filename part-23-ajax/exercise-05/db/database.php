<?php
function db_connect(array $db)
{
    global $conn;

    $conn = mysqli_connect(
        $db["hostname"],
        $db["username"],
        $db["password"],
        $db["database"]
    );

    if (!$conn) {
        http_response_code(500);
        exit("Database connection failed.");
    }

    mysqli_set_charset($conn, "utf8mb4");
}

function db_query($query_string)
{
    global $conn;
    $result = mysqli_query($conn, $query_string);

    if (!$result) {
        db_sql_error("Query error", $query_string);
    }

    return $result;
}

function db_fetch_row($query_string)
{
    $mysqli_result = db_query($query_string);
    $result = mysqli_fetch_assoc($mysqli_result);
    mysqli_free_result($mysqli_result);

    return $result;
}

function db_fetch_array($query_string)
{
    $result = [];
    $mysqli_result = db_query($query_string);

    while ($row = mysqli_fetch_assoc($mysqli_result)) {
        $result[] = $row;
    }

    mysqli_free_result($mysqli_result);
    return $result;
}

function db_num_rows($query_string)
{
    $mysqli_result = db_query($query_string);
    $count = mysqli_num_rows($mysqli_result);
    mysqli_free_result($mysqli_result);

    return $count;
}

function db_insert($table, array $data)
{
    global $conn;
    $table = db_identifier($table);
    $fields = array_map("db_identifier", array_keys($data));
    $values = array_values($data);
    $placeholders = implode(", ", array_fill(0, count($values), "?"));
    $sql = "INSERT INTO `{$table}` (`" . implode("`, `", $fields) . "`) VALUES ({$placeholders})";
    $stmt = mysqli_prepare($conn, $sql);
    db_bind_values($stmt, $values);

    if (!mysqli_stmt_execute($stmt)) {
        db_sql_error("Insert error", $sql);
    }

    return mysqli_insert_id($conn);
}

function db_update($table, array $data, $where)
{
    global $conn;
    $table = db_identifier($table);
    $sets = [];
    $values = [];

    foreach ($data as $field => $value) {
        $sets[] = "`" . db_identifier($field) . "` = ?";
        $values[] = $value;
    }

    $sql = "UPDATE `{$table}` SET " . implode(", ", $sets) . " WHERE {$where}";
    $stmt = mysqli_prepare($conn, $sql);
    db_bind_values($stmt, $values);

    if (!mysqli_stmt_execute($stmt)) {
        db_sql_error("Update error", $sql);
    }

    return mysqli_stmt_affected_rows($stmt);
}

function db_delete($table, $where)
{
    global $conn;
    $table = db_identifier($table);
    $sql = "DELETE FROM `{$table}` WHERE {$where}";
    $stmt = mysqli_prepare($conn, $sql);

    if (!mysqli_stmt_execute($stmt)) {
        db_sql_error("Delete error", $sql);
    }

    return mysqli_stmt_affected_rows($stmt);
}

function escape_string($str)
{
    global $conn;
    return mysqli_real_escape_string($conn, $str);
}

function db_identifier($identifier)
{
    if (!preg_match("/^[A-Za-z_][A-Za-z0-9_]*$/", $identifier)) {
        throw new InvalidArgumentException("Invalid database identifier.");
    }

    return $identifier;
}

function db_bind_values($stmt, array $values)
{
    $types = "";
    $references = [];

    foreach ($values as $key => $value) {
        if (is_int($value)) {
            $types .= "i";
        } elseif (is_float($value)) {
            $types .= "d";
        } else {
            $types .= "s";
        }

        $references[$key] = &$values[$key];
    }

    mysqli_stmt_bind_param($stmt, $types, ...$references);
}

function db_sql_error($message, $query_string = "")
{
    error_log($message . ($query_string ? ": " . $query_string : ""));
    http_response_code(500);
    exit("A database error occurred.");
}
