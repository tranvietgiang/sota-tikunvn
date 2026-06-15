<?php
if (!defined('SOURCES')) die("Error");

if (!function_exists('homeImagePath')) {
    function homeImagePath($photo, $fallback)
    {
        if ($photo == '') return $fallback;
        if (strpos($photo, 'assets/') === 0 || strpos($photo, 'http') === 0) return $photo;
        return UPLOAD_PHOTO_L . $photo;
    }
}

$hero = (!empty($slider) && is_array($slider)) ? $slider[0] : array();
$heroTitle = !empty($hero['ten' . $lang]) ? $hero['ten' . $lang] : 'error';
$heroDesc = !empty($hero['mota' . $lang]) ? $hero['mota' . $lang] : 'error';
$heroPhoto = !empty($hero['photo']) ? $hero['photo'] : '';
$heroImage = homeImagePath($heroPhoto, 'assets/images/titkul-luc-giac.png');
$heroLink = !empty($hero['link']) ? $hero['link'] : '#dangkytuvan';

$intro = $d->rawQueryOne("select ten$lang, mota$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id desc limit 0,1", array('slider-2'));
$introTitle = !empty($intro['ten' . $lang]) ? $intro['ten' . $lang] : 'error';
$introDesc = !empty($intro['mota' . $lang]) ? $intro['mota' . $lang] : 'error';
$introImage = homeImagePath(!empty($intro['photo']) ? $intro['photo'] : '', 'assets/images/titkul.png');

$homeProduct = $d->rawQueryOne("select ten$lang, mota$lang, noidung$lang, photo from #_static where type = ? and hienthi > 0 limit 0,1", array('home-product'));
$homeProductEyebrow = !empty($homeProduct['ten' . $lang]) ? $homeProduct['ten' . $lang] : 'error';
$homeProductTitle = !empty($homeProduct['mota' . $lang]) ? $homeProduct['mota' . $lang] : 'error';
$homeProductDesc = !empty($homeProduct['noidung' . $lang]) ? $homeProduct['noidung' . $lang] : 'error';
$homeProductImage = homeImagePath(!empty($homeProduct['photo']) ? $homeProduct['photo'] : '', 'assets/images/Titkul-da-nen-tang.png');

$benefitHeading = $d->rawQueryOne("select ten$lang, noidung$lang from #_static where type = ? and hienthi > 0 limit 0,1", array('home-benefit-heading'));
$benefitItems = $d->rawQuery("select ten$lang, mota$lang from #_news where type = ? and hienthi > 0 order by stt,id asc", array('home-benefit'));
$schoolsHeading = $d->rawQueryOne("select ten$lang from #_static where type = ? and hienthi > 0 limit 0,1", array('home-schools-heading'));
$schoolLogos = $d->rawQuery("select ten$lang, photo, link from #_photo where type = ? and hienthi > 0 order by stt,id asc", array('home-school'));
$newsHeading = $d->rawQueryOne("select ten$lang from #_static where type = ? and hienthi > 0 limit 0,1", array('home-news-heading'));
$homeNews = $d->rawQuery("select ten$lang, photo, link from #_news where type = ? and hienthi > 0 order by stt,id asc limit 0,4", array('home-news'));

?>

