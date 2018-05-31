<?php

class Home extends Controller

{

    protected function Index(){
        $viewModel = new HomeModel;
        $this->returnView($viewModel->Index(), true);
    }
    protected function post(){
        $viewModel = new HomeModel;
        $data = $_GET['id'];
        if(($_GET['id'])==''){
        echo 'THERE is no id';
        } else {$this->returnView($viewModel->post($data), true);}
    }

}