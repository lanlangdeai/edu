<?php

namespace app\admin\model;

use think\Model;

class Video extends Model
{
    
    /**
     * Video的关联
     * @return \think\model\Relation
     */
    public function cat()
    {
        //关联的表和外键名【默认会是cate_id,我们可以自定义cateid】
        return $this->belongsTo('cat', 'tid');

    }

    /**
     * USER
     * 关联关系
     * @return \think\model\Relation
     */
    public function user()
    {
        //关联的表和外键名【默认会是cate_id,我们可以自定义cateid】
        return $this->belongsTo('User', 'uid');

    }
 
    /**
     * 获取器 获取视频状态信息
     * @param $value
     * @return mixed
     */
    public function getStatusAttr($value)
    {
        $status = [2 => '上线', 1 => '未上线'];

        return $status[$value];
    }
 
     //
    
             

    
    
    
    
    
}
