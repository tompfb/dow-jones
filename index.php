<?php
include 'script-login.php';
include "./conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>หวยหุ้นดาวโจนส์ จ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น</title>
    <meta name="title" content="หวยหุ้นดาวโจนส์ จ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น " />
    <meta name="description" content="หวยหุ้นดาวโจนส์ หวยหุ้นต่างประเทศที่กำลังเป็นที่นิยมของคนไทย ให้อัตราการจ่ายสูงสุดบาทละ 1,000 บาท  เว็บหวยจ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="หวยหุ้นดาวโจนส์ ">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="หวยหุ้นดาวโจนส์ จ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น" />
    <meta property="og:description" content="หวยหุ้นดาวโจนส์ หวยหุ้นต่างประเทศที่กำลังเป็นที่นิยมของคนไทย ให้อัตราการจ่ายสูงสุดบาทละ 1,000 บาท  เว็บหวยจ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น" />
    <meta property="og:url" content="https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/" />
    <meta property="og:site_name" content="หวยหุ้นดาวโจนส์ " />
    <meta property="og:image" content="./img/logo-dow-jones.webp" />

    <meta property="twitter:url" content="https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/">
    <meta property="twitter:image" content="./img/logo-dow-jones.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="หวยหุ้นดาวโจนส์ จ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น" />
    <meta name="twitter:description" content="หวยหุ้นดาวโจนส์ หวยหุ้นต่างประเทศที่กำลังเป็นที่นิยมของคนไทย ให้อัตราการจ่ายสูงสุดบาทละ 1,000 บาท  เว็บหวยจ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น" />
    <meta name="twitter:site" content="หวยหุ้นดาวโจนส์ ">
    <meta name="twitter:creator" content="หวยหุ้นดาวโจนส์ ">

    <link rel="canonical" href="https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/" />
    <link rel="alternate" href="https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/",
            "logo": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/img/logo-dow-jones.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "หวยหุ้นดาวโจนส์ ",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/",
            "name": "หวยหุ้นดาวโจนส์ ",
            "description": "หวยหุ้นดาวโจนส์ จ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "หวยหุ้นดาวโจนส์ "
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/img/logo-dow-jones.webp",
                "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/img/dow-jones-banner.webp",
                "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/img/img-dow-jones.webp"
            ],
            "name": "หวยหุ้นดาวโจนส์ ",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "https://www.xn--82cxobb3c8ad5ac3f7c7gxd4b.net/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>

</head>

