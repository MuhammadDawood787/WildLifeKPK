<?php 
    include "includes/header.php";
  
?>



<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Acts And Rules</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Acts And Rules</li>
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
            <div class="card-title">Acts And Rules</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
               <form action="#" method="post" onsubmit="return Validation()">
                  
                    

                      

                    

                    <div class="row">
                      <div class=" col-md-8">
                          <div class="custom-file">
                                             <input   type="file" class="custom-file-input" id="s1">
                                             <label class="custom-file-label" for="customFile">Choose file</label>
                                            
                                              </div>
                                              
                      </div>
                      <div class="col-md-4">
                         <button type="submit" class="btn btn-success pull-right">Submit</button>
                      </div>
                    </div>
                   
                    <div class="clearfix"></div>
                  </form>
         
        </div>
                  <div class="row">
            
            <div class=" col-lg-12">
              <div class="card card-plain">
                <div class="card-header card-header-success">
                  <h4 class="card-title mt-0"> Acts And Rules</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class="">
                        <th>
                          ID
                        </th>
                        <th>
                        Act Name
                        </th>
                       
                        <th>
                         Action
                        </th>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            1
                          </td>
                          <td>
                           Crane Rules 1984
                          </td>
                           <td>
                            <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                           visibility
                          </span>
                          </td>
                          
                        </tr>
                         <tr>
                          <td>
                            2
                          </td>
                          <td>
                          Falcon Rules 1980
                          </td>
                           <td>
                            <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                          visibility
                          </span>
                          </td>
                          
                        </tr>
                         <tr>
                          <td>
                            3
                          </td>
                          <td>
                           National Park Draft Rules
                          </td>
                           <td>
                           <span class="material-icons">
                            delete
                          </span>
                            <span class="material-icons">
                            edit
                          </span>
                          <span class="material-icons">
                          visibility
                          </span>
                          </td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
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
   <script>

$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
