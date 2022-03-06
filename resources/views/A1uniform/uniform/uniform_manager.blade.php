@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Uniform Index</h1>
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Price ($)</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($uniforms as $u)
                <tr>
                    <td>{{$u->uni_name}}</td>
                    <td><img style="width: 200px; height:200px" src="{{asset('storage/images/uniform/' .$u->uni_image)}}" alt=""></td>
                    <td>{{$u->uni_price}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('A1uniform.showUniform', ['uni_id' => $u->uni_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('A1uniform.editUniform', ['uni_id' => $u->uni_id])}}"
                        >Edit</a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger btn-sm"
                           href="{{route('A1uniform.confirmUniform', ['uni_id' => $u->uni_id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>

@endsection

@section('script')
@endsection
