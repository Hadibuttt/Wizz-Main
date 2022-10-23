@extends('layout.app')
@section('title', 'Job Apply')
@section('content')
<style>
    .single-input, .form-select .nice-select, .single-textarea{
        background-color: #1019200a;
        border: 1px solid #10192011;
    }
    .primary-checkbox{
        height: 15px;
        width: 15px;
        margin-right: 10px;
        margin-top: 8px;
    }
    .primary-checkbox p{
        margin-top: 10px;
    }
</style>

<main>
    <!-- Start Align Area -->
    <div class="whole-wrap">
        <div class="container box_1170">
            <div class="section-top-border">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <form action="#" id="upload_form" enctype="multipart/form-data" method="post">
                            <h3 class="mt-30">UPLOAD YOUR RESUME</h3>
                            <input class="mb-20 mt-10" type="file" name="resume" id="resume">

                            <h3 class="mt-30">Personal Information</h3>
                            <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="title">First Name<span style="color:red;"> *</span></label>
                                  <input type="text" name="first_name" placeholder="John" required class="single-input">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Last Name<span style="color:red;"> *</span></label>
                                    <input type="text" name="last_name" required placeholder="Doe" class="single-input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="title">Email<span style="color:red;"> *</span></label>
                                  <input type="email" name="email" placeholder="john@gmail.com" required class="single-input">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Phone<span style="color:red;"> *</span></label>
                                    <input type="number" name="phone" required placeholder="+923045260527" class="single-input">
                                </div>
                            </div>

                            <h3 class="mt-30">Contact Information</h3>
                            <div class="mt-10">
                                <label for="title">Address<span style="color:red;"> *</span></label>
                                <textarea name="address" placeholder="House#428/1, Street 2, Sector 2, AECHS" class="single-textarea" required></textarea>
                            </div>

                        <div class="switch-wrap d-flex mt-10"></div>
                        <a href="#" class="genric-btn primary large">Apply</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
</main>

@endsection