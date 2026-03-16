<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\StoreRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Services\Contracts\UserServiceInterface;

class UserController extends Controller
{
    public function __construct(
        private UserServiceInterface $userService
    ){}

    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json($this->userService->getAll());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): JsonResponse
    {
        $request = $request->validated();
        return response()->json($this->userService->create($request), 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json($this->userService->getById($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request = $request->all();
        return response()->json($this->userService->update($id, $request));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->userService->delete($id);
        return response()->json(null, 204);
    }
}
