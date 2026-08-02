<?php

function get_header() {
    $path_header = "inc/header.php";
    if (file_exists($path_header)) {
        require $path_header;
    } else {
        echo "Không tồn tại {$path_header}";
    }
}

function get_footer() {
    $path_footer = "inc/footer.php";

    if (file_exists($path_footer)) {
        require $path_footer;
    } else {
        echo "Không tồn tại {$path_footer}";
    }
}

function get_404() {
    $path_error = "pages/404.php";

    if (file_exists($path_error)) {
        require $path_error;
    } else {
        echo "Không tồn tại {$path_error}";
    }
}