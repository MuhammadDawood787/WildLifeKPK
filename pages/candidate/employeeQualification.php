<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Employee Qualification</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Employee Qualification</li>
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
            <div class="card-title">Employee Qualification</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
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
