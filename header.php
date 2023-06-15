<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?php bloginfo('name'); ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?php echo get_template_directory_uri() . '/assets/img/favicon.png' ?>" rel="icon">
    <link href="<?php echo get_template_directory_uri() . '/assets/img/apple-touch-icon.png' ?>" rel="apple-touch-icon">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto">
                <a href="/">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <nav id="navbar" class="navbar">
                <?php
                wp_nav_menu(array('theme_location' => 'primary-menu'));
                ?>
                <!-- <li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li> -->
                <ul>
					<li><a class="nav-link scrollto active" href="#hero">หน้าแรก</a></li>
                    <li class="dropdown">
                        <a href="#"><span>เกี่ยวกับเรา</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">ประวัติบริษัท</a></li>
                            <li><a href="#">วิสัยทัศน์</a></li>
                            <li><a href="#team">ผู้บริหาร</a></li>
                            <li><a href="#clients">กลุ่มบริษัท วี.ซี.เอส.</a></li>
                            <li><a href="#services">รางวัลและความสำเร็จ</a></li>
                            <li><a href="#why-us">ลูกค้า</a></li>
                            <li><a href="#">ข่าวกิจกรรม</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="#portfolio"><span>ธุรกิจของเรา</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li class="dropdown"><a href="#portfolio"><span>ธุรกิจบริษัท</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#portfolio">ธุรกิจยานยนต์</a></li>
                                    <li><a href="#portfolio">ธุรกิจจักรกลการเกษตร</a></li>
                                    <li><a href="#portfolio">ธุรกิจซื้อมาขายไป</a></li>

                                </ul>
                            </li>
                            <li class="dropdown"><a href="#portfolio"><span>ผลิภัณฑ์และเทคโนโลยี</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#portfolio">เครื่องจักร</a></li>
                                    <li><a href="#portfolio">การประกันคุณภาพ</a></li>
                                    <li><a href="#portfolio">ใบรับรอง</a></li>

                                </ul>
                            </li>

                        </ul>
                    </li>

                    <li><a class="nav-link   scrollto" href="#portfolio">สม้ครงาน</a></li>
                    <li><a class="nav-link scrollto" href="#contact">ติดต่อเรา</a></li>
                    <li class="dropdown"><a href="#"><span>เว็บบอร์ด</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">ดาวน์โหลด</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->