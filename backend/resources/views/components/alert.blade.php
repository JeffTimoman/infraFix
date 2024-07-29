@if ($errors->any())
    @foreach ($errors->all() as $item)
    <div>
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: absolute; bottom: 5%; width: 90vw; z-index: 9999; left: 50%; transform: translateX(-50%);">
            <strong>Error!</strong> {{$item}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
    </div>
    @endforeach
@endif

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert"  style="position: absolute; bottom: 5%; width: 90vw; z-index: 9999; left: 50%; transform: translateX(-50%);">
        <strong>Success!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
@endif
