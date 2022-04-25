<?php

// Database connection

class Database{

    private function connect(){
        $string = DBDRIVER.":host=".DBHOST.";dbname=".DBNAME;
        // PDO os used to connect multiple databases to the site.
        // Sometimes this may not work so we need to check.
        if(!$con = new PDO($string,DBUSER,DBPASS))
        {
            die("Could not connect to the database.");
        }

        return $con;
    }

    // Here query is prepared first then inserted in to the data array.
    // Using this method cannot hack by using sql injections.
    public function query($query, $data = array(), $data_type = 'object')
    {
         
        $con =  $this->connect();
        // Prepare the statement here.
        $statement = $con->prepare($query);

        if($statement){
            // check if the things execute.
            $check = $statement->execute($data);
            // here we can run statements without getting data. such as update query.
            if($check)
            {
                if($data_type == 'object'){
                    // Fetch as an object.
                    $data = $statement->fetchAll(PDO::FETCH_OBJ);
                }else{
                    // Fetch as an array.
                    $data = $statement->fetchAll(PDO::FETCH_ASSOC);
                }
            }

            // if there are items inside the array then return data.
            if(is_array($data) && count($data) > 0){
                return $data;
            } 
        }

        return false;
    }
}