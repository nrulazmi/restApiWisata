<?php

namespace App\Http\Controllers;

use App\Http\Resources\PemesananResource;
use App\Http\Resources\PemesanansResource;
use App\Pemesanan;
use Illuminate\Http\Request;

class PemesananController extends Controller
{

    public function index()
    {
        //
        $pesan=Pemesanan::paginate(5);
        return (new PemesanansResource($pesan))
            ->response()
            ->setStatusCode(200);
    }

   
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        $users=Pemesanan::create($request->all());

        return (new PemesananResource($users))
            ->response()
            ->setStatusCode(201);
    }

  
    public function show($id)
    {
        //
        $user=Pemesanan::findOrFail($id);
        return (new PemesananResource($user))
            ->response()
            ->setStatusCode(200);
    }

 
    public function update(Request $request, $id)
    {
        //
        $user=Pemesanan::findOrFail($id);
        $user->update($request->all());
        return (new PemesananResource($user))
            ->response()
            ->setStatusCode(200);
    }

    public function delete($id)
    {
        //
        $user=Pemesanan::findOrFail($id);
        $user->delete();
        return response() ->json([
            'status' => "Success deleted user"
        ]);
    }
}
