<?php
class UserModel extends Model
{
    public function login(){
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        $password = md5($post['password']);
        if(isset($post['submit'])){
            $this->query('SELECT * FROM admin WHERE name = :name AND password = :password');
            $this->bind(':name' , $post['name']);
            $this->bind(':password' , $password);
            $row = $this->single();
            if ($row)
            {
                $_SESSION['is_logged'] = true;
                $_SESSION['user_data'] = array("id"=>$row['id'], "name"=>$row['name']);
                header("location: ". ROOT_URL);
            }else {
                echo "bad login or password";
            }
        }
    }

}