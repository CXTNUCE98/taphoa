# HƯỚNG DẪN CÀI ĐẶT WEBSITE TẠP HÓA MMO

Chào bạn, vì máy bạn chưa có sẵn WordPress nên bạn cần làm theo 2 bước lớn sau đây.

## BƯỚC 1: CÓ TRANG WEB WORDPRESS (Nếu bạn chưa có)

Bạn cần có một trang Admin quản trị (thường có dạng `tenmien.com/wp-admin`).

- **Cách 1 (Dễ nhất - Tốn tiền)**: Mua Hosting và Domain (Tên miền). Nhờ bên bán cài sẵn WordPress cho bạn.
- **Cách 2 (Miễn phí - Khó hơn)**: Cài phần mềm **LocalWP** hoặc **XAMPP** để chạy web trên máy tính của bạn.
  - Tải LocalWP tại: `localwp.com` -> Cài đặt -> Bấm "Create New Site" -> Nhập tên "TapHoaMMO".
  - Sau khi xong, nó sẽ cho bạn nút "WP Admin".

## BƯỚC 2: CÀI PLUGIN & GIAO DIỆN (Tôi đã chuẩn bị sẵn)

Sau khi bạn đã vào được trang Admin (màn hình đen bên tay trái có chữ Dashboard, Posts, Pages...):

### 1. Cài Giao diện (Theme) - Quan trọng để có màu xanh

1.  Nhìn cột bên trái, tìm chữ **Appearance** (Giao diện) -> Chọn **Themes**.
2.  Bấm nút **Add New** (Thêm mới) ở trên cùng.
3.  Bấm nút **Upload Theme** (Tải giao diện lên).
4.  Bấm **Choose File** -> Chọn file `taphoammo-child.zip` (Lưu ý: Bạn cần nén thư mục `taphoammo-child` thành file .zip trước. Hoặc tôi sẽ nén giúp bạn ngay sau đây).
5.  Bấm **Install Now** -> **Activate** (Kích hoạt).

### 2. Cài Plugins (Công cụ chức năng)

Tôi đã tải sẵn các file .zip vào thư mục `plugins` cho bạn. Làm lần lượt cho 5 file đó:

1.  Nhìn cột bên trái, chọn **Plugins** -> **Add New**.
2.  Bấm **Upload Plugin**.
3.  Bấm **Choose File** -> Vào thư mục `plugins` tôi đã tạo -> Chọn file (ví dụ `woocommerce.zip`).
4.  Bấm **Install Now** -> **Activate**.
5.  Lặp lại với `elementor.zip`, `terawallet.zip`, v.v...

---

**TỔNG KẾT**:
Nếu bạn chưa có WordPress, hãy tải **LocalWP** về cài trước. Đó là cách nhanh nhất để thực hành.
