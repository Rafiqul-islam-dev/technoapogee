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
                        <h3>News List</h3>
                        <a href="" class="btn btn-info btn-lg" data-toggle="modal" data-animation="bounce"
                            data-target=".bs-example-modal-lg">Add New</a>
                    </div>
                    <div class="">
                        <table id="datatable2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>SL No</th>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>News Link</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $kye => $item)
                                    <tr>
                                        <td>{{ $kye + 1 }}</td>
                                        <td>
                                            <img id="image" src="{{ URL::to($item->image) }}"
                                                style="height: 80px; width: 80px;">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->link }}</td>
                                        </td>
                                        <td>
                                            <a href="{{ route('deletnews', $item->id) }}"
                                                class="delet btn btn-danger mr-2">Delet</a>
                                            <a href="{{ route('editNewsEvent', $item->id) }}"
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

                                    <form class="" action="{{ route('addNewsEvent') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Type Title" />
                                        </div>

                                        <div class="form-group">
                                            <label>News Image</label>
                                            <div>
                                                <input type="file" name="image" class="form-control" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>News Link</label>
                                            <input type="text" name="link" class="form-control"
                                                placeholder="Type link" />
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
