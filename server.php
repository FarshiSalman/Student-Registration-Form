        
<?php 

    $servername = "localhost";
    $username="root";
    $password="";
    $dbname="my_dbs";

    try{
        $conn = mysqli_connect($servername, $username,$password,$dbname);
        //echo("Successful in Connection!");
    }
    catch(MySQLi_Sql_Exception $ex){
        echo("ERROR!");
    }

    $title = "";
    $name = "";
    $department = "";
    $roll = "";
    $email = "";
    $password = "";
    $id = 0;
	$update = false;

    if(isset($_POST['submit'])){
        $id = 0;
        $update = false;
        $title = $_POST['title'];
        $name = $_POST['name'];
        $department = $_POST['dept'];
        $roll = $_POST['roll'];
        $email = $_POST['mail'];
        $password = $_POST['password'];
        
        $register_query = "INSERT INTO `st_reg_form`(`title`, `name`, `department`, `roll`, `email`, `password`) 
                           VALUES ('$title','$name','$department','$roll','$email','$password')";
        
        
        try{
            $register_result = mysqli_query($conn, $register_query);
            if($conn->query($register_result) === TRUE){
                $_SESSION['message'] = "New Record Saved!";
            }
            else{
                $_SESSION['message'] = "Error!";
            }
         }
        catch(Exception $ex){
            echo("error".$ex->getMessage());
        }
        
        header('location: index.php');
    }

?>

