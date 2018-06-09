<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/test', function(){
  return response()->json([
    'user' => [
      'first_name' => 'John',
      'last_name' => 'Sims'
    ]
  ]);
});
