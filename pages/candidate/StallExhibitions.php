<?php
include "includes/header.php";


?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Stall / Exhibitions</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashbaord.php">Home</a></li>
          <li class="breadcrumb-item active">Stall / Exhibitions</li>
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
            <div class="card-title">Stall / Exhibitions</div>
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
                    <label>Name of Exhibition</label>
                    <input type="text" name="" placeholder="Name of Exhibition "
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>       
        
           
                
           
        
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Display</label>
                    <input type="text" name="" placeholder="Display"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
               
               
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Venue</label>
                    <input type="text" name="" placeholder="Venue"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
               
               
               
            
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Date</label>
                    <input type="date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Remarks</label>
                    <input type="text-area" name="" placeholder="Remarks"
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
