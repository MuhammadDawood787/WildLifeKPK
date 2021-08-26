<?php
 
  $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
?>
<aside class="main-sidebar sidebar-light-success elevation-4" style="background-color: #98FF98;">
  <div class="sidebar" >
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="info ml-5">
        <a href="dashboard.php">
          <img src="../../images/logo.png" style="width: 100px; height: 100px">
        </a>
      </div>
    </div>
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link <?php if($curPageName == 'dashboard.php') echo "active" ?>">
            <i class="icon_color nav-icon fas fa-tachometer-alt"></i>
            <p>Dashboard</p>
          </a>
        </li>

       
             <li class="nav-item has-treeview ">
          <a href="HR.php" class="nav-link  <?php if($curPageName == 'HR.php') echo "active" ?> ">
            <i class="nav-icon fas fa-user-secret"></i>
            <p>Human Resource
              <i class="right fas"></i>
            </p>
          </a>
        </li>
  
         <li class="nav-item has-treeview ">
          <a href="HRFamily.php" class="nav-link  <?php if($curPageName == 'HRFamily.php') echo "active" ?> ">
            <i class="nav-icon fas fa-home"></i>
            <p>HR Family Info
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           
           <li class="nav-item has-treeview ">
          <a href="actRules.php" class="nav-link  <?php if($curPageName == 'actRules.php') echo "active" ?> ">
            <i class="nav-icon fab fa-galactic-senate"></i>
            <p>Act And Rules
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           <li class="nav-item has-treeview ">
          <a href="protectedareas.php" class="nav-link  <?php if($curPageName == 'protectedareas.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Protected Areas
              <i class="right fas"></i>
            </p>
          </a>
        </li>
         
                <li class="nav-item has-treeview <?php if($curPageName == 'Peasantry.php' OR $curPageName == 'nationalParks.php' or $curPageName == 'sanctuaries.php' or $curPageName == 'waterfowl.php' or $curPageName == 'wildlifeParks.php' or $curPageName == 'gameReserves.php' or $curPageName == 'gameReserves.php' or $curPageName == 'gameReserves.php' or $curPageName == 'gameReserves.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-dove"></i>
            <p>
             Peasantry 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="Peasantry.php" class="nav-link <?php if($curPageName == 'Peasantry.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Peasantry</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="nationalParks.php" class="nav-link <?php if($curPageName == 'nationalParks.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>National Parks</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="sanctuaries.php" class="nav-link <?php if($curPageName == 'sanctuaries.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>WILDLIFE SANCTUARIES</p>
              </a>
            </li> 
               <li class="nav-item">
              <a href="waterfowl.php" class="nav-link <?php if($curPageName == 'waterfowl.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>WATERFOWL REFUGES</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="wildlifeParks.php" class="nav-link <?php if($curPageName == 'wildlifeParks.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>WILDLIFE PARKS</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="gameReserves.php" class="nav-link <?php if($curPageName == 'gameReserves.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>GAME RESERVES</p>
              </a>
            </li> 
       
         </ul>
      </li>
        <li class="nav-item has-treeview <?php if($curPageName == 'shootinglicense.php' OR $curPageName == 'licensetype.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-id-badge"></i>
            <p>
             License 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="shootinglicense.php" class="nav-link <?php if($curPageName == 'shootinglicense.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Shooting License Type</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="licensetype.php" class="nav-link <?php if($curPageName == 'licensetype.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>License Type</p>
              </a>
            </li> 
       
         </ul>
      </li>
          <li class="nav-item has-treeview <?php if($curPageName == 'offenceform.php' OR $curPageName == 'courtcase.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-gavel"></i>
            <p>
             Offences 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="offenceform.php" class="nav-link <?php if($curPageName == 'offenceform.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Offence Form</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="courtcase.php" class="nav-link <?php if($curPageName == 'courtcase.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Cases Decided By Court </p>
              </a>
            </li> 
       
         </ul>
      </li>
      <li class="nav-item has-treeview ">
          <a href="planning_development.php" class="nav-link  <?php if($curPageName == 'planning_development.php') echo "active" ?> ">
         <i class="nav-icon fas fa-brain"></i>
            <p>PlanningAndDevelopment
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           <li class="nav-item has-treeview ">
          <a href="Procurement_Assets.php" class="nav-link  <?php if($curPageName == 'Procurement_Assets.php') echo "active" ?> ">
         <i class="nav-icon fas fa-briefcase"></i>
            <p>ProcurementAndAssets
              <i class="right fas"></i>
            </p>
          </a>
        </li>
            <li class="nav-item has-treeview ">
          <a href="roadkills.php" class="nav-link  <?php if($curPageName == 'roadkills.php') echo "active" ?> ">
         <i class="nav-icon fas fa-road"></i>
            <p>Road Kills
              <i class="right fas"></i>
            </p>
          </a>
        </li>
             <li class="nav-item has-treeview ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-cog"></i>
            <p>Setting
              <i class="right fas"></i>
            </p>
          </a>
        </li>
         
             <li class="nav-item has-treeview ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>Logout
              <i class="right fas"></i>
            </p>
          </a>
        </li>
      </ul>
    </nav>
  </div>
</aside>
