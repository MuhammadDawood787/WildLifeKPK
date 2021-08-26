<?php
include "includes/header.php";


?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">WILDLIFE SANCTUARIES</h3>
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
                       <td>Manshi</td>
                       <td>2560</td>
                       <td>Mansehra</td>
                       <td>Moist Temperate Forest & Juniper Scrub</td>
                       <td>Monal pheasant, Koklass pheasant, Chakor partridge, Rhesus monkey, Languor, Musk deer, Common leopard, Martin</td>
                       <td>73:19:16.25 E</td>
                       <td>34:28:41.35 N</td>
                     
                     </tr>
                          
                     <tr>
                       <td>Agram Basti</td>
                       <td>29866</td>
                       <td>Chitral</td>
                       <td>Alpine & Sub Alpine Pastures</td>
                       <td>Snow leopard, Himalayan ibex, Wolf, Snow cock, Chakor partridge</td>
                       <td>71:33:54.14 E   </td>
                       <td>36:16:56.01 N </td>
                     
                     </tr>
                          <tr>
                       <td>Boraka</td>
                       <td>2025</td>
                       <td>Kohat</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Urial, Chinkara, Common leopard, Chakor, Black partridge</td>
                       <td>71:13:50.19 E   </td>
                       <td>33:31:56.71 N </td>
                     
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