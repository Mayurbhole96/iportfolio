<?php
include 'database.php';

   $uploads_dir = '../media/';
   //$to = "mbhole1996@gmail.com";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $subject = $_POST['subject'];
   $massage = $_POST['massage'];

  if(count($error) ==0){

     $id = rand(1,1000000);
     $sql = "insert into user values('".$id."','".$name."','".$email."','".$subject."','".$massage."');";
    


     $result = mysqli_query($db,$sql);
    // mysqli_query($db, $sql);

    if($result)
         echo "<script>alert('Posted Successfully !');window.location='register.php'</script>";
    else{
         echo "<script>alert('Failed to Post. Try again.');window.location='register.php'</script>";
        }

  }


?>