<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Tasks;
use Auth;

class TasksController extends Controller
{

	public function index(Tasks $tasks)
    {
        $user_id = Auth::guard('api')->id();
        $task = $tasks->getTasks($user_id);
        return response()->json($task);
        // return view('tasks.index');
    }

    public function delete(Tasks $tasks, $id)
    {
        $user_id = Auth::guard('api');
        $task = $tasks->getTask($id);

    	if ($tasks->user() == $user_id) {
        
            $task->delete();
            return response()->json(['status' => 'success']);
        
        }
        
        return response()->json(['status' => 'error']);


    }

    public function updateForm($id, Tasks $tasks)
    {
        $this->data['task'] = $tasks->getTask($id);

        return view('tasks.update', $this->data);
        
    }

    public function update(Tasks $tasks, $id, Request $request)
    {
        $taskm = Tasks::find($id);

        $taskm->task = $request->task;
        $taskm->status = $request->status; 

        $user_id = Auth::guard('api')->id();

        if ($user_id == $taskm->user_id) {

            $taskm->save();
            return response()->json(['status' => 'success']);

        }
        
        return response()->json(['status' => 'error']);
    }

    public function create(Tasks $tasks, Request $request)
    {
        $taskm = new Tasks;

        $taskm->task = $request->task;
        $taskm->status = $request->status; 
        $taskm->user_id = Auth::guard('api')->id();

        $user_id = Auth::guard('api');

        if ($user_id != '') {

            $taskm->save();
            return response()->json(['status' => 'success']);

        }
        
        return response()->json(['status' => 'error']);
    }

}
