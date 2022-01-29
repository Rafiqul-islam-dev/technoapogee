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
                        <h3>Clients List</h3>
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
                                    <th>Description</th>
                                    <th>Type</th>
                                    <th>Payment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Clients as $kye => $item)
                                    <tr>
                                        <td>{{ $kye + 1 }}</td>
                                        <td>
                                            <img id="image" src="{{ URL::to($item->image) }}"
                                                style="height: 80px; width: 80px;">
                                        </td>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->description }}</td>
                                        <td>{{ $item->is_caseStudy == 0 ? 'All Institutions' : 'Case Study' }}</td>
                                        <td>
                                            @if ($item->priceType == 0)
                                                Do Not use
                                            @elseif ($item->priceType == 1)
                                                Pay per Student
                                            @else
                                                Monthly Subscription
                                            @endif
                                        </td>

                                        </td>
                                        <td>
                                            <a href="{{ route('delet', $item->id) }}"
                                                class="delet btn btn-danger mr-2">Delet</a>
                                            <a href="{{ route('editClients', $item->id) }}"
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
                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Client's</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <form class="" action="{{ route('addClients') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="title" class="form-control"
                                                placeholder="Type Title" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <textarea name="description" class="form-control" rows="5"
                                                    placeholder="Enter Description"></textarea>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Cliebts Image</label>
                                            <div>
                                                <input type="file" name="image" class="form-control" />
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div>
                                                <input type="checkbox" id="checkboxClients" name="is_caseStudy"
                                                    value="1">
                                                <label class="">Case study</label>
                                            </div>
                                        </div>
                                        <div class="form-group clientsDrop">
                                            <label class="col-sm-12 col-form-label">Payment Type</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="priceType">
                                                    <option value="0">Select</option>
                                                    <option value="1">Pay per Student</option>
                                                    <option value="1">Monthly Subscription</option>
                                                </select>
                                            </div>
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
