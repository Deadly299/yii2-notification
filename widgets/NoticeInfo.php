<?php

namespace deadly299\notification\widgets;

use yii;
use deadly299\notification\assets\WidgetAsset;

class NoticeInfo extends \yii\base\Widget
{
    public $model = null;
    public $view = null;

    private $countNotifications = null;

    public function init()
    {
        if ($this->model) {
            $this->countNotifications = Yii::$app->notification->getCountNotice($this->model);
        }
        WidgetAsset::register($this->getView());

        return true;
    }

    public function run()
    {
        if ($this->countNotifications) {
            return yii\helpers\Html::tag('span', $this->countNotifications, ['class' => 'label label-warning']);
        }
    }
}