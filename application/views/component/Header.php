<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iHAVECPU Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css?v=' . time()) ?>">

</head>

<body>

    <header class="navbar-container">
        <!-- แถวบน: โลโก้, ช่องค้นหา, ปุ่มไอคอน -->
        <div class="navbar-top">
            <!-- Logo -->
            <div class="navbar-logo">
                <a href="<?= base_url() ?>">
                    <img class="Logo" src="<?= base_url('assets/img/Logo.png') ?>" alt="Logo">
                </a>
            </div>

            <!-- Search Bar -->
            <div class="navbar-search">
                <form action="#" method="GET">
                    <span class="search-icon">
                        <!-- SVG แว่นขยาย -->
                        <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </span>
                    <input type="text" placeholder="ค้นหาสินค้า">
                </form>
            </div>

            <!-- Action Icons -->
            <div class="navbar-actions">
                <button type="button" class="action-btn" title="บัญชีผู้ใช้">
                    <!-- SVG รูปคน -->
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                        <circle cx="12" cy="7" r="4"></circle>
                    </svg>
                </button>
                <button type="button" class="action-btn" title="ตะกร้าสินค้า">
                    <!-- SVG ถุงช้อปปิ้ง -->
                    <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <path d="M16 10a4 4 0 0 1-8 0"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- แถวล่าง: ปุ่มหมวดหมู่ และ เมนูนำทาง -->
        <div class="navbar-bottom">
            <!-- ลิงก์เมนูนำทาง -->
            <nav class="nav-links">
                <a href="<?= base_url() ?>" class="nav-item">หน้าแรก</a>
                <a href="<?= base_url('Product') ?>" class="nav-item">สินค้า</a>
                <a href="<?= base_url('Build_pc') ?>" class="nav-item">จัดสเปกคอม</a>
                <a href="<?= base_url('Contact') ?>" class="nav-item">ติดต่อเรา</a>
            </nav>
        </div>

        <!-- สคริปต์ตรวจจับหน้าปัจจุบันและเติมคลาส active -->
        <script>
            document.querySelectorAll('.nav-links .nav-item').forEach(link => {
                //วิ่งไปหาแท็กลิงก์ <a> ทุกตัวที่อยู่ในเมนู (หน้าแรก, สินค้า, จัดสเปกคอม, ติดต่อเรา)
                //จากนั้นใช้ .forEach() เพื่อเอาปุ่มเมนูทีละปุ่ม (link) มาตรวจเช็ก
                const currentUrl = window.location.href.replace(/\/$/, ""); //window.location.href คือ URL หน้าเว็บปัจจุบันที่เปิดอยู่บนเบราว์เซอร์ (เช่น http://localhost/computer_store/Product)
                // .replace(/\/$/, "") เป็นการลบเครื่องหมาย / ที่อยู่ท้ายสุดของ URL ออก (ถ้ามี) เพื่อให้การเปรียบเทียบ URL แม่นยำขึ้น
                const linkUrl = link.href.replace(/\/$/, ""); // .replace(/\/$/, "") เป็นการลบเครื่องหมาย / ที่อยู่ท้ายสุดของ URL ออก (ถ้ามี) เพื่อให้การเปรียบเทียบ URL แม่นยำขึ้น

                if (linkUrl === currentUrl) {
                    link.classList.add('active'); //ถ้า currentUrl ตรงกับ linkUrl ให้เติมคลาส 'active' ลงไป 
                }
            });
        </script>
    </header>
</body>

</html>