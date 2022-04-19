<?php

class contactTest extends \PHPUnit\Framework\TestCase{
   public function   testQuery() {
      $contact = new Khadiza_Akter_Luna_1430452042_cse327project\prescribe;
      $result = $prescribe->$query="insert into prescribe(pid,ID,appdate,apptime,fname,lname,doctor) values('$pid','$ID','$appdate','$apptime','$fname','$lname','$doctor');";; 
        
      $this->assertequals(mysqli_query($con,$query),$result);
    } 
}
