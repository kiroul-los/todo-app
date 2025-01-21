<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class todosController extends Controller
{
    public function index(){
        $todos=Todo::all();
        return view ('todos.index')->with('todos',$todos);
    }

    public function show($id){
        $todo=Todo::find($id);
        return  view('todos.show',['todo'=>$todo]);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){


        $request->validate([
            'todoTitle'=>'required|min:5',
            'todoDescription'=>'required',
        ]);

       $todo = new Todo();
       $todo->title=$request->todoTitle;
       $todo->description=$request->todoDescription;

       $todo->save();

       $request->session()->flash('success','Todo Created Successfully');

       return redirect('todos');
    }

    public function edit($id){
        $todo=Todo::find($id);
        return view('todos.edit',['todo'=>$todo]);
    }

    public function update(Request $request,$id){


        $request->validate([
            'todoTitle'=>'required|min:5',
            'todoDescription'=>'required',
        ]);

        $todo = Todo::find($id);
        $todo->title=$request->todoTitle;
        $todo->description=$request->todoDescription;

        $todo->save();

        $request->session()->flash('update','Todo Updated Successfully');

        return redirect("todos");
    }

    public function destroy($id){
        $todo=Todo::find($id);
        $todo->delete();
        return redirect()->back();
    }

    public function complete($id){
        $todo=Todo::find($id);
        $todo->completed=1;
        $todo->save();
        return redirect()->back();
    }


}
