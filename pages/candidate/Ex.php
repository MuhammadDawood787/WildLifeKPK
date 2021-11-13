<?php
include "includes/header.php";


?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Ex-SITU Facilities of KPK</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Ex-SITU Facilities of KPK</li>
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
            <div class="card-title">Ex-SITU Facilities of KPK</div>
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
                    <label>Ex-SITU Facility Name</label>
                    <input type="text" name="" placeholder="Ex-SITU Facility Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Category</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Zoo</option>
                        <option value="">Mini Zoo</option>
                        <option value="">Wild Life Park</option>
                        <option value="">Breeding Facility</option>
                        <option value="">Pheasantry/Aviary</option>
               
                      
                    </select>
                  </div>
                </div> 
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Division</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      
                    </select>
                  </div>
                </div> 
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>X Coordinate</label>
                    <input type="text" name="" placeholder="X Coordinate"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Y Coordinate</label>
                    <input type="text" name="" placeholder="X Coordinate"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Area</label>
                    <input type="text" name="" placeholder="Area"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Establishment</label>
                    <input type="date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 
               
              
                 </div>
                
                <div class="row">
                 <div class="col-md-12" style="text-align="center">
                  <label >Birds </label>
                 </div>
                
                </div>
                     
                 <div class="row mt-3">
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Specie </label>
                    <input type="text" name=""  placeholder="Specie"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4" style="text-align="center">
               <div class="form-group">
                    <label>Male </label>
                    <input type="text" name=""  placeholder="Female"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Female </label>
                    <input type="text" name=""  placeholder="Checks"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 
                   
                 </div>

                 <div class="row mt-3">
               
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Checks </label>
                    <input type="text" name=""  placeholder="Checks"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                  <div class="col-md-4">
                   <div class="form-group">
                    <label>Eggs </label>
                    <input type="text" name=""  placeholder="Eggs"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                   
                 </div>
                      <div class="row">
                 <div class="col-md-12" style="text-align="center">
                  <label >Animals </label>
                 </div>
                
                </div>
                     
                 <div class="row mt-3">
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>Specie </label>
                    <input type="text" name=""  placeholder="Male"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-3" style="text-align="center">
               <div class="form-group">
                    <label>Male </label>
                    <input type="text" name=""  placeholder="Female"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>Female </label>
                    <input type="text" name=""  placeholder="Checks"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                   <div class="col-md-3">
                   <div class="form-group">
                    <label>Cubs/Fawn </label>
                    <input type="text" name=""  placeholder="Cubs/Fawn"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 
                   
                   
                 </div>

                  
                  <div class="col-md-12 text-right">
                  <input type="submit" class="btn btn-success shadow" value="Submit"
                  name="saveUser1">
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
