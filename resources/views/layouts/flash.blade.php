@if (session('success'))
    <div class=" text-center alert alert-success alert-dismissible" role="alert">
        {!!  session('success') !!}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


@if ($errors->any())
    @foreach ($errors->all() as $error)
                <ul>
                <div class="text-center alert alert-danger alert-dismissible" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                </ul>
    @endforeach

@endif

