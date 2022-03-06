@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Uniform Details</h1>
        </div>
        @include('A1uniform.uniform.uniformDetails')
        <a type="button" href="{{route('A1uniform.uniform_manager')}}" class="btn btn-info">&lt;&lt;&nbsp;Uniform Manager</a>
    </div>

@endsection
