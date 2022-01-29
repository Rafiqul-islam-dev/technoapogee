@extends('fontend.layout.masterLayout')
@section('title', 'Electrical & Fire Safety - Technoapogee')

@section('content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Automation Solutation
            </h1>                       
        </div>
    </div>
</div>
<!-- Breadcrumbs End -->

<!-- Services Section Start -->
<div class="rs-services style2 rs-services-style2 gray-bg pt-100 pb-100 md-pt-70 md-pb-70">
    <div class="container custom">
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-20">
               <div class="service-wrap">
                   <div class="image-part">
                       <img src="{{ asset('image/fontend/img/product/homeautomation.png')}}" alt="">
                   </div>
                   <div class="content-part">
                       
                       <div class="desc"><a href="">Home & Hotel Automation</a></div>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/bms.png')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">BMS & EMS
                            Automatic Fire Detection Systems
                            </a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/securityAutomation.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Security & Automation
                        </a></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services Section End -->

</div> 
<!-- Main content End -->

@endsection