# Pharmacy

#Yêu cầu cấu hình
Đã cài đặt XAMPP

#hướng dẫn cài đặt
Bước 1: Bỏ thư mục source code webmail-php vào thư mục htdocs nơi cài đặt xampp
. vd: D:\XAMPP\htdocs\Pharmacy\

Bước 2: Bật XAMPP Control Panel và start 2 module Apache và Mysql

Bước 3: Vào localhost/phpmyadmin/ tạo database với tên: "pharmacy2"

Bước 4: Trong database webmail vừa mới tạo, import file "SQL.sql" trong source code, nhấn yes và import thành công

Bước 5: Truy cập domain http://localhost/Pharmacy/ để chạy chương trình

Bước 6: Đăng nhập vào tài khoản Admin (để truy cập hoặc tạo tài khoản người dùng)

Phía Quản lý: 
   Manager:
     email: manager@gmail.com
     password: 123456
- Xem danh sách thuốc, hóa đơn, chi tiết hóa đơn, khách hàng, lương nhân viên.
- Quản lý người dùng: tìm kiếm, thêm, xóa, sửa.
- Thống kê doanh thu

Phía User:
   Salesman:
     email: staff@gmail.com
     password: 123456
- Xem danh sách thuốc, khách hàng
- Quản lý hóa đơn: tìm kiếm, xem chi tiết hóa đơn, thêm, xóa, sửa, in.

   Warehouse staff:
     email: staff@gmail.com
     password: 123456
- Quản lý nhà cung cấp: tìm kiếm, thêm, xóa, sửa.
- Quản lý thuốc: tìm kiếm, xem, thêm, xóa, sửa, kiểm tra số lượng, kiểm tra ngày hết hạn.
