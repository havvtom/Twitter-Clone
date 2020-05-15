<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use App\User;
use App\Tweet;
use App\Like;
use App\TweetMedia;
use App\Entity;
use App\Tweets\Entities\EntityExtractor;

class Tweet extends Model
{
	protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::created( function (Tweet $tweet) {
            $tweet->entities()->createMany(
                (new EntityExtractor($tweet->body))->getHashtagEntities()
            );
        });
    }

    public function user () {

    	return $this->belongsTo(User::class);
    }

    public function entities()
    {
        return $this->hasMany(Entity::class);
    }

    public function originalTweet () {

    	return $this->hasOne(Tweet::class, 'id', 'original_tweet_id');
    }

    public function likes () {

    	return $this->hasMany(Like::class);
    }

    public function retweets () {

        return $this->hasMany(Tweet::class, 'original_tweet_id');
    }

    public function retweetedTweet () {
        
        return $this->hasOne(Tweet::class, 'original_tweet_id', 'id');
    }

    public function media ()
    {
        return $this->hasMany(TweetMedia::class);
    }

    public function replies ()
    {
        return $this->hasMany(Tweet::class, 'parent_id');
    }

    public function scopeParent (Builder $query)
    {
        return $query->whereNull('parent_id');
    }
}
