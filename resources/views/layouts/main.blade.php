<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <link
            rel="stylesheet"
            href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Esentai towers</title>

</head>

<body>
    <div class="main">

        <header>
            <div class="deskTop">
                <div class="container">
                    <div class="logo"><a href="/"><img src="../img/icons/logo.png"></a></div>
                    <nav>
                        <ul class="menu">
                            <li class="menu__item"><a href="/infrastructure">ABOUT US</a></li>
                            <li class="menu__item"><a href="/infrastructure">INFRASTRUCTURE</a></li>
                            <li class="menu__item"><a href="/project/1">PROJECTS</a></li>
                            <li class="menu__item"><a href="/news">NEWS</a></li>
                            <li class="menu__item"><a href="/">PARTNERS</a></li>
                            <li class="menu__item"><a href="/vacancies">VACANCIES</a></li>
                        </ul>
                    </nav>
                    <div class="btn-contact_us">
                        <a href="#">CONTACT US</a>
                    </div>
                    <div class="language">
                        <div class="language__header">
                            <span class="language__current">
                                    Eng
                            </span>
                        </div>
                        <div class="language__body">
                            <a class="lang" href="#">
                                Ru
                            </a>
                            <a class="lang" href="#">
                                Kz
                            </a>
                            <a class="lang" href="#">
                                Eng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobailTop">
                <div class="container mobailTop_body">
                    <div class="menu_click">
                        <a href="javascript:void(0)" class="menu_icon menu_open">
                            <div></div>
                            <div></div>
                            <div></div>
                        </a>
                    </div>
                    <div class="logo logo-head logo-head-bk">
                        <img src="/img/icons/logo.png" alt="">
                    </div>
                    <div class="mini_icon"></div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="contact-us">
            <div class="container">
                <div class="contact-us__content">
                    <div class="contact-us__column">
                        <h2>CONTACT US</h2>
                        <a class="link1" href="#">{{ $contact->phoneNumber }}</a>
                        <a class="link2" href="#">{{ $contact->email }}</a>
                        <a class="link3" href="#">{{ $contact->address }}</a>
                    </div>
                </div>
            </div>
        </div>
        
        <footer>
            <div class="container">
                <div class="logo"><img src="../img/logowhite.png"></div>
                <nav class="menu">
                    <ul class="menu">
                        <li><a href="about.html">ABOUT US</a></li>
                        <li><a href="infrastructurepage.html">INFRASTRUCTURE</a></li>
                        <li><a href="projects1.html">PROJECTS</a></li>
                        <li><a href="news.html">PRESS</a></li>
                        <li><a href="partners.html">PARTNERS</a></li>
                        <li><a href="vacancy.html">VACANCIES</a></li>
                    </ul>
                </nav>
                <div class="btn-contact_us">
                    <a href="#">CONTACT US</a>
                </div>
            </div>
            <div class="container2">
                <p>© 2019-2021 Esentai tower</p>
            </div>
        
        
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script>
         let last_known_scroll_position = 0;
            let ticking = false;
        
            function doSomething(scroll_pos) {
                // Делаем что-нибудь с позицией скролла
                document.querySelectorAll(".animate__animated").forEach((item) => {
                    if ((window.pageYOffset + window.innerHeight) > (item.getBoundingClientRect().top + window.pageYOffset)) {
                        item.classList.remove(item.dataset.out)
                        item.classList.add(item.dataset.in)
                    } else {
                        item.classList.remove(item.dataset.in)
                        item.classList.add(item.dataset.out)
                    }
                });
            }
        
            window.addEventListener('scroll', function (e) {
                last_known_scroll_position = window.scrollY;
        
                if (!ticking) {
                    window.requestAnimationFrame(function () {
                        doSomething(last_known_scroll_position);
                        ticking = false;
                    });
        
                    ticking = true;
                }
            });
        
            let sliderBtn = document.querySelectorAll(".button-slider");
            sliderBtn.forEach((item) => {
                item.addEventListener("click", (event) => {
                    sliderBtn.forEach((item2) => {
                        item2.classList.remove("active");
                    });
                    event.target.classList.add("active");
                })
            })
        
            const swiper = new Swiper('.swiper', {
                // Optional parameters
                loop: true,
                // If we need pagination
                pagination: {
                    el: '.swiper-pagination',
                },
        
                // Navigation arrows
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
        
                // And if we need scrollbar
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        </script>
        
        </div>
        </body>
        </html>
        