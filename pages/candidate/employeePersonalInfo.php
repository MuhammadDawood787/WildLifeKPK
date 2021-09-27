<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Employee Personal Information</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Employee Personal Information</li>
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
            <div class="card-title">Employee Personal Information</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
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
                  <div class="col-md-12 text-right">
                  <input type="submit" class="btn btn-success shadow" value="Submit"
                  name="saveUser1">
                </div>
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
