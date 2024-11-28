<?php

namespace app\components\widgets;

use yii\base\Widget;

class SidebarMenu extends Widget
{
    public $items = [];

    public function run()
    {
        return $this->render('sidebar-menu', ['items' => $this->items]);
    }
}