<?php
    $title = 'Add Specialty';
    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php';

?>

<h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="successspecialty.php">
        <div class="form-group">
            <label for="specialty">Insert A New Specialty</label>
            <input type="text" class="form-control" id="speicalty" name="specialty" placeholder="Enter a new specialty">
        </div>

        <button type="submit" name="submit1" class="btn btn-primary btn-block">Submit</button>
    </form>