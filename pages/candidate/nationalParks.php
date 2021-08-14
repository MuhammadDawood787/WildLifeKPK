<?php 
    include "includes/header.php";
  
?>
 <div class="card">
              <div class="card-header">
                <h3 class="card-title">National Parks</h3>
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
                       <td>Ayubia</td>
                       <td>3312</td>
                       <td>Abbottabad</td>
                       <td>Moist Temprature forest</td>
                       <td>Koklass pheasant, Kalij pheasant, Chakor partridge, Yellow throated martin, Common leopard, Rhesus monkey, Flying squirrel.</td>
                       <td>73:24:45.76 E</td>
                       <td>34:01:55.50 N</td>
                     
                     </tr>
                          <tr>
                       <td>Chitral Gol</td>
                       <td>7750</td>
                       <td>Chitral</td>
                       <td>Alpine Meadows & Dry Temperate Forest </td>
                       <td>Markhor, Urial, Snow leopard, Wolf, Snow cock, Chakor partridge, Greenwood pigeon</td>
                       <td>71:42:12.60 E</td>
                       <td>35:53:30.34 N</td>
                     
                     </tr>
                     <tr>
                       <td>Lulusar & Dodipath</td>
                       <td>30375</td>
                       <td>Mansehra</td>
                       <td>Alpine Meadows, Sub Alpine Pasture, Wetlands & Dry Temperate Forest </td>
                       <td>Common leopard, Black bear, Ibex, Martin, Monal pheasant, Koklass pheasant, Ram chakor </td>
                       <td>73:55:41.55 E</td>
                       <td>35:04:54.96 N</td>
                     
                     </tr>
                        <tr>
                       <td>Saif ul Maluk</td>
                       <td>4867</td>
                       <td>Mansehra</td>
                       <td>Alpine Meadows, Sub Alpine pastures , cold desert & Wetlands  </td>
                       <td>Black bear, Martin, Ram chakor, Snow partridge, Monal pheasant </td>
                       <td>73:42:14.98 E</td>
                       <td>34:51:48.08 N </td>
                     
                     </tr>
                           <tr>
                       <td>Shiekh Badin</td>
                       <td>15540</td>
                       <td>DI Khan</td>
                       <td>Sub Tropical Pine Forest & Sub Tropical Scrub Forest</td>
                       <td>Black Partridges, Grey partridges, Chakor partridge, Blue Rock pigeon, Pied bush chat, Red vented bulbul,
Fox, Hare, Jackal, Jungle cat, Porcupine, Wild boar, Wolf 
</td>
                       <td>70:48:19.79 E</td>
                       <td>32:18:03.14 N </td>
                     
                     </tr>
                         <tr>
                       <td>Broghil Valley</td>
                       <td>134744</td>
                       <td>Chitral</td>
                       <td>Sub-Alpine pastures and alpine meadows</td>
                       <td>Markhor, Snow leopard, Snow cock, Chakor partridge, Greenwood pigeon, Snow partridge
</td>
                   <td></td>  
                   <td></td>  
                     
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