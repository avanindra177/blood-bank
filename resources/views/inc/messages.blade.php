@if(count($errors) > 0)
    @foreach($errors as $error)
        <div class= "älert alert-danger" style="width:66%; margin:0 auto; margin-bottom:5px;  padding-left:10px;"">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
        <div class= "älert alert-success" style="width:66%; margin:0 auto; margin-bottom:5px;  padding-left:10px;">
            {{session('success')}}
        </div>
@endif

@if(session('error'))
        <div class= "älert alert-danger" style="width:66%; margin:0 auto; margin-bottom:5px;  padding-left:10px;">
            {{session('error')}}
        </div>
@endif