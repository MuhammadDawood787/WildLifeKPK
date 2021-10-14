<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Offence Form</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Offince Form</li>
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
            <div class="card-title">Offince Form</div>
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
                    <label>Accused Name</label>
                    <input type="text" name="" placeholder="Accused Name"
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
                    <label>CNIC Number</label>
                    <input type="text" name="" placeholder="CNIC Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>   
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Complete Address</label>
                    <input type="text" name="" placeholder="Complete Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div> 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Place of Occurrence</label>
                    <input type="text" name="" placeholder="Place of Occurrence"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>    
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Occurrence</label>
                    <input type="Date" name="" placeholder=""
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>    
                          <div class="col-md-4">
                  <div class="form-group">
                    <label>Time of Occurrence</label>
                    <input type="text" name="" placeholder="Time of Occurrence"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>  
                          <div class="col-md-4">
                  <div class="form-group">
                    <label>Police Station</label>
                    <input type="text" name="" placeholder="Police Station"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>  
                       <div class="col-md-4">
                  <div class="form-group">
                    <label>District</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select District</option>
                        <option value="">1</option>
                        <option value="">2</option>
                  
                      
                    </select>
                  </div>
                </div>
                          <div class="col-md-4">
                  <div class="form-group">
                    <label>Crime under Section</label>
                    <input type="text" name="" placeholder="Crime under Section"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>  
                  
           
               
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Detail of the Crime</label>
                    <input type="text" name="" placeholder="Detail of the Crime"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Detail of the Crime </label>
                    <input type="text" name="" placeholder="Detail of the Crime"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                       <div class="col-md-4">
                  <div class="form-group">
                    <label>Reporting Person Name </label>
                    <input type="text" name="" placeholder="Reporting Person Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                       <div class="col-md-4">
                  <div class="form-group">
                    <label>Witness Name </label>
                    <input type="text" name="" placeholder="Witness Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                       <div class="col-md-4">
                  <div class="form-group">
                    <label>Name of the Court </label>
                    <input type="text" name="" placeholder="Name of the Court"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                       <div class="col-md-4">
                  <div class="form-group">
                    <label>Court Register Number</label>
                    <input type="text" name="" placeholder="Court Register Number"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label> Date of Case Registration at the Court </label>
                    <input type="Date" name=""
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                             <div class="col-md-4">
                  <div class="form-group">
                    <label> Date of Recovery  </label>
                    <input type="Date" name=""
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
