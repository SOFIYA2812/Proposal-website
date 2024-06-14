<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aessob";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["submit"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $privateword = $_POST['privateword'];

    // Assuming you have a unique identifier for the user, replace 'unique_id' with the actual column name and value
    $unique_id = $_POST['unique_id'];

    $sql = "UPDATE `users` SET `username`='$username', `password`='$password', `privateword`='$privateword' WHERE `unique_id`='$unique_id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: loginpage.php?msg=Successfully updated profile");
        exit(); // Terminate script after redirect
    } else {
        echo "Failed: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>AESS Online Banking</title>

   <style>
      body {
         background-image: url('background2.png');
         background-size: cover;
      }
   </style>
</head>
<body>

   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #D4E6F1;">
      AESS Online Banking
      <section class="logo">
         <img src="logo2.png" class="logo">
      </section>
   </nav>

   <div class="container">
    <div class="text-center mb-4">
        <h3 style="color: white;">Update Profile Form</h3>
        <p style="color: white;">Complete the form below to update your profile</p>
    </div>
   </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            
            <div class="mb-3">
               <div class="col">
                  <label class="form-label"  style="color: white;">Unique ID:</label>
                  <input type="text" class="form-control" name="unique_id">
               </div>
            
               <div class="col">
                  <label class="form-label"  style="color: white;">Username:</label>
                  <input type="text" class="form-control" name="username">
               </div>

               <div class="col">
                  <label class="form-label"  style="color: white;">Password:</label>
                  <input type="text" class="form-control" name="password">
               </div>

               <div class="col">
                  <label class="form-label"  style="color: white;">Private Word:</label>
                  <input type="text" class="form-control" name="privateword">
               </div>
            </div>
           
           
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="dashboard.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
