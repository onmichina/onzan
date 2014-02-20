<?php
// .-----------------------------------------------------------------------------------
// |  Software: [ZAN framework]
// |   Version: 2014.1
// |      Site: http://www.zancms.com
// |-----------------------------------------------------------------------------------
// |    Author: 赞生 <onmichina@gmail.com>
// | Copyright (c) 2012-2014, http://www.zan3.com. All Rights Reserved.
// |-----------------------------------------------------------------------------------
/**
 * web is very nice
 * site www.zan3.com
 * 赞CMS，一个简单的cms
 * @package zan3
 * @author zansheng <onmichina@gmail.com>
 * @time 2014年2月20日 15:30:35
 */
// |-----------------------------------------------------------------------------------
class NewsControl extends Control{
	function show(){
		$db=M("news");
		//分页查询总显示数
		$count= $db->count();
		//分页对象
		$page= new Page($count,2);
		$this->assign("page",$page->show());
			
		$data=$db->where($page->limit())->all();
		 // p($data);
		$this->assign("news",$data);//分配到模版
		$this->display();
	}
	//添加方法
	function add(){
		p($_POST);//打印一下输出
		if(IS_POST){
			$db=M("news");
			if($db->add()){
				$this->success("OK",'show');
			}else{
				$this->error("is not");
			}
		}else{
			$this->display();
		}
	}
}
?>