<?php include ("server.php"); ?>

<?php

if(isset($_GET['edit'])){
    $id = $_GET['edit'];

    $sql = "SELECT * FROM st_reg_form WHERE id = $id";
    $record = $conn->query($sql);
    
    $n = $record->fetch_array();
    //$title = $n['title'];
    $name = $n['name'];
    //$department = $n['department'];
    $roll = $n['roll'];
    $email = $n['email']; 
    $password = $n['password']; 
}

?>



<!DOCTYPE html>
    
<html>
<head lang="en">
    <meta charset="utf-8">
    <title>Update</title>
    
    <link rel="stylesheet" type="text/css" href="style.css";>
</head>
    
<body>
<div class="main">
        <h1 class="head"><u>Update Data</u></h1>
        
        <form method="post" action="edit.php">
            <div class="title_div">
                <fieldset>
                    <legend>Title</legend>
                    <input type="radio" name="title" value="Ms">Miss<br>
                    <input type="radio" name="title" value="Mr">Mister
                </fieldset>
            </div>

            <div class="rest">
                <input type="text" name="name" value="<?php echo $name; ?>" required>
                <a>Name: </a>
            </div>

            <div class="dept">
                <select name="dept">
                    <option value="CSE">CSE</option>
                    <option value="BBA">BBA</option>
                    <option value="EEE">EEE</option>
                </select>
                <a>Department: </a>
            </div>

            <div class="rest">
                <input type="text" name="roll" value="<?php echo $roll; ?>" required>
                <a>Roll Number: </a>
            </div>

            <div class="rest">
                <input type="email" name="mail" value="<?php echo $email; ?>">
                <a>E-mail: </a>
            </div>

            <div class="rest">
                <input type="password" name="password" value="<?php echo $password; ?>" required>
                <a>Password: </a>
            </div>

            <div>
                <button class="btn" type="submit" name="update">Update</button>
            </div>
        </form>
    </div>
    <div class="dl">
    <a style="color: grey; float: right;" href="list.php">Go Back</a>
    </div>
</body>
                    
</html>


<?php

if(isset($_POST['update'])){
    $id = $_POST['update'];
    
    $title = $_POST['title'];
    $name = $_POST['name'];
    $department = $_POST['dept'];
    $roll = $_POST['roll'];
    $email = $_POST['mail'];
    $password = $_POST['password'];
    
    $conn->query("UPDATE 'st_reg_form' SET title='$title', name='$name', department='$department', roll='$roll', email='$email', password='$password' WHERE id=$id");
    
    $_SESSION['message'] = "Record updated!"; 
    header('location: list.php');
    
}
    
    
?>



