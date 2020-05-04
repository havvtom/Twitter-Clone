<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use App\Media\Media;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class TweetMedia extends Model implements HasMedia
{
	use HasMediaTrait;

    public function baseMedia()
    {
    	return $this->belongsTo(Media::class, 'media_id');
    }
}
