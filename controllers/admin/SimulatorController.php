<?php

namespace callmez\wechat\controllers\admin;

use callmez\wechat\components\WechatAdminController;

/**
 * 微信模拟器
 * @package app\controllers
 */
class SimulatorController extends WechatAdminController
{
    public $types = [
        'text' => [
            'label' => '文本',
            'target' => ['content']
        ],
        'image' => [
            'label' => '图片',
            'target' => ['pic_url']
        ],
        'location' => [
            'label' => '位置',
            'target' => ['location_x', 'location_y']
        ],
        'link' => [
            'label' => '链接',
            'target' => ['url']
        ],
        'event' => [
            'label' => '菜单',
            'target' => ['event_key']
        ],
        'subscribe' => [
            'label' => '关注'
        ],
        'unsubscribe' => [
            'label' => '取消关注'
        ],
        'other' => [
            'label' => '其他'
        ]
    ];
    public function actionIndex()
    {
        return $this->render('index');
    }

}
