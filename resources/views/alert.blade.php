
@foreach ($errors->all() as $error)
          <p class="alert alert-danger alert-dismissible fade show" role="alert">
            {{$error}}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </p>  
@endforeach

@if (session('status'))
          <p class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </p>
@endif