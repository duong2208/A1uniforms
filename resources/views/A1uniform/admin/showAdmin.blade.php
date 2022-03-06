{{--Hoang Thi Thuy Duong--}}
@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Admin Details</h1>
        </div>

        @include('A1uniform.admin.adminDetails')
        <a type="button"  href="{{route('A1uniform.admin_manager')}}" class="btn btn-info">&lt;&lt;&nbsp;Admin Manager</a>
    </div>
@endsection
