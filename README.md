yii2-notification
===================
yii2-notification модуль для уведомлений(в разработке). 

Примиер использования: вывод количества заказов, новых пользователей, новых записей из форм(ваши пожелания, ваш отзыв).

Установка
---------------------------------
Выполнить команду

```
php composer.phar require --prefer-dist deadly299/yii2-notification "@dev"
```

Или добавить в composer.json

```
"deadly299/yii2-notification": "@dev"
```

И выполнить

```
php composer update
```

Миграция

```
php yii migrate --migrationPath=vendor/deadly299/yii2-notification/migrations
```

Подключение и настройка
---------------------------------
В конфигурационный файл приложения добавить модуль и компонент.

```php
    'modules' => [
        'notification' => [
           'class' => 'deadly299\notification\Module',
        ],
        //...
    ]
    
    'commponents' => [
        'notification' => [
            'class' => 'deadly299\notification\Notification',
        ],
        //...
    ],
```
Использование
---------------------------------
Сетим уведомление через коммпонет, передаем модель:
```
`php
    Yii::$app->notification->setNotice($model);
```

Проверка на наличие уведомлений:
```
`php
    Yii::$app->notification->hasNotice($model);
```

Удалить уведомление по ID. Передам только модель:
```
`php
    Yii::$app->notification->flushById($model);
```

Удалить все уведомления конкретной сущьности. Передам имя модели:
```
`php
    Yii::$app->notification->flushByModel($modelName);
```

Модели инициирующие уведомление:
```
`php
    Yii::$app->notification->getNotice($model);
```

Количество уведомлений:
```
`php
    Yii::$app->notification->getCountNotice($model);
```