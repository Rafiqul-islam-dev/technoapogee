@extends('fontend.layout.masterLayout')
@section('title', 'Electrical & Fire Safety - Technoapogee')

@section('content')
<style>
    .rs-breadcrumbs {
  background-image: url("public/image/fontend/img/breadcrumbs/inr_6.jpg");
  /* background-image: url('./public/image/fontend/img/breadcrumbs/inr_6.jpg'); */
  background-repeat: no-repeat !important;
  background-size: cover !important;
  background-position: center !important;
}
</style>

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Fire Solutation
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
                       <img src="{{ asset('image/fontend/img/product/fireDetection.jpg')}}" alt="">
                </div>
                   <div class="content-part">
                       
                       <div class="desc"><a href="">Fire Detection System
                    </a></div>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/activeFire.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Active Fire Protection Systems

                        </a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/passivefirep.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Passive Fire Protection</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/lightProtection.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Lightning Protection Systems (LPS)</a></div>
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