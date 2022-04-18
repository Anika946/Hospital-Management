<?php

class admin_panelTest extends \PHPUnit\Framework\TestCase{
   public function   testQuery() {
      $admin_panel = new Nowshin_Nawal_Khan_1911353042_CSE327_Project\admin_panel;
      $result = $admin_panel->$query = "select doctor,ID,appdate,apptime,disease,allergy,prescription from prestb where pid='$pid';";
        
      $this->assertequals(mysqli_query($con,$query),$result);
    } 
?>   