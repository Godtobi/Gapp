@extends("layouts.app")
@section("page__title","Company")
@section("page__sub","Create Company")
@section("page__icon")
    <i class="pe-7s-graph text-success"></i>
@endsection
@section("main")
    <div class="tab-content">
            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                <div class="main-card mb-3 card">
                    <div class="card-body"><h5 class="card-title">Create Avert</h5>
                        <form enctype="multipart/form-data" method="post" action="{{route("companies.store")}}">
                            @csrf

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"><span class="text-danger">*</span> Name</label>
                                <div class="col-sm-10">
                                    <input name="name"   type="text" class="form-control" required>
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label"> Email</label>
                                <div class="col-sm-10">
                                    <input name="email"   type="email" class="form-control">
                                </div>
                            </div>

                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Website</label>
                                <div class="col-sm-10">
                                    <input name="website"   type="text" class="form-control">
                                </div>
                            </div>


                            <div class="position-relative row form-group">
                                <label for="exampleEmail" class="col-sm-2 col-form-label">Logo</label>
                                <div class="col-sm-10">
                                    <input id="file" name="logo"  type="file" class="form-control">
                                </div>
                            </div>

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
        var _URL = window.URL || window.webkitURL;
        $("#file").change(function(e) {

            let image, file;

            if ((file = this.files[0])) {

                image = new Image();
                console.log(this.width,this.height);
                image.onload = function() {
                    console.log(this.width,this.height)
                    if(this.width<100 || this.height<100){
                        alert("minimum logo dimension required is 100x100. your uploaded logo is "+this.width+"x"+this.height);
                    }

                };

                image.src = _URL.createObjectURL(file);
            }

        });
    </script>
@endsection

