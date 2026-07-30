<?php

namespace App\Http\Controllers;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function index(){
    return response()->json([
        'success' => true,
        'message' => 'Users retrieved Successfully' ,
        'data' => [
            [
                'id' => 1,
                'name' => 'Mohammed',
                'email' => 'mohammed@example.com'
            ], [
                'id' => 2,
                'name' => 'Ahmed',
                'email' => 'ahmed@example.com'
            ],
            [
    'id' => 3,
    'name' => 'Ali',
    'email' => 'ali@example.com'
]
        ]
    ]);
}

public function show($id)
{
    return response()->json([
        'success' => true,
        'message' => 'User retrieved successfully',
        'data' => [
            'id' => $id,
            'name' => 'Mohammed',
            'email' => 'mohammed@example.com'

        ]
    ]);
}
public function store(StoreUserRequest $request)
{
    return response()->json([
        'success' => true,
        'message' => 'User created successfully',
        'data' => [
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]
    ]);
}
public function update(UpdateUserRequest $request, $id)
{
    return response()->json([
        'success' => true,
        'message' => 'User updated successfully',
        'data' => [
            'id' => $id,
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age
        ]
    ]);
}
public function destroy($id)
{
    return response()->json([
        'success' => true,
        'message' => 'User deleted successfully',
        'data' => [
            'id' => $id
        ]
    ]);
}
}
