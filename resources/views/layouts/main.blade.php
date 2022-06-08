<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Esentai towers</title>

</head>

<body>
    <div class="main">
        <div class="modal-contact-bg">
        </div>
        <form class="modal-contact" action="/callback" method="POST"> <input type="hidden" name="_token" value="1JIGGWmgLaaUVENkn1SMlbfkcimTgDwSvBESGfEg">            <button class="modal-btn">
                <img src="img/icons/x.svg" alt="">
            </button>
            <p>
                <label for="">
                    ФИО
                </label>
                <input class="input-words" type="text" name="name" required>
            </p>
            <p>
                <label for="">
                    Номер телефона
                </label>
                <input id="phone" type="phone" name="phone" required>
            </p>
            <p>
                <label for="">
                    E-Mail
                </label>
                <input type="email" name="email" required>
            </p>
            <p>
                <label for="">
                    Ваш вопрос
                </label>
                <input type="text" name="comment" required>
            </p>
            <button class="send-contact-btn">Отправить</button>
        </form>
        <header>
            <div class="deskTop">
                <div class="container">

                    <div class="logo">
                        <a href="/">
                            <img src="../img/tower-logo.svg">
                        </a>
                        <a href="/">
                            <img src="../img/esentai-tower.svg">
                        </a>
                    </div>
                    <nav>
                        <ul class="menu">
                        <li class="menu__item header-menu__item"><a href="/#about">{{ __('content.aboutUs')  }}</a></li>
                        <li class="menu__item header-menu__item"><a href="/#infrast">{{ __('content.infrastructure')  }}</a></li>
                        <li class="menu__item header-menu__item"><a href="/#projects">{{ __('content.projects')  }}</a></li>
                        <li class="menu__item header-menu__item"><a href="/#news">{{ __('content.news')  }}</a></li>
                        <li class="menu__item header-menu__item"><a href="/#partners">{{ __('content.partners')  }}</a></li>
                        <li class="menu__item header-menu__item"><a href="/vacancies">{{ __('content.vacancies')  }}</a></li>
                        </ul>
                    </nav>
                    <div class="btn-contact_us header-btn-contact_us">
                        <a href="#btn-click">Контакты</a>
                    </div>
                    <div class="language">
                        <div class="language__header">
                                                        <span class="language__current">
                                {{$locale}}
                            </span>
                                                        <img style="transition: 0.2s" src="../img/arrow-down.png" alt="">
                        </div>
                        <div class="language__body">
                            <a class="lang" id="ru" href="/setlocale/ru">
                                Ru
                            </a>
                            <a class="lang" id="kz" href="/setlocale/kz">
                                Kz
                            </a>
                            <a class="lang" id="en" href="/setlocale/eng">
                                Eng
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobailTop">
                <div class="container mobailTop_body">
                    <div class="logo">
                        <a href="/">
                            <img src="../img/tower-logo.svg">
                        </a>
                        <a href="/">
                            <img src="../img/esentai-tower.svg">
                        </a>
                    </div>
                    <button class="burger">
                        <span class="burger-line"></span>
                    </button>
                    <div class="burger-box"></div>
                </div>
            </div>
        </header>

        @yield('content')

        <div class="contact-us" style="background-image: url(../img/map.png)">
            <div class="container">
                <div class="contact-us__content">
                    <div class="contact-us__column">
                        <h2>СВЯЗАТЬСЯ С НАМИ</h2>
                        <a class="link1" href="#">8 (727) 330 22-22</a>
                        <a class="link2" href="mailto:hr@esentaitower.com">info@esentaitower.com</a>
                        <a class="link3" href="#">Аль-Фараби 77/7, город Алматы, Казахстан</a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="logo"><img src="../img/logowhite.png"></div>
                <nav class="menu">
                    <ul class="menu">
                    <li class="menu__item"><a href="/#about">{{ __('content.aboutUs')  }}</a></li>
                        <li class="menu__item"><a href="/#infrast">{{ __('content.infrastructure')  }}</a></li>
                        <li class="menu__item"><a href="/#projects">{{ __('content.projects')  }}</a></li>
                        <li class="menu__item"><a href="/#news">{{ __('content.news')  }}</a></li>
                        <li class="menu__item"><a href="/#partners">{{ __('content.partners')  }}</a></li>
                        <li class="menu__item"><a href="/vacancies">{{ __('content.vacancies')  }}</a></li>
                    </ul>
                </nav>
                <div class="btn-click btn-contact_us" id="btn-click">
                    <a href="#?">СВЯЗАТЬСЯ С НАМИ</a>
                </div>
                <div class="footer__social">
                                        <div class="social">
                        <a href="https://instagram.com/esentaitower?utm_medium=copy_link" target="_blank">
                            <img src="/storage/socials/January2022/DuXzEmc2TaWmkMCeYmEd.png">
                        </a>
                    </div>
                                        <div class="social">
                        <a href="https://www.linkedin.com/company/capital-tower-development/about" target="_blank">
                            <img src="/storage/socials/January2022/xRZ6dx3spSPOXrbVCaUJ.png">
                        </a>
                    </div>
                                    </div>
            </div>
            <div class="container2">
                <p>© 2019-2021 Esentai tower</p>
            </div>
            <div class="a-lux">
                <a href="https://www.a-lux.kz">
                    <p>Разработано в  A-Lux</p>
                </a>
            </div>

        </footer>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

        <script>
            let commits
            let btns = document.querySelectorAll('.button-slider')
            let btnsSecond = document.querySelectorAll('.button-slider-second')
            let btn = document.querySelectorAll('.btn-click')
            let formBg = document.querySelector('.modal-contact-bg')
            let form = document.querySelector('.modal-contact')
            let formBtn = document.querySelector('.modal-btn')
            let langChange = 'ru'
            //            let infrastBtn = '<a class="infrast-btn" href=""><img src="img/arrau.png" alt=""></a>';
            let image = document.querySelector('.slider_src')
            let text = document.querySelector('.slider_src_text')
            let firstImage = ''
            if (!localStorage.getItem('lang')) {
                localStorage.setItem('lang', 'ru')
            }
            document.addEventListener('DOMContentLoaded', async function() {


                function languageChange() {
                    let url = '/api/infrastructures';
                    axios.get(url, {
                        headers: {
                            'Accept-language': localStorage.getItem('lang')
                        }
                    }).then(res => {
                        commits = res.data
                        text.children[0].textContent = commits.infrastructures[0].title
                        console.log(commits.infrastructures[0].image)
                        firstImage = commits.infrastructures[0].image.includes("\\") ? commits.infrastructures[0].image.split('\\')[1] + '/' + commits.infrastructures[0].image.split('\\')[2] : commits.infrastructures[0].image
                        console.log(firstImage)
                        text.children[1].textContent = commits.infrastructures[0].text
                        image.style.background = commits.infrastructures[0].image.includes("\\") ? `url(/storage/infrastructures/${firstImage}) no-repeat` : `url(/storage/${firstImage}) no-repeat`
                        btns.forEach(item => {
                            item.addEventListener('mouseover', () => {
                                event.preventDefault();
                                let id = parseInt(item.classList[1].split('-')[2].split('')[4])
                                let current = commits.infrastructures.filter(item => {
                                    return item.order == id;
                                })[0]
                                console.log(current)
                                console.log(id)
                                if (current) {
                                    text.children[0].textContent = current.title
                                    text.children[1].textContent = current.text
                                    image.style.background = current.image.includes("\\") ? `url(/storage/infrastructures/${current.image.includes("\\") ? current.image.split('\\')[1] + '/' + current.image.split('\\')[2] : current.image}) no-repeat` : `url(/storage/${current.image}) no-repeat`
                                    //                                    if (current.link) {
                                    //                                        item.addEventListener('click', () => {
                                    //                                            window.location.replace(current.link)
                                    //                                            //                                            $('.infrast-btn').href = current.link;
                                    //                                        })
                                    //                                    }
                                }

                            })
                        })

                        btnsSecond.forEach(item => {
                            item.addEventListener('mouseover', () => {
                                event.preventDefault();
                                let id = parseInt(item.classList[1].split('-')[2].split('')[4])
                                let current = commits.infrastructures.filter(item => {
                                    return item.order == id;
                                })[0]
                                if (current) {
                                    text.children[0].textContent = current.title
                                    text.children[1].textContent = current.text
                                    image.style.background = current.image.includes("\\") ? `url(/storage/infrastructures/${current.image.includes("\\") ? current.image.split('\\')[1] + '/' + current.image.split('\\')[2] : current.image}) no-repeat` : `url(/storage/${current.image}) no-repeat`
                                    //                                    if (current.link) {
                                    //                                        item.addEventListener('click', () => {
                                    //                                            window.location.replace(current.link)
                                    //                                        })
                                    //                                    }
                                }
                            })
                        })
                    })
                }

                languageChange();
                $('.lang').click(function() {
                    langChange = $(this).attr('id');
                    localStorage.setItem('lang', langChange)
                    languageChange();
                });
            });

            $('.lol').click(function() {
                let clickId = $(this).attr('id');
                console.log(clickId)
            });

            let header = $('header');
            let scrollOffset = 0;

            $(window).on('scroll', function() {
                scrollOffset = $(this).scrollTop();

                if (scrollOffset >= 20) {
                    header.addClass('active');
                } else {
                    header.removeClass('active');
                }
            });

            $('.burger').on('click', function() {
                event.stopPropagation();
                $(this).toggleClass('burger--active');
                $('.deskTop').toggleClass('active');
                $('.burger-box').toggleClass('active')
            });

            $('.menu__item').on('click', function() {
                event.stopPropagation();
                $('.burger').removeClass('burger--active');
                $('.deskTop').removeClass('active');
                $('.burger-box').removeClass('active');
            });

            $('.btn-contact_us').on('click', function() {
                $(this).removeClass('active')
                $('.burger').removeClass('burger--active');
                $('.deskTop').removeClass('active');
            });

            $('.burger-box').on('click', function() {
                $(this).removeClass('active')
                $('.burger').removeClass('burger--active');
                $('.deskTop').removeClass('active');
            });



            $(btn).on('click', function() {
                event.preventDefault();
                formBg.style.display = 'flex'
                form.style.display = 'flex'
            })

            formBg.addEventListener('click', () => {
                formBg.style.display = 'none'
                form.style.display = 'none'
            })

            formBtn.addEventListener('click', () => {
                formBg.style.display = 'none'
                form.style.display = 'none'
            })

            AOS.init({
                delay: 200,
                duration: 600,
            });
            document.querySelector('.language__header').addEventListener('click', () => {
                let dropdown = document.querySelector('.language__body')
                let arrow = document.querySelector('.language__header > img')
                if (dropdown.style.display == 'none' || dropdown.style.display == '') {
                    dropdown.style.display = 'block'
                    arrow.style.transform = 'rotate(180deg)'
                    return
                } else if (dropdown.style.display == 'block') {
                    dropdown.style.display = 'none'
                    arrow.style.transform = 'rotate(0deg)'
                    return
                }
            })
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

            window.addEventListener('scroll', function(e) {
                last_known_scroll_position = window.scrollY;

                if (!ticking) {
                    window.requestAnimationFrame(function() {
                        doSomething(last_known_scroll_position);
                        ticking = false;
                    });

                    ticking = true;
                }
            });

            let sliderBtn = document.querySelectorAll(".button-slider");
            sliderBtn.forEach((item) => {
                item.addEventListener("mouseover", (event) => {
                    sliderBtn.forEach((item2) => {
                        item2.classList.remove("active");
                    });
                    event.target.classList.add("active");
                })
            })

            let sliderBtnSecond = document.querySelectorAll(".button-slider-second");
            sliderBtnSecond.forEach((item) => {
                item.addEventListener("mouseover", (event) => {
                    sliderBtnSecond.forEach((item2) => {
                        item2.classList.remove("active");
                    });
                    event.target.classList.add("active");
                })
            })

            $('.button-slider-page1').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page1').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-1').addClass('active')
            });

            $('.button-slider-page2').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page2').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-2').addClass('active')
            });

            $('.button-slider-page3').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page3').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-3').addClass('active')
            });

            $('.button-slider-page4').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page4').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-4').addClass('active')
            });

            $('.button-slider-page5').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page5').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-5').addClass('active')
            });

            $('.button-slider-page6').on('mouseover', function() {
                $('a.button-slider').removeClass('active');
                $('a.button-slider-page6').addClass('active');
                $('.infrast-btn').removeClass('active')
                $('.infrast-btn-6').addClass('active')
            });

            const swiper = new Swiper('.swiper', {
                // Optional parameters
                loop: false,
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

            new Swiper('#partners', {
        	slidesPerView: 4,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
                breakpoints: {
                    220: {
                       slidesPerView: 1,
                    },
                    640: {
                       slidesPerView: 1,
                    },
                    768: {
                       slidesPerView: 2,
                    },
                    1024: {
                       slidesPerView: 4,
                   },
                },
            });

            $('.modal-contact').on('input', '.input-words', function() {
                this.value = this.value.replace(/[^a-zа-яё\s]/gi, '');
            });

            $("#phone").mask('+7 (999) 999-99-99');
            $('#phone').focus(function() {
                $(this).val('+7');
            });
            document.querySelector('video').playbackRate = 0.4;

        </script>

    </div>
</body>

</html>
