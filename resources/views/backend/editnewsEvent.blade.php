<x-app-layout>


    <div class="row">
        <div class="col-lg-6 col-sm-12 m-auto">
            <div class="card m-b-30">
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card m-b-30">
                                <div class="card-body">

                                    <form class="" action="{{ route('admin.updateNewsEvent', $news->id) }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title" class="form-control"
                                                value="{{ $news->title }}" />
                                        </div>
                                        <div class="form-group">
                                            <label>News Link</label>
                                            <div>
                                                <textarea name="link" class="form-control" rows="5"
                                                    placeholder="Enter Description">{{ $news->link }}</textarea>

                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col-lg-6">
                                                <label>Photo</label>
                                                <input type="file" class="form-control" name="image" accept="image/*"
                                                    onchange="readURL(this);">
                                            </div>
                                            <div class="col-lg-6">
                                                <img id="image" src="{{ URL::to($news->image) }}"
                                                    style="height: 80px; width: 80px;">
                                                <input type="hidden" name="old_photo" value="{{ $news->image }}">
                                            </div>
                                        </div>

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
