<?php
$diemToan = 8;
$diemVan = 4;
$hanhKiemTot = true;

// Bạn cần (Toán > 5 VÀ Văn > 5) HOẶC có Hạnh kiểm tốt để lên lớp
if (($diemToan > 5 && $diemVan > 5) || $hanhKiemTot) {
    echo "Bạn được lên lớp.";
} else {
    echo "Bạn phải học lại.";
}
// Kết quả: "Bạn được lên lớp."
?>