<body>
    <header class="head-navbar">
        <span id="openav" onclick="openNav()" class="a_openNav">&#9776;</span>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-3 logo">
                    <a href="./">
                        <img data-src="./img/logo-dow-jones.webp" class="lazy img-fluid zoom" width="286" height="100" alt="logo หวยหุ้นดาวโจนส์">
                    </a>
                </div>
                <div class="col-lg-7">
                    <nav class="navlinks">
                        <ul>
                            <li><a href="./">หวยหุ้นดาวโจนส์</a></li>
                            <li><a href="./register/">สมัครสมาชิก</a></li>
                            <li><a href="./entrance/">ทางเข้า</a></li>
                            <li><a href="./contact/">ติดต่อ</a></li>
                        </ul>
                    </nav>
                    <form action="./?s=s" method="GET" class="search-box">
                        <button type="submit" class="btn-search"><img data-src="./img/icon/icon-search.png" class="lazy img-fluid" width="25" height="25" alt="icon search"></button>
                        <input type="text" class="input-search" name="s" placeholder="กรอกคำค้นหา..." required>
                    </form>
                </div>
                <div class="col-lg-2">
                    <a href="" class="login-header">เข้าสู่ระบบ</a>
                    <a href="" class="login-header-none">สมัครสมาชิก</a>
                    <a href="" class="login-header-none">สมัครผ่านไลน์</a>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav-slide">
            <span class="closebtn" onclick="closeNav()">&times;</span>
            <div class="sidenav">
            <img data-src="./img/logo-dow-jones.webp" class="lazy  img-max" width="220" height="100" alt="logo หวยหุ้นดาวโจนส์">
                <a href="./">หวยหุ้นดาวโจนส์</a>
                <a href="./register/">สมัครสมาชิก</a>
                <a href="./entrance/">ทางเข้า</a>
                <a href="./contact/">ติดต่อ</a>
            </div>
        </div>
    </header>
    <section class="site-banner">
        <div class="site-marquee">
            <img data-src="./img/marquee.webp" class="lazy img-fluid" width="61" height="61" alt="ประกาศ">
            <marquee direction="scroll">
                <p>อัตราการจ่าย<strong>หวยหุ้นดาวโจนส์</strong> ผ่านเว็บหวยออนไลน์ให้อัตราการจ่ายสูงสุดบาทละ 1,000 บาท ไม่มีหักเปอร์เซ็นต์ </p>
            </marquee>
        </div>
        <img data-src="./img/dow-jones-banner.webp" class="lazy img-fluid" width="100%" height="100%" alt="หวยหุ้นดาวโจนส์ banner">
        <div class="container-fluid px-0 description-text">
            <div class="row py-3 justify-content-between">
                <div class="col-md-4 col-lg-2 my-1" style="border-top:15px solid #19283f;">
                    <div class="card_text_head">
                        <p><strong>สมัครสมาชิก</strong> แนะนำขั้นตอนวิธีการสมัครเว็บหวยออนไลน์รูปแบบใหม่ ทันสมัยใช้งานง่าย</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 my-1" style="border-top:15px solid #39598c;">
                    <div class="card_text_head">
                        <p><strong>บริการฝาก - ถอน</strong> บริการฝากถอนอัตโนมัติ รวดเร็วไม่ต้องรอนาน</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 my-1" style="border-top:15px solid #7aa0df;">
                    <div class="card_text_head">
                        <p><strong>ความปลอดภัยดีเยี่ยม</strong> ข้อมูลการลงทะเบียนสมัครทั้งหมดจะถูกเก็บเป็นความรับอย่างดี และไม่ถูกรั่วไหลถึงบุคคลที่ 3</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 my-1" style="border-top:15px solid #1e7199;">
                    <div class="card_text_head">
                        <p><strong>โปรโมชั่นดีๆ มีเพียบ</strong> มีโปรโมชั่นสุดคุ้ม ข้อเสนอสมาชิกใหม่ รับโบนัสฟรี สิทธิพิเศษสุดพรีเมี่ยม</p>
                    </div>
                </div>
                <div class="col-md-4 col-lg-2 my-1" style="border-top:15px solid #7ec7e8;">
                    <div class="card_text_head">
                        <p><strong>รับแทงหวยทุกรูปแบบ</strong> มีบริการหวยครบ หวยหุ้น หวยหุ้นดาวโจนส์ หวยไทย หวยลาว และอื่นๆ</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content-main" id="main-all">
            <section class="ss-main">
                <div class="container">
                    <div class="row my-3">
                        <div class="my-2 col-md-12 col-lg-4">
                            <h1 class="bg-text-header">หวยหุ้นดาวโจนส์</h1>
                            <div class="p_card" style=" background-color: #557ebe;">
                                <p class="mb-0 white"><strong>หวยหุ้นดาวโจนส์</strong> หวยหุ้นต่างประเทศที่กำลังเป็นที่นิยมของคนไทย เนื่องด้วยวิธีการเล่นหวยหุ้นมีรูปแบบการเล่นที่หลายคนคุ้นเคย สามตัวบน สองตัวบน สองตัวล่าง เหมือนกับหวยใต้ดิน แต่ทั้งนี้ หวยหุ้นจะมีการนำเอาผลหุ้นมาใช้ในการออกรางวัล สำหรับหวยหุ้นดาวโจนส์ เป็นการนำดัชนีการปิดตลาดหุ้นดาวโจนส์ (Dow Jones) ของประเทศสหรัฐอเมริกามาเป็นตัวอ้างอิงในการออกรางวัล นับเป็นหนึ่งในหมวดหมู่หวยหุ้นต่างประเทศที่ไม่ควรพลาด และกำลังถูกจับตามองอย่างมาก </p>
                            </div>
                        </div>
                        <div class="my-2 col-md-12 col-lg-4">
                            <h2 class="bg-text-header">หวยหุ้นดาวโจนส์ หวยดาวโจนส์ คืออะไร ?</h2>
                            <div class="p_card" style=" background-color: #39598c;">
                                <p class="mb-0 white">สำหรับ<strong>หวยหุ้นดาวโจนส์</strong> หรือ <strong>หวยดาวโจนส์</strong> เป็นหวยหุ้นซึ่งมีการนำมูลค่าการซื้อขายหุ้นในตลาด Wall Street จากบริษัทชั้นนำในอเมริกาทั้งหมด 30 บริษัทมาเป็นตัวชี้วัด ซึ่งการออกรางวัลก็จะใช้ดัชนีตัวเลขการปิดตลาดหุ้นดาวโจนส์ (Dow Jones) มาอ้างอิงผลการออกรางวัลโดยจะนำเลขหลักหน่วยและหลังจุดทศนิยมค่า Value มาออกรางวัลเลขบน แนะนำเลขหลังจุดทศนิยมของค่า Change มาออกรางวัลเลขล่าง นำมาประยุกต์เล่นโดยปรับเปลี่ยนให้เล่นง่ายมากขึ้น เหมือนกับหวยใต้ดิน มีรูปแบบการเล่นทั้งประเภทหวย 3 ตัว 2 ตัวและเลขวิ่งเป็นต้น รวมถึงมีวิธีการซื้อเหมือนหวยหุ้นต่างประเทศทั่วไป</p>
                            </div>
                        </div>
                        <div class="my-2 col-md-12 col-lg-4">
                            <h2 class="bg-text-header">วัน เวลา ออกรางวัลหวยหุ้นดาวโจนส์</h2>
                            <div class="p_card" style=" background-color: #1d293f;">
                                <p class="mb-0 white"><strong>หวยหุ้นดาวโจนส์</strong> ออกรางวัลทุกวันจันทร์ วันอังคาร วันพุธ วันพฤหัสบดี และวันศุกร์ออกรางวัลวันละ 1 รอบยกเว้นวันเสาร์-อาทิตย์และวันหยุดนักขัตฤกษ์ของประเทศสหรัฐอเมริกา โดยจะมีการเปิดตลาดและปิดตลาดช่วงเวลา 09.30 ถึง 16.00 น ตามเวลาในสหรัฐ ซึ่งหากเป็นเวลาในประเทศไทยจะอยู่ช่วงเวลา 21.30 นถึง 04.00 น เพราะฉะนั้นหวยหุ้นดาวโจนส์จะออกรางวัลในเวลาประมาณ 04.00 นตามเวลาประเทศไทย</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ss-secon">
                <img data-src="./img/img-dow-jones.webp" class="lazy img-fluid" width="100%" height="100%" alt="วิธีการดูผลรางวัลหวยหุ้นดาวโจนส์">
                <div class="container py-2">
                    <h2>วิธีการดูผลรางวัลหวยหุ้นดาวโจนส์</h2>
                    <p class="white">การดูผลการออกรางวัลหวยหุ้นดาวโจนส์ หวยหุ้นดาวโจนส์ออกรางวัลอย่างไร มีวิธีการดูผลการออกรางวัลค่อนข้างง่าย ทุกคนสามารถเข้ามาตรวจสอบผลการออกรางวัลได้ที่นี่ การออกรางวัลหวยหุ้นดาวโจนส์รางวัล 3 ตัวบนจะอยู่ในหลักหน่วยและเลขที่อยู่หลังจุดทศนิยมของค่า Value รางวัล 2 ตัวบน ดูจากจุดหลังทศนิยมฆ่า Value และรางวัลเลข 2 ตัวล่างดูจากตัวเลขที่อยู่หลังจุดทศนิยมของค่า Change สมมุติ ดัชนีปิดตลาดหุ้นดาวโจนส์ค่าย Value ได้แก่ 34,305.09 และ Today Change +339.65 ใช้ออกรางวัลทั้งหมด 6 รูปแบบ </p>
                </div>
                <div class="container-fluid px-0 bg-light">
                    <div class="container py-3">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลหวยสามตัวบน</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลข 3 ตัวแบบเจาะจงตำแหน่งและตัวเลข อ้างอิงผลการออกรางวัลเลขหลักหน่วยและเลขหลังจุดทศนิยมของค่า Value ได้แก่ 509</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลหวยสามตัวโต๊ด</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลข 3 ตัวแบบไม่เจาะจงตำแหน่ง อ้างอิงผลการออกรางวัลเลขหลักหน่วยและเลขหลังจุดทศนิยมของค่า Value ได้แก่ 509 590 059 095 905 095</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลหวยสองตัวบน</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลข 2 ตัวแบบเจาะจงตำแหน่ง และตัวเลข อ้างอิงผลการออกรางวัลจากเลขหลังจุดทศนิยมของค่า Value ได้แก่ 09 </p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลหวยสองตัวล่าง</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลข 2 ตัวแบบเจาะจงตำแหน่งและตัวเลข อ้างอิงผลการออกรางวัลจากเลขหลังจุดทศนิยมของค่า Change ได้แก่ 65</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลเลขวิ่งบน</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลขตัวใดตัวหนึ่งให้ตรงกับผลการออกรางวัลเลข 3 ตัวบน 1-9 หมายเลขใดก็ได้ ผลการออกรางวัลได้แก่ 5, 0, 9</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 my-2">
                                <div class="box_ss_p">
                                    <h3>รางวัลเลขวิ่งล่าง</h3>
                                    <p class="mb-0 white"> เป็นการซื้อเลขตัวใดตัวหนึ่งให้ตรงกับผลการออกรางวัลเลข 2 ตัวล่าง 1-9 หมายเลขใดก็ได้ ผลการออกรางวัลได้แก่ 6, 5</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ss-secon">
                <div class="container py-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 my-2">
                            <h2 class="bg-text-header">อัตราการจ่ายหวยหุ้นดาวโจนส์</h2>
                            <p class="white">อัตราการจ่ายหวยหุ้นดาวโจนส์ ผ่านเว็บหวยออนไลน์ให้อัตราการจ่ายสูงสุดบาทละ 1,000 บาทไม่มีเว็บไหนให้มากกว่านี้อีกแล้ว เว็บหวยจ่ายจริง จ่ายสูง ไม่มีหักเปอร์เซ็นต์ ฝากถอนสะดวกรวดเร็ว ถอนได้ไม่อั้น เว็บหวยหุ้นดาวโจนส์ราคาดีที่สุดในไทยเขาเล่นได้ตลอด 24 ชั่วโมง </p>
                            <ul style="color:#fff;">
                                <li>
                                    <p class="white">3 ตัวบน จ่ายบาทละ 1,000</p>
                                </li>
                                <li>
                                    <p class="white">3 ตัวโต๊ด จ่ายบาทละ 150</p>
                                </li>
                                <li>
                                    <p class="white">2 ตัวบน จ่ายบาทละ 100</p>
                                </li>
                                <li>
                                    <p class="white">2 ตัวล่าง จ่ายบาทละ 100</p>
                                </li>
                                <li>
                                    <p class="white">วิ่งบน จ่ายบาทละ 3.20</p>
                                </li>
                                <li>
                                    <p class="white">วิ่งล่าง จ่ายบาทละ 4.20</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-md-12 my-2">
                            <img data-src="./img/img-dow-jones-01.webp" class="lazy img-max" width="755" height="754" alt="อัตราการจ่ายหวยหุ้นดาวโจนส์">
                        </div>
                    </div>
                </div>
            </section>
            <section class="secon-contaent">
                <div class="container py-3">
                    <h2 class="bg-text">เล่นหวยหุ้นดาวโจนส์ที่นี่ มั่นคง ปลอดภัย100%</h2>
                    <p>เว็บหวยหุ้นดาวโจนส์ที่ดีที่สุดอันดับ 1 ในไทย เปิดบริการแล้ววันนี้ อัตราการจ่ายหวยหุ้นดาวโจนส์ที่จ่ายแพงกว่าเว็บอื่นๆ คุ้มค่าทุกเรทราคา ให้อัตราราคาสูงสุดถึงบาทละ 1,000 บาท และ 2 ตัวบาทละ 100 บาท มีหวยให้เลือกเล่นครบทุกรูปแบบ เปิดให้บริการหวยครบ แทงหวยโดยไม่ผ่านเอเย่น สมัครวันนี้รับข้อเสนอโบนัสพิเศษฟรีมากมาย มีหวยให้เลือกเล่นครบวงจร ทีมงานบริการตลอด 24 ชั่วโมงระบบฝากถอนออโต้ ทันสมัย รวดเร็วปลอดภัย 100% <strong>เว็บหวยหุ้นดาวโจนส์</strong> รองรับภาษาไทยเข้าใจง่ายเล่นผ่านมือถือ รองรับทุกระบบ มีการดูแลความปลอดภัย และการดูแลควบคุมแก้ไขปัญหาโดยทีมงานมืออาชีพระดับประเทศ</p>
                </div>
            </section>
        </article>
        <article class="article-content">
            <div class="container">
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ / ข่าวสาร</a></p>
                <br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-4">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>
                                        <h3 class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></h3>
                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <?php
                                    $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                    $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                    while ($result_tag = $query_tag->fetch_assoc()) {
                                    ?>
                                        <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                            <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                        </a>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="site-footer">
        <div class="container">
            <div class="d-block text-center p-3">
                <img data-src="./img/img-footer-01.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img เข้าสู่ระบบ">
                <img data-src="./img/img-footer-02.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img หน้าหลัก">
                <img data-src="./img/img-footer-03.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img สมัครสมาชิก">
                <img data-src="./img/img-footer-04.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img ทางเข้า">
                <img data-src="./img/img-footer-05.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img ติดต่อ">
                <img data-src="./img/img-footer-06.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img ฝาก-ถอน">
                <img data-src="./img/img-footer-07.webp" class="lazy img-fluid imgblock" width="70" height="70" alt="img รองรับทุกระบบ">
            </div>
            <p class="white text-center mb-0 h5">Copyright &copy; 2023</p>
            <hr>
            <a href="./backend/login.php">เข้าสู่ระบบ</a>
        </div>
    </footer>
    <div id="nav-footer-bottom">
        <a href="./"><img data-src="./img/icon/icon-homepage.webp" class="lazy img-fluid" width="30" height="30" alt="icon หน้าหลัก"><span>หน้าหลัก</span></a>
        <a href="./entrance/"><img data-src="./img/icon/icon-log-in.webp" class="lazy img-fluid" width="30" height="30" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="./register/"><img data-src="./img/icon/icon-register.webp" class="lazy img-fluid" width="30" height="30" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="./contact/"><img data-src="./img/icon/icon-contact.webp" class="lazy img-fluid" width="30" height="30" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>