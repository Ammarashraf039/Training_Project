<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 
class ModelFactory {
    //put your code here
    
    public static function constructModel($name){
        if(Config::get($name)){
            $obj =  Config::get($name);            
            return new $obj();
        }
        return null;
    }
}
