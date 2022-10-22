@extends('layout.app')
@section('title', 'Job Details')
@section('content')

<main>
    <!--? slider Area Start-->
    <div class="slider-area ">
        <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap">
                            <h2>UI/UX Designing</h2>
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
            <h3 class="text-heading">Who are we?</h3>
            <p class="sample-text">
                Afiniti is the world’s leading applied artificial intelligence and advanced analytics provider. Afiniti Enterprise Behavioral Pairing™ uses artificial intelligence to identify subtle and valuable patterns of human interaction in order to pair individuals on the basis of behavior, leading to more successful interactions and measurable increases in enterprise profitability. Afiniti operates throughout the world, and has measurably driven billions of dollars in incremental value for our clients.
            </p>
        </div>
        <div class="container box_1170 pt-4">
            <h3 class="text-heading">PURPOSE</h3>
            <p class="sample-text">
                As a Tier-2 Telephony Engineer, You will be responsible technical support for contact center telephony platform. You will ensure stable and smooth operations and production of clients. You will work as a technical resource and coordinate with clients’ technical counter parts to manage day to day tasks including upgrades, incident analysis/resolution and change requests. You will work with internal team to document production issues, escalate tickets with details and perform root cause analysis within defined SLAs.
            </p>
        </div>
        <div class="container box_1170 pt-4">
            <h3 class="text-heading">KEY RESPONSIBILITIES</h3>
            <ol class="ordered-list">
                <li><span>Fta Keys</span></li>
                <li><span>Provide technical support, services maintenance of routing and reporting solution and ensure that the system is functional as per design.</span></li>
                <li><span>Provide production support and handle day to day change requests from internal/external teams.</span></li>
                <li><span>Participate in daily-weekly account calls and update on technical tasks associated to client.</span></li>
                <li><span>Responds to client technical queries related to routing, reporting and deployed Afiniti solution.</span></li>
                <li><span>Cleaning And Organizing Your Computer</span></li>
            </ol>

        <a href="{{ url('/careers-apply') }}" class="genric-btn e-large primary-border mt-4">Apply</a>        
        </div>
    </section>
    <!-- End Sample Area -->
    <!-- Start Button -->
    <!-- End Button -->
    <!-- Start Align Area -->
</main>
@endsection