<?php 
use LDAP\Result;
    require_once('../db/conn.php');
    //get values from post operation
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $id=$_POST['id'];
        $reg=$_POST['reg'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $idno=$_POST['idno'];
        $dob=$_POST['dob'];
        $phone=$_POST['phone'];
        $county=$_POST['county'];
        $contact=$_POST['contact'];
    
    //call Crud function
    $result=$crud->editStudent($id,$reg,$fname, $lname, $email, $idno, $dob, $phone, $county, $contact);
    //Redirect to viewrecords.php
    if($result){
        header("Location: ../admin/viewstudents.php");
    }
    }
    else{
        echo 'error';
    }

?>