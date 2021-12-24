<?php
include('./source/header.php')
?>
<div class="projects1">
    <div class="news1">
        <div class="container">
            <h2>{!! $news->title !!}</h2>
            <p class="awtor">Авто статьи: {{ $news->author }}</p>
            {{-- @dd($detail) --}}
            @if ($detail->banner != null)
                <img class="news1back" src="/storage/{{ $detail->banner }}">    
            @else
                <img class="news1back" src="/storage/{{ $news->image }}"> 
            @endif
            {!! $detail->text !!}
        </div>
    </div>
</div>

<?php
include('./source/footer.php')
?>

