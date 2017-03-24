<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
class BaseModel implements ModelInterface {

    protected $db;
    
    /**
     * Contructor
     */
    function __construct() {    
        $this->db = Database::getInstance();
    }

    //table name and data of this table
    public function add($table, $data) {
        
    }

    //send id of deleted user
    public function delete($id) {
        
    }

    //send id of updated User
    public function edit($id) {
        
    }

     //send table name and get all data of this table
    public function allList($table) {
        $sql = "select * from {$table}";
        
        return $this->db->query($sql);
    }

}
