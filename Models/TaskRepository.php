<?php

namespace MVC\Models;

use MVC\Models\TaskResourceModel;

    class TaskRepository
    {
        private $taskResourceModel;

        function __construct()
        {
            $this->taskResourceModel = new TaskResourceModel();
        }

        //function add
        public function add($model)
        {
            return $this->taskResourceModel->save($model);
        }

        //function delete
        public function delete($id)
        {
            return $this->taskResourceModel->delete($id);
        }

        //function edit
        public function edit($model)
        {
            return $this->taskResourceModel->save($model);
        }
        //function get
        public function get($id)
        {
            return $this->taskResourceModel->get($id);
        }

        //function index
        public function getAll()
        {
            return $this->taskResourceModel->getAll();
        }
    }
?>