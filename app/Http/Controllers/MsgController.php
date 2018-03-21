<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/10/1
 * Time: 16:39
 */

namespace   App\Http\Controllers;
use App\Http\Controllers\Controller;
use DB;

class MsgController extends  Controller{
    public function test(){
        $data = ['title'=>'布尔教育','content'=>'laravel'];
        return view('test',$data);
    }
    public function  add(){
        $data = ['orderID'=>'17100112345259','status'=>3,'ip'=>'192.168.100.104','addTime'=>time(),'updateTime'=>time()];
        $result = DB::table("award")->insert($data);
        echo $result;
        if ($result){
            echo "插入成功";
        }else{
            echo "操作插入失败";
        }
    }

    public function add1(){
        $data = ['orderID'=>'1710011235259','status'=>5,'ip'=>'192.168.100.105','addTime'=>time(),'updateTime'=>time()];
        $res = DB::table("award")->insertGetId($data);
        if ($res){
            var_dump($res);
        }else{
            echo "faild";
        }
    }

    public function up(){
        $rs = DB::table("award")->where("id","=",19)->update(['ip'=>'172.168.73.28']);
        return $rs ? 'ok':'faild';
    }

    public function delt(){
        $rs = DB::table("award")->where("ID",10)->delete();
        $str = $rs ? 'ok' :'faild';
        echo $str;
    }

    public function query(){
//        $result = DB::table("award")->get();
//        $result = DB::table("award")->where("ID",">",5)->get();
//        $result = DB::table("award")->select("ID","status")->get();
        $result = DB::table("award")->where("ID",">","5")->first();
        var_dump($result);

    }

}
