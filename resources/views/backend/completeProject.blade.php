<x-app-layout>
    <style>
        .clientsDrop {
            display: none;
        }

        .showClient {
            display: inline-block !important;
            width: 65%;
        }
        .hidded{
            display: none;
        }

    </style>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div class="buttonNav">
                        <h3>Complete Project</h3>
                        <a href="" class="btn btn-info btn-lg" data-toggle="modal" data-animation="bounce"
                            data-target=".bs-example-modal-lg">Add New</a>
                    </div>
                    <div class="">
                        <table id="datatable2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Work Scope</th>
                                    <th>Company Type Scope</th>
                                    <th>Project Type</th>
                                    <th>Project Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($comProject as $kye => $item)
                                    <tr>
                                        <td>{{ $kye + 1 }}</td>
                                        <td>{{$item->name}}</td>
                                        <td><img id="image" src="{{ URL::to($item->image) }}"
                                            style="height: 80px; width: 80px;"></td>
                                        <td>{{$item->workscope}}</td>
                                        <td>{{$item->companytype}}</td>
                                        <td>
                                            @if ($item->projecttype == 'IP')
                                            Industry Projects
                                            @elseif ($item->projecttype == 'BFP')
                                            Bank & Financial Projects
                                                @elseif ($item->projecttype == 'NP')
                                                NGO
                                                @elseif ($item->projecttype == 'CP')
                                                Club
                                                @elseif ($item->projecttype == 'HRP')
                                                Hotel & Resorts
                                                @elseif ($item->projecttype == 'GVP')
                                                Govt. Projects
                                                @elseif ($item->projecttype == 'CBP')
                                                Commercial Building Projects
                                            @else
                                               Nothing
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->status == 1)
                                            Ongoing
                                            @elseif($item->status == 0)
                                            Compleate
                                            @endif
                                        </td>
                                        <td>
                                            <a href=""
                                                class="delet btn btn-danger mr-2">Delet</a>
                                            <a href=""
                                                class="edit btn btn-info">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end row-->

    <!--  Modal content for the above example -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add News</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <form class="" action="{{ route('addCompletedProject') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group hidded">
                                            <input type="hidden" name="status" value="0" />
                                        </div>
                                        <div class="form-group">
                                            <label>Project Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Project Name" required/>
                                                @error('name')
                                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                                @enderror
                                        </div>

                                        <div class="form-group">
                                            <label>Project Image</label>
                                            <div>
                                                <input type="file" name="image" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Work Scope</label>
                                            <input type="text" name="workscope" class="form-control"
                                                placeholder="Work Scope" />
                                                @error('workscope')
                                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Project Type</label>
                                            <input type="text" name="companytype" class="form-control"
                                                placeholder="Project Type" required/>
                                                @error('companytype')
                                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Project Details</label>
                                            <input type="text" name="projectdetails" class="form-control"
                                                placeholder="Project Details" />
                                                @error('projectdetails')
                                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Project Location</label>
                                            <input type="text" name="Location" class="form-control"
                                                placeholder="Project Location" />
                                                @error('Location')
                                                <p class="text-red-500 mt-2 text-sm">{{$message}}</p>
                                                @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label >Project Status</label>
                                            <div >
                                                <select class="form-control" name="projecttype" required>
                                                    <option value="IP">Industry Projects</option>
                                                    <option value="BFP">Bank & Financial Projects</option>
                                                    <option value="NP">NGO</option>
                                                    <option value="CP">Club</option>
                                                    <option value="HRP">Hotel & Resorts</option>
                                                    <option value="GVP">Govt. Projects</option>
                                                    <option value="CBP">Commercial Building Projects</option>
                                                    
                                                </select>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div><button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Submit</button>
                                                <button type="reset" data-dismiss="modal"
                                                    class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</x-app-layout>
