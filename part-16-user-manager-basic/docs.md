# MÔ TẢ YÊU CẦU HỆ THÔNG 
## Giúp người dùng đi vào hệ thống theo tài khoản 
## Phân chia việc sử dụng tài nguyên hệ thống theo đối tượng 

## Form login
- Username
- Password

### Luồng xử lý 
+ Người dùng muốn vào hệ thống cần login
+ Nếu chưa login cố tình truy cập sẽ bị đẩy ra trang login
### Checklist xây dựng chức năng
+ Xây dựng database
+ Xây dựng giao diện
+ Ý tưởng lưu trữ thông tin phiên login
+ Validation form
+ Viết chức năng login
+ Hiển thị thông tin đăng nhập
+ Xử lý chuyển hướng khi chưa login
+ Xử lý logout
# 1. Xây dựng database ứng dụng - (Mảng hai chiều)
+ Lưu trữ mảng dạng user
+ Lưu trữ nhiều user
+ Thông tin bao gồm: id,username,password,fullname,email
# 2. Ý tưởng lưu trữ phiên Login 
+ Sau khi login cần lưu trữ 
 + Trạng thái login
 + User login
+ Công cụ lưu trữ : Session

$_SESSION['is_login'] = true;
$_SESSION['user_login'] = 'tien';

# 4. Chuẩn hóa dữ liệu form 
+ Thông báo dữ liệu rỗng 
+ ĐÚng định dạng
  + Username /^[A-Za-z0-9_\.]{6,32}$/
  + Password /^([A-Z]){1}([\w_\.!@#$%^&*()]+){5,31}$/