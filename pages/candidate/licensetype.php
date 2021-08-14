<?php 
    include "includes/header.php";
  
?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark"> License Type</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">License Type</li>
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
            <div class="card-title">License Type </div>
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
                            <label>Shooting Type </label>
                         <select name="select" id="select" class="form-control">
                        <option value="1">Select Shooting Type </option>
                         <option value="2">Big Game Shooting</option>
                         <option value="3">Small Game Shooting </option>
                        </select>      
                        </div>              
                        </div>       
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Possession </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Possession</option>
                         <option value="2">Black Partidge</option>
                         <option value="3">Grey Partidge </option>
                         <option value="4">Chakor Partidge</option>
                         <option value="5">See-See  Partidge </option>
                         <option value="6">Quail Partidge</option>
                         <option value="7">Crane Partidge </option>
                         <option value="8">Grey Hound</option>
                         <option value="9">Pointer Dog </option>
                  
                      
                    </select>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Trapping </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Trapping</option>
                            <option value="2">Quail Partidge</option>
                         <option value="3">Crane</option>
                  
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Dealing </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Dealing</option>
                           <option value="2">Quail Partidge</option>
                         <option value="3">Love Birds</option>
                         <option value="4">Parrot</option>
                         <option value="5">Myna</option>
                  
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Export </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Export</option>
                      <option value="2">Select Possession</option>
                         <option value="3">Black Partidge</option>
                         <option value="4">Grey Partidge </option>
                         <option value="5">Quail Partidge</option>
                         <option value="6">Parrot </option>
                         <option value="7">Myna</option>
                         <option value="8">Crane  </option>
                         <option value="9">Pigeon</option>
                         <option value="10">Dove </option>
                  
                      
                    </select>
                  </div>
                </div>
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Import </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Import</option>
                         <option value="3">Black Partidge</option>
                         <option value="4">Grey Partidge </option>
                         <option value="5">Quail Partidge</option>
                         <option value="6">Parrot </option>
                         <option value="7">Myna</option>
                         <option value="8">Crane  </option>
                         <option value="9">Pigeon</option>
                         <option value="10">Dove </option>
                  
                      
                    </select>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Camp </label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Select Camp</option>
                       <option value="2">Crane Camp</option>
                         <option value="3">Crane</option>
                  
                      
                    </select>
                  </div>
                </div>
                   <div class="col-md-4">
                  <div class="form-group">
                    <label>Status</label>
                    <input type="text" name="" placeholder=" Status"
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
