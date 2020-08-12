@extends ('welcome')
@section('title','News Blog')
@section('content') 
 
<div class="container">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 m-3">
                <div class="card ">
                        <img class="card-img-top mx-auto d-block" src="{{asset('/images/post_pic/'.$post->images)}}"  style="width:100%" alt="Card image">
                        <div class="card-body">
                          <h4 class="card-title" style="font-size: medium">{{$post->title}}</h4>
                          <p class="card-text" style="font-size: 1rem">{{ substr($post->description,0,60)}}</p>
                         
                        </div>
                        <div class="card-footer">
                                <a href="{{url("post/$post->id")}}" style="font-size: 16px;" class="btn btn-primary float-right">See More</a>
                        </div>
                </div>
        </div>
                
        @endforeach  
    </div>
    <div class="row justify-content-center">
            {{ $posts->links() }}
    </div>
</div>
@endsection