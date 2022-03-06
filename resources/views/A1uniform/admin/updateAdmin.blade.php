@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Update admin information</h1>
        </div>


        @include('partials.errors')

        <form action="{{route('A1uniform.updateAdmin', ['ad_id' => old('ad_id')?? $admin->ad_id])}}" method="post">
            @csrf
            @include('A1uniform.admin.adminFields')

            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
@endsection
