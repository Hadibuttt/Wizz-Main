@extends('layout.app')
@section('title', 'Job Details')
@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="{{asset('assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>{{$job->title}}</h2>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">Careers</a></li> 
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!-- Start Sample Area -->
    <section class="sample-text-area">
        <div class="container box_1170 pt-4">
            <h3 class="text-heading" style="margin-bottom:10px;">Who are we?</h3>
            <p class="sample-text">
                Afiniti is the world’s leading applied artificial intelligence and advanced analytics provider. Afiniti Enterprise Behavioral Pairing™ uses artificial intelligence to identify subtle and valuable patterns of human interaction in order to pair individuals on the basis of behavior, leading to more successful interactions and measurable increases in enterprise profitability. Afiniti operates throughout the world, and has measurably driven billions of dollars in incremental value for our clients.
            </p>
        </div>
        <div class="container box_1170 pt-4">
            <h3 class="text-heading" style="margin-bottom:10px;">PURPOSE</h3>
            <p class="sample-text">{{$job->description}}</p>
        </div>
        <div class="container box_1170 pt-4">
            <h3 class="text-heading" style="margin-bottom:10px;">KEY RESPONSIBILITIES</h3>
            <ol class="ordered-list">
                @foreach ($job->responsibilities as $responsibility)
                    <li><span>{{$responsibility->name}}</span></li>
                @endforeach
            </ol>

        <a href="{{ url('/careers-apply/'.encrypt($job->id)) }}" class="genric-btn e-large primary-border mt-4">Apply</a>        
        </div>
    </section>
    <!-- End Sample Area -->
    <!-- Start Button -->
    <!-- End Button -->
    <!-- Start Align Area -->
</main>
@endsection