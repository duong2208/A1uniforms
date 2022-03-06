@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Admin Index</h1>
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Username</th>
                <th scope="col">Phone</th>
                <th scope="col">Full Name</th>
                <th scope="col">Options</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($admins as $ad)
                <tr>
                    <td>{{$ad->ad_user}}</td>
                    <td>{{$ad->ad_phone}}</td>
                    <td>{{$ad->ad_fullname}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('A1uniform.showAdmin', ['ad_id' => $ad->ad_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('A1uniform.editAdmin', ['ad_id' => $ad->ad_id])}}"
                        >Edit</a>
                    </td>
                    <td><a type="button" class="btn btn-danger btn-sm"
                           href="{{route('A1uniform.confirmAdmin', ['ad_id' => $ad->ad_id])}}"
                        >Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection
