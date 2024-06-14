<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to the AESS Online Banking!</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            background-image: url('background2.png');
            background-size: cover;
        }
        
        .header-image {
            background-image: url('bcgdash.png');
            
        }
    </style>
    
</head>
<body>
    <?php
        $username = isset($_SESSION['username']) ? $_SESSION['username'] : '';
    ?>

    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #D4E6F1;">
        <section class="logo">
            <img src="logo2.png" class="logo">
        </section>
    </nav>

    <div class="setting-icon">
        <a href="setting.php"><i class="fa-solid fa-gear"></i></a>
    </div>

    <h1>Welcome <?php echo $username; ?> to AESS Online Banking!</h1>
    <style> h1{text-align: center; margin-top: 7%; color: #fff; font-size: 50px;} </style>

    <div class="banner-btn4">
        <a href="accountsummary.php"><span></span><b>Account Summary</b></a>
        <a href="thirdpartyaccount.php"><span></span><b>Third Party Account</b></a>
        <a href="prepaidreload.php"><span></span><b>Prepaid Reload</b></a>
        <a href="duitnow.php"><span></span><b>Transfer to Duitnow ID/ Account</b></a>
    </div>

</body>
</html>
