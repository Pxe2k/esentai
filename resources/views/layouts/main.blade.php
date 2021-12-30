<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
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
        <div class="modal-contact-bg">
            </div>
            <form class="modal-contact" action="/callback" method="POST">
                @csrf
                <p>
                    <label for="">
                        {{  __('content.name')  }}
                    </label>
                    <input type="text" name="name">
                </p>
                <p>
                    <label for="">
                        {{  __('content.phone')  }}
                    </label>
                    <input type="text" name="phone">
                </p>
                <p>
                    <label for="">
                        E-Mail
                    </label>
                    <input type="text" name="email">
                </p>
                <p>
                    <label for="">
                        {{  __('content.comment')  }}
                    </label>
                    <input type="text" name="comment">
                </p>
                <button class="send-contact-btn">{{  __('content.send')  }}</button>
            </form>
        <header>
            <div class="deskTop">
                <div class="container">
                    <div class="logo"><a href="/"><img src="../img/icons/logo.png"></a></div>
                    <nav>
                        <ul class="menu">
                            <li class="menu__item"><a href="/infrastructure">{{  __('content.aboutUs')  }}</a></li>
                            <li class="menu__item"><a href="/infrastructure">{{  __('content.infrastructure')  }}</a></li>
                            <li class="menu__item"><a href="/project/1">{{  __('content.projects')  }}</a></li>
                            <li class="menu__item"><a href="/news">{{  __('content.news')  }}</a></li>
                            <li class="menu__item"><a href="/">{{  __('content.partners')  }}</a></li>
                            <li class="menu__item"><a href="/vacancies">{{  __('content.vacancies')  }}</a></li>
                        </ul>
                    </nav>
                    <div class="btn-contact_us">
                        <a href="#">{{  __('content.contactUs')  }}</a>
                    </div>
                    <div class="language">
                        <div class="language__header">
                            @if ($locale == 'ru')
                                <span class="language__current">
                                    RU
                                </span>
                            @elseif ($locale == 'kz')
                                <span class="language__current">
                                    KZ
                                </span>
                            @else
                                <span class="language__current">
                                    EN
                                </span>
                            @endif
                            <img style="transition: 0.2s" src="../img/arrow-down.png" alt="">
                        </div>
                        <div class="language__body">
                            <a class="lang" href="/setlocale/ru">
                                Ru
                            </a>
                            <a class="lang" href="/setlocale/kz">
                                Kz
                            </a>
                            <a class="lang" href="/setlocale/eng">
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
                        <h2>{{  __('content.contactUs')  }}</h2>
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
                        <li class="menu__item"><a href="/infrastructure">{{  __('content.aboutUs')  }}</a></li>
                            <li class="menu__item"><a href="/infrastructure">{{  __('content.infrastructure')  }}</a></li>
                            <li class="menu__item"><a href="/project/1">{{  __('content.projects')  }}</a></li>
                            <li class="menu__item"><a href="/news">{{  __('content.news')  }}</a></li>
                            <li class="menu__item"><a href="/">{{  __('content.partners')  }}</a></li>
                            <li class="menu__item"><a href="/vacancies">{{  __('content.vacancies')  }}</a></li>
                    </ul>
                </nav>
                <div class="btn-contact_us">
                    <a href="#">{{  __('content.contactUs')  }}</a>
                </div>
            </div>
            <div class="container2">
                <p>© 2019-2021 Esentai tower</p>
            </div>
        
        
        </footer>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        
        <script>
            let commits
            let btns = document.querySelectorAll('.button-slider')
            let btn = document.querySelector('.btn-contact_us')
            let formBg = document.querySelector('.modal-contact-bg')
            let form = document.querySelector('.modal-contact')
            let image = document.querySelector('.slider_src')
            let text = document.querySelector('.slider_src_text')
            document.addEventListener('DOMContentLoaded', async function(){
    
                let url = '/api/infrastructures';
                axios.get(url).then(res => {
                    commits = res.data
                    text.children[0].textContent = commits.infrastructures[0].title
                    text.children[1].textContent = commits.infrastructures[0].text
                    image.style.background = `url(/storage/infrastructures/${commits.infrastructures[0].image}) no-repeat`
                    btns.forEach(item => {
                        item.addEventListener('mouseenter', ()=>{
                            let id = parseInt(item.classList[1].split('-')[2].split('')[4])
                            let current = commits.infrastructures.filter(item => {return item.id == id})[0]
                            if(current){
                                
                                text.children[0].textContent = current.title
                                text.children[1].textContent = current.text
                                image.style.background = `url(/storage/infrastructures/${current.image.split('\\')[1] + '/' + current.image.split('\\')[2]}) no-repeat`
                                if(current.link){
                                    item.addEventListener('click', ()=>{
                                        window.location.replace(current.link)
                                    })
                                }
                            }
                        })
                    })
                })
            });

            
        btn.addEventListener('click', () => {
            formBg.style.display = 'flex'
            form.style.display = 'flex'
        })
        formBg.addEventListener('click', () => {
            formBg.style.display = 'none'
            form.style.display = 'none'
        })
        AOS.init({
            delay: 200,
            duration: 600,
        });
        document.querySelector('.language__header').addEventListener('click', ()=>{
            let dropdown = document.querySelector('.language__body')
            let arrow = document.querySelector('.language__header > img')
            if(dropdown.style.display == 'none' || dropdown.style.display == ''){
                dropdown.style.display = 'block'
                arrow.style.transform = 'rotate(180deg)'
                return
            }
            else if(dropdown.style.display == 'block'){
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
        