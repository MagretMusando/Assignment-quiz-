<html>
    <head>
        <h1>insert data into our table</hi>
    </head>
    <body>
        <center>
            <?php
          require "dbconnect.php";
            $firstname =$_REQUEST['first_name'];
            $lastname =$_REQUEST['last_name'];
            $dateborrowed =$_REQUEST['data_borrowed'];
            $returndate =$_REQUEST['return_date'];
            $sql="insert into staff values('$firstname','$lastname','$dateborrowed' ,'$returndate')";
            if($conn ->query($sql)==true){
                echo "records inserted";
            }else{
                echo "error";
            }
            ?>
        </center>
    </body>