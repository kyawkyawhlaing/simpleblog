@extends ('backend.layouts.master')
@section ('title','post')
@section ('content')

<div class="container">
            <a href="{{ url('admin/post/create') }}" class="btn btn-primary btn-sm mb-3">
                <i class="fas fa-plus-circle mr-1"></i>
                Create
            </a>
        
            <div class="row justify-content-center">
                <div class="col-12">
        @include('alert ')
            
        
                    <table class="table table-bordered table-striped">
                        <thead class ="thead-crimson">
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user->posts as $post)
                            <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                                <td><img src="{{asset('/images/post_pic/'.$post->images)}}" style="width:50px; height:50px"></td>
                                <td>
                                <a href="{{url("admin/post/$post->id/edit")}}" class="btn btn-warning" role="button">Edit</a>
                                <a href="{{url("admin/post/$post->id/delete")}}" class="btn btn-danger" role="button">Delete</a>
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                        
                    </table>
                </div>
            </div>
        <div class="row justify-content-center">
            {{ $posts->links() }}
        </div>
</div>
@endsection

