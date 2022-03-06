<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9">{{ $uniform->uni_id }}</dd>

    <dt class="col-sm-3">Name</dt>
    <dd class="col-sm-9">{{ $uniform->uni_name }}</dd>

    <dt class="col-sm-3">Image</dt>
    <dd class="col-sm-9"><img style="width: 100px; height:100px" src="{{asset('storage/images/uniform/' .$uniform->uni_image)}}" alt=""></dd>

    <dt class="col-sm-3">Category ID</dt>
    <dd class="col-sm-9">{{$uniform->cat_id }}</dd>

    <dt class="col-sm-3">Material</dt>
    <dd class="col-sm-9">{{$uniform->uni_material }}</dd>

    <dt class="col-sm-3">Size</dt>
    <dd class="col-sm-9">{{$uniform->uni_size }}</dd>

    <dt class="col-sm-3">Price</dt>
    <dd class="col-sm-9">{{$uniform->uni_price }}</dd>

    <dt class="col-sm-3">Description</dt>
    <dd class="col-sm-9">{{$uniform->uni_description }}</dd>
</dl>
