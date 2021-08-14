<?php 
    include "includes/header.php";
  
?>



<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Human Resource Information</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Human Resource</li>
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
            <div class="card-title">Human Resource</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" id="regForm" enctype="multipart/form-data">
            
                       <div class="tab"><h3>Employee Family Informatoin</h3>
                  <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Spouse Name </label>
                    <input  type="text" name="" id="Sname" placeholder="Spouse Name"
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Children Name</label>
                    <input type="text" name="" id="Cname" placeholder="Children Name" 
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="Date" name="" id="DOB" 
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label>Gender</label>
                    <select name="" id="select" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">Male</option>
                        <option value="">Female</option>
                        <option value="">Others</option>
                      
                    </select>
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> Dependent Serial Number</label>
                    <input type="text" name="" id="SerialNumber" placeholder="Dependent Serial Number" 
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>Relationship</label>
                    <input type="text" name="" id="Relationship" placeholder="Relationship"
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                  
                   
                  <!-- Table Start -->
                   <div class=" col-lg-12">
              <div class="card card-plain">
                <div class="card-header card-header-success">
                  <h4 class="card-title mt-0">Children Details</h4>
                  <p class="card-category">You can add here children details of employee</p>
                </div>
                <div class="card-body">
                  <div class="">
                  <div class="row">
                  <div class="col-md-12">
               
            <table id="productTable" class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        <th>Children Name</th>
                        <th>Date of Birth</th>
                        <th>Gender</th>
                        <th>DS number</th>
                        <th>Relationship</th>
                        <th>Actions</th>
                    </tr>
                </thead>
            </table>
            </div>
        </div>
  
                  </div>
                </div>
              </div>
            </div>
             <div class="col-md-12">
                      <button type="submit"  class="btn btn-success pull-right">Submit</button>
                     <button type="button" id="updateButton" class="btn btn-success pull-right" onclick="productUpdate();">Add Children</button>
                      </div>
             
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

<!-- Dynamic Children Add  -->
  <script>
     // Current product being edited
    var editRow = null;
    //Display Data
     function productDisplay(ctl) {
      editRow = $(ctl).parents("tr");
      var cols = editRow.children("td");

      $("#Cname").val($(cols[0]).text());
      $("#DOB").val($(cols[1]).text());
      $("#select").val($(cols[2]).text());
      $("#SerialNumber").val($(cols[3]).text());
      $("#Relationship").val($(cols[4]).text());

      // Change Update Button Text
      $("#updateButton").text("Update");
    }


    //condition

    function productUpdate() {
      if ($("#updateButton").text() == "Update") {
        productUpdateInTable();
      }
      else {
        productAddToTable();
      }

      // Clear form fields
      formClear();

      // Focus to product name field
      $("#Cname").focus();
    }
      // Add product to <table>
    function productAddToTable() {
      // First check if a <tbody> tag exists, add one if not
      if ($("#productTable tbody").length == 0) {
        $("#productTable").append("<tbody></tbody>");
      }

      // Append product to table
      $("#productTable tbody").append(
        productBuildTableRow());
    }
    // Update product in <table>
    function productUpdateInTable() {
      // Add changed product to table
      $(editRow).after(productBuildTableRow());

      // Remove original product
      $(editRow).remove();

      // Clear form fields
      formClear();

      // Change Update Button Text
      $("#updateButton").text("Add Children");
    }
    // Build a <table> row of Product data
    function productBuildTableRow() {
      var ret =
       "<tr>" +
            "<td>" + $("#Cname").val() + "</td>" +
            "<td>" + $("#DOB").val() + "</td>" +
            "<td>" + $("#select").val() + "</td>" +
            "<td>" + $("#SerialNumber").val() + "</td>" +
            "<td>" + $("#Relationship").val() + "</td>" +
             "<td>" +
              "<button type='button' " +
                      "onclick='productDelete(this);' " +
                      "class='btn btn-danger'>" +
                      "<span class='fas fa-trash' />" +
              "</button>" +
               "<button type='button' " +
                  "onclick='productDisplay(this);' " +
                  "class='btn btn-success'>" +
                  "<span class='fas fa-edit' />" +
          "</button>" +
            "</td>" +
          "</tr>"
      return ret;
    }
   
   // Delete product from <table>
    function productDelete(ctl) {
      $(ctl).parents("tr").remove();
    }
    // Clear form fields
    function formClear() {
      $("#Cname").val("");
      $("#DOB").val("");
      $("#select").val("");
      $("#SerialNumber").val("");
      $("#Relationship").val("");
    }
    
  </script>