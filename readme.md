## Kaober.com - dự án xây dựng nền tảng thương mại điện tử.
# Hướng dẫn cài đặt: 
- clone về, sau đó chạy: composer install để update file.
- Config: gmail, database, session.
- sau đó chạy cài đặt db(config trước khi chạy): php artisan migrate.
- Chạy các file seed để tạo dữ liệu mãu
- Cần tạo db seeder theo thứ tạo khóa ngoại
- CÁC CÂU LỆNH TỐI ƯU:
  php artisan view:clear
  php artisan optimize


GIỚI THIỆU
-------------
1. Công cụ sử dụng:
 - trello (quản lý dự án)
 - gitlab (source code)
 - astah (flow chart)
 - gg drive (files)
2. Công nghệ sử dụng
 - HIỆN TẠI:
   - Laravel 5.4 (php framework)
   - Jquery (js library)
   -  Jquery UI
   - Jquery datatable
   - package (module manager, SEO, Socialite, Debugbar, Excel ...)
 - TƯƠNG LAI:
   - VueJS 2 (frontend - ưu nhược) hoặc ReactJS, AngularJS 4
   - API (API cho app và web)
   - NodeJS (ưu: big request)


SẢN PHẨM
--------------

Backend
------
1. Quản lý sản phẩm
2. Quản lý danh mục sản phẩm
3. Quản lý đơn hàng
4. Quản lý bài viết blog
5. Quản lý danh mục bài viết
6. Quản lý log admin
7. Quản lý nhà cung cấp
8. Quản lý người dùng
9. Quản lý giao diện 
10. quản lý thông tin cá nhân: cập nhật, thay đổi mật khẩu
11. Quản lý landing page (doing)
12. HelpCenter(trung tâm hỗ trợ - FAQ)
13. Feedback (quản lý khiếu  nại)


Frontend
-----------
- Sử dụng thư viện bulma (css library)
- Giao diện: UI / UX
- Thanh toán

Package
-------------
1. html minify


Một số vấn đề
-------------
1. Hiển thị tất cả các thông tin cần thiết và có trong database lên hệ thống

2. Xuất tất cả các file excel với các thông tin và bảng có trên hệ thống

3. Tạo được đơn hàng: cho phép lọc xem đó là thông tin do kaober tọ, quản lý chi phí do kaober thực hiện
  - cho phép sửa thông tin đơn hàng

4. Xử lý khiếu nại:
 - Link đến nhà quản lý sản phẩm đó
 - Link đến các sản phẩm liên quan đến đơn hàng
 - Thông tin khách hàng, mua bằng tài khoản hay là mua bằng sđt or mail
 - TẠO TICKET: 
   - Các trạng thái của ticket: chờ xử lý, đang xử lý, đã xử lý, hoàn tất (4 trạng thái)
   - Các ticket cần có các thông tin như:
     - Thuộc nhóm khiếu nại nào -> trong nhóm có khiếu nại gì, có những laoij gì trong nhóm -> được phép note lại các thông tin trong lúc tạo 1 khiếu lại, đang khiếu lại, hiển thị nó theo thời gian thực hiện.

5. Thống kê: tài khoản, hoạt động,  ...

6. Khi đăng sản phẩm cần đăng theo nhóm sản phẩm (có triết khấu % ra sao) -> tạo 1 bảng quan  hệ nhiều nhiều giữa bảng danh mục sản phẩm và bảng Nhà cung cấp sản phẩm, mỗi danh mục đó cần thêm thuộc tính về % triết khấu để khi nhập giá cả sẽ triết khấu theo nó.


Update
----------
