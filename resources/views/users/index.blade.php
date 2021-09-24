@extends("layouts.app")
@section("page__title","Users")
@section("page__sub","Overview")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("main")
    <div class="row">
        <div style="margin: 0 auto" class="text-center">
            {{ $users->links() }}
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{implode(",",$user->getRoleNames()->toArray())}}</td>
                        <td>
                            <button value="{{$user->id}}" data-toggle="tooltip" data-placement="top" title="delete"
                                    class="delCompBtn mr-2 btn-icon btn-icon-only btn  btn-outline-danger">
                                <i class="pe-7s-trash btn-icon-wrapper"> </i>
                            </button>

                        </td>
                    </tr>
                @endforeach

                </tbody>
                <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>

@endsection

@section("page_js")

    <script>
        $(document).on("click", ".delCompBtn", function () {
            let stopId = $(this).val();
            let url = "{{route('users.destroy',"--")}}";
            url = url.replace("--",stopId);
            console.log(url,stopId);
            $.ajax({
                type: 'DELETE',
                url: url,
                data:{"_token":"{{csrf_token()}}"},
                success: function (res) {
                    swal("Success!", "User deleted successfully", "success");
                    location.reload();
                },
                error: function(xhr, status, error) {
                    swal("OH OH...! Something went wrong. please try again", "error");
                }
            });
        });
    </script>
@endsection

