<?php
include "includes/header.php";


?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">WATERFOWL REFUGES</h3>
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
                       <td>D.I.Khan Waterfowl</td>
                       <td>3774</td>
                       <td>D.I.Khan</td>
                       <td>Wetlands & Riverian Forest</td>
                       <td>Waterfowl </td>
                       <td>70:55:58.94 E   </td>
                       <td>31:46:53.83 N </td>
                     
                     </tr>
                          
                     <tr>
                       <td>Lakki Crane Refuge</td>
                       <td>5180</td>
                       <td>Lakki Marwat</td>
                       <td>Wetlands & Riverian Forest</td>
                       <td>Crane, Waterfowl </td>
                       <td>71:07:22.86 E    </td>
                       <td>32:37:10.25 N </td>
                     
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