<?php
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

    //get id from get operation
    if(!$_GET['id']){
        echo 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }else{
        // Get ID values
        $id = $_GET['id'];

        //Call Delete function
        $result = $crud->deleteAttendee($id);

        //Redirect to list
        if($result){
            header("Location: viewrecords.php");
        }
        else{
            echo 'includes/errormessage.php';
        }
    }
?>