<?php

require_once __DIR__ . '/Entity/Todolist.php';
require_once __DIR__ . '/Helper/InputHelper.php';
require_once __DIR__ . '/Repository/TodolistRepository.php';
require_once __DIR__ . '/Service/TodolistService.php';
require_once __DIR__ . '/View/TodolistView.php';

use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

echo "Aplikasi TodoList" . PHP_EOL;


$todolistrepository = new TodolistRepositoryImpl();
$todolistService = new TodolistServiceImpl($todolistrepository);
$todolistview = new TodolistView($todolistService);

$todolistview->showTodolist();

