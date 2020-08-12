@extends ('welcome')
@section('title','News Blog')
@section('content') 
 
<style>
 img {
     width: 400px;
     height: 400px;
 }
@media only screen and (max-width:500px){
img {
    width: 200px;
    height: 200px;
}
}

</style>
<div class="container">
    <div class="row">  
        <div class="col-md-10 offset-1"> 
                <img class="mx-auto d-block" src="{{asset('/images/post_pic/' . $posts->images)}}"  alt="Card image">                      
                <h4 class="text-design mt-3" style="text-align:center">{{$posts->title}}</h4>
                <p class="mb-4">{{ $posts->description }}</p> 
            <span class="float-right"><strong>Author by : </strong>{{$posts->user->name}} </span>
        </div>
    </div>
    <div class="row mx-5">
        <div class="col m-5">
            <a href="{{ url('/') }}" class="btn btn-carrot">
                Go Back
            </a>
        </div>
    </div>
</div>
@endsection