<?php

namespace App\Http\Controllers;

use App\Models\todo_list;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TodolistController extends Controller
{
     
    public function showAllData(){
        
        if(Auth::user()){

            $user=Auth::user()->id;
            $TodoArr= todo_list::where('user_id',$user);
            $UserTodo= User::where('utype','user');
            
            if(request()->get('name')){
                $TodoArr= $TodoArr->where('name','LIKE',"%".request()->get('name')."%");
                $UserTodo= $UserTodo->where('name','LIKE',"%".request()->get('name')."%");
            }
            
            $TodoArr=$TodoArr->paginate(10);
            $UserTodo=$UserTodo->paginate(10);
            
            if(Auth::user()->utype === 'admin'){
                return view('fetchedData',compact('UserTodo'));
            }else{
                return view('fetchedData',compact('TodoArr'));
            }
        }else{
                return view('fetchedData')->with('TodoArr',todo_list::all());
        }
    }
    
    public function showUserData($id){
        
        $TodoArr= todo_list::where('user_id',$id);
        
        if(request()->get('name')){
            $TodoArr= $TodoArr->where('name','LIKE',"%".request()->get('name')."%");
        }
        
        $TodoArr=$TodoArr->paginate(10);
        
        $UserId=$id;
        $UserName=User::where('id',$id)->first();

        return view('users_todo',compact('TodoArr','UserId','UserName'));
    }

    public function delete($id){
        todo_list::destroy(array('id',$id));
        return redirect('/');
    }

    public function create(){
        return view('createView');
    }

    public function todo_submit(Request $req){
        
        $user=Auth::user()->id;
        $todo = new todo_list;
        $todo->user_id = $user;
        $todo->name = $req->input('name');
        $todo->save();
        return redirect('/');
    }

    public function edit($id){
          
         return view('edit_todo')->with('TodoArr_name',todo_list::find($id));
    }

    public function edit_submit(Request $req, $id){

       
         $todo = todo_list::find($id);
         $todo->name = $req->input('name');
         $todo->save();
         return redirect('/');
    }

}




