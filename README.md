# Nỗ lực qua môn PHP một cách vô tri
## Production page
<strong>https://miho.dev</strong>

## Công nghệ sử dụng:
<h3> Backend </h3>

- [HestiaCP](https://hestiacp.com/): Hosting của production page.
- [MySQL 8.0](https://www.mysql.com/): Cơ sở dữ liệu.
- [PHP 8.0](https://www.php.net/): Backend chính cho website

<h3> Front end </h3>

- [Bootstrap 4](https://getbootstrap.com/docs/4.6/getting-started/introduction/): CSS Framework giúp phát triển trang web nhanh gọn lẹ nhất là khi deadline là 30/12/2023???
- [Ajax](https://google.com): Hình như chả ai biết dùng thằng này nhưng vẫn ghi vào cho đẹp.
- [Jquery 3](https://jquery.com/): Hình như chả ai xài thằng nữa vì chuyển qua xài ReactJS hết rồi.
- [Fontawesome 6](https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css): Thư viện ai cũng xài để lấy icon cho web.
## Tổ chức dự án:

## Thư mục `assets`:
Thư mục này chứa các tài nguyên static của website.

- **images/:** Chứa các static image của web.
- **js/:** Chứa các file script javascript của website.
- ...

## Thư mục `includes`:
Thư mục này chứa các tệp tin include, giúp tái sử dụng mã nguồn và duy trì sự cấu trúc của trang web.

- **header.php:** Tệp tin chứa mã HTML của phần đầu trang.
- **footer.php:** Tệp tin chứa mã HTML của phần cuối trang.
- ...

## Thư mục `pages`:
Thư mục này chứa các tệp tin của các trang cụ thể của trang web.

- **about.php:** Trang giới thiệu.
- **contact.php:** Trang liên hệ.
- ...

## Thư mục `php`:
Thư mục này chứa các tệp tin PHP của dự án.

- **api.php:** Tệp tin chứa mã nguồn xử lý API nếu có.
- **utils.php:** Tệp tin chứa các hàm tiện ích PHP.
- ...

## Thư mục `vendor`:
Thư mục này chứa các thư viện và dependency của dự án.

- **bootstrap/**
- **fontawesome/**
- ...

## Tệp tin `config.php`:
Tệp tin cấu hình, chẳng hạn như kết nối đến cơ sở dữ liệu và các cài đặt khác.

- **config.php:** Chứa các biến cấu hình như thông tin kết nối cơ sở dữ liệu và các cài đặt khác.

## `.gitignore`:
Tệp tin chứa danh sách các tệp tin và thư mục không muốn đẩy lên repository Git.

- **.gitignore:** Chứa các mục bạn muốn bỏ qua khi đẩy lên Git, như thư mục `vendor`, `config.php` hoặc các tệp cấu hình cụ thể.


## Triển khai và Quản lý phiên bản:

**Production:** Sử dụng Máy chủ VPS + HestiaCP hoặc Hosting để triển khai dự án lên public.

**Local:** Sử dụng WAMP hoặc Xampp.

## Các phần mềm sử dụng trong Project:

- Debug SQL: [Navicat](https://vioedu-my.sharepoint.com/:u:/g/personal/aba0o2_vioedu_onmicrosoft_com/EW_fXn5n2GFCoVBuC34PqhMBUkuR-RXiaTeFmBTsaqvc4g?e=IsZVHi)
- Text editor: [Visual Studio Code](https://code.visualstudio.com/download)
- Linux remote access: [Terminus](https://termius.com/)
- Git: [Git](https://git-scm.com/download/win)
- Môi trường PHP local: [Xampp](https://www.apachefriends.org/download.html)

## Hướng dẫn cài đặt và chạy dự án:

<h3> Setup website </h3>

1. Clone dự án từ kho lưu trữ.
2. Di chuyển project đến `public_html, v.v...` tuỳ thuộc vào hosting.
3. Đảm bảo máy chủ đã cài PHP 8.0 và MySQL.

<h3> Setup database </h3>

4. Config lại database trong `config.php`.
5. Chỉnh sửa dòng `$disable_create_new_database` thành `false` 
6. Truy cập vào `domain.com/php/createnewDB.php` rồi chờ nó tạo CSDL mới.
7. Chỉnh sửa dòng `$disable_create_new_database` thành `true` tránh bị hacker xâm nhập.

<h3> Setup administrator </h3>

8. Chỉnh sửa dòng `$disable_create_new_admin` thành `false` 
9. Truy cập vào `domain.com/php/createnewAdmin.php` rồi nhập info admin mới.
10. Chỉnh sửa dòng `$disable_create_new_admin` thành `true` tránh bị hacker xâm nhập.

## Tài liệu học tập

Để học cách dự án hoạt động, hãy tham khảo các tài liệu dưới đây:

- [API cơ bản](https://viblo.asia/p/tim-hieu-kien-thuc-co-ban-ve-api-maGK7A4Mlj2) 
- ...
## Ghi chú:

- Đảm bảo tuân thủ các quy tắc lập trình và chuẩn mã nguồn.
- Kiểm tra và sửa lỗi thường xuyên để duy trì chất lượng mã nguồn.
- Cập nhật phiên bản các công nghệ sử dụng để tránh các lỗ hổng bảo mật và tận dụng tính năng mới.

## Tác giả:

Dự án được tạo bởi:

- [Miho](https://github.com/Miho1254)
- [HitoruAkame](https://github.com/HitoruAkame)
- [Trí bjp](https://github.com/letri2604)