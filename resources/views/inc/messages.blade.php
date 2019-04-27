@if(count($errors) > 0)
    @foreach($errors as $error)
        <div class= "alert alert-danger" role="alert" style="width:65%; margin:0 auto;">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class= "alert alert-success" role="alert" style="width:65%; margin:0 auto;">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class= "alert alert-danger" role="alert" style="width:65%; margin:0 auto;">
            {{session('error')}}
        </div>
@endif