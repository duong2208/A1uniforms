@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update An Existing Uniform</h1>
        </div>


        @include('partials.errors')

        <form action="{{route('A1uniform.updateUniform', ['uni_id' => old('uni_id')?? $uniform->uni_id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('A1uniform.uniform.uniformFields')

            <button type="submit" class="btn btn-dark">Update</button>
        </form>
    </div>
@endsection
