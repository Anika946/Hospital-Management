<?php

class contactTest extends \PHPUnit\Framework\TestCase{
   public function   testQuery() {
      $contact = new Fawzia_Akter_1831160642_cse327project\contact;
      $result = $contact->$query="insert into contact(name,email,contact,message) values('$name','$email','$contact','$message');";; 
        
      $this->assertequals(mysqli_query($con,$query),$result);
    } 
}