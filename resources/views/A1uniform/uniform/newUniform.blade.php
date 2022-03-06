@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">New Uniform</h1>
        </div>
        {{--    {{var_dump(\Illuminate\Support\Facades\Session::all())}}--}}
        @include('partials.errors')

        <form action="{{route('A1uniform.storeUniform')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('A1uniform.uniform.uniformFields')
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
