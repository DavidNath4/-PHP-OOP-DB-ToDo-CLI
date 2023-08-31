<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    interface TodolistService
    {
        function showTodolist();

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {

        private TodolistRepository $todoListRepository;

        public function __construct(TodolistRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodolist()
        {
            echo "TODOLIST" . PHP_EOL;

            $todoList = $this->todoListRepository->findAll();

            foreach ($todoList as $number => $value) {
                echo $value->getId() . ". " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todoListRepository->save($todolist);
            echo "SUKSES MENAMBAHKAN TODO LIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if ($this->todoListRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODO LIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODO LIST" . PHP_EOL;
            }
        }
    }
}
