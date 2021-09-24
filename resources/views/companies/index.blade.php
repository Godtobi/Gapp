@extends("layouts.app")
@section("page__title","Companies")
@section("page__sub","Overview")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("buttons")
    <a style="margin-bottom: 20px;"  href="{{route("companies.create")}}" type="button" data-placement="bottom" class="btn-shadow mr-3 btn btn-primary">
        Create Company
    </a>
@endsection
@section("main")
    <div class="row">
        <div style="margin: 0 auto" class="text-center">
            {{ $companies->links() }}
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Creator</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>{{$company->name}}</td>
                        <td>{{$company->email}}</td>
                        <td>{{$company->website}}</td>
                        <td><img style="max-height: 50px;" src="{{$company->logo}}" alt=""></td>
                        <td>{{$company->user !=null ? $company->user->name : " "}}</td>
                        <td>

                            <a href="{{route('companies.show',$company->id)}}">
                                <button data-toggle="tooltip" data-placement="top" title="Edit" class=" mr-2 btn-icon btn-icon-only btn  btn-outline-primary">
                                    <i class="pe-7s-look btn-icon-wrapper"> </i>
                                </button>
                            </a>

                                <button value="{{$company->id}}" data-toggle="tooltip" data-placement="top" title="delete" class="delCompBtn mr-2 btn-icon btn-icon-only btn  btn-outline-danger">
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
                    <th>Website</th>
                    <th>Logo</th>
                    <th>Creator</th>
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
            let url = "{{route('companies.destroy',"--")}}";
            url = url.replace("--",stopId);
            console.log(url,stopId);
            $.ajax({
                type: 'DELETE',
                url: url,
                data:{"_token":"{{csrf_token()}}"},
                success: function (res) {
                    swal("Success!", "Company deleted successfully", "success");
                    location.reload();
                },
                error: function(xhr, status, error) {
                    swal("OH OH...! Something went wrong. please try again", "error");
                }
            });
        });
    </script>
@endsection

