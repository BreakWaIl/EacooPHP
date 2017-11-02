<?php 
// 积分模型
// +----------------------------------------------------------------------
// | Copyright (c) 2016-2017 http://www.eacoo123.com, All rights reserved.         
// +----------------------------------------------------------------------
// | [EacooPHP] 并不是自由软件,可免费使用,未经许可不能去掉EacooPHP相关版权。
// | 禁止在EacooPHP整体或任何部分基础上发展任何派生、修改或第三方版本用于重新分发
// +----------------------------------------------------------------------
// | Author:  心云间、凝听 <981248356@qq.com>
// +----------------------------------------------------------------------
namespace app\common\model;
use think\Model;

/**
 * 积分模型
 * @author 心云间、凝听 <981248356@qq.com>
 */
class Score extends Model {
    
    protected $updateTime = false;
    protected $type = [
        // 设置birthday为时间戳类型（整型）
        'create_time' => 'timestamp:Y-m-d H:i:s',
        ];
    
}
