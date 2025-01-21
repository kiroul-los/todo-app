@extends('layouts.app')
@section('title','Todos')

@section('content')
    <div class="container">
        <div class="row pt-3 justify-content-center">
            <div class="card" style="width: 50%">
                <div class="card-header text-center">
                    <h1>All Todos</h1>
                </div>
                @if(session()->has('success'))
                    <div class="alert alert-success">{{session()->get('success')}}</div>
                    @endif

                @if(session()->has('update'))
                    <div class="alert alert-success">{{session()->get('update')}}</div>
                @endif
                <div class="card-body">
                      <ul class="list-group">
                          @foreach($todos as $todo)
                              <li class="list-group-item text-muted">{{$todo->title}}
                                  <span class="float-end me-2" >
                                    <a href="\todos\{{$todo->id}}\delete"><i class="fa-solid fa-trash-can" style="color:#f44336"></i></a>
                                </span>
                                  <span class="float-end me-2">
                                    <a href="todos\{{$todo->id}}\edit"> <i class="fa-regular fa-pen-to-square" style="color:#4caf50"></i></a>
                                </span>
                                <span class="float-end me-2">
                                    <a href="todos/{{$todo->id}}"> <i class="fa-regular fa-eye" style="color:#00bcd4"></i></a>
                                </span>
                                  @if(!boolval($todo->completed))
                                  <span class="float-end me-2" >
                                    <a href="\todos\{{$todo->id}}\complete"><i class="fa-regular fa-circle-check" style="color:#D4AF37"></i></a>
                                </span>
                                      @endif
                              </li>
                          @endforeach
                      </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
