@extends('layout.frontend.master')
@section('dynamic_content')
    <!-- MAIN -->
    <main class="site-main">
        <div class="columns container">
            <!-- Block  Breadcrumb-->
            <ol class="breadcrumb no-hide">
                <li><a href="#">Home    </a></li>
                <li class="active">Contact</li>
            </ol><!-- Block  Breadcrumb-->
            <h2 class="page-heading">
                <span class="page-heading-title2">Contact Us</span>
            </h2>
            <div class="page-content" id="contact">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="page-subheading">CONTACT FORM</h3>
                        <div class="contact-form-box">
                            <form action="{{route('contact.store')}}" method="post">
                                @csrf
                                <div class="form-selector">
                                    <label>Full Name</label>
                                    <input type="text" name="name" class="form-control input-sm" value="{{old('name')}}">
                                </div>
                                <div class="form-selector">
                                    <label>Email address</label>
                                    <input type="email" name="email" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Subject</label>
                                    <input type="text" name="phone" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Subject</label>
                                    <input type="text" name="subject" class="form-control input-sm">
                                </div>
                                <div class="form-selector">
                                    <label>Message</label>
                                    <textarea name="message" rows="10" class="form-control input-sm"></textarea>
                                </div>
                                <div class="form-selector">
                                    <button class="btn" id="btn-send-contact">Send</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="contact_form_map" class="col-xs-12 col-sm-6">
                        <h3 class="page-subheading">Contact Information</h3>

                        <ul class="store_info">
                            <li><i class="fa fa-home"></i>{{\App\Helpers\TaskHelper::getSiteConfigrationData()->site_title}}</li>
                            <li><i class="fa fa-map-marker"></i><span>New Baneshwor, Kathmandu, Nepal</span></li>
                            <li><i class="fa fa-phone"></i><span>+977 1 9851054917</span></li>
                            <li><i class="fa fa-envelope"></i> <span><a href="mailto: info@sidhadeal.com">    info@sidhadeal.com</a></span></li>
                        </ul>
                        <div style="margin-top:2em;margin-bottom: 1em">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.8885973787083!2d85.3332265143842!3d27.689837832869564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199615808333%3A0x13300df86d657228!2sMegasoft%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1601204368736!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:solid 1px #ddd;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
@endsection
