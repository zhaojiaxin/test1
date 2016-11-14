<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    //商品列表页面
	public function getIndex(){
		echo '商品列表页面';
	}
	
	//添加商品页面
	public function getAdd(){
		echo '添加商品页面';
		echo '<form method="post" action="/goods/insert">';
		echo csrf_field();
		echo '<input type="text" name="id" value="" />';
		echo '<button type="submit">插入用户操作</button>';
		echo '</form>';
	}
	
	//插入商品操作
	public function postInsert(Request $request){
		//dd($request);
		
		echo '插入商品操作'.$request->input('id');
	}
}
