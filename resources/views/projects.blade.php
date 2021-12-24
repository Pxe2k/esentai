<?php
include('./source/header.php')
?>
<div class="projects1">

    <div class="page-projects">
        <div class="container">
            <div class="projects1-title" data-aos="fade-down">
                <h1>{{ $project->title }}</h1>
                <br>
            </div>
            {!! $detail->text !!}
            <div class="contain2">
                @foreach ($photos as $photo)
                    <div class="contain2-column">
                        <div class="contain2-column-title">
                            {!! $photo->title !!}
                        </div>
                        <div class="contain2-column-img" data-aos="fade-left"><img src="/storage/{{ $photo->image }}"></div>
                    </div>
                    <div class="line"></div>
                @endforeach
            </div>

        </div>

    </div>
</div>
<?php
include('./source/footer.php')
?>
