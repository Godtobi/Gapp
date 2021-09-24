@extends("layouts.app")
@section("page__title","User")
@section("page__sub","Create User")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("main")
    <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Create Avert</h5>
                        <form enctype="multipart/form-data" method="post" action="{{route("users.store")}}">
                            @csrf

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span> FirstName</label>
                                <div class="col-sm-10">
                                    <input name="firstName"   type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span> LastName</label>
                                <div class="col-sm-10">
                                    <input name="lastName"   type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>  Email</label>
                                <div class="col-sm-10">
                                    <input name="email"   type="email" class="form-control" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Phone</label>
                                <div class="col-sm-10">
                                    <input name="phone"   type="text" class="form-control">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Password</label>
                                <div class="col-sm-10">
                                    <input name="password"   type="text" class="form-control">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span>Role</label>
                                <div class="col-sm-10">
                                    <select name="role" id="roleSelector" class="form-control" required>
                                        @if(auth()->user()->hasAnyRole(['admin','superAdmin']))
                                            <option value="">Select role</option>
                                        @endif
                                        @foreach($roles as $role)
                                            <option value="{{$role}}">{{$role}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            @if(auth()->user()->hasAnyRole(['admin','superAdmin']))
                                <div id="companyDiv" class="position-relative row form-group">
                                    <label for="exampleEmail" class="col-sm-2 col-form-label">Company</label>
                                    <div class="col-sm-10">
                                        <select name="company" id="" class="form-control">
                                            <option value="">Select company</option>
                                            @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            @endif

                            <div class="position-relative row form-check">
                                <div class="col-sm-6 offset-sm-6">
                                    <button class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
@section("page_js")
    <script>
        $("#companyDiv").hide();
        $("#roleSelector").change(function () {
            let sel = $(this).val();
            if(sel==="company" || sel==="employee"){
                $("#companyDiv").show();
                $("#companyDiv").attr("required",true)
            }
            else{
                $("#companyDiv").hide();
                $("#companyDiv").attr("required",false)
            }
        })
    </script>
@endsection


