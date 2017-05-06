<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Node
 *
 * @author victor
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
include 'Node.php';
class Node {
    //put your code here
    //private $next;
    private $left, $right;
    private $key;
    private $size;
    private $value;
    
    function getLeft() {
        return $this->left;
    }

    function getRight() {
        return $this->right;
    }

    function getKey() {
        return $this->key;
    }

    function getSize() {
        return $this->size;
    }

    function getValue() {
        return $this->value;
    }

        function __construct($key, $value, $size) {
        $this->key = $key;
        $this->value = $value;
        $this->size = $size;
        
    }
    
    
    
}
