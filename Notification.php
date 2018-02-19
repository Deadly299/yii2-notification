<?php
namespace deadly299\notification;

use Yii;
use yii\base\Component;
use deadly299\notification\models\Notification as NotificationModel;

class Notification extends Component
{
    public function getNotice($modelName)
    {
        return $this->findModel($modelName)->all();
    }

    public function setNotice($model)
    {
        $this->loadModel($model)->save();
    }

    public function getCountNotice($modelName)
    {
        return $this->findModel($modelName)->count();
    }

    public function hasNotice($model)
    {
        return $this->findModel($model::className())
                    ->andWhere(['item_id' => $model->id])
                    ->exists();
    }

    public function flushById($model)
    {
        $model = $this->findModel($model::className())
                    ->andWhere(['item_id' => $model->id])
                    ->one();

        if($model) {
            $model->delete();
        }
    }

    public function flushByModel($modelName)
    {
        $models = $this->findModel($modelName)->all();
        foreach ($models as $model) {
            $model->delete();
        }
    }

    public function findModel($modelName)
    {
        $shortName = Yii::$app->getModule('notification')->getShortClass($modelName);

        return NotificationModel::find()->where(['model_name' => $shortName]);
    }

    private function loadModel($model, $recipient = null)
    {
        $shortName = Yii::$app->getModule('notification')->getShortClass($model);

        return Yii::createObject([
            'class' => NotificationModel::className(),
            'model_name' => $shortName,
            'item_id' => $model->id,
            'user_send' => Yii::$app->user->id,
            'user_recipient' => $recipient,
        ]);
    }

}