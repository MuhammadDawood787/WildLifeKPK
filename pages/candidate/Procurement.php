<?php
include "includes/header.php";


?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">Procurement And Assets</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                   
                    <th>Procurements List</th>
                    <th>Payment Mode</th>
                    <th>Tender Date</th>
                    <th>Approval Date</th>
                    <th>Work Order Date</th>
                    <th>Material Registry</th>
                    <th>Entre of Assets</th>
                    <th>Material Registry</th>
                    <th>Distribution Status</th>
                   
                

           
                   
                    
                    
                   
                   
                  </tr>
                  </thead>
                  <tbody>
                   
                          
                 
                        
              
                  </tbody>
              
                </table>
              </div>
              <!-- /.card-body -->
            </div>



<?php
include "includes/footer.php";
?>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>