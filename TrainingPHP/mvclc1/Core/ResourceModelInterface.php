<?php 
    namespace MVC\Core;
    interface ResourceModelInterface
    {
        public function init($table);
        public function create($title, $description);
        public function showTask($id);
        public function showAllTasks();
        public function edit($id, $title, $description);
        public function delete($id);
    }



?>