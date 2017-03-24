<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class App {

    //put your code here
    private $request;
    
    private $controller;

    /**
     * Constructor method
     */
    function __construct() {
        
        $this->run();
    }
 
    public function run() {
        //request controller is called.
        $this->request = new Request();
       
	   //output of request controller is send to ControllerFactory contructor
        $this->controller = ControllerFactory::constructController($this->request->controller);
        
        $this->controller->run($this->request);
    }

}
