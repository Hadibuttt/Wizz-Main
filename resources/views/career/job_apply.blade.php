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
                        <!-- Partial Messages -->
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Success!</strong> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        @if ($message = Session::get('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Warning!</strong> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif
                        <!-- Partial Messages -->
                        <form action="{{url('/careers-apply/job/'.encrypt($job->id))}}" enctype="multipart/form-data" method="post">
                            @csrf
                            @if (empty($HasAppliedForJob))
                            <h3 class="mt-30">UPLOAD YOUR RESUME</h3>
                            <input @if (empty($HasAppliedForJob)) required @endif class="mb-20 mt-10" type="file" name="resume" id="resume">
                            @endif

                            <h3 class="mt-30">Personal Information</h3>
                            <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="title">First Name<span style="color:red;"> *</span></label>
                                  <input value="{{ !empty($applicant->first_name) ? $applicant->first_name : '' }}" type="text" name="first_name" placeholder="John" required class="single-input">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Last Name<span style="color:red;"> *</span></label>
                                    <input type="text" value="{{ !empty($applicant->last_name) ? $applicant->last_name : '' }}" name="last_name" required placeholder="Doe" class="single-input">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                  <label for="title">Email<span style="color:red;"> *</span></label>
                                  <input type="email" value="{{ !empty($applicant->email) ? $applicant->email : '' }}" name="email" placeholder="john@gmail.com" required class="single-input">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="title">Phone<span style="color:red;"> *</span></label>
                                    <input type="number" value="{{ !empty($applicant->phone) ? $applicant->phone : '' }}" name="phone" required placeholder="03045260527" class="single-input">
                                </div>
                            </div>

                            <h3 class="mt-30">Contact Information</h3>
                            <div class="mt-10">
                                <label for="title">Address<span style="color:red;"> *</span></label>
                                <textarea name="address" placeholder="House#428/1, Street 2, Sector 2, AECHS" class="single-textarea" required>{{ !empty($applicant->phone) ? $applicant->address : '' }}</textarea>
                            </div>

                        <div class="switch-wrap d-flex mt-10"></div>
                        <button type="submit" class="genric-btn primary large">@if (empty($HasAppliedForJob))Apply @else Update @endif</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Align Area -->
</main>

@endsection