<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
/* Route::get("/",function(){
    return 'hello';
}); */
Route::get("/hello",function(){
    return 'ok';
});

Route::match(['get','post'],'admin/login',function(){
    return 'login';
});

Route::any('admin/register',function(){
    return 'register';
});

/*Route::get("user/{id}",function($id){
   return 'user'.$id;
});*/

//参数限制
/*Route::get('user/{name}',function($name){
    return 'user'.$name;

})->where('name','[A-Za-z]*');*/

/*Route::get("user/{id}/{name}",function($id,$name){
    return 'user_'.$id.'_'.$name;
})->where(['id'=>'[0-9]*','name'=>'[a-z]+']);

Route::get('test','Admin\TestController@test');
   */
Route::get("test",'MsgController@add');
Route::get("testgetid",'MsgController@add1');
Route::get("up",'MsgController@up');
Route::get("del",'MsgController@delt');
Route::get("query",'MsgController@query');
Route::get("admin/index",'MsgController@add');

Route::get("msg/index","MessageController@index");
Route::get("msg/add","MessageController@add");
Route::post("msg/add","MessageController@addPost");
Route::post("msg/del/{id}","MessageController@del");
Route::match(['get','post'],'msg/up/{id}','MessageController@up');
Route::get("award/index","AwardController@index");
Route::get("award/del/{id}","AwardController@del");
Route::get("award/up/{id}","AwardController@up");
Route::post("award/addPost/{id}","AwardController@addPost");
Route::match(['get','post'],"award/add","AwardController@add");
Route::get("award/testCache","AwardController@testCache");