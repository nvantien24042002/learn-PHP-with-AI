-- ==========================================================
-- Khôi phục database `mini_shop` cho php-crud-product và part-22-pagination
-- Cách dùng: phpMyAdmin -> tab "Import" -> chọn file này -> "Import"
-- LƯU Ý: file sẽ XÓA bảng `products` cũ (nếu có) rồi tạo lại từ đầu.
-- ==========================================================

CREATE DATABASE IF NOT EXISTS `mini_shop`
    CHARACTER SET utf8mb4
    COLLATE utf8mb4_unicode_ci;

USE `mini_shop`;

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL,
    `price` DECIMAL(15, 2) NOT NULL,
    `description` TEXT NOT NULL,
    `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`),
    CONSTRAINT `products_price_positive` CHECK (`price` > 0)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- 7 sản phẩm gốc (lấy từ file mini_shop.sql bạn đã export ngày 19/09/2026)
INSERT INTO `products` (`id`, `name`, `price`, `description`, `created_at`) VALUES
(3, 'Number one', 250000.00, 'Nước ngọt number one', '2026-09-09 17:18:54'),
(4, 'Bò Húc', 150000.00, 'Nước tăng lực bò húc', '2026-09-09 18:51:11'),
(5, 'Bò Húc', 150000.00, 'Nước tăng lực bò húc', '2026-09-09 18:51:47'),
(7, 'Aquarius', 15000.00, 'Nước bù khoáng và điện giải giúp giải khát khi chơi thể thao.', '2026-09-12 07:55:47'),
(8, 'Monster Energy Ultra', 58997.00, 'Nước tăng lực Monster Energy Ultra là dòng sản phẩm nước tăng lực không đường', '2026-09-12 09:07:01'),
(9, 'Nước uống KIRIN ICE', 11999.00, 'Nước uống KIRIN ICE+ trái cây vị đào (490ml)', '2026-09-12 09:29:47'),
(10, 'Bia Hà Nội', 270000.00, 'Bia Hơi Hà Nội , nồng độ cồn nhẹ', '2026-09-19 08:27:22');

-- 18 sản phẩm mẫu thêm vào để luyện phân trang (5 sp/trang -> 5 trang)
-- và để có dữ liệu cho phần 23 (AJAX: tìm kiếm, xóa không tải lại trang)
INSERT INTO `products` (`name`, `price`, `description`) VALUES
('Coca-Cola lon 320ml', 10000.00, 'Nước ngọt có ga vị cola'),
('Pepsi lon 320ml', 10000.00, 'Nước ngọt có ga vị cola'),
('7Up lon 320ml', 10000.00, 'Nước ngọt có ga vị chanh'),
('Sting dâu 330ml', 12000.00, 'Nước tăng lực vị dâu'),
('Red Bull Thái 250ml', 15000.00, 'Nước tăng lực lon nhỏ'),
('Trà xanh Không Độ 455ml', 11000.00, 'Trà xanh đóng chai vị chanh'),
('Trà Ô Long Tea+ 450ml', 12000.00, 'Trà ô long đóng chai'),
('C2 hương chanh 455ml', 9000.00, 'Trà xanh đóng chai hương chanh'),
('Lavie 500ml', 6000.00, 'Nước khoáng thiên nhiên'),
('Aquafina 500ml', 6000.00, 'Nước tinh khiết đóng chai'),
('Revive chanh muối 390ml', 12000.00, 'Nước bổ sung ion vị chanh muối'),
('Sữa tươi Vinamilk 180ml', 8000.00, 'Sữa tươi tiệt trùng có đường'),
('Sữa đậu nành Fami 200ml', 6500.00, 'Sữa đậu nành nguyên chất'),
('Cà phê sữa Highlands lon 235ml', 18000.00, 'Cà phê sữa đóng lon'),
('Nescafé cà phê sữa đá 180ml', 15000.00, 'Cà phê sữa pha sẵn'),
('Bia Saigon Special 330ml', 19000.00, 'Bia lon Saigon Special'),
('Bia Tiger lon 330ml', 20000.00, 'Bia lon Tiger'),
('Nước cam Twister 455ml', 12000.00, 'Nước cam ép đóng chai');
