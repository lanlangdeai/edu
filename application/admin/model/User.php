<?php

namespace app\admin\model;

use \think\Model;

class User extends Model
{
    /**
     * 密码自动加密
     * @Author   mazhen
     * @Datetime 2016-10-30 21:50
     * @param    [type]  $value [description]
     */
    public function setPasswordAttr($value)
    {
        return md5($value);
    }

}
