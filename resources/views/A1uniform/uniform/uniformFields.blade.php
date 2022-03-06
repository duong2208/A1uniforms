<input type="hidden" name="uni_id" value="{{old('uni_id')?? $uniform->uni_id}}">
<div class="form-group">
    <label for="uni_name" class="font-weight-bold">Name</label>
    <input type="text" class="form-control" id="uni_name" name="uni_name"
           value="{{old('uni_name')?? $uniform->uni_name}}">
</div>

<div class="mb-3">
    <label for="uni_image" class="font-weight-bold">Images</label>
    <img class="img-fluid" alt="" width="230" height="120" src="{{ asset('storage/images/uniform/'.$uniform->uni_image )}}" alt="">
    <input class="form-control" type="file" id="uni_image" name="uni_image" value="{{old('uni_image')?? $uniform->uni_image}}">
</div>


<div class="form-group">
    <label for="cat_id" class="font-weight-bold">Category</label>
    <input type="text" class="form-control" id="cat_id" name="cat_id"
           value="{{old('cat_id')?? $uniform->cat_id}}">
</div>

<div class="form-group">
    <label for="uni_material" class="font-weight-bold">Material</label>
    <input type="text" class="form-control" id="uni_material" name="uni_material"
           value="{{old('uni_material')?? $uniform->uni_material}}">
</div>

<label for="uni_size" class="font-weight-bold">Size</label>
<input class="form-control" list="datalistOptions" id="uni_size" name="uni_size" placeholder="Please choose one size">
<datalist id="datalistOptions">
    <option value="S">
    <option value="M">
    <option value="L">
    <option value="Xl">
</datalist>

<div class="form-group">
    <label for="uni_price" class="font-weight-bold">Price</label>
    <input type="text" class="form-control" id="uni_price" name="uni_price"
           value="{{old('uni_price')?? $uniform->uni_price}}">
</div>

<div class="form-group">
    <label for="uni_description" class="font-weight-bold">Description</label>
    <input type="text" class="form-control" id="uni_description" name="uni_description"
           value="{{old('uni_description')?? $uniform->uni_description}}">
</div>
