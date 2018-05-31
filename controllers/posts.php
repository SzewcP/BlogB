<?php

class Posts extends Controller
{
    protected function Index(){
        $viewModel = new ShareModel;
        $this->returnView($viewModel->Index(), true);
    }
    protected function add(){
        if(isset($_SESSION['is_logged'])) {
            $viewModel = new ShareModel;
            $this->returnView($viewModel->add(), true);
        }else{
            header('location:'. ROOT_URL);
        }
    }
    protected function edit()
    {

        if(isset($_SESSION['is_logged'])) {
            $data = $_GET['id'];
            if(($_GET['id'])==''){
                echo 'THERE is no id';
            }
            else {
            $viewModel = new ShareModel;
            $this->returnView($viewModel->edit($data), true);}
        }else{
            header('location:'. ROOT_URL);
        }
    }
    protected function delete(){
        if(isset($_SESSION['is_logged'])) {
            $data = $_GET['id'];
            if(($_GET['id'])==''){
                echo 'THERE is no id';
            }
            else {
                $viewModel = new ShareModel;
                $this->returnView($viewModel->delete($data), true);}
        }else{
            header('location:'. ROOT_URL);
        }
    }

}