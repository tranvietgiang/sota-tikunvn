<?php
if (!defined('SOURCES')) die("Error");

$footerTitle = !empty($footer['ten' . $lang]) ? $footer['ten' . $lang] : 'Titkul';
$footerContent = !empty($footer['noidung' . $lang]) ? $footer['noidung' . $lang] : 'Titkul - Phần mềm ứng dụng Quản lý trường học theo định hướng chuyển đổi số.';
$footerHotline = !empty($optsetting['hotline']) ? $optsetting['hotline'] : '094.242.9989';
$footerEmail = !empty($optsetting['email']) ? $optsetting['email'] : 'info@titkul.vn';
$footerWebsite = !empty($optsetting['website']) ? $optsetting['website'] : 'titkul.vn';
$footerZalo = !empty($optsetting['zalo']) ? $optsetting['zalo'] : preg_replace('/[^0-9]/', '', $footerHotline);
?>

<footer class="site-footer">
    <div class="site-container footer-grid">
        <div class="footer-brand">
            <img src="assets/images/Titkul-logo-header.png" alt="<?= htmlspecialchars(strip_tags($footerTitle)) ?>">
            <p><?= htmlspecialchars_decode($footerContent) ?></p>
        </div>
        <div class="footer-column">
            <h3>Liên kết</h3>
            <a href="gioi-thieu-titkul">Giới Thiệu</a>
            <a href="san-pham">Sản Phẩm</a>
            <a href="tinh-nang-noi-bat">Tính Năng Nổi Bật</a>
            <a href="huong-dan-su-dung">Hướng Dẫn Sử Dụng</a>
            <a href="tin-tuc">Tin Tức</a>
            <a href="lien-he">Liên Hệ</a>
        </div>
        <div class="footer-column">
            <h3>Thông tin liên hệ</h3>
            <a href="tel:<?= preg_replace('/[^0-9]/', '', $footerHotline) ?>">Hotline: <?= htmlspecialchars($footerHotline) ?></a>
            <a href="mailto:<?= htmlspecialchars($footerEmail) ?>">Email: <?= htmlspecialchars($footerEmail) ?></a>
            <span>Website: <?= htmlspecialchars($footerWebsite) ?></span>
        </div>
        <div class="footer-column">
            <h3>Kênh tương tác</h3>
            <img class="footer-qr" src="assets/images/Titkul-Zalo-OA-150px.jpg" alt="Titkul Zalo OA">
        </div>
    </div>
    <div class="site-container footer-bottom">
        <span>© <?= date('Y') ?> <?= htmlspecialchars(strip_tags($footerTitle)) ?>. All rights reserved.</span>
    </div>
</footer>

<div class="quick-contact" aria-label="Liên hệ nhanh">
    <a href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $footerZalo) ?>" target="_blank" rel="noopener" aria-label="Chat Zalo">
        <img src="assets/images/zalo-icon.png" alt="">
    </a>
    <a href="tel:<?= preg_replace('/[^0-9]/', '', $footerHotline) ?>" aria-label="Gọi điện">
        <img src="assets/images/phone-circle.png" alt="">
    </a>
    <button type="button" class="back-to-top" data-back-to-top aria-label="Lên đầu trang">
        ↑
    </button>
</div>
