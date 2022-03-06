<input type="hidden" name="ad_id" value="{{old('ad_id')?? $admin->ad_id}}">
<div class="form-group">
    <label for="ad_user" class="font-weight-bold">Username</label>
    <input disabled type="text" class="form-control" id="ad_user" name="ad_user" value="{{old('ad_user')?? $admin->ad_user}}">
    {{--        when removing title value to trigger "required" validation, --}}
    {{--        old('title') is not set so $book['title'] is shown--}}
    {{--        it is because redirect()->back() calls edit() which provides $book for view--}}
</div>

<div class="form-group">
    <label for="ad_pass" class="font-weight-bold">Password</label>
    <input type="password" class="form-control" id="ad_pass" name="ad_pass" value="">
</div>

<div class="form-group">
    <label for="ad_fullname" class="font-weight-bold">Full Name</label>
    <input type="text" class="form-control" id="ad_fullname" name="ad_fullname" value="{{old('ad_fullname')?? $admin->ad_fullname}}">
</div>

<div class="form-group">
    <label for="ad_phone" class="font-weight-bold">Phone</label>
    <input type="text" class="form-control" id="ad_phone" name="ad_phone" value="{{old('ad_phone')?? $admin->ad_phone}}">
</div>

<div class="form-group">
    <label for="ad_email" class="font-weight-bold">Email</label>
    <input type="text" class="form-control" id="ad_email" name="ad_email" value="{{old('ad_email')?? $admin->ad_email}}">
</div>

