<?php

namespace App\Http\Controllers;

use App\Award;
use Illuminate\Http\Request;
use Illuminate \Support\Facades\Cache;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class AwardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Award::where('ID','>',15)->skip(2)->take(1)->get();
        return view('award.index',['data'=>$result]);
    }

    public function del($id)
    {
//        DB::table("award")->where("ID",$id)->delete();
//        Award::where('ID',$id)->delete();


//        print_r($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function up($id){
//        $arr = Award::find($id);
//        print_r($arr);
        $arr = DB::table("award")->where("id",$id)->first();
        return view("Award.up",['data'=>$arr]);
    }

    public function addPost($id){
        echo $id;
        $award = Award::find($id);
//        print_r($award);
//        $award->status = $_POST['status'];
//        $award->save();
        $data = array();
        $data['status'] = $_POST['status'];
        DB::table("award")->where("ID",$id)->update($data);
    }

    public function add(){
        if (!empty($_POST)){
            $award = new \App\Award();
            $award->orderID = $_POST['orderID'];
            $award->status = $_POST['status'];
            if ($award->save()){
                return redirect('award/index');
            }
        }
        return view("award.add");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function testCache(){
//        Cache::put("key1","key2",2);
//        Cache::add("key1","key1233333",10);
//        Cache::forever("name","edwin");
        echo Cache::get("name");
        echo "<br/>";
        echo Cache::get("key1");
        $v = Cache::forget('key1');
        var_dump($v);
    }


}
