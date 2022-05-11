<?php

namespace Service {

    use Repository\TodolistRepository;
    use Entity\Todolist;

    interface TodolistService {

        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService {

        private TodolistRepository $todolistrepository;

        public function __construct(TodolistRepository $todolistrepository)
        {
            $this->todolistrepository = $todolistrepository;
        }
        
        function showTodolist(): void 
        {
            echo " TODOLIST" . PHP_EOL;
            $todolist = $this->todolistrepository->findAll();
            foreach ($todolist as $number => $value) {
                echo "$number . " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistrepository->save($todolist);
            echo " TODOLIST Sukses Ditambahkan" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if($this->todolistrepository->remove($number)){
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL ;
            }else{
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }

    }
}