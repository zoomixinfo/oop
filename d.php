<?php  
class A 
{  
protected $x=500;  
protected $y=100;  
function add()  
    {  
        echo $sum=$this->x+$this->y."<br/>";  
    }  
}     
class B extends A  
{  
function sub()  
    {  
    echo $sub=$this->x-$this->y."<br/>";  
    }     
}     
$obj = new B;  
$obj->add();  
$obj->sub();  
  
?>  