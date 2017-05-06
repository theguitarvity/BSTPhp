<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Key
 *
 * @author victor
 * @copyright (c) 2015, ByteGod IT solutions - todos os direitos reservados
 */
class Key implements Comparable{
    //put your code here
    private $key;
    function __construct(Key $key) {
        $this->key = $key;
    }
    public function compareTo($val) {
        if($val> $this->key)
            return -1;
        else if($val< $this->key) 
            return 1;
        else
            return 0;
        
    }

}
