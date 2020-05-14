<?php

namespace App\Http\Controllers\Api\Timeline;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\TweetCollection;

class TimelineController extends Controller
{
    public function __construct(){
    	$this->middleware(['auth:sanctum']);
    }

    public function index(Request $request){

    	$tweets = $request->user()
	    	->tweetsFromFollowing()
            // ->parent()
	    	->with(['user',
                    'likes', 
                    'retweets',
                    'replies',
                    'media.baseMedia',
                    'originalTweet.user',
                    'originalTweet.likes', 
                    'originalTweet.retweets',
                    'originalTweet.media.baseMedia'
                ])
	    	->latest()
	    	->paginate(9);

    	return new TweetCollection($tweets);
    	
    }
}
