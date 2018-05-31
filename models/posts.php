<?php
class ShareModel extends Model
{
    public function Index()
    {
        $this->query("SELECT * FROM posts ORDER BY created_data DESC");
        $rows = $this->resultSet();
        return $rows;
    }
    public function add()
    {
        //sanitaze / dodac  !empty
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
            //insert
            $this->query("INSERT into posts (title,body,tags) VALUES(:title, :body, :tags)");
            $this->bind(':title' , $post['title']);
            $this->bind(':body' , $post['body']);
            $this->bind(':tags' , $post['tags']);
            $this->execute();
            if($this->lastInsertId()){
                header('location: '.ROOT_URL);
            }return;
        }
    }
    public function edit($id)
    {
        //sanitaze / dodac  !empty
        $this->query("SELECT * FROM posts WHERE id=".$id);
        $rows = $this->resultSet();
        $post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
        if(isset($post['submit'])){
            //insert
            $this->query("UPDATE posts SET title = :title,body=:body,tags = :tags WHERE id=".$id);
            $this->bind(':title' , $post['title']);
            $this->bind(':body' , $post['body']);
            $this->bind(':tags' , $post['tags']);
            $this->execute();
            header('location: ' . ROOT_URL);

        }
        return $rows;
    }
    public function delete($id){
        $this->query("SELECT * FROM posts WHERE id=".$id);
        $rows = $this->resultSet();
        if(isset($_POST['submit'])){
            $this->query("DELETE FROM posts WHERE id=".$id);
            $this->execute();
            header('location: ' . ROOT_URL);
        }return $rows;
    }

}