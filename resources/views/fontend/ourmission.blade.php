@extends('fontend.layout.masterLayout')
@section('content')

<style>
    .weDoMission {
    box-shadow: 0 0 13px 0 #917a7a;
    padding: 20px 6px;
}
.rs-breadcrumbs {
  background-image: url("public/image/fontend/img/breadcrumbs/inr_6.jpg");
  /* background-image: url('./public/image/fontend/img/breadcrumbs/inr_6.jpg'); */
  background-repeat: no-repeat !important;
  background-size: cover !important;
  background-position: center !important;
}
</style>

<main class="main">
        <!--==================== About Header ====================-->
        <div class="rs-breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        Our Mission & Vission
                    </h1>
                </div>
            </div>
        </div>

 
        <!--==================== What We Do ====================-->
        <section id="weDo">
            <div class="container">
                <div class="row mt-5 mb-5 weDoMission">
                    <div class="col-lg-6">
                        <div class="weDo">
                            <img src="{{asset('public/image/fontend/img/mission.jpg')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="weDo">
                            <h3>Our Mission</h3>
                            <p>Adopt innovative practices to ensure quality without compromising the time frame and budget.To offer value added and cost effective services to improve our partner‐clients performance, thus to clients dream into reality. Provide a safe working environment by promoting health and safety in all areas. Respect nature and the environment and work together towards a sustainable green future for the benefit of all. Recognize employee potential for career development and provide the necessary training and environment to realize their potential.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== award ================-->
        <section id="weDo">
            <div class="container">
                <div class="row mt-5 mb-5 weDoMission">
                    
                    <div class="col-lg-6">
                        <div class="weDo">
                            <h3>Our Vission</h3>
                            <p>Adopt innovative practices to ensure quality without compromising the time frame and budget.To offer value added and cost effective services to improve our partner‐clients performance, thus to clients dream into reality. Provide a safe working environment by promoting health and safety in all areas. Respect nature and the environment and work together towards a sustainable green future for the benefit of all. Recognize employee potential for career development and provide the necessary training and environment to realize their potential.</p>
                        </div>
                </div>
                
                    <div class="col-lg-6">
                        <div class="weDo">
                            <img src="{{asset('image/fontend/img/vission.jpg')}}" alt="">
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

@endsection

