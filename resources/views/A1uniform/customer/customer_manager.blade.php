@extends('masters.adminMaster')

@section('main')
    <div class="container">
        <div class="p-2 pt-md-5 pb-md-3 mx-auto">
            <h1 class="display-4">Customer Index</h1>
        </div>

        <table class="table table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Fullname</th>
                <th scope="col">Phone</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($customers as $c)
                <tr>
                    <td>{{$c->cus_fullname}}</td>
                    <td>{{$c->cus_phone}}</td>
                    <td><a type="button" class="btn btn-primary btn-sm"
                           href="{{route('A1uniform.showCustomer', ['cus_id' => $c->cus_id])}}"
                        >Details</a>
                    </td>
                    <td><a type="button" class="btn btn-success btn-sm"
                           href="{{route('A1uniform.editCustomer', ['cus_id' => $c->cus_id])}}"
                        >Edit</a>
                    </td>
                    <td><a type="button" class="btn btn-danger btn-sm"
                           href="{{route('A1uniform.confirmCustomer', ['cus_id' => $c->cus_id])}}"
                        >Delete</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('script')
@endsection
