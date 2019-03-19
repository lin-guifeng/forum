<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        return $this->fetch();
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function phpinfo(){
        echo phpinfo();
    }
}