<main class="site-main">
    <section class="hero-section">
        <div class="site-container hero-grid">
            <div class="hero-copy">
                <h1><?= htmlspecialchars_decode($heroTitle) ?></h1>
                <p class="hero-subtitle"><?= htmlspecialchars_decode($heroDesc) ?></p>
                <a class="btn btn-primary" href="<?= $heroLink ?>">Đăng Ký Tư Vấn Ngay</a>
            </div>
            <div class="hero-image">
                <img src="<?= $heroImage ?>" alt="<?= htmlspecialchars(strip_tags($heroTitle)) ?>">
                <p>Năng động - Chuyên nghiệp - Thực tiễn</p>
            </div>
        </div>
    </section>

    <section class="logo-section">
        <div class="site-container">
            <img class="7-giac" src="<?= $introImage ?>" alt="<?= htmlspecialchars(strip_tags($introTitle)) ?>">
        </div>
    </section>

    <section class="intro-section">
        <div class="site-container narrow js-run-word-effect">
            <p><?= htmlspecialchars_decode($introDesc) ?></p>
        </div>
    </section>

    <section class="product-section">
        <div class="site-container product-grid">
            <div class="product-copy">
                <p class="section-eyebrow"><?= htmlspecialchars_decode($homeProductEyebrow) ?></p>
                <h2><?= htmlspecialchars_decode($homeProductTitle) ?></h2>
                <p><?= htmlspecialchars_decode($homeProductDesc) ?></p>
                <img src="<?= $homeProductImage ?>" alt="<?= htmlspecialchars(strip_tags($homeProductTitle)) ?>">
            </div>
            <div class="product-actions">
                <a class="btn btn-secondary" href="HDSchool">HDSchool</a>
                <a class="btn btn-secondary" href="H2School">H2School</a>
            </div>
        </div>
    </section>

    <section class="benefit-section">
        <div class="site-container narrow section-heading center">
            <h2><?= htmlspecialchars_decode(!empty($benefitHeading['ten' . $lang]) ? $benefitHeading['ten' . $lang] : 'error') ?></h2>
            <p><?= htmlspecialchars_decode(!empty($benefitHeading['noidung' . $lang]) ? $benefitHeading['noidung' . $lang] : 'error') ?></p>
        </div>
        <div class="site-container benefit-grid">
            <?php foreach ($benefitItems as $k => $item) { ?>
                <article class="benefit-card" style="--delay: <?= $k * 0.12 ?>s">
                    <div class="benefit-icon"><?= htmlspecialchars_decode($item['ten' . $lang]) ?></div>
                    <p><?= htmlspecialchars_decode($item['mota' . $lang]) ?></p>
                </article>
            <?php } ?>
        </div>
    </section>

    <section class="why-section">
        <div class="site-container narrow center">
            <h2>TẠI SAO CHỌN TIT<span>KUL</span>?</h2>
            <p>Titkul có đủ chức năng chuyên môn cung cấp phần mềm quản lý trường học; được Sở GD-ĐT, Sở KH-CN công nhận, được kết nối dữ liệu dùng chung của Ngành. Đáp ứng đầy đủ các chức năng quản lý toàn diện của Nhà trường phù hợp theo định hướng chuyển đổi số của Ngành giáo dục.</p>
            <a href="van-ban-phap-ly">Xem Văn Bản Pháp Lý &gt;&gt;&gt;</a>
        </div>
    </section>

    <section class="vision-section">
        <div class="site-container vision-grid">
            <article class="vision-card">
                <div class="vision-text">
                    <span>TẦM NHÌN</span>
                    <h3>CUNG CẤP PHẦN MỀM<br>GIÁ TRỊ THỰC TIỄN CAO</h3>
                    <p>Titkul cung cấp sản phẩm phần mềm quản lý chuyển đổi số mang tính thực tiễn cao, mang đến giá trị cao nhất cho khách hàng trường học, doanh nghiệp.</p>
                </div>
                <img src="https://titkul.vn/wp-content/uploads/2024/09/image-insert-vission-1.jpg" alt="Tầm nhìn Titkul">
            </article>
            <article class="vision-card reverse">
                <div class="vision-text">
                    <span>SỨ MỆNH</span>
                    <h3>PHỤC VỤ CHUYỂN ĐỔI SỐ<br>NGÀNH GIÁO DỤC</h3>
                    <p>Không ngừng đổi mới, sáng tạo, nhằm cung cấp sản phẩm phần mềm quản lý tốt nhất cho khách hàng, phục vụ chuyển đổi số thành công.</p>
                </div>
                <img src="https://titkul.vn/wp-content/uploads/2024/09/Titkul-chuyen-doi-so-vision.jpg" alt="Sứ mệnh Titkul">
            </article>
            <article class="vision-card">
                <div class="vision-text">
                    <span>GIÁ TRỊ CỐT LÕI</span>
                    <h3>NĂNG ĐỘNG, CHUYÊN NGHIỆP, THỰC TIỄN CAO</h3>
                    <p>Năng động - Sáng Tạo - Đổi Mới - Thực tiễn cao.</p>
                </div>
                <img src="https://titkul.vn/wp-content/uploads/2024/07/titkul-nang-dong.jpg" alt="Giá trị cốt lõi Titkul">
            </article>
        </div>
    </section>

    <section class="audience-section">
        <div class="site-container narrow center section-heading">
            <h2>PHẦN MỀM TIT<span>KUL</span> DÀNH CHO AI?</h2>
            <p>Phần mềm Quản Lý Trường Học của Titkul dành cho Nhà trường và gia đình với nhiều tính năng số hoá hữu ích cho công tác quản lý, tương tác và báo cáo.</p>
        </div>
        <div class="site-container audience-grid">
            <article class="audience-card">
                <img src="https://titkul.vn/wp-content/uploads/2024/01/CanBoQuanLy-150x150-1.png" alt="">
                <h3>ĐỐI VỚI BAN GIÁM HIỆU</h3>
                <p>Quản lý tình hình hoạt động của Trường theo thời gian thực, nắm bắt dữ liệu, tương tác và báo cáo nhanh chóng.</p>
                <a href="hdsd-danh-cho-ban-giam-hieu">&gt;&gt; XEM HƯỚNG DẪN SỬ DỤNG</a>
            </article>
            <article class="audience-card">
                <img src="https://titkul.vn/wp-content/uploads/2024/01/GiaoVien-150x150-1.png" alt="">
                <h3>ĐỐI VỚI GIÁO VIÊN</h3>
                <p>Hỗ trợ công tác giảng dạy, nghiệp vụ chuyên môn, tương tác với phụ huynh nhanh chóng và hiện đại hoá công tác giảng dạy.</p>
                <a href="hdsd-danh-cho-giao-vien">&gt;&gt; XEM HƯỚNG DẪN SỬ DỤNG</a>
            </article>
            <article class="audience-card">
                <img src="https://titkul.vn/wp-content/uploads/2024/01/PhuHuynh-150x150-1.png" alt="">
                <h3>ĐỐI VỚI PHỤ HUYNH HỌC SINH</h3>
                <p>Hỗ trợ nắm bắt lịch học, kết quả học tập, điểm danh, sức khỏe học đường và tương tác trực tiếp với nhà trường.</p>
                <a href="hdsd-danh-cho-phhs">&gt;&gt; XEM HƯỚNG DẪN SỬ DỤNG</a>
            </article>
            <article class="audience-card">
                <img src="https://titkul.vn/wp-content/uploads/2024/01/HocSinh-copy-150x150-1.png" alt="">
                <h3>ĐỐI VỚI HỌC SINH</h3>
                <p>Nắm bắt kết quả học tập, rèn luyện kỹ năng công nghệ và thông tin với giáo viên, phụ huynh về tình hình học tập.</p>
                <a href="hdsd-danh-cho-hoc-sinh">&gt;&gt; XEM HƯỚNG DẪN SỬ DỤNG</a>
            </article>
        </div>
    </section>

    <section class="consult-section" id="dangkytuvan">
        <div class="site-container consult-grid">
            <div>
                <h2>Đăng Ký Tư Vấn Ngay</h2>
                <p>Quý Thầy/Cô/Khách hàng vui lòng cung cấp thông tin, để được tư vấn miễn phí phần mềm quản lý trường học, chuyển đổi số nhà trường.</p>
                <form class="consult-form" action="#" method="post">
                    <label>Họ &amp; tên: *</label>
                    <input type="text" name="hoten">
                    <label>Số Điện Thoại: *</label>
                    <input type="tel" name="dienthoai">
                    <label>Tên Trường đang công tác: *</label>
                    <input type="text" name="tentruong">
                    <label>Địa chỉ:</label>
                    <input type="text" name="diachi">
                    <button class="btn btn-primary" type="submit">Gửi tin</button>
                </form>
            </div>
            <img src="https://titkul.vn/wp-content/uploads/2025/07/Titkul-dang-ky-image-1.webp" alt="Đăng ký tư vấn Titkul">
        </div>
    </section>

    <section class="schools-section">
        <div class="site-container center section-heading">
            <h2><?= htmlspecialchars_decode(!empty($schoolsHeading['ten' . $lang]) ? $schoolsHeading['ten' . $lang] : 'CÁC TRƯỜNG TIÊU BIỂU') ?></h2>
        </div>
        <div class="site-container school-logos" aria-label="<?= htmlspecialchars(!empty($schoolsHeading['ten' . $lang]) ? $schoolsHeading['ten' . $lang] : 'CÁC TRƯỜNG TIÊU BIỂU') ?>">
            <div class="school-logo-track">
                <?php for ($loop = 0; $loop < 2; $loop++) { ?>
                    <?php foreach ($schoolLogos as $school) {
                        $schoolName = !empty($school['ten' . $lang]) ? $school['ten' . $lang] : 'Trường tiêu biểu';
                        $schoolImage = homeImagePath(!empty($school['photo']) ? $school['photo'] : '', 'assets/images/logo-new-THPT-chuyen-Luong-The-Vinh.jpg');
                        $schoolLink = !empty($school['link']) ? $school['link'] : '';
                    ?>
                        <?php if ($schoolLink != '') { ?>
                            <a class="school-logo-item" href="<?= $schoolLink ?>">
                                <img src="<?= $schoolImage ?>" alt="<?= htmlspecialchars(strip_tags($schoolName)) ?>">
                            </a>
                        <?php } else { ?>
                            <div class="school-logo-item">
                                <img src="<?= $schoolImage ?>" alt="<?= htmlspecialchars(strip_tags($schoolName)) ?>">
                            </div>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="video-section">
        <div class="site-container video-grid">
            <article>
                <iframe src="https://www.youtube.com/embed/OD3CuAv9-zc" title="Hướng dẫn sử dụng Miniapp Zalo" allowfullscreen></iframe>
                <h3>Hướng dẫn sử dụng Miniapp Zalo</h3>
            </article>
            <article>
                <iframe src="https://www.youtube.com/embed/wsHlVTcCdYs" title="Hướng dẫn thanh toán học phí trên HDSchool" allowfullscreen></iframe>
                <h3>Hướng dẫn Thanh toán học phí trên HDSchool</h3>
            </article>
        </div>
    </section>

    <section class="news-section">
        <div class="site-container center section-heading">
            <h2><?= htmlspecialchars_decode(!empty($newsHeading['ten' . $lang]) ? $newsHeading['ten' . $lang] : 'TIN TỨC SỰ KIỆN') ?></h2>
        </div>
        <div class="site-container news-grid">
            <?php foreach ($homeNews as $k => $news) {
                $newsTitle = !empty($news['ten' . $lang]) ? $news['ten' . $lang] : 'Tin tức sự kiện';
                $newsImage = homeImagePath(!empty($news['photo']) ? $news['photo'] : '', 'assets/images/Titkul-cac-su-kien.jpg');
                $newsLink = !empty($news['link']) ? $news['link'] : 'tin-tuc';
            ?>
                <article class="news-card" style="--delay: <?= $k * 0.12 ?>s">
                    <a href="<?= $newsLink ?>">
                        <img src="<?= $newsImage ?>" alt="<?= htmlspecialchars(strip_tags($newsTitle)) ?>">
                        <h3><?= htmlspecialchars_decode($newsTitle) ?></h3>
                    </a>
                </article>
            <?php } ?>
        </div>
    </section>
</main>
