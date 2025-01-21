@extends('layouts.app')
@section('title','create todo')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Create New Todo</h1>
                    </div>
                    <div class="card-body">
{{--                        @if ($errors->any())--}}
{{--                            <div class="alert alert-danger">--}}
{{--                                <ul>--}}
{{--                                    @foreach ($errors->all() as $error)--}}
{{--                                        <li>{{ $error }}</li>--}}
{{--                                    @endforeach--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        @endif--}}
                        <form action="/create" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control @error('todoTitle') is-invalid @enderror" name="todoTitle" placeholder="Enter Todo Title" value="{{old('todoTitle')}}">
{{--                                       class="@error('todoTitle') is-invalid @enderror">--}}
                            </div>
                        @error('todoTitle')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <div class="form-group mb-3">
                                <textarea class="form-control @error('todoDescription') is-invalid @enderror" row="3" name="todoDescription" placeholder="Enter Todo Description" >{{old('todoDescription')}}</textarea>
                            </div>
                        @error('todoDescription')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <div class="form-group mb-3 text-center">
                                <button class="btn btn-success" type="submit" style="width: 40%" >Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
