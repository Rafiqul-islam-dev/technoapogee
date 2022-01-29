<x-app-layout>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#">Annex</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->
        <div class="row">
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-webcam"></i></div>
                            </div>
                            <div class="col-6 align-self-center text-center">
                                <div class="m-l-10">
                                    <h5 class="mt-0 round-inner">Total Clients</h5>
                                    <p class="mb-0 text-muted"> <b>{{ $counter['clients'] }}</b></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-md-6 col-lg-6 col-xl-3">
                <div class="card m-b-30">
                    <div class="card-body">
                        <div class="d-flex flex-row">
                            <div class="col-3 align-self-center">
                                <div class="round"><i class="mdi mdi-account-multiple-plus"></i></div>
                            </div>
                            <div class="col-6 text-center align-self-center">
                                <div class="m-l-10">
                                    <h5 class="mt-0 round-inner">Total News</h5>
                                    <p class="mb-0 text-muted"> <b>{{ $counter['news'] }}</b></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->


        </div>


    </div>

</x-app-layout>
