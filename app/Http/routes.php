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
    return view('nidaye');
});


Route::get('/wo', function () {
    return view('welcome');
});

/*

//读写相关配置(操作config目录中的相关配置)
Route::get('/config',function(){
	/*
	//读取配置文件使用Config类中的get方法即可
	echo Config::get('app.timezone');
	echo Config::get('app.locale');
	echo Config::get('app.cipher');
	echo Config::get('app.key');
	//临时设置配置文件
	Config::set('app.timezone','Japan');
	echo Config::get('app.timezone');
	
});

//读取环境配置(操作.env文件)
Route::get('/env',function(){
	echo env('APP_KEY');
	echo env('DB_CONNECTION');
});
*/

/*

//设置get路由
Route::get('/getRoute',function(){
	echo '这是一个get路由!i get it!';
});


//设置post路由
Route::post('/postRoute',function(){
	echo '这是一个POST路由,不过你看到我可不容易!';
});

//设置get表单
Route::get('/getForm',function(){
	echo '<form method="post" action="/postRoute">';
	//添加令牌防止跨站攻击的
	echo csrf_field();
	echo '<button type="submit">访问POST路由</button>';
	echo '</form>';
});


//带有参数的路由
//{name} 路由占位符
Route::get('/params/{name}/{sex}',function($name,$sex){
	echo $name;
	echo $sex;
});

//限定参数类型的路由
Route::get('/limitparams/{id}/{age}',function($id,$age){
	echo '您传入的ID为'.$id;
	echo '您传入的age为'.$age;
})->where('id','\d+')->where('age','\d+');


//多个参数的路由(路由格式随意即可没必要飞得使用/分割)
Route::get('/user-insert-{id}-{name}-{age}',function($id,$name,$age){
	echo 'id:'.$id;
	echo 'name:'.$name;
	echo 'age:'.$age;
});


//路由别名操作
Route::get('/user/action/delete/{id}',['as'=>'deleteuser',function($id){
	echo '您删除的用户id为'.$id;
}]);

//跳转到具有别名的路由地址
Route::get('/redirect',function(){
	//实现原有路由跳转操作
	//return redirect('/user/action/delete/250');
	//使用别名路由进行跳转操作
	return redirect()->route('deleteuser',['id'=>350]);
});


//CSRF攻击防御
Route::get('csrfForm',function(){
	return view('csrfForm');
});


//ajax访问
Route::get('/ajaxForm',function(){
	return view('ajaxForm');
});


//ajax返回结果
Route::post('ajaxResult',function(){
	echo 'ajaxPOST请求成功!';
});


//路由组(将路由进行分组操作)

//前台路由组
Route::group(['prefix'=>'home'],function(){
	//此处全是路由
	Route::get('/index',function(){
		echo '网站首页';
	});
	
	//为单个路由添加中间件的方法
	Route::get('/userInfo',function(){
		echo '用户信息中心';
	})->middleware('login');
	
	Route::get('/goods',function(){
		echo '商品列表';
	});
	
	Route::get('/goodsInfo',function(){
		echo '商品详情';
	});
});


//后台路由组
//为路由组添加中间件的方法
Route::group(['prefix'=>'admin','middleware'=>'login'],function(){
	Route::get('/userManage',function(){
		echo '后台用户管理页面';
	});
	
	Route::get('/goodsManage',function(){
		echo '后台商品管理页面';
	});
	
	Route::get('/orderManage',function(){
		echo '后台订单管理页面';
	});
	
	Route::get('/articleManage',function(){
		echo '后台文章管理页面';
	});
	
	//404页面提示
	Route::get('/niubi',function(){
		abort('404');
	});
});
*/


//使用路由访问类中的方法
/*
//普通路由访问
Route::get('/userList','UserController@index');
Route::get('/userAdd','UserController@add');
Route::get('/userInsert','UserController@insert');
*/

/*
//带有参数的路由访问
Route::get('/user/find/{uid}/{name}','UserController@find');
*/
/*
//带有别名的路由操作
Route::get('/user/tiao','UserController@tiao');
//使用别名时,路由中的回调函数(控制器需要使用uses=>控制器中的方法)
Route::get('/user/demo',['as'=>'demo','uses'=>'UserController@demo']);
*/

/*
//添加中间件(两种方式均可)
//Route::get('/user/add','UserController@add')->middleware('login');
Route::get('/user/add',['middleware'=>'login','uses'=>'UserController@add']);
*/

/*
//隐式控制器(只制定类名不指定方法名的路由)
Route::controller('/goods','GoodsController');
*/

/*
//用于测试所有方法中获取请求对象的路由
Route::get('/user/add','UserController@add');
*/

//请求对象相关的路由
Route::get('/request/index/{id}','RequestController@index');


