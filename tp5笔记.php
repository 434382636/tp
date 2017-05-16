一、验证规则
	*'username' => 'unique:teacher',  //unique 后面跟的是表名，一般判断用户名、商品是否存在
	1、批量验证
	<?php
	...
	use think\Loader ; 
	...
	class ...{
		function ...{
			$validate = Loader::validate('Teacher');  //  Teacher.php 文件位于 application/common/validate
			if(!$validate->check($data)){  
				$this->error($validate->getError(),url('index/login')); 
			} 
		}
		
	}
	
	?>
	
二、引入js、css文件
	1、批量引入
		{load href="/static/js/common.js,/static/css/style.css" /}
	2、单个引入
		{js href="/static/js/common.js" /}
		{css href="/static/css/style.css" /} 