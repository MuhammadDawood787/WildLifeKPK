<?php
session_start();

if(!isset($_SESSION['u_ID']))
{  
  echo "<script>window.location.href = 'index.php'; </script>";
}
?>
<style type="text/css">
  @media print{
    .printBlock
    {
      display: none !important;
    }
  }
</style>
<header class="header printBlock">
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="index.php" class="logo">
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="img/logo.png" alt="logo" height="40px" />
        </a>

        <!-- Sidebar toggle button-->
        <div class="navbar-right">
            <ul class="nav navbar-nav" >
                <!-- User Account: style can be found in dropdown-->
                <li class="dropdown user user-menu">
                    <a href="" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <div>
                            <img src="img/logo.png" style="height: 40px" alt="User Image">
                            <span><i class="caret"></i></span>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="img/logo.png" class="img-circle" alt="User Image">
                            <p>FBM Brothers</p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-right">
                                <a href="">
                                    <form method="post">
                                    <i class="fa fa-fw ti-shift-right"></i>
                                    <input type="submit" class="btn btn-sm btn-warning shadow-lg" name="logout" value="Logout">
                                    </form>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>

<?php

if (isset($_POST['logout']))
{
    unset($_SESSION['u_ID']);
    echo "<script>window.location.href = 'index.php';</script>";
}

?>