<?php

namespace App\Http\Controllers;

use App\Repositories\UserTasksRepository;
use App\Transformers\TaskTransformer;
use App\Task;
use App\User;
use Illuminate\Http\Request;

/**
 * Class UserTasksController
 * @package App\Http\Controllers
 */
class UserTasksController extends Controller
{
    /**
     * TasksController constructor.
     */
    public function __construct(TaskTransformer $transformer)
    {
        parent::__construct($transformer);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::findOrFail($id);

        $tasks = $user->tasks()->paginate(15);

        return $this->generatePaginatedResponse($tasks, ['propietari' => 'Roger Melich']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id_user)
    {
        $user = User::findOrFile($id_user);
        Task::create($request->only(['name','done','priority', $user->id]));

        return response([
            'error' => false,
            'created'   => true,
            'message'   => 'Created!',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id_user, $id_task
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id_user, $id_task)
    {
        $user = User::findOrFail($id_user);
        $task = $user->tasks()->findOrFail($id_task);

        return $this->transform($task);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id_user, $id_task
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id_user, $id_task)
    {
        $user = User::findOrFail($id_user);
        $task = $user->tasks()->findOrFail($id_task);
        $task->edit($request->only(['name', 'done', 'priority', 'user_id']));

        return response([
            'error'   => false,
            'updated' => true,
            'message' => 'Edited!',
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id_user, $id_task
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user, $id_task)
    {
        $user = User::findOrFail($id_user);
        $task = $user->tasks()->findOrFail($id_task);
        $task->update($request->only(['name', 'done', 'priority', 'user_id']));

        return response([
            'error'   => false,
            'updated' => true,
            'message' => 'Updated!',
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id_user, $id_task
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user, $id_task)
    {
        $user = User::findOrFail($id_user);
        $task = $user->tasks()->findOrFail($id_task);
        $task->destroy();

        return response([
            'error'   => false,
            'deleted' => true,
            'message' => 'Deleted!',
        ], 200);
    }
}
