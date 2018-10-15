<?php
    class Operations{
        public $conn;
        public function __construct(){
            $this -> conn = mysqli_connect("localhost","root","","cgsu");
            if(!$this->conn){
                echo 'Database connection error '.mysqli_connect_error($this->conn);
            }
        }

        //insert function
        public function insert($table_name,$data){
            $string = "INSERT INTO ".$table_name." (";
            $string .= implode(",", array_keys($data)) . ') VALUES (';
            $string .= "'" .implode("','",array_values($data)) . "')";
            if(mysqli_query($this->conn,$string)){
                return true;
            } else{
                echo mysqli_error($this->conn);
            }
        }

        //basic view function
        public function select($table_name){
            $array = array();
            $query = "SELECT * FROM ".$table_name."";
            $result = mysqli_query($this->conn,$query);
            while($row = mysqli_fetch_assoc($result)){
                $array[] = $row;
            }
            return $array;
        }

        //extended view function
      public function select_where($table_name, $where_condition)
      {
           $condition = '';
           $array = array();
           foreach($where_condition as $key => $value)
           {
                $condition .= $key . " = '".$value."' AND ";
           }
           $condition = substr($condition, 0, -5);
           $query = "SELECT * FROM ".$table_name." WHERE " . $condition;
           $result = mysqli_query($this->conn, $query);
           while($row = mysqli_fetch_array($result))
           {
                $array[] = $row;
           }
           return $array;
      }

      //modify data function
      public function update($table_name, $fields, $where_condition)
      {
           $query = '';
           $condition = '';
           foreach($fields as $key => $value)
           {
                $query .= $key . "='".$value."', ";
           }
           $query = substr($query, 0, -2);

           foreach($where_condition as $key => $value)
           {
                $condition .= $key . "='".$value."' AND ";
           }
           $condition = substr($condition, 0, -5);

           $query = "UPDATE ".$table_name." SET ".$query." WHERE ".$condition."";
           if(mysqli_query($this->conn, $query))
           {
                return true;
           }
      }

    }
?>
