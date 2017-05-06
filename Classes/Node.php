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
    function setLeft(Node $left) {
        $this->left = $left;
    }

    function setRight(Node $right) {
        $this->right = $right;
    }

    function setKey($key) {
        $this->key = $key;
    }

    function setSize($size) {
        $this->size = $size;
    }

    function setValue($value) {
        $this->value = $value;
    }

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

        function __construct(Key $key, $value, $size) {
        $this->key = $key;
        $this->value = $value;
        $this->size = $size;
        
    }
    
    
    
}
