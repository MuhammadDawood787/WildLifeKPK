<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Protected Areas Information</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Protected Areas Of KPK</li>
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
            <div class="card-title">Protected Areas Of KPK</div>
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
                    <label>Protected Area Name</label>
                    <input type="text" name="" placeholder="Protected Area Name"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Category</label>
                    <input type="text" name="" placeholder="Category"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
             
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>District</label>
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
                    <label>Fauna</label>
                    <input type="text" name="" placeholder="Fauna"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Flora</label>
                    <input type="text" name="" placeholder="Flora"
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
