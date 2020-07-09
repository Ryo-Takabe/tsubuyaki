<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * ユーザー　取得
     * @return UserResource
     */
    public function index(Request $request)
    {
//        $users = User::find(1);
//        return new UserResource($users);
        return new UserResource($request->user());
    }

    public function update(Request $request, User $user)
    {
        //
    }
}
