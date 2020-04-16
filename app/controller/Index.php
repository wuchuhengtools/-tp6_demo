<?php
namespace app\controller;

use app\BaseController;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
        View::assign([
            'str' => 'string',// 字符串
            'arr' => ["a" => 1, 'b' => 2], // 数组
            'obj' => (object)["a" => 1, 'b' => 2]
        ]);
        return View::fetch('index');
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
