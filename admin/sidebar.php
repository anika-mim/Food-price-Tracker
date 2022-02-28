<!DOCTYPE html>
<html lang="en">

<head>
    
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>ADMIN DASHBOARD PAGE</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/normalize.css">
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/pe-icon-7-filled.css">
      <link rel="stylesheet" href="assets/css/flag-icon.min.css">
      <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
   
</head>

<body>
     <aside id="left-panel" class="left-panel">
         <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li class="menu-title">MENU</li>
                  
				   <li class="menu-item-has-children dropdown">
                     <a href="vendor_management.php" > RESTUARANT MANAGEMENT </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="categories.php" > FOOD MANAGEMENT </a>
                  </li>
				
                  
				  <li class="menu-item-has-children dropdown">
                     <a href="users.php" > USER PROFILE </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="coupon_master.php" > COUPON </a>
                  </li>
				  <li class="menu-item-has-children dropdown">
                     <a href="contact_us.php" > CONTACT US</a>
                  </li>
				  
               </ul>
            </div>
         </nav>
      </aside>
      <div id="right-panel" class="right-panel">
         <header id="header" class="header">
            <div class="top-left">
               <div class="navbar-header">
                  <a class="navbar-brand" href="index.php"><img src="images/MyLogo.png" alt="Logo"></a>
                  <a class="navbar-brand hidden" href="index.php"><img src="images/MyLogo.png" alt="Logo"></a>
                  <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
               </div>
            </div>
            <div class="top-right">
               <div class="header-menu">
                  <div class="user-area dropdown float-right">
                     <a href="top.inc.php" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['username'];?></a>
                     <div class="user-menu dropdown-menu">
            
                   
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>