<?php
namespace app\index\controller;

use \think\Request;
//use \think\View;
use \think\Controller;
use \app\index\model\Nbateam;

class Index extends Controller
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';
    }
    
    public function hello()
    {
    	$request = Request::instance();
    	echo "当前模块名称是：" . $request->module()."<br />";
    	echo "当前控制器名称是：" . $request->controller()."<br />";
    	echo "当前操作名称是：" . $request->action()."<br />";
    	echo '请求方法：' . $request->method() . '<br/>';
    	echo '资源类型：' . $request->type() . '<br/>';
    	echo '访问地址：' . $request->ip() . '<br/>';
    	echo '是否AJax请求：' . var_export($request->isAjax(), true) . '<br/>';
    	echo 'user-agent类型：' . $request->header('user-agent') . '<br/>';
    	return 'xum-hello'."<br />";
    }
    
    public function curd()
    {
    	$nbaTeam = new Nbateam();
    	$data = $nbaTeam->_get_team_info();
    	//var_dump($data);
    	$this->assign('xum','hello');
    	$this->assign('data',$data);
    	$target = "index/curd";
    	//echo $nbaTeam->getLastSql();
    	
/*     	$news = model(DB_NEWS_TAB);
    	// 模型对象赋值
    	$news->data([
    			DB_NEWS_ID => '9c15510439db8e218879aabc43fde91e',
    			DB_NEWS_TITLE => 'xum-title',
    			DB_NEWS_CONTENT => 'xyzxyzxyzxyzxyzxyzxyz'
    	]);
    	$news->save(); */
    	
    	return $this->fetch($target);
    	
    	//return $this->display($target,['xum'=>'xxx']);
    }
}
