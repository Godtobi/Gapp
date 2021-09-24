@extends("layouts.app")
@section("page__title","Company")
@section("page__sub","Company Profile")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("main")

    <div class="main-card mb-3 card">
        <div class="card-body">
            <br>
            <table class="mb-0 table table-bordered table-hover">
                <tbody>
                <tr>
                    <th class="text-center text-info" colspan="2" scope="row">Company Profile</th>
                </tr>
                <tr>
                    <th scope="row">Name</th>
                    <td>{{$company->name}}</td>
                </tr>
                <tr>
                    <th scope="row">Logo</th>
                    <td><img src="{{$company->logo}}" alt=""></td>
                </tr>
                <tr>
                    <th scope="row">Email</th>
                    <td>{{$company->email}}</td>
                </tr>

                <tr>
                    <th scope="row">Website</th>
                    <td>{{$company->website}}</td>
                </tr>
                <tr>

                </tr>
                <tr>
                    <th scope="row">Creator Name</th>
                    <td>{{$company->user->name}}</td>
                </tr>

                <tr>
                    <th scope="row">Creator Email</th>
                    <td>{{$company->user->email}}</td>
                </tr>


                </tbody>
            </table>
            <br>
        </div>
    </div>

@endsection

