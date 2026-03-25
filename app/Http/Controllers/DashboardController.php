<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;

class DashboardController extends Controller
{
   public function adminDashboard()
    {
        $tasks = Task::all(); // get all tasks from database

        return view('admin.dashboardt', compact('tasks'));
    }
    public function dashboard()
    {
        $tasks =Task::get();
      $user = Auth::user();

    if($user->role == 'admin'){
        // Admin sees all tasks
        $tasks = Task::all();
    }else{
        // User sees only their tasks
        $tasks = Task::where('user_id', $user->id)->get();}
        //$tasks = Task::all(); // get all tasks from database
       
        $statuses=[
            [
                'label'=>'panding',
                'value'=>'panding',
            ],
            [
                'label'=>'Done',
                'value'=>'Done',
            ]
        ];

        return view('dashboard', compact('statuses','tasks'));
       
    }
    
   
    
     public function user()
    {
        $users = User::all();
      return view('admin.users', compact('users'));
    }
}