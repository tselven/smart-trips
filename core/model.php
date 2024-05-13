<?php

namespace Includes;

use Config\Config;

class Model
{
    public $name;
    public $uni;
    public $query;

    /**
     * Return all rows in the database
     * @return array Data rows in the database
     */
    function getAll()
    {
        $this->query = "SELECT * FROM $this->name";
        return $this->get();
    }
    function getOne($id)
    {
        $this->query = "SELECT * FROM {$this->name} WHERE {$this->uni} LIKE '%{$id}%'";
        return $this->get();
    }
    function delete($id)
    {
        $this->query = "DELETE FROM {$this->name} WHERE {$this->uni}='{$id}'";
        $this->run();
    }


    function insert(array $data){
        $this->query = "INSERT INTO {$this->name} values(?)";
        $temp = null;
        foreach($data as $d){
            $temp .= "'{$d}',";
        }
        $values = trim($temp,",");
        $this->query = str_replace("?",$values,$this->query);
        $this->run();
    }

    function select($columns)
    {
        $this->query = "SELECT $columns FROM " . $this->name;
        return $this;
    }

    /**
     * Order by column
     * @param string $column Name of column
     * @param string $order Ascending or Descending [Default: ascending]
     * @return $this DB object
     */
    function order($column, $order = "")
    {
        $this->query .= " ORDER BY $column";
        return $this;
    }

    /**
     * filter & select data by column
     */
    function where($where)
    {
        $this->query .= " WHERE $where";
        return $this;
    }

    /**
     * Limit the number of rows to be returned
     * @param int $num number of rows
     */
    function limit($num){
        $this->query = "LIMIT $num";
        return $this;
    }
    /**
     * To perform the filtering / pagination
     * @param number $limit number of rows to be returned
     * @param number $offset number of rows to skip from beginning.
     * @return object $this This object use for method chaining
     */
    function paginate($limit,$offset){
        $this->query = " LIMIT $limit OFFSET $offset";
        return $this;
    }

    function getClosest($long,$lat,$distance = 10)
    {
        $this->query = "SELECT 
        *,
        (6371 * acos(cos(radians($lat)) * cos(radians(latitude)) * cos(radians(longitude) - radians($long)) + sin(radians($lat)) * sin(radians(latitude)))) AS distance
    FROM 
        {$this->name}
    HAVING 
        distance <= $distance
    ORDER BY 
        distance;";

        return $this->get();
    }
    

    /**
     * Execute the query.
     */
    function run(){
        $con = mysqli_connect(Config::$host, Config::$user, Config::$pass, Config::$db);
        $result = mysqli_query($con, $this->query);
        if ($result) {
            $affected_rows = mysqli_affected_rows($con);
            echo "Query executed successfully. Affected rows: $affected_rows.";
        } else {
            echo "Error executing query: " . mysqli_error($con);
        }
        mysqli_close($con);
    }

    /**
     * Execute the query and return the result
     */
    function get(){
        $con = mysqli_connect(Config::$host, Config::$user, Config::$pass, Config::$db);
        $res = mysqli_query($con, $this->query);
        if ($res) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo mysqli_error($con);
        }
        mysqli_close($con);
    }
}
