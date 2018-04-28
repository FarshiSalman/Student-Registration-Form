<!DOCTYPE html>

<html>
<head>
    <title>Students List</title>
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="list.css">
    
    <script>
    </script>
</head>
    
<body>

    <div class="main">
        <h1 class="head"><u>Students List</u></h1>
        
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
        
            $list = "SELECT * FROM st_reg_form";
            $results = $conn->query($list);
	   ?>
        
        <table>
    
                <tr class="thead">
                    <td style="width: 31%; height: 30px;" colspan="2">Name</td>
                    <td style="width: 13%; height: 30px;">Department</td>
                    <td style="width: 17%; height: 30px;">Roll</td>
                    <td style="width: 25%; height: 30px;">E-mail</td>
                    <th style="width: 14%; height: 30px;" colspan="2">Action</th>
                </tr>

            <?php while ($row = $results->fetch_array()) { ?>
                <tr class="tdown">
                    <td style="width: 8%; height: 30px;"><?php echo $row['title']; ?></td>
                    <td style="width: 23%; height: 30px;"><?php echo $row['name']; ?></td>
                    <td style="width: 13%; height: 30px;"><?php echo $row['department']; ?></td>
                    <td style="width: 17%; height: 30px;"><?php echo $row['roll']; ?></td>
                    <td style="width: 25%; height: 30px;"><?php echo $row['email']; ?></td>
                    
                    <td class="bt">
                        <button><a href="edit.php?edit=<?php echo $row['id']; ?>" class="edit_btn">Edit</a></button>
                    </td>
                    
                    <td class="bt">
                        <button><a href="del.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a></button>
                    </td>
                    
                </tr>
            <?php } ?>
            
        </table>
        
        
        
    </div>
    <div class="dl">
    <a style="color: grey; float: right;" href="index.php">Registration</a>
    </div>
</body>
</html>