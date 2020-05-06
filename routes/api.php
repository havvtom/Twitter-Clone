<?php

Route::get('/timeline', 'Api\Timeline\TimelineController@index');

Route::post('/tweets', 'Api\Tweets\TweetsController@store');

Route::post('/tweets/{tweet}/likes', 'Api\Tweets\TweetLikeController@store');
Route::delete('/tweets/{tweet}/likes', 'Api\Tweets\TweetLikeController@destroy');

Route::post('/tweets/{tweet}/retweet', 'Api\Tweets\TweetRetweetController@store');
Route::delete('tweets/{tweet}/retweet', 'Api\Tweets\TweetRetweetController@destroy');

Route::post('tweets/{tweet}/quotes', 'Api\Tweets\TweetQuoteController@store');

Route::get('media/types', 'Api\Media\MediaTypesController@index');
Route::post('media', 'Api\Media\MediaController@store');

