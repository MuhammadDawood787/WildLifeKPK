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

       
           
         
                <li class="nav-item has-treeview <?php if($curPageName == 'employeePersonalInfo.php.php' OR $curPageName == 'employeeQualification.php' or $curPageName == 'EmployeeInitialAppointment.php' or $curPageName == 'EmployeeServiceHistory.php' or $curPageName == 'EmployeeTrainingInformation.php' or $curPageName == 'EmployeePromotions.php' or $curPageName == 'EmployeeTransfer.php' or $curPageName == 'HRFamily.php' or $curPageName == 'gameReserves.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon  fas fa-user-secret"></i>
            <p>
            Human Resource
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="employeePersonalInfo.php" class="nav-link <?php if($curPageName == 'employeePersonalInfo.php.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Personal Info</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="employeeQualification.php" class="nav-link <?php if($curPageName == 'employeeQualification.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Qualification</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="EmployeeInitialAppointment.php" class="nav-link <?php if($curPageName == 'EmployeeInitialAppointment.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Initial Appointment</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="EmployeeServiceHistory.php" class="nav-link <?php if($curPageName == 'EmployeeServiceHistory.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Service History</p>
              </a>
            </li> 
               <li class="nav-item">
              <a href="EmployeeTrainingInformation.php" class="nav-link <?php if($curPageName == 'EmployeeTrainingInformation.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Training Information</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="EmployeePromotions.php" class="nav-link <?php if($curPageName == 'EmployeePromotions.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Promotions</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="EmployeeTransfer.php" class="nav-link <?php if($curPageName == 'EmployeeTransfer.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Transfer</p>
              </a>
            </li> 
               <li class="nav-item">
              <a href="HRFamily.php" class="nav-link <?php if($curPageName == 'HRFamily.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>HR Family Info </p>
              </a>
            </li> 
       
         </ul>
      </li>
  
        
           
           <li class="nav-item has-treeview ">
          <a href="actRules.php" class="nav-link  <?php if($curPageName == 'actRules.php') echo "active" ?> ">
            <i class="nav-icon fab fa-galactic-senate"></i>
            <p>Act And Rules
              <i class="right fas"></i>
            </p>
          </a>
        </li>
          
         
                <li class="nav-item has-treeview <?php if($curPageName == 'Peasantry.php' OR $curPageName == 'nationalParks.php' or $curPageName == 'sanctuaries.php' or $curPageName == 'waterfowl.php' or $curPageName == 'wildlifeParks.php' or $curPageName == 'gameReserves.php' or $curPageName == 'totalProtectedArea.php' or $curPageName == 'gameReserves.php' or $curPageName == 'animalsPeasantry.php') { echo "menu-open" ; } ?>">
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
                <p>Birds Peasantry</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="animalsPeasantry.php" class="nav-link <?php if($curPageName == 'animalsPeasantry.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Animals Peasantry</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="speciesInfo.php" class="nav-link <?php if($curPageName == 'speciesInfo.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Species Information</p>
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
               <li class="nav-item">
              <a href="totalProtectedArea.php" class="nav-link <?php if($curPageName == 'totalProtectedArea.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>TOTAL PROTECTED AREA </p>
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
         
             <!-- <li class="nav-item has-treeview ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-cog"></i>
            <p>Setting
              <i class="right fas"></i>
            </p>
          </a>
        </li> -->
             <li class="nav-item has-treeview <?php if($curPageName == 'HRPersonalReports.php' OR $curPageName == 'EmQualification.php' or $curPageName == 'initialAppoint.php' or $curPageName == 'ServiceHistory.php' or $curPageName == 'TrainingInfo.php' or $curPageName == 'Promotion.php' or $curPageName == 'Transfer.php' or $curPageName == 'Family.php' or $curPageName == 'Act.php' or $curPageName == 'ProtectedAreasReport.php' or $curPageName == 'PeasantryReport.php' or $curPageName == 'shootinglicenseReport.php' or $curPageName == 'licensetypeReport.php' or $curPageName == 'offenceformReport.php' or $curPageName == 'courtcaseReport.php' or $curPageName == 'plain.php' or $curPageName == 'Procurement.php' or $curPageName == 'RoadKill.php' ) { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-book"></i>
            <p>
             Reports 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
               <li class="nav-item has-treeview <?php if ($curPageName == 'HRPersonalReports.php' or $curPageName == 'EmQualification.php' or $curPageName == 'initialAppoint.php' or $curPageName == 'ServiceHistory.php' or $curPageName == 'TrainingInfo.php' or $curPageName == 'Promotion.php' or $curPageName == 'Transfer.php' ) {
  echo "menu-open";
}?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-book"></i>
            <p>
             HR Reports 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="HRPersonalReports.php" class="nav-link <?php if($curPageName == 'HRPersonalReports.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Personal Info</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="EmQualification.php" class="nav-link <?php if($curPageName == 'EmQualification.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Qualification</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="initialAppoint.php" class="nav-link <?php if($curPageName == 'initialAppoint.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Initial Appointment</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="ServiceHistory.php" class="nav-link <?php if($curPageName == 'ServiceHistory.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Service History</p>
              </a>
            </li> 
               <li class="nav-item">
              <a href="TrainingInfo.php" class="nav-link <?php if($curPageName == 'TrainingInfo.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Training Info</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="Promotion.php" class="nav-link <?php if($curPageName == 'Promotion.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Promotions</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="Transfer.php" class="nav-link <?php if($curPageName == 'Transfer.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Employee Transfer</p>
              </a>
            </li> 
         </ul>
          <li class="nav-item">
              <a href="Family.php" class="nav-link <?php if($curPageName == 'Family.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>HR Family Info</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="Act.php" class="nav-link <?php if($curPageName == 'Act.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Act And Rules</p>
              </a>
            </li> 
            <li class="nav-item">
              <a href="ProtectedAreasReport.php" class="nav-link <?php if($curPageName == 'ProtectedAreasReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Protected Areas</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="PeasantryReport.php" class="nav-link <?php if($curPageName == 'PeasantryReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Peasantry</p>
              </a>
            </li> 
                <li class="nav-item has-treeview <?php if($curPageName == 'shootinglicenseReport.php' OR $curPageName == 'licensetypeReport.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-id-badge"></i>
            <p>
             License Report
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="shootinglicenseReport.php" class="nav-link <?php if($curPageName == 'shootinglicenseReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Shooting License Type</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="licensetypeReport.php" class="nav-link <?php if($curPageName == 'licensetypeReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>License Type</p>
              </a>
            </li> 
       
         </ul>
      </li>
         
      <li class="nav-item has-treeview <?php if($curPageName == 'offenceformReport.php' OR $curPageName == 'courtcaseReport.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-gavel"></i>
            <p>
             Offences Report
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="offenceformReport.php" class="nav-link <?php if($curPageName == 'offenceformReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Offence Form</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="courtcaseReport.php" class="nav-link <?php if($curPageName == 'courtcaseReport.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Cases Decided By Court </p>
              </a>
            </li> 
       
         </ul>
      </li>
         <li class="nav-item">
              <a href="plain.php" class="nav-link <?php if($curPageName == 'plain.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Planning And Development</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="Procurement.php" class="nav-link <?php if($curPageName == 'Procurement.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Procurement</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="RoadKill.php" class="nav-link <?php if($curPageName == 'RoadKill.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Road Kills</p>
              </a>
            </li> 
      </li>
       
         </ul>
      </li>
            <li class="nav-item has-treeview ">
          <a href="progressReport.php" class="nav-link  <?php if($curPageName == 'progressReport.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Birds Progress Report
              <i class="right fas"></i>
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview ">
          <a href="AnimalProgressReport.php" class="nav-link  <?php if($curPageName == 'AnimalProgressReport.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Animals Progress Report
              <i class="right fas"></i>
            </p>
          </a>
        </li>
         <li class="nav-item has-treeview ">
          <a href="progressReportList.php" class="nav-link  <?php if($curPageName == 'progressReportList.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Birds Progress List
              <i class="right fas"></i>
            </p>
          </a>
        </li>
         <li class="nav-item has-treeview ">
          <a href="survey.php" class="nav-link  <?php if($curPageName == 'survey.php') echo "active" ?> ">
            <i class="nav-icon fas fa-book"></i>
            <p>Survey
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           <li class="nav-item has-treeview <?php if($curPageName == 'Dustbins.php' OR $curPageName == 'Competitions.php' or $curPageName == 'Billboards.php' or $curPageName == 'StallExhibitions.php' or $curPageName == 'Competitions.php') { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-id-badge"></i>
            <p>
            Community Participation
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="Dustbins.php" class="nav-link <?php if($curPageName == 'Dustbins.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Dustbins</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="Competitions.php" class="nav-link <?php if($curPageName == 'Competitions.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Competitions</p>
              </a>
            </li> 
             <li class="nav-item">
              <a href="Billboards.php" class="nav-link <?php if($curPageName == 'Billboards.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Bill boards</p>
              </a>
            </li> 
       
              <li class="nav-item">
              <a href="Games.php" class="nav-link <?php if($curPageName == 'Games.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Games</p>
              </a>
            </li> 
                 <li class="nav-item">
              <a href="StallExhibitions.php" class="nav-link <?php if($curPageName == 'StallExhibitions.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Stall / Exhibitions</p>
              </a>
            </li> 
       
         </ul>
      </li>
           <li class="nav-item has-treeview <?php if($curPageName == 'schoolNature.php' OR $curPageName == 'Lectures.php' or $curPageName == 'NoticeBoard.php' or $curPageName == 'EducationaAndAwareness.php' or $curPageName == 'Educationalvideos.php' or $curPageName == 'Lectures.php')  { echo "menu-open" ; } ?>">
          <a href="#"  class="nav-link">
            <i class="icon_color nav-icon fas fa-school"></i>
            <p>
             Conservation Education 
             <i class="right fas fa-angle-left"></i>
            </p>
          </a>
           <ul class="nav nav-treeview">
           <li class="nav-item">
              <a href="schoolNature.php" class="nav-link <?php if($curPageName == 'schoolNature.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>School Nature Club</p>
              </a>
            </li> 
        <li class="nav-item">
              <a href="Lectures.php" class="nav-link <?php if($curPageName == 'Lectures.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Lectures</p>
              </a>
            </li> 
                <li class="nav-item">
              <a href="NoticeBoard.php" class="nav-link <?php if($curPageName == 'NoticeBoard.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Notice Board</p>
              </a>
            </li> 
              <li class="nav-item">
              <a href="EducationaAndAwareness.php" class="nav-link <?php if($curPageName == 'EducationaAndAwareness.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Education & Awareness</p>
              </a>
            </li> 
               <li class="nav-item">
              <a href="Educationalvideos.php" class="nav-link <?php if($curPageName == 'Educationalvideos.php' ) echo "active  " ?> ">
                <i class="far fa-circle nav-icon"></i>
                <p>Educational videos</p>
              </a>
            </li> 
         </ul>

      </li>
              <li class="nav-item has-treeview ">
          <a href="protectedareasKP.php" class="nav-link  <?php if($curPageName == 'protectedareasKP.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Protected Areas of KP
              <i class="right fas"></i>
            </p>
          </a>
        </li>
            <li class="nav-item has-treeview ">
          <a href="Revenue.php" class="nav-link  <?php if($curPageName == 'Revenue.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Revenue
              <i class="right fas"></i>
            </p>
          </a>
        </li>
            <li class="nav-item has-treeview ">
          <a href="CommunityParticipation.php" class="nav-link  <?php if($curPageName == '  CommunityParticipation.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>  Community Participation Form
              <i class="right fas"></i>
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview ">
          <a href="Stock.php" class="nav-link  <?php if($curPageName == 'Stock.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Stock
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           <li class="nav-item has-treeview ">
          <a href="Expense.php" class="nav-link  <?php if($curPageName == 'Expense.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Expenses
              <i class="right fas"></i>
            </p>
          </a>
        </li>
          <li class="nav-item has-treeview ">
          <a href="Ex.php" class="nav-link  <?php if($curPageName == 'Ex.php') echo "active" ?> ">
            <i class="nav-icon fas fa-skull-crossbones"></i>
            <p>Ex-SITU Facilities 
              <i class="right fas"></i>
            </p>
          </a>
        </li>
           
         <li class="nav-item has-treeview ">
          <a href="Depredation.php" class="nav-link  <?php if($curPageName == 'Depredation.php') echo "active" ?> ">
            <i class="nav-icon fas fa-road"></i>
            <p>Depredation 
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
