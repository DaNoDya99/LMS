<?php

// Main model.
// This contains all the functions common to the whole project.

class Model extends Database
{
    protected $table = "user";

    public function where($column,$value)
    {
        // Senitize. check column exists.
        $column = addslashes($column);
        $query = "select * from $this->table where $column = :value";
        return $this->query($query,['value'=>$value]);
    }

    public function findAll()
    {
        $query = "select * from $this->table";
        return $this->query($query);
    }
}
