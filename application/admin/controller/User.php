<?php
namespace app\admin\controller;

use app\admin\model\User as UserModel;
use \think\Loader;

class User extends Base
{
    //展示用户列表
    public function index()
    {
        //echo 111;die;
        $user = new UserModel();
        $totalCount = $user->count();
        //分页
        $list = $user->paginate(10);
        $page = $list->render();

        $this->assign('list', $list);
        $this->assign('page', $page);

        if (input('post.')) {
            // dump($_POST);die;
            $currentPage = input('post.pageNum');
            $numPerPage = input('post.numPerPage');
            //$order = input('post._order');
            //$sort = input('post._sort');
            $this->assign('currentPage', $currentPage);
            $this->assign('numPerPage', $numPerPage);
            //$this->assign('order', $order);
            //$this->assign('sort', $sort);
        } else {
            $this->assign('currentPage', 1);
            $this->assign('numPerPage', 10);
            $this->assign('order', 1);
            $this->assign('sort', 1);
        }

        $this->assign('totalCount', $totalCount);
        //$this->assign('numPerPage',10);

        //empty($currentPage) ? 1:$currentPage;
        return $this->fetch();
    }

    public function add()
    {

        return view();
    }

    public function check()
    {

        $validate = Loader::validate('user');

        if (!$validate->check(input('post.'))) {
            dump($validate->getError());
        }
        //dump(input('post.'));die;
        $user = new UserModel(input('post.'));
        $result = $user->allowField(true)->save();
        if ($result) {
            $this->success('添加成功', 'index/index');
        } else {
            $this->error('添加失败');
        }

    }

    public function edit()
    {
        return view();
    }

}
