<?php
include "includes/header.php";


?>


<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">ANNUAL STOCK RETURN </h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashbaord.php">Home</a></li>
          <li class="breadcrumb-item active">ANNUAL STOCK RETURN </li>
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
            <div class="card-title">ANNUAL STOCK RETURN </div>
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
                     <div class="col-md-1"></div>
                        <div class="col-md-5">
                        
                  <div class="form-group">
                    <label>Particulars of stock </label>
                    <input type="text" name=""  placeholder="Particulars of stock"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-5">
                        
                  <div class="form-group">
                    <label>Year</label>
                    <input type="text" name=""  placeholder="Year"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                </div>
                  <div class="col-md-1"></div>
                </div>
                <hr size="8" width="100%" color="gray">  
                <div class="row">
               
                
                </div>
                   <div class="row mt-3">
                 <div class="col-md-6">
                   <div class="form-group">
                    <label>Opening Balance </label>
                    <input type="text" name=""  placeholder="Opening Balance"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
             
                   
                 </div>
                 <hr size="8" width="100%" color="gray">  
                 <div class="row">
                   <div class="col-md-12" style="text-align: center;">
                       <h4 style="text-bold;">Acquired through new purchase / transfer </h4>
                   </div>

                 </div>
                   <div class="row">
              
                
                </div>
                   <div class="row mt-3">
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>Cr.No. </label>
                    <input type="text" name=""  placeholder="Cr.No."
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-3" style="text-align="center">
               <div class="form-group">
                    <label>Month </label>
                    <input type="text" name=""  placeholder="Month"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>Amount </label>
                    <input type="text" name=""  placeholder="Amount"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                  <div class="col-md-3">
                   <div class="form-group">
                    <label>Qty </label>
                    <input type="text" name=""  placeholder="Qty"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                   
                 </div>
           
              
              
                  <hr size="8" width="100%" color="gray"> 
                       <div class="row">
                 <div class="col-md-12" style="text-align="center">
                  <label >Disposal </label>
                 </div>
                
                </div>
                   <div class="row mt-3">
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>To whom issued  </label>
                    <input type="text" name=""  placeholder="Male"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                 <div class="col-md-3" style="text-align="center">
               <div class="form-group">
                    <label>Qty </label>
                    <input type="text" name=""  placeholder="Qty"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
            
                   
                 </div>
                  <hr size="8" width="100%" color="gray"> 
                      
                
                         <div class="row">
               
                
                </div>
                   <div class="row mt-3">
                 <div class="col-md-3">
                   <div class="form-group">
                    <label>Closing balance </label>
                    <input type="text" name=""  placeholder="Closing balance"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
             
                     <div class="col-md-6">
                   <div class="form-group">
                    <label>Remarks </label>
                    <input type="text" name=""  placeholder="Remarks"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
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
