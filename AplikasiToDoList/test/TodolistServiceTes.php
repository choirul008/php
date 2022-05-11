<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;
use Entity\Todolist;

function testShowTodolist(): void 
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistrepository->todolist[1] = new Todolist("Belajar PHP");
    $todolistrepository->todolist[2] = new Todolist("Belajar PHP OOP");
    $todolistrepository->todolist[3] = new Todolist("Belajar PHP Database");

    $todolistService = new TodolistServiceImpl($todolistrepository);

    $todolistService->showTodolist();
}

function testAddtodolist(): void 
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistrepository);
    
    $todolistService->addtodolist("Belajar PHP");
    $todolistService->addtodolist("Belajar PHP OOP");
    $todolistService->addtodolist("Belajar PHP Database");
   
    $todolistService->showTodolist();
}

function testRemovetodolist(): void 
{

    $todolistrepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistrepository);
    
    $todolistService->addtodolist("Belajar PHP");
    $todolistService->addtodolist("Belajar PHP OOP");
    $todolistService->addtodolist("Belajar PHP Database");
   
    $todolistService->showTodolist();

    $todolistService->removetodolist(1);
    $todolistService->showTodolist();

    $todolistService->removetodolist(4);
    $todolistService->showTodolist();
}

testRemovetodolist();