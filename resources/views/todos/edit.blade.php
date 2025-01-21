@extends('layouts.app')
@section('title','edit todo')
@section('content')
    <div class="container pt-5">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h1>Edit Todo</h1>
                    </div>
                    <div class="card-body">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                        <form action="/edit/{{$todo->id}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <input type="text" class="form-control" name="todoTitle" value="{{$todo->title}}">
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" row="3" name="todoDescription" >{{$todo->description}}</textarea>
                            </div>
                            <div class="form-group mb-3 text-center">
                                <button class="btn btn-success" type="submit" style="width: 40%" >Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
