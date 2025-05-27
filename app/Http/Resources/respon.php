<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class respon extends JsonResource
{

    public $status;
    public $message;
    public $data;


    public function __construct($status, $message, $data)
    {
        parent::__construct($data);
        $this->status  = $status;
        $this->message = $message;
        $this->data = $data;
    }
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'success'   => $this->status,
            'message'   => $this->message,
            'data'      => $this->data
        ];
    }
}
