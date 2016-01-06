<?php 
abstract class employee{  
      protected $empname;  
      protected $empage;  
      public function setdata($empname,$empage){  
           $this->empname = $empname;  
           $this->empage = $empage;  
      }  
      abstract function outputData();  
}  
class EmployeeData extends employee{  
       public function __construct($name,$age){  
            $this->setdata($name,$age);  
       }  
       function outputData(){  
            echo $this->empname;  
            echo $this->empage;  
       }  
}  
$a = new EmployeeData("Hitesh","24");  
$a->outputData();  
?>