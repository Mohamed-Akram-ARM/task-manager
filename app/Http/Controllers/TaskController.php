<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tasks =Task::get();
      $user = Auth::user();

    if($user->role == 'admin'){
        // Admin sees all tasks
        $tasks = Task::all();
    }else{
        // User sees only their tasks
        $tasks = Task::where('user_id', $user->id)->get();
    }

    return view('admin.index', compact('tasks','user'));
    }

     

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
       $statuses=[
    [
        'label'=>'Pending',
        'value'=>'pending',
    ],
    [
        'label'=>'Done',
        'value'=>'done',
    ]
];
      return view('admin.create', compact('statuses','users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=> 'required'
        ]);

        $task= new Task();
      //  $task->user_id = $request->user_id;
         $task->user_id = Auth::id(); 
        $task->title= $request->title;
        $task->description= $request->description;
        $task->status= $request->status;
        dd($request->status);
        $task->save();

        return redirect()->route('index');

    } 

    /**
     * Display the specified resource.
     */
    public function show()
    {  $users = User::all();
     $task = Task::all();
        /**$pending = Task::where('status','pending')->count();
$done = Task::where('status','done')->count();
         $tasks =Task::get();
      $user = Auth::user();**/

    return view('admin.panding', compact('task','users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
           //dd(Auth::user());
        $task = Task::findOrFail($id);

    $statuses = [
        [
            'label' => 'Pending',
            'value' => 'pending',
        ],
        [
            'label' => 'Done',
            'value' => 'Done',
        ]
    ];

    $user = Auth::user();

    if($user->role == 'admin'){
        return view('admin.edit', compact('task','statuses'));
    }

    return view('edit', compact('task','statuses'));

    }

     

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

     $task= Task::findorfail($id);
        $request->validate([
            'title'=> 'required'
        ]);

      
        $task->title= $request->title;
        $task->description= $request->description;
        $task->status= $request->status;
         //dd($request->status);
        $task->save();

        
        $user = Auth::user();
       if($user && $user->role == 'admin'){
             return redirect()->route('index');
        }else{
            return redirect()->route('dashboard');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $task= Task::findorfail($id);
          $task->delete();
 $user = Auth::user();
       if($user && $user->role == 'admin'){
             return redirect()->route('index');
        }else{
            return redirect()->route('dashboard');
        }
        
    }

    
  
}
