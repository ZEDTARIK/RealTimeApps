<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReplyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'ReplyId' => $this->id,
            'user' => $this->user->name,
            'questionId' => $this->question_id,
            'Reply' => $this->body,
            'Created_at' => $this->created_at->diffForHumans()
        ];
    }
}
