<?php
    $title = 'Success';
    require_once 'includes/header.php';
    require_once 'db/conn.php';

    if(isset($_POST['submit1'])){
        $specialty = $_POST['specialty'];
        //Call function to insert and track if success or not
        $isSuccess = $crud->insertspecialty($specialty);

        if($isSuccess){
            include 'includes/successmessage.php';
        }
        else{
            include "includes/errormessage.php";
        }
    }
?>
   

   
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty'];?>
            </h6>
        </div>
    </div>

<?php require_once 'includes/footer.php';?>

 <!-- This prints out values that weres passed to the action page using method="get" -->
    <!-- <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
            <?php //echo $_GET['firstname']. ' '. $_GET['lastname'];?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php// echo $_GET['specialty'];?>
            </h6>
            <p class="card-text">
                Date Of Birth: <?php //echo $_GET['dob'];?>
            </p>
            <p class="card-text">
                Email Address: <?php// echo $_GET['email'];?>
            </p>
            <p class="card-text">
                Contact Number<?php //echo $_GET['phone'];?>
            </p>    
        </div>
    </div> -->