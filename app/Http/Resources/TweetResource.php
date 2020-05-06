<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\UserResource;
use App\Http\Resources\TweetResource;
use App\Http\Resources\MediaCollection;

class TweetResource extends JsonResource
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

            'id' => $this->id,
            'body' => $this->body,
            'type' => $this->type,
            'likes_count' => $this->likes->count(),
            'retweets_count'=> $this->retweets->count(),
            'replies_count' => $this->replies->count(),
            'original_tweet' => new TweetResource($this->originalTweet),
            'user' => new UserResource($this->user),
            'media' => new MediaCollection($this->media), 
            'created_at' => $this->created_at->timestamp
        ];
    }
}
