@extends('layout.app')
@section('title', 'Careers')
@section('content')
<style>
    body {
        /* font-family: Montserrat !important; */
    }

    .header-bottom {
        background-color: #101920 !important;
    }

    .header-btn {
        /* font-family: Montserrat !important; */
    }

    .flexTable {
        width: 100%;
        padding: 15px;
    }

    .mainelement {
        display: flex;
        width: 100%;
        font-weight: 700;
        background: #101920;
    }

    .element a{
        display: flex;
        width: 100%;
    }
    .element:nth-child(odd){
        background: #EFEBEB;
    }

    .element a p {
        /* font-family: Montserrat !important; */
        flex: 30%;
        margin: 0;
        padding: 15px;
    }
    .element a:hover{
       background: #E09946;
        color: white !important;
    }

    .mainelement p {
        /* font-family: Montserrat !important; */
        font-weight: 700;
        flex: 100%;
        color: white;
        margin: 0;
        padding: 15px;
    }
</style>
<main>
    <!--? contact-form start -->
    <section class="contact-form-area section-bg  pt-115 pb-120 fix" data-background="assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-12 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
                                    <h2>Join Us in Our Journey</h2>
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form action="#" class="contact-form">
                            <div class="row ">
                                <div class="col-lg-4 col-md-4">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-items">
                                        <select name="select" id="select1">
                                            <option value="">Freight Type</option>
                                            <option value="">Catagories One</option>
                                            <option value="">Catagories Two</option>
                                            <option value="">Catagories Three</option>
                                            <option value="">Catagories Four</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="select-items">
                                        <select name="select" id="select1">
                                            <option value="">Freight Type</option>
                                            <option value="">Catagories One</option>
                                            <option value="">Catagories Two</option>
                                            <option value="">Catagories Three</option>
                                            <option value="">Catagories Four</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="flexTable">
                                    <div class="mainelement">
                                        <p>TITLE</p>
                                        <p>LOCATION</p>
                                        <p>DATE POSTED</p>
                                    </div>
                                    <div class="element">
                                        <a href="{{ url('/careers-details') }}">
                                            <p>UI/UX Designer</p>
                                            <p>Islamabad</p>
                                            <p>13/2/2022</p>
                                        </a>
                                    </div>
                                    <div class="element">
                                        <a href="jobDescription.html" target="_blank">
                                            <p>Full Stack Developer</p>
                                            <p>Karachi</p>
                                            <p>23/5/2022</p>
                                        </a>
                                    </div>
                                    <div class="element">
                                        <a href="jobDescription.html" target="_blank">
                                            <p>UI/UX Designer</p>
                                            <p>Islamabad</p>
                                            <p>13/2/2022</p>
                                        </a>
                                    </div>
                                    <div class="element">
                                        <a href="jobDescription.html" target="_blank">
                                            <p>Full Stack Developer</p>
                                            <p>Karachi</p>
                                            <p>23/5/2022</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-form end -->
    <!--Team Ara Start -->
    <div class="team-area section-padding30">
        <div class="container">
            <div class="row justify-content-center">
                <div class="cl-xl-7 col-lg-8 col-md-10">
                    <!-- Section Tittle -->
                    <div class="section-tittle text-center mb-70">
                        <span>Our Team Mambers</span>
                        <h2>What We Can Do For You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team1.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team2.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="single-team mb-30 text-center">
                        <div class="team-img">
                            <img src="assets/img/gallery/team3.png" alt="">
                            <div class="team-caption">
                                <h3><a href="#">Mancherwan Kolin</a></h3>
                                <p>Health agent</p>
                                <!-- Blog Social -->
                                <div class="team-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fas fa-globe"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Ara End -->
    <!--? Blog Area Start -->
    <div class="home-blog-area pb-5">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle text-center mb-70">
                        <span>Our Recent news</span>
                        <h2>Tourist Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog01.png" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog1.png" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="assets/img/gallery/blog02.png" alt="">
                            </div>
                        </div>
                        <div class="blog-caption">
                            <div class="blog-date text-center">
                                <span>27</span>
                                <p>SEP</p>
                            </div>
                            <div class="blog-cap">
                                <ul>
                                    <li><a href="#"><i class="ti-user"></i> Jessica Temphers</a></li>
                                    <li><a href="#"><i class="ti-comment-alt"></i> 12</a></li>
                                </ul>
                                <h3><a href="blog_details.html">Here’s what you should know before.</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->
</main>

@endsection