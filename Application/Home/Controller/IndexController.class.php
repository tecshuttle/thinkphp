<?php
namespace Home\Controller;

use Think\Controller;
use Home\Model\SessionModel;

class IndexController extends Controller
{
    public function index()
    {
        $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>', 'utf-8');
    }

    public function db_test()
    {
        $session = new SessionModel();
        $list = $session->select();

        echo session_id();
        //phpinfo();
        //echo $_SESSION['username'];
        //echo session('username');
        dump($_SESSION);

        //dump($list);
    }

    public function session()
    {
        $_SESSION['username'] = 'Tom';
        $_SESSION['old'] = '37';

        echo 'Something wrote in SESSION.';
    }

    public function set_cookie()
    {
        $sid = $_GET['sid'];
        setcookie('laravel_session', $sid, time() + 3600, '/');
        echo 'You are logged';
    }

    public function login()
    {
        header('Location://laravel.example.com/get_session_id?redirect=thinkphp.greatwall.com');
    }
}