<?php
class A {
 public function funA(){
    return 1;
 }
}
class B extends A{
    public $a = 1;
    public function funB(){
        echo $a;
    }
    
} 
$obj= new B();
$obj->funB();

?>