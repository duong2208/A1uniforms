@extends('masters.adminMaster')

@section('main')
    <br><br>
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
        <h1 class="display-4">Are you sure you want to delete?</h1>
        </div>
        @include('A1uniform.uniform.uniformDetails')

        <form action="{{route('A1uniform.destroyUniform', ['uni_id' =>$uniform->uni_id])}}" method="post">
            @csrf
            <input type="hidden" name="uni_id" value="{{$uniform->uni_id}}">
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="{{route('A1uniform.uniform_manager')}}" class="btn btn-info">Cancel</a>
        </form>
    </div>
@endsection
