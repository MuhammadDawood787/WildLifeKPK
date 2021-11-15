<?php
include "includes/header.php";


?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Depredation</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashbaord.php">Home</a></li>
          <li class="breadcrumb-item active">Depredation</li>
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
            <div class="card-title">Depredation</div>
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
                    <label>Date of incidence</label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Specie</label>
                    <input type="text" name="" placeholder="Type Of Road "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>       
        <div class="col-md-4">
                  <div class="form-group">
                    <label>Sex of Specie</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Unknown</option>
                      
                    </select>
                  </div>
                </div> 
                
           
        
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" name="" placeholder="Location"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
              <div class="col-md-4">
                  <div class="form-group">
                    <label>Wild Life Division</label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">1</option>
               
                      
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
                    <input type="text" name="" placeholder="Y Coordinate"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                
                 
                  
                 </div>
                  <hr size="8" width="100%" color="gray">  
                  
                       <div class="row ">
                   
                   
                 
                  
                 </div>
                
                 
                   <div class="row mt-3">
                         <div class="col-md-12">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked>
                        <label for="checkboxPrimary1">Human Death 
                        </label>
                      </div>
                 </div>
</div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Name </label>
                    <input type="text" name=""  placeholder="Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4" style="text-align="center">
               <div class="form-group">
                    <label>Address </label>
                    <input type="text" name=""  placeholder="Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>CNIC </label>
                    <input type="text" name=""  placeholder="CNIC"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Case of Compensation Submitted </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Yes</option>
                        <option value="">No</option>
               
                      
                    </select>
                  </div>
                </div>
                   
                 </div>
               <hr size="8" width="100%" color="gray">  
                  
                       <div class="row ">
                   
                   
                 
                  
                 </div>
                
                 
                   <div class="row mt-3">
                         <div class="col-md-12">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked>
                        <label for="checkboxPrimary1">Human Injury 
                        </label>
                      </div>
                 </div>
</div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Name </label>
                    <input type="text" name=""  placeholder="Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4" style="text-align="center">
               <div class="form-group">
                    <label>Address </label>
                    <input type="text" name=""  placeholder="Address"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>CNIC </label>
                    <input type="text" name=""  placeholder="CNIC"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Details of Injury </label>
                    <input type="text" name=""  placeholder="Details of Injury"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Case of Compensation Submitted </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Yes</option>
                        <option value="">No</option>
               
                      
                    </select>
                  </div>
                </div>
                   
                 </div>
               <hr size="8" width="100%" color="gray">  
                  
                       <div class="row ">
                   
                   
                 
                  
                 </div>
                
                 
                   <div class="row mt-3">
                         <div class="col-md-12">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked>
                        <label for="checkboxPrimary1"> Loss to Live Stock  
                        </label>
                      </div>
                 </div>
</div>
 <div class="col-md-4">
                  <div class="form-group">
                    <label>Type of Damage  </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Injury</option>
                        <option value="">Death</option>
               
                      
                    </select>
                  </div>
                </div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Kind of Live Stock    </label>
                    <input type="text" name=""  placeholder="Kind of Live Stock   "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4" style="text-align="center">
               <div class="form-group">
                    <label>Number of Live Stock  </label>
                    <input type="text" name=""  placeholder="Number of Live Stock "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
               
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Case of compensation Submitted   </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Yes</option>
                        <option value="">No</option>
               
                      
                    </select>
                  </div>
                </div>
                   
                 </div>
               <hr size="8" width="100%" color="gray">  
                  
                       <div class="row ">
                   
                   
                 
                  
                 </div>
                
                 
                   <div class="row mt-3">
                         <div class="col-md-12">
                  <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" checked>
                        <label for="checkboxPrimary1">Damage to Crop 
                        </label>
                      </div>
                 </div>
</div>
                 <div class="col-md-4">
                   <div class="form-group">
                    <label>Type of Crop </label>
                    <input type="text" name=""  placeholder="Type of Crop"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-4" style="text-align="center">
               <div class="form-group">
                    <label>Area </label>
                    <input type="text" name=""  placeholder="Area"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Case of Compensation Submitted </label>
                    <select name="" id="" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Yes</option>
                        <option value="">No</option>
               
                      
                    </select>
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
