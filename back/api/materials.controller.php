<?php

    //Se inclute modelo de materiales
    require_once('back/models/materials.model.php');
    require_once('api.view.php');

    class MaterialsController {

        private $model;
        private $view;

        function __construct(){
            $this->model = new MaterialsModel();
            $this->view = new APIView();
            /**Obtengo lo que tengo por post, como texto */
            $this->data = file_get_contents('php://input');
        }

        private function getData($params = null){
            return json_decode($this->data);
        }

        /* Obtiene todos los materiales */
        public function getAll($params = null){
            $allMaterials = $this->model->getAll();
            $this->getData($allMaterials);
            if ($allMaterials){
                $this->view->response($allMaterials, 200);
            } else {
                $this->view->response("No se encontraron materiales", 500);
            }   
        }
        function showOneMaterial($name){
            $oneMaterial = $this->model->get($name); 
            $this->view->response($oneMaterial, 200);
            
        }

        public function add() {
            /* $body = $this->getData();
            $name = $body->name;
            $condition = $body->condition;            
            $id = $this->model->insert($name, $condition);
            if ($id){
                $this->view->response($id, 200);
            } else {
                $this->view->response("No se pudo insertar", 404);
            }    */
        }

    }