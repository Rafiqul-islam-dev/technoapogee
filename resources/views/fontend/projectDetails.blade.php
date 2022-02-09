@extends('fontend.layout.masterLayout')
@foreach ( $Project as $item)
@section('title') {{$item->name}} @endsection 
@endforeach
@section('content')

<style>
.portfolio-single img{
    width: 100%;
    height: 400px;
}

</style>
       <!-- Breadcrumbs Start -->
       <div class="rs-breadcrumbs">
        <div class="container">
            <div class="breadcrumbs-inner">
                @foreach ( $Project as $item)
                <h1 class="page-title">
                    {{$item->name}}
                </h1>
                @endforeach
                

            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
            <!-- Project Section Start -->
            <div class="rs-project pb-110 md-pt-70 md-pb-7 mt-5">
                <div class="container">
                    <div class="row">                        
                        <div class="col-lg-8 pr-60 md-pr-15">
                            <div class="sec-title mb-64">
                                @foreach ($Project as $item)
                                <h2 class="title title4 pb-30">
                                    About Project
                                </h2>
                                
                                <div class="slider-img portfolio-single">
                                      <img src="{{ URL::to($item->image) }}" alt="Slider">
                                </div>
                                <p class="margin-0 mt-5">{{$item->projectdetails}}</p>
                                @endforeach
                            </div>
                           
                        </div>
                        <div class="col-lg-4">
                            <div class="project-information bg24">
                                @foreach ($Project as $item)
                                <div class="sec-title">
                                    <h2 class="title title4 pb-30">
                                        Project information
                                    </h2>
                                    <div class="title-inner mb-25">
                                        <h4 class="title-small">Project Name</h4>
                                        <p class="margin-0">{{$item->name}}</p>
                                    </div>
                                    <div class="title-inner mb-25">
                                        <h4 class="title-small">Scope</h4>
                                        <p class="margin-0">{{$item->workscope}}</p>
                                    </div>
                                    <div class="title-inner mb-25">
                                        <h4 class="title-small">Project Type</h4>
                                        <p class="margin-0">{{$item->companytype}}</p>
                                    </div>
                                    <div class="title-inner mb-25">
                                        <h4 class="title-small">Location</h4>
                                        <p class="margin-0">{{$item->Location}}</p>
                                    </div>
                                    
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

        </div> 
        <!-- Main content End -->

@endsection