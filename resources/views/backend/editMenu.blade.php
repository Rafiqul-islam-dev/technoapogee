<x-app-layout>
    <div class="row">
        <div class="col-lg-12">
            <div class="card m-b-30">
                <div class="card-body">

                    <form class="" action="{{ route('updateMenu', $menu->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control"
                                value="{{$menu->name}}"/>
                        </div>
                        <div class="row form-group">
                            <div class="col-lg-6">
                                <label>Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*"
                                    onchange="readURL(this);">
                            </div>
                            <div class="col-lg-6">
                                <img id="image" src="{{ URL::to($menu->image) }}"
                                    style="height: 80px; width: 80px;">
                                <input type="hidden" name="image" value="{{ $menu->image }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" id="summernote">{{$menu->description}}</textarea>
                            
                        </div>
                        <div class="form-group">
                            <label>Parent Id</label>
                            <input type="text" name="parentid" class="form-control"
                            value="{{$menu->parentid}}"/>
                        </div>
                        <div class="form-group">
                            <label>Sub Menu Id</label>
                            <input type="text" name="submenu_id" class="form-control"
                            value="{{$menu->submenu_id}}"/>
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