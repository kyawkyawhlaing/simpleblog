@extends('backend.layouts.master')

@section ('title','post')

@section ('content')
<style>
       legend{
         text-align:center
       }
</style>

<div class="container-fluid">
  <legend>Creating Article</legend>
  <div class="well">
      <form method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name='user_id' value="{{ auth()->user()->id }}">
        @include ('alert')
                <div class="form-group">
                  <label for="title">Title</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control"  id="summernote" name="description" rows="3"></textarea>
                  </div>
                <div class="form-group">
                  <label for="image">Image</label>
                  <input type="file" name="file" class="form-control-file" id="image" style="color:blue">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
      </form>
  </div>      
</div>
@endsection