{{--Hoang Thi Thuy Duong--}}
@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Are you sure to delete this Admin?</h1>
        </div>

        @include('A1uniform.admin.adminDetails')
        <form action="{{route('A1uniform.destroyAdmin', ['ad_id' => $admin->ad_id])}}" method="post">
            @csrf
            <input type="hidden" name="ad_id" value="{{$admin->ad_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('A1uniform.admin_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
