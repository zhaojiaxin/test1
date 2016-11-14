<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RequestController extends Controller
{
    public function index(Request $r,$id){
		//在类中的任意方法中添加参数即可获取请求对象
		/*
			通过路由的参数由方法的形参接收,(get传参)
			不通过路由的参数则有Request对象接收(post都有该对象接收)
			
			第一个参数为Request对象
			其余参数则是路由中的参数
		*/
		//dd($r);
		
		//请求对象中包含的内容
		//echo $r->path();
		
		//检测是否是制定路径下的内容
		//dd($r->is('request/*'));
		
		//获取整个URL
		//dd($r->url());
		
		//获取当前的请求方法
		//dd($r->method());
		
		//检测当前是否是制定的请求方法
		//dd($r->isMethod('POST'));
		
		//获取指定类型的参数
		
		echo \Input::get('name');
		
		//获取指定名称的参数
		echo $r->input('sex');
		
		echo $id;
	}
}
