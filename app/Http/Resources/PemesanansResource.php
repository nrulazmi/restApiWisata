<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PemesanansResource extends ResourceCollection
{
    
    public function toArray($request)
    {
        return [
            "status" => "success",
            "message" => "pemesanan_data",
            "data" => parent::toArray($request)
        ];
    }
}
