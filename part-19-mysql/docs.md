Lịch sử hình thành ?
+ Vào năm 1970 một hệ quản trị CSDL mới ra đời có tên là CSDL quan hệ đã khắc phục được những cách lưu trữ thông tin trước đó và trở thành một hình thức lưu trữ phổ biến nhất hiện nay
Lưu trữ gì ?
 + Hệ quản trị CSDL dùng để lưu trữ thông tin các đối tượng trong ứng dụng và mối quan hệ của nó 
 Ví dụ:
    + Người dùng
    + Sản phẩm
    + Danh mục sản phẩm
    + Đơn hàng

19.2: Cách tổ chức bảng trong CSDL
   + Dữ liệu được lưu dạng bảng bao gồm các cột, các dòng
   + Cột biểu thị thuộc tính của thực thể như :id,title,price
   + Hàng biểu thị thông tin của một thực thể nào đó 
   + Giá trị nằm ở điểm giao giữa cột và hàng được gọi là ô 
   + Nếu bảng chứa một hoặc nhiều cột dùng phân biệt các hàng khác nhau được gọi là khóa chính 

Xây dựng cột trong CSDL
   + Cột trong bảng dùng để định nghĩa các thuộc tính của thực thể
   + Cột có kiểu dữ liệu thích hợp với tính chất thuộc tính được lưu trữ: char,varchar,Int,Datetime
   + Cột có thể cho phép NULL hoặc không NULL
   + Có thể gán giá trị mặc định cho cột khi không được thiết lập giá trị
   + Bảng có thể chứa cột mà giá trị nó có thể tự tăng (Auto increment)