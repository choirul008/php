<?php

namespace View {

    use Service\TodolistService;
    use Helper\InputHelper;

    class TodolistView
    {
        private TodolistService $todolistservice;

        public function __construct(TodolistService $todolistservice)
        {
            $this->todolistservice = $todolistservice;
        }

        function showTodolist(): void 
        {
            while (true) {
                $this->todolistservice->showToDoList();
            
                echo "Menu" .PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar" . PHP_EOL;
            
                $pilihan = InputHelper::input("Pilih");
            
                if($pilihan == "1") {
                    $this->addTodolist();
                } else if ($pilihan == "2") {
                    $this->removeTodolist();
                } else if ($pilihan == "x") {
                    break ;//keluar
                } else {
                    echo "Pilihan tidak diketahui" . PHP_EOL;
                    }
                }
            
                echo " Bye.. Bye.. " . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "TAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x untuk batal) ");

            if ($todo == "x") {
                echo "Batal Menambah Todo" . PHP_EOL;//batal
            } else {
                $this->todolistservice->addTodoList($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor (x untuk batalkan) ");

            if ($pilihan == "x"){
            echo "Batal Hapus Todo";
            } else {
                $this->todolistservice->removeTodolist($pilihan);
            }
        }
    }
}