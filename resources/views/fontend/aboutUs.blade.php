@extends('fontend.layout.masterLayout')
@section('content')

<main class="main">
        <!--==================== About Header ====================-->
        <div class="rs-breadcrumbs">
            <div class="container">
                <div class="breadcrumbs-inner">
                    <h1 class="page-title">
                        About Us
                    </h1>
                </div>
            </div>
        </div>

 
        <!--==================== What We Do ====================-->
        <section id="weDo">
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="weDo">
                            <img src="{{asset('image/fontend/img/about-us.png')}}" alt="">
                        </div>
                    </div>

                    <div class="col-lg-6 weDoContent">
                            <div class="weDoContent">
                                <p>Techno Apogee started its operation from June 2006 in Dhaka, Bangladesh. We are providing the best EPC support on Fire Electrical & Automation field in Bangladesh. We confirm the most precise and cost-effective solution for Government and private sectors in Bangladesh.
                                    <br>
                                    <br>
                                    Techno Apogee is continuing its business as an Projects Solution  Design,  Supplier and Service provider of wide range of Fire Safety Solutions,  Electrical Solution & Automation Solutions .
                                    <br>
                                    <br>
                                    We are the authorized member of Electronics Safety and Security Association of Bangladesh (ESSAB).Moreover we are also enlisted member of Fire service civil defense (FSCD) & Department of Inspection for Factories and Establishments (DIFE).</p>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== award ================-->
    </main>

@endsection

