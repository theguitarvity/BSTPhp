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
    private function sizeEsp(Node $x){
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
    private function getEsp(Node $x,Key $key){
        if($x==null) return null;
        $cmp = $key->compareTo($x->getKey());
        if($comp<0) return getEsp($x->getLeft(), $key);
        else if($comp>0) return getEsp($x->getRight(), $key);
        else return $x->getValue ();
    }
    
    public function put(Key $key, $val){
        if($key==null) throw new Exception ("first argument to put() is null");
        if($val==null){
            delete($key);
            return;
        }
        $this->root = putEsp($root, $key, $val);
        assert($this->root);
    }
    private function putEsp(Node $x, Key $key, $val){
        if($x==null) return new Node($key, $val, 1);
        $cmp = $key->compareTo($x->getKey());
        if($cmp<0) $x->setLeft (putEsp($x->getLeft (), $key, $val));
        else if($cmp>0) $x->getRight(putEsp($x->getRight(), $key, $val));
        else $x->setValue($val);
        $x->setSize(1+ $this->size($x->getLeft()) + $this->size($x->getRight()));
        return $x;
    }
    
    public function deleteMin(){
        if($this->isEmpty()) throw new Exception ("Symbol table underflow");
        $this->root = deleteMinEsp($this->root);
        assert($this->root);
    }
    private function deleteMinEsp(Node $x){
        if($x->getLeft()==null) return $x->getRight();
        $x->setLeft($this->deleteMinEsp($x->getLeft()));
        $x->setSize($this->size($x->getLeft())+ $this->size($x->getRight())+1);
        return $x;
        
    }
    public function deleteMax(){
        if($this->isEmpty()) throw new Exception("Symbol table underflow");
        $this->root = deleteMaxEsp($this->root);
        assert($this->root);
    
    }
    private function deleteMaxEsp(Node $x){
        if($x->getRight()==null) return $x->getLeft();
        $x->setRight($this->deleteMaxEsp($x->getRight()));
        $x->setSize($this->size($x->getLeft())+ $this->size($x->getRight())+1);
        return $x;
        
    }
    
}
