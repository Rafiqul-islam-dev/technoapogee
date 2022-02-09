   
   @extends('fontend.layout.masterLayout')
   @section('title', 'Fire Panel Repair & Maintenance BD - Techno Apogee')
   @section('content')

       <!-- Breadcrumbs Start -->
       <div class="rs-breadcrumbs img6">
        <div class="container">
            <div class="breadcrumbs-inner">
                <h1 class="page-title">
                    Bank & Financial Projects
                </h1>
            </div>
        </div>
    </div>
    <!-- Breadcrumbs End -->
   <!-- Project Section Start -->
           <div class="rs-project style3 pt-100 pb-100 md-pt-70 md-pb-70">
            <div class="container">
                <div class="row">
                    @foreach ($indProject as $item)
                        
                    <div class="col-lg-4 col-md-6 mb-30">
                        <a href="">
                            <div class="project-item">
                                <div class="project-img">
                                    <a href="{{route('portfolio',  $item->slug_name)}}"><img src="{{ URL::to($item->image) }}" alt="images"></a>
                                </div>
                                <div class="project-content">
                                    <div class="portfolio-inner">                                         
                                                                               
                                        <h3 class="title"><a href="{{route('portfolio',  $item->slug_name)}}">{{$item->name}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Project Section End -->
        @endsection