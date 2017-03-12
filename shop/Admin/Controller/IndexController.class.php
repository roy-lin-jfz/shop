<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{
    public function index()
    {
        if (cookie('adminname'))
            $this->display();
        else
            $this->redirect('/Admin/admin/login', 0);
    }
}
