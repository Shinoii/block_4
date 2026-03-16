<?php
require_once __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/routes/web.php';

//  Задание 3: Контроллер (Controller)
//  Задача:
//  Создать UserController в controllers/, который обрабатывает запрос /users и загружает представление views/users.php.
//  Проверка:

//  http://localhost/users

// ✅ Отображается список пользователей