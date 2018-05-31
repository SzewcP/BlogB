<?php

class User extends Controller
{
    protected function login(){
    $viewmodel = new UserModel();
    $this->returnView($viewmodel->login(), true);
    }
    protected function logout(){
        unset($_SESSION['is_logged']);
        unset($_SESSION['name']);
        session_destroy();
        header("location: ". ROOT_URL);
    }
}
