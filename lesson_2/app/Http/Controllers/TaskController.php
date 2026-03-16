<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Task1\UserService as UserServiceTask1;
use App\Services\Task2\UserService as UserServiceTask2;
use App\Services\Task3_4\UserService as UserServiceTask3;

class TaskController extends Controller
{
    public function __construct(
        private UserServiceTask1 $userService,
        private UserServiceTask2 $userService2,
        private UserServiceTask3 $userService3
    ){}

    public function task1()
    {
        return $this->userService->getUsers();
    }
    public function task2()
    {
        return $this->userService2->getUsers();
    }
    public function task3()
    {
        return $this->userService3->getUsers();
    }
    public function task4()
    {
        return $this->userService3->getUsers();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
