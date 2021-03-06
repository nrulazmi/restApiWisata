<?php

namespace App\Http\Controllers;

use App\Http\Resources\ResourceUser;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
        $users=User::paginate(5);
        return (new UserResource($users))
            ->response()
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        //
        $users=User::create($request->all());

        return (new ResourceUser($users))
            ->response()
            ->setStatusCode(201);
    }


    public function show($id)
    {
        //
        $user=User::findOrFail($id);
        return (new ResourceUser($user))
            ->response()
            ->setStatusCode(200);
    }


  
    public function update(Request $request, $id)
    {
        //
        $user=User::findOrFail($id);
        $user->update($request->all());
        return (new ResourceUser($user))
            ->response()
            ->setStatusCode(200);
    }
    

    public function delete($id)
    {
        //
        $user=User::findOrFail($id);
        $user->delete();
        return response() ->json([
            'status' => "Success deleted user"
        ]);
    }
}
