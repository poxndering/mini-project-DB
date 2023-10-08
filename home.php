<? include "./dbconn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        #video-container {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        #video-background {
            width: 100%;
            height: 100vhs;
        }

        .social-icon {
            display: inline-block;
            margin-right: 10px;
            transition: transform 0.3s ease;
        }

        .social-icon:last-child {
            margin-right: 0;
        }

        .social-icon img {
            width: 30px;
            height: 30px;
        }

        .social-icon:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- Navbar  -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
        <div class="container">
            <a class="navbar-brand fs-4" href="#">ECP3N</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="#recommend">Recommend</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="./topic.php">Topic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fs-5" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item" style="margin-left: 55px">
                        <a class="nav-link text-white fs-5" href="login-register.php">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Banner Image  -->
    <div id="video-container">
        <video autoplay muted loop id="video-background">
            <source src="./video//video.mp4" type="video/mp4">
        </video>
    </div>

    <!-- Main Content Area -->
    <div class="container my-5 d-grid gap-5 " style="width: 950px;">
        <div class="row row-cols-1 row-cols-md-2 g-4" style="margin: 110px 0;">
            <div class="col">
                <div class="">
                    <img src="./styles/image/image-5.jpg" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col">
                <div class="">
                    <p class="fs-4">About us</p>
                    <p class="fs-3">วัฒนธรรมไทย</p>
                    <p class="fs-5">วัฒนธรรมไทยคือการเฉลิมฉลองของชีวิต การผสมผสานของสีสัน รส
                        และเสียงที่สะท้อนจากตลาดที่คึกคักไปจนถึงวัดอันเงียบสงบ เป็นวัฒนธรรมที่หยั่งรากลึกในพุทธศาสนา
                        โดยที่จิตวิญญาณเกี่ยวพันกับชีวิตประจำวัน และเคารพในประเพณีต่างๆ</p>
                </div>
            </div>
        </div>
    </div>
    <div id="recommend" class=" my-5 d-grid gap-5">
        <div class="p-5 ">
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="view overlay zoom" style="">
                    <a href="./detail_page/page_1/page_1.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_1/image_4.jpg" class="card-img-top " alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนบ้านโคกเมือง</p>
                            <p class="fs-5">จ. บุรีรัมย์</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_2/page_2.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_2/image_2.jpg" class="card-img-top" alt="..." >
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนไตลื้อเมืองลวงเหนือ</p>
                            <p class="fs-5">จ. เชียงใหม่</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_3/page_3.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_3/image_2.jpg" class="card-img-top" alt="..." s>
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนปางห้าโฮมสเตย์</p>
                            <p class="fs-5">จ.เชียงราย</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_4/page_4.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_4/image_2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนโฮมสเตย์บ้านท่าขันทอง</p>
                            <p class="fs-5">จ.เชียงราย</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_5/page_5.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_5/image_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนบ้านริมคลองโฮมสเตย์</p>
                            <p class="fs-5">จ.สมุทรสงคราม</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_6/page_6.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_6/image_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนกลุ่มวิสาหกิจวนเกษตรดงเย็น</p>
                            <p class="fs-5">จ.สุพรรณบุรี</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_7/page_7.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_7/image_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนแหลมผักเบี้ย</p>
                            <p class="fs-5">จ.เพชรบุรี</p>
                        </div>
                    </a>
                </div>
                <div class="" style="">
                    <a href="./detail_page/page_8/page_8.php" style="text-decoration: none; color: #000;">
                        <img src="./detail_page/page_8/image_1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="fs-4" style="margin-top: 10px;">ชุมชนท่องเที่ยวบ้านทะเลน้อย ระยองฮิ</p>
                            <p class="fs-5">จ.ระยอง</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=" position-relative" id="contact">
        <img src="./styles/image/footer-image-1.jpg" alt="Image Alt Text" class="img-fluid">
        <div class="position-absolute top-50 start-50 translate-middle text-start " style="color: #fff;">
            <h1>E C P 3N</h1>
            <p class="fs-4">Life is a journey</p>
            <p class="fs-5">ประเทศไทยซึ่งมักเรียกกันว่า "ดินแดนแห่งรอยยิ้ม" เป็นประเทศที่ขึ้นชื่อเรื่องภูมิประเทศที่สวยงาม อาหารรสชาติดี และผู้คนที่มีจิตใจอบอุ่น แต่ภายใต้ความงามผิวเผินนั้น มีวัฒนธรรมที่เต็มไปด้วยประวัติศาสตร์ ประเพณี และความรู้สึกลึกซึ้งด้านจิตวิญญาณ มาเจาะลึกวัฒนธรรมไทยอันมีชีวิตชีวาและค้นพบสิ่งที่ทำให้มีเอกลักษณ์และน่าหลงใหล</p>
            <div >
                <a href="#" class="social-icon"><img src="./styles//image//facebook.png" alt="Facebook"></a>
                <a href="#" class="social-icon"><img src="./styles//image//twitter.png" alt="Twitter"></a>
                <a href="#" class="social-icon"><img src="./styles//image//instagram.png" alt="Instagram"></a>
                <a href="#" class="social-icon"><img src="./styles//image//linkedin.png" alt="LinkedIn"></a>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>