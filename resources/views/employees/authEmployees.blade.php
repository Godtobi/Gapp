@extends("layouts.app")
@section("page__title","Employees")
@section("page__sub","Overview")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("main")
    <div class="row">
        <div style="margin: 0 auto" class="text-center">
            {{ $employees->links() }}
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Creator</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $user)
                    <tr>
                        <td>{{$user->firstName}}</td>
                        <td>{{$user->lastName}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->creator->name}}</td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>phone</th>
                    <th>Creator</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection

