<?php
if (!defined('SOURCES')) die("Error");

function menuLang($key, $fallback)
{
    return defined($key) ? constant($key) : $fallback;
}
?>

<header class="site-header" data-site-header>
    <div class="topbar">
        <div class="site-container topbar-inner">
            <a class="topbar-phone" href="tel:0942429989">
                <img src="https://titkul.vn/wp-content/uploads/2024/04/phone.png" alt="">
                094.242.9989
            </a>
            <a class="topbar-guide" href="huong-dan-su-dung">Hướng Dẫn Sử Dụng</a>
        </div>
    </div>

    <div class="site-container header-inner">
        <a class="brand" href="./" aria-label="Titkul">
            <img src="https://titkul.vn/wp-content/uploads/2024/07/cropped-Titkul-logo-header.png" alt="Titkul">
        </a>

        <nav class="primary-nav" data-primary-nav aria-label="Menu chính">
            <a href="./"><?= menuLang('trangchu', 'Trang chủ') ?></a>
            <a href="gioi-thieu-titkul"><?= menuLang('gioithieu', 'Giới Thiệu') ?></a>
            <div class="nav-item has-submenu">
                <a href="san-pham"><?= menuLang('sanpham', 'Sản Phẩm') ?></a>
                <div class="submenu">
                    <a href="HDSchool"><?= menuLang('hdschool', 'HDSchool') ?></a>
                    <a href="H2School"><?= menuLang('h2school', 'H2School (Mầm non)') ?></a>
                    <a href="#"><?= menuLang('zalominiapp', 'Zalo Mini App') ?></a>
                </div>
            </div>
            <div class="nav-item has-submenu">
                <a href="tinh-nang-noi-bat"><?= menuLang('tinhnangnoibat', 'Tính Năng Nổi Bật') ?></a>
                <div class="submenu">
                    <a href="diem-danh-faceid"><?= menuLang('diemdanhfaceid', 'Điểm Danh Face ID') ?></a>
                    <a href="thanh-toan-hoc-phi-khong-tien-mat"><?= menuLang('thanhtoanhocphi', 'Thanh Toán Học Phí Không Tiền Mặt') ?></a>
                    <a href="can-tin-thong-minh"><?= menuLang('cantinthongminh', 'Căn-Tin Thông Minh') ?></a>
                    <a href="dien-thoai-hoc-duong"><?= menuLang('dienthoaihocduong', 'Điện Thoại Học Đường') ?></a>
                    <a href="#"><?= menuLang('hoctructuyen', 'Học Trực Tuyến') ?></a>
                    <a href="#"><?= menuLang('thuvienso', 'Thư Viện Số') ?></a>
                </div>
            </div>
            <div class="nav-item has-submenu">
                <a href="huong-dan-su-dung"><?= menuLang('huongdansudung', 'Hướng Dẫn Sử Dụng') ?></a>
                <div class="submenu">
                    <a href="hdsd-danh-cho-ban-giam-hieu"><?= menuLang('bangiamhieu', 'Ban Giám Hiệu') ?></a>
                    <a href="hdsd-danh-cho-giao-vien"><?= menuLang('giaovien', 'Giáo Viên') ?></a>
                    <a href="hdsd-danh-cho-phhs"><?= menuLang('phuhuynhhocsinh', 'Phụ Huynh Học Sinh') ?></a>
                    <a href="hdsd-danh-cho-hoc-sinh"><?= menuLang('hocsinh', 'Học Sinh') ?></a>
                </div>
            </div>
            <a href="tin-tuc"><?= menuLang('tintuc', 'Tin Tức') ?></a>
            <a href="lien-he"><?= menuLang('lienhe', 'Liên Hệ') ?></a>
        </nav>

        <button class="menu-toggle" type="button" data-menu-toggle aria-label="Mở menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </div>
</header>