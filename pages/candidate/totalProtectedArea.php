<?php
include "includes/header.php";


?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">TOTAL PROTECTED AREA IN THE PROVINCE</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Category</th>
                   
                    <th>Number</th>
                      <th>Area(Hec)</th>
                  </tr>
                  </thead>
                  <tbody>
                     <tr>
                       <td>Community Game Reserves  </td>
                       <td>86</td>
                       <td>420509</td>
                       
                     
                     </tr>
                          
                     <tr>
                       <td>Private Game Reserves</td>
                       <td>22</td>
                       <td>20602</td>
                    
                     
                     </tr>
                     <tr>
                       <td>Public Game Reserves</td>
                       <td>38</td>
                       <td>371066</td>
                 
                     
                     </tr>
                     <tr>
                       <td>National Parks </td>
                       <td>6</td>
                       <td>196588</td>
                
                     
                     </tr>
                     <tr>
                       <td>Wildlife Sanctuaries </td>
                       <td>3</td>
                       <td>34451</td>
                    
                     
                     </tr>
                     <tr>
                       <td>Wildlife Refuges </td>
                       <td>2</td>
                       <td>8954</td>
                
                     
                     </tr>
                    
                     
                 
                        
              
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