<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-11-01
 * Time: 19:57
 * Descr:联动查询
 */
namespace app\admin\controller;
use app\admin\model\Cat as CatModel;
use think\console\command\make\Controller;

class jsonn extends Controller
{
    public function add()
    {
        $result = array();
        $cat =$_POST['type'];
        $result = db('cat')->where(array('pid'=> $cat))->field('id,name')->select();
       // $this->ajaxReturn($result,"JSON");
        echo json_encode($result);
        
    }
}



