<?php
    $title = 'Index';
    require_once 'includes/header.php'; 
    require_once 'db/conn.php';
    $results = $crud->getSpecialties();
?>
    <!--
        - First Name
        - Last Name
        - Date of Birth (Use DatePicker)
        - Specialty (Database Admin, Software Developer, Web Administrator)
        - Email Address
        - Contact Number
    -->
    <h1 class="text-center">Registration for IT Conference</h1>

    <form method="post" action="success.php">
        <div class="form-group">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname"placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">

            <p>Format options:<br>
  <select id="format">
    <option value="mm/dd/yy">Default - mm/dd/yy</option>
    <option value="yy-mm-dd">ISO 8601 - yy-mm-dd</option>
    <option value="d M, y">Short - d M, y</option>
    <option value="d MM, y">Medium - d MM, y</option>
    <option value="DD, d MM, yy">Full - DD, d MM, yy</option>
    <option value="&apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy">With text - &apos;day&apos; d &apos;of&apos; MM &apos;in the year&apos; yy</option>
  </select>
</p>
        </div>
        <div class="form-group">
            <label for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                    <option value="<?php echo $r['specialty_id'];?>"><?php echo $r['name'];?></option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" placeholder="Enter phone number">
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
    </form>
<?php require_once 'includes/footer.php'; ?>

