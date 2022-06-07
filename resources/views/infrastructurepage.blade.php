@extends('layouts.main')
@section('content')
<div class="projects1">
    <div class="infrastpage">
        <div class="container">
            <div class="infrast1page">
                <div class="infrastpage-abzac1">
                    {!! $infrastructureDetail->title !!}
                </div>
                <div class="infrastpage-abzac2">
                    {!! $infrastructureDetail->text !!}
                </div>
                <div class="infrastpage-abzac3">
                    {!! $infrastructureDetail->text2 !!}
                </div>
            </div>
            <div class="infrast2page" data-aos="fade-left">
                <img class="infrastpageback" src="/storage/{{ $infrastructureDetail->image }}">
            </div>
        </div>
    </div>
</div>
@endsection
