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
                        <h3 >APPLY WITH A RESUME</h3>
                        <p class="mb-30">Thank you for your interest. Please complete the fields below and click "Submit".</p>
                        <form action="#" id="upload_form" enctype="multipart/form-data" method="post">

                            <input type="file" name="file1" id="file1" onchange="uploadFile()"><br>
                            <progress id="progressBar" value="0" max="100" style="width:300px"></progress>
                            <h3 id="status"></h3>
                            <p id="loaded_n_total"></p>



                            <h3 class="mt-30">Personal Information</h3>
                            <div class="mt-10">
                                <label class="">First Name
                                </label>
                                <input type="text" name="first_name" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <label class="">Middle Name
                                </label>
                                <input type="text" name="middle_name" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <label class="">Last Name
                                </label>
                                <input type="text" name="last_name" placeholder=""
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                <label class="">Email Address
                                </label>
                                <input type="email" name="EMAIL" placeholder=" "
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                            </div>
                            <h3 class="mt-30">Contact Information</h3>
                            <div class="mt-10">
                                <label class="">Address
                                </label>
                                <input type="email" name="EMAIL" placeholder=" "
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = ''" required
                                    class="single-input">
                            </div>
                            <div class="mt-10">
                                
                                <label class="">City
                                </label>
                            <div class="input-group-icon">
                                <div class="icon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                                <div class="form-select" id="default-select">
                                            <select>
                                                <option value=" 0">Select</option>
                                    <option value="1">Dhaka</option>
                                    <option value="2">Dilli</option>
                                    <option value="3">Newyork</option>
                                    <option value="4">Islamabad</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <h3 class="mt-30">General Information</h3>
                        <div class="mt-10">
                            <label class="">IF NOT, ARE YOU PLANNING TO GET VACCINATED OR REQUEST CONSIDERATION FOR A REASONABLE ACCOMMODATION DUE TO A LAWFUL EXEMPTION CATEGORY?
                            </label>
                            <textarea class="single-textarea" placeholder="Message" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Message'" required></textarea>
                        </div>
                        <div class="mt-10">
                            <label class="">Comments (Optional)
                            </label>
                            <textarea class="single-textarea" placeholder="If any" onfocus="this.placeholder = ''"
                                onblur="this.placeholder = 'Message'" required></textarea>
                        </div>

                        
                        <div class="switch-wrap d-flex  mt-10">
                            <div class="primary-checkbox  ">
                                <input type="checkbox" id="primary-checkbox" >
                                <label for="primary-checkbox" class="m-0"></label>
                            </div>
                            
                            <p class="agree" >I Agree to all the terms and condition</p>
                        </div>
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