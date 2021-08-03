<?php  
class demo  
{  
        private $a = "hello";  
        public function display()  
        {  
        echo "Your entered data is ".$this->a;  
        } 
        function hai()
            {
                echo "<br>hello</br>";
            } 
}  
$hello = new demo();  
    $hello->display();  
    $hello->hai();
    $hello->display();
?>  