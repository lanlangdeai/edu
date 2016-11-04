<?php
/**
 * Created by PhpStorm.
 * User: Chen
 * Date: 2016-10-31
 * Time: 20:25
 * 视频管理
 */

namespace app\admin\controller;

use app\admin\model\Video as VideoModel;

use app\admin\model\Cat as CatModel;

class Video extends Base
{
    /**
     * 列出视频
     * @return [type] [description]
     */
    public function index()
    {
        //echo 222;die;
      //  $video = new VideoModel;
        $video = VideoModel::paginate(10);
       $page = $video->render();
        $this->assign('result', $video);
       $this->assign('page', $page);
        return $this->fetch();
    }

    /**
     * 加载添加视图
     */
    public function add()
    {
        //问题：无限级联动分类？
        
        $cate = new CatModel();
        $result = $cate->where('pid','=',0)
                  ->select();
        //dump($result);die;
        $this->assign('result',$result);
        return $this->fetch();

    }
   
    /**
     * 更新操作
     */
    public function update()
    {
        echo '这是更新方法';
    }
    /**
     * 搜索
     */
    public  function search()
    {
        //视频名搜索
        echo '这是视频名搜索';
        return $this->fetch('video/index');
         
    }
}
