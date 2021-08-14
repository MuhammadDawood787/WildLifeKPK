<?php 
    include "includes/header.php";
  
?>
<style>


body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;

  font-family: Raleway;

  
}

h1 {
  text-align: center;  
}



/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
</style>

<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Human Resource Information</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Human Resource</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<section class="content">
  <div class="container-fluid" class="text-center">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <center id="succ" style="display: none">
        <h4 class="text-success">User Added Successfully</h4>
        </center>
        <center id="err" style="display: none">
        <h4 class="text-danger">User Not Added</h4>
        </center>
        <!-- general form elements -->
        <div class="card card-success" class="text-center">
          <div class="card-header">
            <div class="card-title">Human Resource</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" id="regForm" enctype="multipart/form-data">
            
             
              <div class="tab"><h3>Employee Personal Information:</h3>
                  <div class="row mt-5">
                      <div class="col-md-4">
                  <div class="form-group">
                    <label>Upload Image</label>
                    <input id="file1" name="logo1" onchange="showImage1(event)" type="file"
                    accept="image/*" class="form-control" style="overflow: hidden;"
                    placeholder="Insert Your Image">
                  </div>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4 ">
                  <div class="form-group mr-3 mt-0">
                    <img id="log1" class="shadow"
                    style="border: 1px blue solid; border-radius: 10%; margin-top: -4%"
                    width="120px;" height="130px" src="../../images/candidates/profile picture/<?php
                    if($image == NULL OR $image == '')
                    {
                    echo "../../file_icon.png";
                    }
                    else
                    {
                    echo $image;
                    }
                    ?> " alt="">
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name="" placeholder="First Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="" placeholder="Last Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="Email" name="" placeholder="Email"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>CNIC</label>
                    <input type="text" name="" placeholder="CNIC"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="" placeholder="Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="" placeholder="City"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Postal Code</label>
                    <input type="text" name="" placeholder="Postal Code"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>BPS</label>
                    <input type="text" name="" placeholder="BPS"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="" placeholder="Designation"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Mobile Number</label>
                    <input type="text" name="" placeholder="Mobile Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Office Number</label>
                    <input type="text" name="" placeholder="Office Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Alternate Number</label>
                    <input type="text" name="" placeholder="Alternate Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="Date" name="" "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Religion</label>
                    <input type="text" name="" placeholder="Alternate Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Gender</label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Domicile District</label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">District</option>
                        <option value="">District</option>
                        <option value="">District</option>
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Insurance Policy</label>
                    <input type="text" name="university" placeholder="Insurance Policy"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>

                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Marital Status </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value=""> Married</option>
                        <option value=""> Unmarried</option>
                      
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Employee Position</label>
                    <select name="" id="" class="form-control select2">
                         <option value="1">Please Select Position</option>
                         <option value="1">Chief Conservator WildLife</option>
                         <option value="2">Conservator WildLife</option>
                        <option value="3">DFO WildLife</option>
                        <option value="4">SDWO WildLife</option>
                        <option value="5">Veterinary Doctor/Officer</option>
                        <option value="6">PMO</option>
                        <option value="7">GIS Specialist</option>
                        <option value="8">Superintendent</option>
                        <option value="9">Statistical Investigator</option>
                        <option value="10">Senior Scale Stenographer</option>
                        <option value="11">Range Officer Wildlife</option>
                        <option value="12">Assistant</option>
                        <option value="13">Tourism Coordinator</option>

                        <option value="14">Social Organizer</option>
                        <option value="15">Computer Operator</option>
                        <option value="16">Senior Clerk</option>
                        <option value="17">Junior Scale Stenographer</option>
                        <option value="18">Camera Man /Photographer</option>
                        <option value="19">Taxidermist</option>
                        <option value="20">Sub-Engg(Civil)</option>
                        <option value="21">Sub-Engg(Electric)</option>
                        <option value="22">Junior Clerk</option>
                        <option value="23">Deputy Ranger Wildlife</option>
                        <option value="24">Veterinay Assistant</option>
                        <option value="25">Stock Assistant</option>
                        <option value="26">Pheasant Breading Assistant</option>
                        <option value="27">Field Assistant</option>
                        <option value="28">Head Watcher</option>
                        <option value="29">Draftsman</option>
                        <option value="30">Wildlife Watcher</option>
                        <option value="31">Veterinary Assistant</option>
                        <option value="32">Painter</option>
                        <option value="33">Electrician</option>
                        <option value="34">Masson</option>
                        <option value="35">Carpenter</option>
                        <option value="36">Watch & Ward Assistant</option>
                        <option value="37">Driver</option>
                        <option value="38">Receptionist</option>
                        <option value="39">Security Gard(Male) </option>
                        <option value="40">Security Gard(Female) </option>
                        <option value="41">Animal Attandant </option>
                        <option value="42">Boatman </option>
                        <option value="43">Sweeper </option>
                        <option value="44">Naib Qasid </option>
                        <option value="45">Mali </option>
                        <option value="46">Dak Runner </option>
                        <option value="47">Crane keeper </option>
                        <option value="48">Cook</option>
                        <option value="49">WildLife Chowkidar</option>
                        <option value="50">Chowkidar</option>
                        <option value="51">Plumber/Sanitary Worker</option>
                        <option value="52">Tube Well Operator</option>
                        <option value="53">Carpenter/Welder</option>
                        <option value="54">Animal Keeper/Attendant</option>
                        <option value="55">Bird Keeper/Attendant</option>
                        <option value="56">Helper to Texi Dermist</option>
                        <option value="57">Snake Keeper/Sapera</option>
                      
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Project</label>
                    <input type="text" name="" placeholder="Project "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
              
                
                 </div>
                 </div>
               
              <div class="tab"><h3>Employee Qualification</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Qualification</label>
                    <input type="text" name="" placeholder="Qualification"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Grade/Division</label>
                    <input type="text" name="" placeholder="Grade/Division"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Passing Year of Degree</label>
                    <input type="text" name="" placeholder="Passing Year of Degree "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Last Institute</label>
                    <input type="text" name="" placeholder="Last Institute"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4 mt-4">
                  <div class="form-group">
                     <div class="custom-file">

                      <input   type="file" class="custom-file-input" id="s1">
                        <label class="custom-file-label" for="customFile">CV Attachment(Optional) </label>
                         <span id="n1" class="text-danger"></span>
                        </div>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute Address</label>
                    <input type="text" name="" placeholder="Institute Address "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Major Subject</label>
                    <input type="text" name="" placeholder="Major Subject"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" name="" placeholder="Remarks "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
                 </div>
                 </div>
                   <div class="tab"><h3>Employee Initial Appointment</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Service Status</label>
                    <input type="text" name="" placeholder="Service Status"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Appointment Date</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Age of Retirement</label>
                    <input type="text" name="" placeholder="Age of Retirement "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Cader/Service Group</label>
                    <input type="text" name="" placeholder="Carder/Service Group"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Department</label>
                    <input type="text" name="" placeholder="Department"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Appointment Through  </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value=""> Promotion</option>
                        <option value=""> Direct</option>
                      
                      
                    </select>
                  </div>
                </div>
                
                
             
                 </div>
                 </div>
                     <div class="tab"><h3>Employee Service History</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Service Status</label>
                    <input type="text" name="" placeholder="Service Status"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label>BPS</label>
                    <input type="text" name="" placeholder="BPS"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name="" placeholder="Designation"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Place Of Duty</label>
                    <input type="text" name="" placeholder="Place Of Duty"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Station</label>
                    <input type="text" name="" placeholder="Station"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Running Basic Pay </label>
                    <input type="text" name="" placeholder="Running Basic Pay"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Joining Date</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  
                
                
                 
                
                
             
                 </div>
                 </div>
                    <div class="tab"><h3>Employee Training Information</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Training Serial Number</label>
                    <input type="text" name="" placeholder="Training Serial Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               <div class="col-md-4">
                  <div class="form-group">
                    <label>Training Name</label>
                    <input type="text" name="" placeholder="Training Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute</label>
                    <input type="text" name="" placeholder="Institute"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="" placeholder="City"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Institute Address</label>
                    <input type="text" name="" placeholder="Institute Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Oblige Sponsor</label>
                    <input type="text" name="" placeholder="Oblige Sponsor"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div> 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Duration </label>
                    <input type="text" name="" placeholder="Duration"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                
                 
                
                
             
                 </div>
                 </div>
                      <div class="tab"><h3>Employee Promotions</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>From Designation </label>
                    <input type="text" name="" placeholder="From Designation"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To Designation</label>
                    <input type="text" name=""  placeholder="To Designation" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From BPS</label>
                    <input type="text" name="" placeholder="From BPS"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To BPS</label>
                    <input type="text" name="" placeholder="To BPS"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> Promotion Date</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Promotion Number</label>
                    <input type="text" name="" placeholder="Promotion Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Department</label>
                    <input type="text" name="" placeholder="Department"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Acting</label>
                    <input type="text" name="" placeholder="Acting"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Remarks</label>
                    <input type="text" name="" placeholder="Remarks"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                
             
                 </div>
                 </div>
                         <div class="tab"><h3>Employee Transfer</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Transfer Order Number </label>
                    <input type="text" name="" placeholder="Transfer Order Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Designation</label>
                    <input type="text" name=""  placeholder="Designation" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>BPS</label>
                    <input type="text" name="" placeholder="From BPS"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>From  Deparment</label>
                    <input type="text" name="" placeholder="From Deparment"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> To  Project</label>
                    <input type="text" name="" placeholder="To Project" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>From  Station</label>
                    <input type="text" name="" placeholder="From  Station"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>To Station</label>
                    <input type="text" name="" placeholder="To Station"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Worked From</label>
                    <input type="text" name="" placeholder="Worked From"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Transfer Date</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                
             
                 </div>
                 </div>
         
                 <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
              <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>

  </div>
            </form>
         
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- Col-12 -->
  </div>
  <!-- row -->
</div>
</section>

<?php 
    include "includes/footer.php";
?>


<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<script>
var showImage1 = function(event) {
var uploadField = document.getElementById("file1");
if (uploadField.files[0].size > 300000) {
uploadField.value = "";
Swal.fire(
'Error !',
'File Size is too big! Upload logo under 300kB !',
'error'
).then((result) => {
if (result.isConfirmed) {
}
});
} else {
var logoId = document.getElementById('log1');
logoId.src = URL.createObjectURL(event.target.files[0]);
}
}
</script>
     <script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

