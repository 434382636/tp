һ����֤����
	*'username' => 'unique:teacher',  //unique ��������Ǳ�����һ���ж��û�������Ʒ�Ƿ����
	1��������֤
	<?php
	...
	use think\Loader ; 
	...
	class ...{
		function ...{
			$validate = Loader::validate('Teacher');  //  Teacher.php �ļ�λ�� application/common/validate
			if(!$validate->check($data)){  
				$this->error($validate->getError(),url('index/login')); 
			} 
		}
		
	}
	
	?>
	
��������js��css�ļ�
	1����������
		{load href="/static/js/common.js,/static/css/style.css" /}
	2����������
		{js href="/static/js/common.js" /}
		{css href="/static/css/style.css" /} 