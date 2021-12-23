<?php
include('./source/header.php')
?>
<div class="wrap animate__animated " data-in="animate__zoomIn" data-out="animate__zoomOut">
    <div class="soc">
        <div class="youtube"><img src="../img/icons/youtube.png"></div>
        <div class="facebook"><img src="../img/icons/facebook.png"></div>
        <div class="mail">support@esentaitower.com</div>
        <div class="message"><img src="../img/icons/message.png"></div>
    </div>
    <div class="wrap-title">
        <div class="container">
            <div class="wrap_slid">
                <h2 class="text text-while text-s88">ESENTAI </h2>
                <h3 class="text text-while text-s133">TOWERS</h3>
            </div>
        </div>
    </div>
</div>

<div class="about">
    <div class="container ">
        <div>


            <div class="about-title text text-s34 animate__animated " data-in="animate__lightSpeedInLeft"
                 data-out="animate__lightSpeedOutLeft">
                ABOUT
            </div>
            <div class="about-top">
                @foreach ($abouts as $about)
                    <div class="about-top__column animate__animated " data-in="animate__lightSpeedInLeft"
                        data-out="animate__lightSpeedOutLeft">
                        <img src="/storage/{{ $about->icon }}">
                        <h4 class="text text-s15">{{ $about->title }}</h4>
                        <p class="text text-s15">
                            {{ $about->text }}
                        </p>
                    </div>
                @endforeach   
            </div>
        </div>
        <div class="about-bottom__title animate__animated " data-in="animate__lightSpeedInLeft"
             data-out="animate__lightSpeedOutLeft">
            <h2 class="text text-s99">ESENTAI </h2>
            <h3 class="text text-s42">TOWERS</h3>
        </div>
        <div class="about-bottom">
            @foreach ($advantages as $advantage)    
                <div class="about-bottom__column animate__animated " data-in="animate__lightSpeedInLeft"
                    data-out="animate__lightSpeedOutLeft">
                    <div class="about-btm__title">
                        <img src="/storage/{{ $advantage->icon }}">
                        <h5 class="text text-s34">{{ $advantage->title }}</h5>
                    </div>
                    <p class="text text-s15">
                        {{ $advantage->text }}
                    </p>
                </div>
            @endforeach
        </div>
        <div class="about-img">
            <img src="../img/icons/about/about.png">
        </div>
    </div>
</div>


<div class="infrast">
    <div class="container">
        <div class="infr-title animate__animated " data-in="animate__lightSpeedInLeft"
             data-out="animate__lightSpeedOutLeft">
            <h3>INFRASTRUCTURE</h3>
        </div>
        <div class="slider animate__animated " data-in="animate__lightSpeedInRight"
             data-out="animate__lightSpeedOutRight">
            <div class="slider_src">

            </div>
        </div>

    </div>

    <div class="container_pagi   " >
        <a class="button-slider button-slider-page1" href="#"></a>
        <a class="button-slider button-slider-page2" href="#"></a>
        <a class="button-slider button-slider-page3" href="#"></a>
        <a class="button-slider button-slider-page4" href="#"></a>
        <a class="button-slider button-slider-page5" href="#"></a>
        <a class="button-slider button-slider-page6" href="#"></a>
    </div>
</div>

<div class="projects">
    <div class="container projects_box">
        <div class="projects-1">
            <div class="projects-1__column">
                <div class="project-1-title animate__animated " data-in="animate__lightSpeedInLeft"
                     data-out="animate__lightSpeedOutLeft">
                    <h3 class="text text-s34">PROJECTS</h3>
                </div>
                <div class="project-1-p animate__animated " data-in="animate__lightSpeedInLeft"
                     data-out="animate__lightSpeedOutLeft">
                    <h4 class="text text-s25">{{ $projects->title }}</h4>
                    {!! $projects->text !!}
                </div>
            </div>
            <div class="projects-1__column">
                <div class="project-1-title animate__animated " data-in="animate__lightSpeedInLeft"
                     data-out="animate__lightSpeedOutLeft">
                    <h3 class="press-project text text-s34">PRESS</h3>
                </div>
                <div class="project-1-img animate__animated " data-in="animate__lightSpeedInLeft"
                     data-out="animate__lightSpeedOutLeft">
                     @foreach ($presses as $press)
                        <img src="/storage/{{ $press->image }}">
                     @endforeach
                </div>
            </div>


        </div>
        <div class="projects-2 animate__animated " data-in="animate__lightSpeedInRight"
             data-out="animate__lightSpeedOutRight">
            <div class="slider_project_1"><img src="../img/projects/project2.png"></div>
        </div>
    </div>
</div>
<div class="slider-page">
    <div class="container">
        <div class="slider-content animate__animated " data-in="animate__lightSpeedInLeft"
             data-out="animate__lightSpeedOutLeft">
            <div class="slider-content__title">{{ $news->title }}</div>
            <div class="slider-content__data"><p>{{ $news->date }}</p></div>
            <div class="slider-content__paragraf"><p>
                    {{ $news->text }}
                </p>
                <br>
                <p>READ MORE</p></div>

        </div>
    </div>
</div>
<div class="partners">
    <div class="container">
        <div class="partners-title animate__animated " data-in="animate__lightSpeedInLeft"
             data-out="animate__lightSpeedOutLeft">
            <h4 class="press-project text text-s34">PARTNERS</h4>
        </div>
        <div class="partner-img animate__animated " data-in="animate__lightSpeedInLeft"
             data-out="animate__lightSpeedOutLeft">
             @foreach ($partners as $partner) 
                <img src="/storage/{{ $partner->image }}">
             @endforeach
        </div>
    </div>
</div>
<?php
include('./source/footer.php')
?>
