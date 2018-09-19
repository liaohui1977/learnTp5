<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-12
 * Time: 15:16
 */

namespace app\base\model;
use think\Model;

class AdminUser extends  Model
{
    protected $table="my_admin_user";
    //protected $name="adminUser";

    public function getInfoByOpenid($open_id){
        //return $this->where('weixin_openid',$open_id)->find();
        return $this->where('weixin_openid',$open_id)->cache($this->table.'_'.$open_id,600)->find();
    }

    public function getDepartmentIdAttr($value,$data){
        //return $this->belongsTo('AdminDepartment','department_id','id')->where('id',$value)->value('name');
        return $this->belongsTo('AdminDepartment','DepartmentId','id')->where('id',$value)->value('name');

    }
}