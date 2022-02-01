<x-app-layout>
    <style>
        .clientsDrop {
            display: none;
        }

        .showClient {
            display: inline-block !important;
            width: 65%;
        }

    </style>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div class="buttonNav">
                        <h3>Menu List</h3>
                        <a href="" class="btn btn-info btn-lgc" data-toggle="modal" data-animation="bounce"
                            data-target=".bs-example-modal-lg">Add New</a>
                    </div>
                    <div class="">
                        <table id="datatable2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Slug</th>
                                    <th>Description</th>
                                    <th>Parent ID</th>
                                    <th>Submenu ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($menu as $kye => $item)
                                    <tr>
                                        <td>{{$kye+1}}</td>
                                        
                                        <td>{{$item->name}}</td>
                                        <td><img src="{{ URL::to($item->image) }}" width="100" ></td>
                                        <td>{{$item->slug}}</td>
                                        <td ><a href="" class="btn btn-success">View</a></td>
                                        <td>{{$item->parentid }} </td>
                                        <td>{{$item->submenu_id }} </td>
                                        <td>
                                            <a href="{{ route('admin.delet', $item->id) }}"
                                                class="delet btn btn-danger mr-2">Delet</a>
                                            <a href="{{ route('admin.editmenu', $item->id ) }}"
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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <form class="" action="{{ route('admin.addmenu') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Type Menu Name" />
                                        </div>
                                        <div class="form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" class="form-control"
                                               />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea name="description" id="summernote" cols="30" rows="10"></textarea>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Parent Id</label>
                                            <input type="text" name="parentid" class="form-control"
                                                placeholder="Type Id" />
                                        </div>
                                        <div class="form-group">
                                            <label>Sub Menu Id</label>
                                            <input type="text" name="submenu_id" class="form-control" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <div><button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Submit</button>
                                                <button type="reset"
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
