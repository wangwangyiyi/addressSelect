<?php

namespace app\index\controller;
use think\Db;

/**
 * Date: 2018.9.25
 *@param 省市区三级联动类
 *
 *
 */



class Personalcenter extends \think\Controller
{
   
	public function select()
	{

	return view();

	}

	public function privance()
	{
	$list = Db::name('province')->select();
	return $list; 
	}

	//读取市
	public function city($father)
	{
	if ($father) {
	$where = "father=$father";
	} else {
	$where = "father=110000";
	}
	$list = Db::name('city')->where($where)->select();
	return $list;
	}

	//读取区
	public function area($father)
	{
	if ($father) {
  	$where = "father=$father";
	} else {
	$where = "father=110100";
	}
	$list = Db::name('area')->where($where)->select();
	return $list;
	}
//省市区三级联动结束---------------

	

}