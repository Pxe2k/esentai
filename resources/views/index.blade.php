@extends('layouts.main')
@section('content')

<div class="wrap">
    <div class="soc">
        @foreach ($socials as $social)
        <div class="social">
            <a href="{{ $social->link }}" target="_blank">
                <img src="/storage/{{ $social->icon }}">
            </a>
        </div>
        @endforeach
        <a class="mail" href="mailto:hr@esentaitower.com">{{ $contact->email }}</a>
        <div class="message"><img src="../img/icons/message.png"></div>
    </div>
    <div class="wrap-title">
        <div class="container">
            <div class="wrap_slid">
                <h2 class="text text-while text-s88 lol" id="lol">ESENTAI </h2>
                <h3 class="text text-while text-s133 lol" id="wow">TOWER</h3>
            </div>
        </div>
    </div>
    <video autoplay loop muted playsinline class="bgvideo" id="bgvideo">
        <source src="img/almaty_sunset.mp4" type="video/mp4">
    </video>
</div>


<div class="about" id="about">
    <div class="container">
        <div>
            <div class="about-title text text-s34" data-aos="fade-right">
                <a style="color: black" href="/infrastructure">{{ __('content.about')  }}</a>
            </div>
            <div class="about-top">
                @foreach ($abouts as $about)
                <div class="about-top__column" data-aos="zoom-in">
                    <img src="/storage/{{ $about->icon }}">
                    <h4 class="text text-s15">{{ $about->title }}</h4>
                    <p class="text text-s15">
                        {{ $about->text }}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
        <div class="about-bottom__title" data-aos="fade-right">
            <h2 class="text text-s99">ESENTAI </h2>
            <h3 class="text text-s42">TOWERS</h3>
        </div>
        <div class="about-bottom">
            @foreach ($advantages as $advantage)
            <div class="about-bottom__column" data-aos="fade-right">
                <div class="about-btm__title">
                    <img src="/storage/{{ $advantage->icon }}">
                    <h5 class="text text-s34">
                        <a style="color: black" href="/infrastructure">
                            {{ $advantage->title }}
                        </a>
                    </h5>
                </div>
                <p class="text text-s15">
                    {{ $advantage->text }}
                </p>
            </div>
            @endforeach
        </div>
        <div class="about-img" data-aos="fade-left">
            <img src="../img/icons/about/about.png">
        </div>
    </div>
</div>

<div id="infrast"></div>
<div class="infrast">
    <div class="container">
        <a class="infr-title" data-aos="fade-right">
            {{ __('content.infrastructure')  }}
        </a>
        <div class="slider" data-aos="fade-left">
            <div class="slider_src">
                <div class="slider_src_text">
                    <!--                <a class="text text-while text-bold  text-s25 button-slider" href=""></a> -->
                    <h3 class="text text-while text-bold  text-s25"></h3>
                    <p class="text text-while text-s15">
                    </p>
                </div>
            </div>
            <a class="infrast-btn infrast-btn-1 active" href="{{$infrastructures[0]->link}}">
                <img src="img/arrau.png" alt="">
            </a>
            <a class="infrast-btn infrast-btn-3" href="{{$infrastructures[5]->link}}">
                <img src="img/arrau.png" alt="">
            </a>
            <a class="infrast-btn infrast-btn-4" href="{{$infrastructures[2]->link}}">
                <img src="img/arrau.png" alt="">
            </a>
            <a class="infrast-btn infrast-btn-5" href="{{$infrastructures[4]->link}}">
                <img src="img/arrau.png" alt="">
            </a>
        </div>
    </div>

    <div class="container_pagi container_pagi-desktop">
        <button class="button-slider button-slider-page1 active"></button>
        <button class="button-slider button-slider-page2"></button>
        <button class="button-slider button-slider-page3"></button>
        <button class="button-slider button-slider-page4"></button>
        <button class="button-slider button-slider-page5"></button>
        <button class="button-slider button-slider-page6"></button>
    </div>
    <div class="container_pagi container_pagi-mobile">
        <button class="button-slider-second button-slider-page1 active"></button>
        <button class="button-slider-second button-slider-page2"></button>
        <button class="button-slider-second button-slider-page3"></button>
        <button class="button-slider-second button-slider-page4"></button>
        <button class="button-slider-second button-slider-page5"></button>
        <button class="button-slider-second button-slider-page6"></button>
    </div>
</div>


<div class="projects" id="projects">
    <div class="container projects_box">
        <div class="projects-1">
            <div class="projects-1__column">
                <div class="project-1-title" data-aos="fade-right">
                    <a href="/project/1">
                        <h3 class="text text-s34">{{ __('content.projects')  }}</h3>
                    </a>
                </div>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach ($projects as $project)

                            @if ($project->approved == 1)
                                <div class="project-1-p swiper-slide" data-aos="fade-right">
                                    <div class="swiper-text">
                                        <h4 class="text text-s25">{{ $project->title }}</h4>
                                        {!! $project->text !!}
                                        <br><a href="/project/{{ $project->id }}">{{ __('content.readMore')  }} ></a>
                                    </div>
                                    <div class="slider_project_1">
                                        <img class="slider-1-img" src="/storage/{{ $project->image }}">
                                    </div>
                                </div>
                            @endif
                        @endforeach

                    </div>
                    <div class="swiper-button-prev button-prev"></div>
                    <div class="swiper-button-next button-next"></div>
                </div>
            </div>
            <div class="projects-1__column">
                <div class="project-1-title" data-aos="fade-right">
                    <a href="/news">
                        <h3 class="press-project text text-s34">{{ __('content.press')  }}</h3>
                    </a>
                </div>
                <div class="project-1-img" data-aos="fade-right">
                    @foreach ($presses as $press)
                    <img src="/storage/{{ $press->image }}">
                    @endforeach
                </div>
            </div>


        </div>
        <!-- <div class="projects-2 animate__animated " data-in="animate__lightSpeedInRight" data-out="animate__lightSpeedOutRight">  -->


        <!-- </div>  -->
    </div>
</div>
<div class="slider-page">
    <div class="container">
        <div class="swiper" id="news">
            <div class="swiper-wrapper swiper-wrapper-bottom">
                @foreach ($news as $news)
                <div class="project-1-p swiper-slide swiper-slide-second" style="flex-direction: column;padding: 0 5rem;" data-aos="fade-right">
                    <div class="slider-content__title">{!! $news->title !!}</div>
                    <div class="slider-content__data">
                        <p>{{ $news->author }}</p>
                    </div>
                    <div class="slider-content__paragraf">
                        <p>
                            {{ $news->text }}
                        </p>
                        <br>
                        <a href="/news" style="color:white">{{ __('content.readMore')  }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next swiper-slide-next"></div>
            <div class="swiper-button-prev swiper-slide-prev"></div>
        </div>
    </div>
</div>
<div class="partners" id="partners">
    <div class="container">
        <div class="partners-title" data-aos="fade-right">
            <h4 class="press-project text text-s34">{{ __('content.partners')  }}</h4>
        </div>
        <div class="partner-img" data-aos="fade-right">
            @foreach ($partners as $partner)
            <img src="/storage/{{ $partner->image }}">
            @endforeach
        </div>
    </div>
</div>
@endsection
