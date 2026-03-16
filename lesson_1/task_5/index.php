<?php
require_once __DIR__ . '/vendor/autoload.php';

require __DIR__ . '/routes/web.php';

//  Задание 5: Внедрение зависимостей (Dependency Injection)
//  Задача:
//  Реализовать UserService через внедрение зависимости UserRepository (работа с БД). Контроллер должен использовать только UserService.
//  Проверка:

//  $service = new UserService(new UserRepository());
//  print_r($service->getUsers());

// ✅ Данные загружаются через DI