<?php 
namespace Home\Model;
use Think\Model;
class LoginModel extends Model{
	protected $_validate = array(
			array('user_name','number','必须为数字')
		);
}
 ?>
