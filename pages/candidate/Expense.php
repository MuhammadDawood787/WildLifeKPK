<?php 
    include "includes/header.php";
  
?>



<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-6">
        <h4 class="m-0 text-dark">Expenses</h4>
      </div>
      <div class="col-md-6">
        <ol class="breadcrumb float-md-right">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Expenses</li>
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
            <div class="card-title">Expenses</div>
           <!--  <div class="card-tools">
              <a href="#" class="btn btn-warning btn-sm shadow"> Human Resource List</a>
            </div> -->
          </div>
          <br>
      
          <!-- /.card-header -->
          <div class="card-body">
            <!-- form start -->
            <form method="post" id="regForm" enctype="multipart/form-data">
            
                       <div class="tab"><h3>Expenses Info</h3>
                  <div class="row">
                <div class="col-md-4">
                   <div class="form-group">
                    <label>Division</label>
                    <select name="" id="Sname" class="form-control select2">
                        <option value="">Choose</option>
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                      
                    </select>
                  </div>
                </div>
             
               
                 
                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Month</label>
                    <input type="text" name="" id="Cname" placeholder="Month" 
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>

                  <div class="col-md-4">
                  <div class="form-group">
                    <label>Particulars</label>
                    <input type="Text" name="" id="DOB" placeholder="Particulars"
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
               
                 <div class="col-md-4">
                  <div class="form-group">
                    <label> Previous</label>
                    <input type="text" name="" id="SerialNumber" placeholder="Previous" 
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                 <div class="col-md-4">
                  <div class="form-group">
                    <label>During The Month</label>
                    <input type="text" name="" id="Relationship" placeholder="During The Month"
                    class="form-control" autocomplete="off"
                    >
                  </div>
                </div>
                    <div class="col-md-4">
                   <div class="form-group">
                    <label>Total</label>
                    <input type="text" name="" id="total" placeholder="Total"
                    class="form-control" autocomplete="off"
                    required>
                  </div>
                 </div>
                   
                  <!-- Table Start -->
                   <div class=" col-lg-12">
              <div class="card card-plain">
                <div class="card-header card-header-success">
                  <h4 class="card-title mt-0">Expenses</h4>
                  <p class="card-category">You can add here children details of employee</p>
                </div>
                <div class="card-body">
                  <div class="">
                  <div class="row">
                  <div class="col-md-12">
               
            <table id="productTable" class="table table-bordered table-condensed table-striped">
                <thead>
                    <tr>
                        
                        <th>Month</th>
                        <th>Particulars</th>
                        <th>Previous</th>
                        <th>During The Month</th>
                        <th>Total</th>
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
                     <button type="button" id="updateButton" class="btn btn-success pull-right" onclick="productUpdate();">Add Expense</button>
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
      $("#SerialNumber").val($(cols[2]).text());
      $("#Relationship").val($(cols[3]).text());
      $("#total").val($(cols[4]).text());

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
            "<td>" + $("#SerialNumber").val() + "</td>" +
            "<td>" + $("#Relationship").val() + "</td>" +
            "<td>" + $("#total").val() + "</td>" +
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
      $("#SerialNumber").val("");
      $("#Relationship").val("");
      $("#total").val("");
    }
    
  </script>