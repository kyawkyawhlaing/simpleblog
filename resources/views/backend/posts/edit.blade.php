@extends('backend.layouts.master')

@section ('title','post')

@section ('content')
<style>
       legend{
         text-align:center
       }
</style>

<div class="container-fluid">
  <legend>Edit Your Article</legend>
  <div class="well">
        
  <form method="post" action="{{url("admin/post/$posts->id/update")}}" enctype="multipart/form-data">
        @csrf
        @include ('alert')
                <div class="form-group">
                  <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$posts->title}}" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                <textarea class="form-control"  id="summernote" name="description" rows="3" >
                    {{$posts->description}}
                </textarea>
                  </div>
                <div class="form-group">
                  <label for="image">Image</label>
                <input type="file" name="file" class="form-control-file" id="image" value="{{$posts->images}}" style="color:blue">
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>      
</div>
@endsection