<?php



class Home extends BaseController{
    
    /**
     * Home controller is called by default and its index action method is called first.
     * @param Array $data Data array
     * Constructor taht calls parent constructor
     */
    function __construct($data = array()) {
        parent::__construct($data);
    }

    /**
     * Index method to call index view of home
     */
    public function index(){ 
        
    } 
}