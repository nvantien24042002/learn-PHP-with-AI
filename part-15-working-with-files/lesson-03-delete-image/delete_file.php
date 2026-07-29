<?php
#Xóa file ảnh
$file_url = 'uploads/cloud.png';
if (file_exists($file_url)) {
    unlink($file_url);
    echo "Xóa thành công";
} else {
    echo "Không tồn tại";
}