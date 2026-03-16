<?php
require_once __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/routes/web.php';

//  Задание 1: Создание структуры MVC
//  Задача:
//  Организовать проект по принципу MVC с папками:
//  models/ – модели данных.
//  views/ – файлы представлений.
//  controllers/ – обработчики запросов.
//  services/ – бизнес-логика.
//  routes/ – маршруты.

//  Проверка:

//  http://localhost/users
// ✅ Должен загружаться список пользователей через контроллер