<?php $this->load->view('component/Header.php') ?>

<div class="Banner">
    <img src="<?php echo base_url() ?>assets/img/hero.jpg" alt="banner">
</div>

<div class="Banner-Slider">
    <div class="slide active">
        <img src="<?php echo base_url('assets/img/banner-slide-1.jpg') ?>" alt="banner">
    </div>
    <div class="slide active">
        <img src="<?php echo base_url('assets/img/banner-slide-2.jpg') ?>" alt="banner">
    </div>
    <div class="slide active">
        <img src="<?php echo base_url('assets/img/banner-slide-3.jpg') ?>" alt="banner">
    </div>
    <div class="slide active">
        <img src="<?php echo base_url('assets/img/banner-slide-4.jpg') ?>" alt="banner">
    </div>
</div>

<div class="text-description">
    <h3>PC4U – นึกถึงคอมประกอบ นึกถึงเรา จัดสเปคออนไลน์ครบจบในที่เดียว 24/7</h3>
    <p>PC4U เพื่อนรู้ใจสายไอที ศูนย์รวมคอมพิวเตอร์ประกอบตามสเปคในราคาสุดคุ้ม ให้บริการผ่านช่องทางออนไลน์ 100% เลือกลองสเปค คัดสรรอะไหล่คุณภาพ พร้อมจัดส่งตรงถึงบ้านคุณทั่วประเทศ </p>
    <p>ช้อปสะดวกได้ตลอด 24 ชั่วโมง พร้อมบริการหลังการขายและให้คำปรึกษาฟรีโดยทีมงานมืออาชีพ ช้อปสบายใจ มั่นใจ ได้ของชัวร์ที่ PC4U</p>
</div>

<?php $this->load->view('component/Footer.php') ?>

<script>
    $(document).ready(() => {
        $('.Banner-Slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });
        $(".Banner-Slider .slick-prev").html('<i class="fa-solid fa-chevron-left"></i>');
        $(".Banner-Slider .slick-next").html('<i class="fa-solid fa-chevron-right"></i>');
    })
</script>