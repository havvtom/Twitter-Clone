<?php

namespace App\Http\Controllers\Api\Tweets;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Tweeet\TweetStoreRequest;
use App\Events\Tweets\TweetWasCreated;
use App\TweetMedia;
use App\Tweets\TweetType;

class TweetsController extends Controller
{
	public function __construct(){
		$this->middleware(['auth:sanctum'])->only(['store']);
	}

    public function store(TweetStoreRequest $request){

    	$tweet = Auth()->user()->tweets()->create(array_merge($request->only('body'), [
    			'type' => TweetType::TWEET]));

    	foreach($request->media as $id) {
    		$tweet->media()->save(TweetMedia::find($id));
    	}

    	broadcast(new TweetWasCreated($tweet));
    }
}
