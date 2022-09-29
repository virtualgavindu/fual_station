<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />




  <title>Fual Station Mannagement</title>

  <?php
  require_once('../../res/link.php');
  
  ?>
  
</head>

<body>
  <div class="wrapper">
    <!-- Sidenav -->
    
      <?php
      require_once('./sideNav_admin.php');
      ?>
    
    <!-- END Sidenav -->

    <!-- Top nav -->
    <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
        <?php
        require_once('../../res/TopNav.php');
        ?>

      </nav>
      <!-- End Navbar -->

      <!-- Main Content -->
      <main class="content">
        <?php

        
        $page=$_GET['page'];
        switch($page){
          case "dashboard":
            require_once('../../layout/dashbord_super.php');
            break;
          case "profile":
            require_once('../../layout/profile.php');
            break;
          case "users":
            require_once('../../layout/users.php');
            break;
          case "vehicles":
            require_once('../../layout/vehicles.php');
            break;
          default:
          require_once('../../layout/dashbord_super.php');
            break;
        }



        ?>
      </main>
      <!-- End Main Content -->

      <!-- Footer -->
      <footer class="footer"></footer>
      <!--End Footer -->
    </div>
  </div>
</body>

</html>