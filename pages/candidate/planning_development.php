<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Planning And Development</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Planning And Development </li>
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
            <div class="card-title">Planning And Development</div>
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
                    <label>Name Project</label>
                    <input type="text" name="" placeholder="Name Project"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>       
        
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Specific Area</label>
                    <input type="text" name="" placeholder="Specific Area"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Project Cost</label>
                    <input type="text" name="" placeholder="Project Cost"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
            
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Project Duration  </label>
                    <input type="text" name="" placeholder="Project Duration"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label> Filed</label>
                    <input type="text" name="" placeholder="Filed" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Approval Date </label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Completion Date </label>
                    <input type="Date" name="" 
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Annual Release </label>
                    <input type="text" name="" placeholder="Annual Release"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Project Issue </label>
                    <input type="text" name="" placeholder="Project Issue"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Project Status </label>
                    <input type="text" name="" placeholder="Project Status"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Expenditures against the Location </label>
                    <input type="text" name="" placeholder="Expenditures against the Location"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Expenditures against the Release </label>
                    <input type="text" name="" placeholder="Expenditures against the Release"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Projects in Pipe Line (DFC)</label>
                    <input type="text" name="" placeholder="Projects in Pipe Line (DFC)"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                    <div class="col-md-4">
                  <div class="form-group">
                    <label>Surrender if any</label>
                    <input type="text" name="" placeholder="Surrender if any"
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
