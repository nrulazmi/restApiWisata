<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserResource extends ResourceCollection
{

    public function toArray($request)
    {
        return [
            "status" => "success",
            "message" => "user_data",
            "data" => parent::toArray($request)
        ];
    }
}
