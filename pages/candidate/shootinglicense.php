<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Shooting License Information</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Shooting License Information</li>
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
            <div class="card-title">Shooting License Information </div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
            
            
                  <div class="row ">
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
                    <label>Type of Shooting License</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Type of Shooting</option>
                        <option value="">Small Game</option>
                        <option value="">Big Game</option>
                  
                      
                    </select>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Serial Number</label>
                    <input type="text" name="" placeholder="Serial Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Hunter Name</label>
                    <input type="text" name="" placeholder="Hunter Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Father Name</label>
                    <input type="text" name="" placeholder="Father Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Issue Date</label>
                    <input type="Date" name=""
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
                    <label>Email</label>
                    <input type="email" name="" placeholder="Email"
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
                    <label>District</label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Select District</option>
                        <option value="">1</option>
                      
                    </select>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Name of Country<small class="ml-2">(If Abroad)</small></label>
                      <input type="text" name="" placeholder="Country Name"
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Passport Number</label>
                     <input type="text" name="" placeholder="Passport Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>CNIC Number</label>
                     <input type="text" name="" placeholder="CNIC Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Hunter Address</label>
                     <input type="text" name="" placeholder="Hunter Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Address of Issuing Authority </label>
                     <input type="text" name="" placeholder="Address of Issuing Authority "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Issue Date</label>
                     <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Expiry Date</label>
                     <input type="Date" name="" 
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
