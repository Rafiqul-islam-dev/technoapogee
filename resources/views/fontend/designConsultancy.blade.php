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
<!-- Breadcrumbs End -->

<!-- Services Section Start -->
<div class="rs-services style2 rs-services-style2 gray-bg pt-100 md-pt-70 md-pb-70">
    <div class="container custom">
        <div class="row">

            @foreach ($menu as $item)
               @if ($item->id ==2)
                   
               
            <div class="col-lg-12 col-md-6 mb-20">
                <div class="service-wrap">
                <div class="image-part prodectDetail_img">
                    <img src="{{ asset($item->image)}}" alt="">
                </div>
                    <p>{!! $item->description !!}</p>
                </div>
             </div>
             @endif
             @endforeach
           
        </div>
    </div>
</div>
<!-- Services Section End -->

<!-- Services Section Start -->
<div class="rs-services style2 rs-services-style2 gray-bg pb-100 md-pt-70 md-pb-70">
    <div class="container custom">
        <div class="row">

            @foreach ($menu as $item)
               @if ($item->parentid ==2)
                   
               
            <div class="col-lg-4 col-md-6 mb-20">
                <div class="service-wrap">
                    <div class="image-part">
                        <img src="{{ asset($item->image)}}" alt="">
                    </div>
                    <div class="content-part">
                        
                        <div class="desc"><a href="{{ url( $item->slug)}}">{{$item->name}}</a></div>
                    </div>
                </div>
             </div>
             @endif
             @endforeach
           
        </div>
    </div>
</div>
<!-- Services Section End -->

</div> 
<!-- Main content End -->

@endsection