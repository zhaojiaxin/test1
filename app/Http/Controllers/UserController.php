<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

	//显示所有用户的信息列表
    public function index(){
		echo '显示所有用户的信息列表';
	}
	
	//添加用户页面
	public function add(Request $request){
		dd($request);
		echo '添加用户表单';
	}
	
	//添加用户操作
	public function insert(){
		echo '添加用户操作';
	}
	
	//更新用户页面
	public function modi(){
		echo '更新用户页面';
	}
	
	//更新用户操作
	public function update(){
		echo '更新用户操作';
	}
	
	//删除用户页面
	public function drop(){
		echo '删除用户页面';
	}
	
	//删除用户操作
	public function delete(){
		echo '删除用户操作';
	}
	
	//查询指定用户
	function find($id,$name){
		echo '查询指定用户:'.$id.'name:'.$name;
	}
	
	//起了别名的方法
	function demo(){
		echo 'user';
	}
	
	//跳转的方法
	function tiao(){
		return redirect()->route('demo');
	}
	
}
