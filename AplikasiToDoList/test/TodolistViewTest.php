<?php

require_once __DIR__ . '/../Entity/Todolist.php';
require_once __DIR__ . '/../Repository/TodolistRepository.php';
require_once __DIR__ . '/../Service/TodolistService.php';
require_once __DIR__ . '/../View/TodolistView.php';
require_once __DIR__ . '/../Helper/InputHelper.php';


use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist(): void
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistrepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Databsase");

    $todolistview->showTodolist();
}

function testViewAddTodolist(): void
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistrepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistview->addTodolist();

    $todolistService->showTodolist();

    $todolistview->addTodolist();

    $todolistService->showTodolist();

}

function testViewRemoveTodolist(): void
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistrepository);
    $todolistview = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    $todolistview->removeTodolist();

    $todolistService->showTodolist();

    $todolistview->removeTodolist();

    $todolistService->showTodolist();

}

testViewRemoveTodolist();