@extends('fontend.layout.masterLayout')
@section('title', 'Electrical & Fire Safety - Technoapogee')

@section('content')

<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img6">
    <div class="container">
        <div class="breadcrumbs-inner">
            <h1 class="page-title">
                Electrical Solutation
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
                       <img src="{{ asset('image/fontend/img/product/substation.jpg')}}" alt="">
                   </div>
                   <div class="content-part">
                       
                       <div class="desc"><a href="">Substation</a></div>
                   </div>
               </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/Circuit-Breakers.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Breakers</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/Busbar.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">Busbar Trunking (BBT) Systems</a></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset('image/fontend/img/product/distubrationBord.jpg')}}" alt="">
                    </div>
                    <div class="content-part">
                       
                        <div class="desc"><a href="">All Type distribution board</a></div>
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