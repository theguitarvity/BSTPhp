<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BST
 *
 * @author victor
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
include_once("Node.php");
class BST {
    //put your code here
    private $root;
    
    public function isEmpty(){
        return size()==0;
        
    }
    public function size(){
        return sizeEsp($this->root);
    }
    public function sizeEsp(Node $x){
        if($x==null)return 0;
        else return $x->getSize();
    }
    public function contains($key){
        if($key==null) throw new Exception ("O parametro passado esta nulo");
        return get($key);
        
    }
    public function get($key){
        return getEsp($this->root, $key);
    }
    public function getEsp(Node $x, $key){
        if($x==null) return null;
        
    }
    
}
