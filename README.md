yii2-notification
===================
yii2-notification send notifications

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist deadly299/yii2-notification "*"
```

or add

```
"deadly299/yii2-notification": "*"
```

php yii migrate --migrationPath=vendor/deadly299/yii2-notification/migrations


to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :
  Set notice:
    Yii::$app->notification->setNotice($model);
  flushNotice: 
    Yii::$app->notification->flush($model);
<?= \deadly299\notification\widgets\NoticeInfo::widget(['model' => Order::className()]) ?>
