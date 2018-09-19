<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018-09-12
 * Time: 15:15
 */

namespace app\api\controller;
use think\Controller;
use think\Model;

class AdminUser extends Controller
{
    public function adminUserInfo($id=1){
        //return model("base/adminUser")->find($id);
        $open_id='oO059v39zsst76IkuiYV3yMvc4Sw';
        $user_info=model('base/AdminUser')->getInfoByOpenid($open_id);
        return $user_info->getdata();
    }

    public function adminUserInfoWithDepartment($id=1){
        $open_id='oO059v39zsst76IkuiYV3yMvc4Sw';
        $user_info=model('base/AdminUser')->getInfoByOpenid($open_id);
        return $user_info->toArray();
    }


}