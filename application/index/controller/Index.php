<?php

namespace app\index\controller;

use think\Db;
use  app\index\model\Cszd;

class Index
{
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }

    public function hi()
    {

//        $result = Db::table('company')
//            ->field(['Company_Id'=>'Id','Company_Daima'=>'Daima','Company_Name'=>'Name'])
//            ->order('Daima')
//            ->select();
        $result = Cszd::field('cszd_bh,cszd_mc,cszd_arg')->select();
        $rows = [];
        foreach ($result->order('cszd_bh')   as $item) {
            $rows[] = $item;
            print_r($item->visible(['' ])->toArray());
//            print_r($item->bh);
            echo '<br/>';
        }

        //var_dump($result->toArray());
        //return 'hi';

//        Db::startTrans();
//        try {
//            $cszd = new Cszd();
//            $cszd->bh='tt';
//            $cszd->cszd_mc='test_tt';
//            $cszd->cszd_arg = '测试233';
//            $cszd->save();
//            $cszd = new Cszd();
//            $cszd->bh = 'tf';
//            $cszd->cszd_mc = 'testtest';
//            $cszd->cszd_arg = '111';
//            $cszd->save();
//            Db::commit();
//        } catch (\Exception $e) {
//            Db::rollback();
//            //echo $e->getTraceAsString();
//            echo $e->getMessage();
//        }

//        Db::transaction(function (){
//            $cszd = new Cszd();
//            $cszd->bh='tt';
//            $cszd->mc='test_tt';
//            $cszd->arg = '测试233';
//            $cszd->save();
//
//            echo "Saved";
//        });


    }


}
