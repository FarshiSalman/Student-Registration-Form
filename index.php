<?php include('server.php'); ?>

<!DOCTYPE html>

<html>
<head>
    <title>Student Registration Form</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type="text/css">
    
    <script>
    </script>
</head>
    
<body>
    
    <?php session_start();
    if (isset($_SESSION['message'])): ?>
        <div class="msg">
            <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']);
            ?>
        </div>
    <?php endif ?>
    
    <div class="main">
        <h1 class="head"><u>Student Registration Form</u></h1>
        
        <form method="post" action="server.php">
            <div class="title_div">
                <fieldset>
                    <legend>Title</legend>
                    <input type="radio" name="title" value="Ms" checked>Miss<br>
                    <input type="radio" name="title" value="Mr">Mister
                </fieldset>
            </div>

            <div class="rest">
                <input type="text" name="name" required>
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
                <input type="text" name="roll" required>
                <a>Roll Number: </a>
            </div>

            <div class="rest">
                <input type="email" name="mail">
                <a>E-mail: </a>
            </div>

            <div class="rest">
                <input type="password" name="password" required>
                <a>Password: </a>
            </div>

            <div>
                <button class="btn" type="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
    
    <div class="dl">
    <a style="color: grey; float: right;" href="list.php">View List</a>
    </div>
</body>
</html>