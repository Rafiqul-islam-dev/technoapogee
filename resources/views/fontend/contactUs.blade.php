@extends('fontend.layout.masterLayout')
@section('content')

<style>
    .prodectDetail_img img{
        width: 100%;
        height: 450px;
    }
</style>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Design & Consultancy Service
            </h1>                       
        </div>
    </div>
</div>
<section id="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="address-contact text-center">

                    <h5>Address</h5>
                    <h6>Dhaka Office: House # 09, Road# 1/B, <br> Block # L, Banani, Dhaka - 1213</h6>
                    <h6>Chittagong office: jibon Bima Bhaban (2nd Floor), <br> 56 Agrabad C/A Chittagong-4000</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="address-contact text-center">
                    <h5>Phone</h5>
                    <h6>+880-2- 55041062</h6>
                    <h6>+880-2- 55041063</h6>
                    <h6>+880 1714378008</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="address-contact text-center">
                    <h5>Email</h5>
                    <h6>info@technoapogee.com, technoapogee@gmail.com</h6>

                </div>
            </div>
        </div>
    </div>
</section>
<section id="conform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contactlist text-center">
                    <form action="https://vnsc.edu.bd/contact-us" method="post">
                        <input type="hidden" name="_token" value="zsKL1845OqaZqyXaYMXm67JmRiCDehPWDsOnPEaS">                            <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Mobile No.">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="message">
                            <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="iframe">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3650.9561717916345!2d90.402155!3d23.784575!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf8b78b8fb2e30e0!2sTechno%20Apogee!5e0!3m2!1sen!2sus!4v1644312169516!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

</div> 
<!-- Main content End -->

@endsection