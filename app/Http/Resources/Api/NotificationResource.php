<?php

namespace App\Http\Resources\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'message' => $this->data['message'],
            'created_at' => Carbon::parse($this->created_at)->format("H:i"),
            'read_at' => $this->read_at ? $this->read_at->toDateTimeString() : "",
        ];
    }
}
