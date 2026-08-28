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