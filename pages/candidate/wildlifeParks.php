<?php
include "includes/header.php";


?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">WILDLIFE PARKS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Name</th>
                    <th>Area(Hec)</th>
                    <th>District</th>
                    <th>Habitat</th>
                    <th>Key WildLife</th>
                    <th>Longitude</th>
                    <th>Latitude</th>
                  </tr>
                  </thead>
                  <tbody>
                     <tr>
                       <td>Cherat</td>
                       <td>2688</td>
                       <td>Nowshera</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Jackal, Fox, Hare, Grey partridge, Chakor partridge </td>
                       <td>71:54:43.94 E     </td>
                       <td>33:49:37.84 N </td>
                     
                     </tr>
                          
                     <tr>
                       <td>Manglot</td>
                       <td>715</td>
                       <td>Nowshera</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Chinkara, Urial, Hog deer,  Jackal, Fox, Hare, Grey partridge, Chakor partridge </td>
                       <td>71:59:03.56 E     </td>
                       <td>33:44:50.40 N </td>
                     
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