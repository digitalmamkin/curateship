<?php

// enable shortcode globally
Shortcode::enable();

$middleware = 'auth';
if (config('settings.need_verify_email') === true) {
  $middleware = ['auth','verified'];
}

Auth::routes(['verify' => true]);



// Site 2

Route::get('/',function(){
  return view('index');
});

Route::get('/',function(){
  return view('templates.layouts.blog');
});

Route::get('/site2/login',function(){
  return view('components.auth.login');
});

Route::get('/site2/register',function(){
  return view('components.auth.register');
});

Route::get('/site2/passreset',function(){
  return view('components.auth.pass-reset');
});

// Route::post('front/comment/reply', );

// Editor JS

Route::group(['middleware' => $middleware], function(){
  Route::post('editorjs/upload-image', [
      'as'   => 'editorjs.upload-image',
      'uses' => 'EditorjsController@uploadImage'
  ]);
});

Route::get('post/{slug}', [
  'as'   => 'single-post-view',
  'uses' => '\Modules\Users\Http\Controllers\SingleViewController@singlePostView'
]);

Route::get('post/comment/reply/{id}', [
  'as'   => 'post-comment-reply',
  'uses' => '\Modules\Users\Http\Controllers\SingleViewController@reply'
]);

Route::post('post/comment/reply-save/{id}', [
  'as'   => 'post-comment-reply',
  'uses' => '\Modules\Users\Http\Controllers\SingleViewController@saveReply'
]);

Route::post('post/comment/save', [
  'as'   => 'post-comment-save',
  'uses' => '\Modules\Users\Http\Controllers\SingleViewController@saveComment'
]);

Route::get('page/{slug}', [
  'as'   => 'single-page-view',
  'uses' => '\Modules\Users\Http\Controllers\SingleViewController@singlePageView'
]);

Route::group([
  'prefix' => '{theme}/{prefix}',
  'where'  => ['theme' => 'site1|site2', 'prefix' => 'page|post']
], function(){
  Route::get('{slug}', [
    'as'   => 'theme.pages.post',
    'uses' => '\Modules\Users\Http\Controllers\SingleViewController@singleViewbyTheme'
  ]);
});
