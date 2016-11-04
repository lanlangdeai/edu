<?php
namespace app\admin\validate;

use \think\Validate;

class User extends Validate
{
    protected $rule = [
        'username' => 'require|length:5,20',
        'password' => 'require|length:5,25|confirm:repassword',

    ];

    protected $message = [
        'username.require' => '请输入用户名',
        'username.length' => '用户名长度为5~20位',
        'password.require' => '请输入密码',
        'password.length' => '密码长度为5~25位',
        'password.confirm' => '两次密码不一致',
        '',
    ];

}
