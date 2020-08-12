@extends('backend.layouts.master')
@section('title','Profile')
@section('content')
           
            <div class="container">
                <div class="col">
                    <a href="{{ url('admin/profile/edit') }}" class="btn btn-success btn-sm mb-3">
                        <i class="fas fa-edit"></i>
                        Edit
                    </a>
                </div>
                
                <div class="card">
                    <div class="card-body text-center bg-light">
                        {{-- @if (Auth::user()->avatar)
                        <img src="{{url('/images/profile_pic/'. Auth::user()->avatar) }}"
                        class="img-fluid rounded-circle" style="width: 200px; height:200px;">
                        @endif --}}
                        
                        <img src="{{url('/images/profile_pic/'. Auth::user()->avatar)}}" class="img-fluid rounded-circle" style="width:200px; height:200px">
                        
                    </div>
                    <table class="table">
                        <tr>
                            <td>Name</td>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                    </table>
                </div>
            </div>

@endsection