<x-app-layout>


    <div class="row">
        <div class="col-lg-6 col-sm-12 m-auto">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <form class="" action="{{ route('admin.updateClients', $clients->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $clients->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div>
                                                <textarea name="description" class="form-control" rows="5"
                                                    placeholder="Enter Description">{{ $clients->description }}</textarea>

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label>Photo</label>
                                                <input type="file" class="form-control" name="image" accept="image/*"
                                                    onchange="readURL(this);">
                                            </div>
                                            <div class="col-lg-6">
                                                <img id="image" src="{{ URL::to($clients->image) }}"
                                                    style="height: 80px; width: 80px;">
                                                <input type="hidden" name="old_photo" value="{{ $clients->image }}">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div>
                                                <input type="checkbox" id="checkboxClients" name="is_caseStudy"
                                                    {{ $clients->is_caseStudy == '1' ? 'checked' : '' }} value="1">
                                                <label class="">Case study</label>
                                            </div>
                                        </div>
                                        @if ($clients->is_caseStudy == '1')
                                            <div class="form-group clientsDrop pl-0">
                                                <label class="col-sm-10 col-form-label">Payment Type</label>
                                                <div class="col-sm-10">
                                                    <select class="form-control" name="priceType">
                                                        <option value="0"
                                                            {{ $clients->priceType == '1' ? 'selected' : '' }}>Select
                                                        </option>
                                                        <option value="1"
                                                            {{ $clients->priceType == '1' ? 'selected' : '' }}>
                                                            Pay per Student</option>
                                                        <option value="2"
                                                            {{ $clients->priceType == '1' ? 'selected' : '' }}>
                                                            Monthly Subscription</option>
                                                    </select>
                                                </div>
                                            </div>
                                        @endif

                                        <div class="form-group">
                                            <div><button type="submit"
                                                    class="btn btn-primary waves-effect waves-light">Update</button>
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
        </div>
    </div>
    <!--end row-->
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(226)
                        .height(100);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

</x-app-layout>
