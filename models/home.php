<?php
class HomeModel extends Model
{

    public function Index()
    {
        $this->query("SELECT * FROM posts ORDER BY created_data DESC");
        $rows = $this->resultSet();
        return $rows;

    }
    public function post($id)
    {

            $this->query("SELECT * FROM posts WHERE id =".$id);
            $rows = $this->resultSet();
            return $rows;

    }

}