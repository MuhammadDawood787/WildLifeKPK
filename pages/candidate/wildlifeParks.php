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
                     <tr>
                       <td>Tanda</td>
                       <td>1133</td>
                       <td>Kohat</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Chinkara, Urial, Hog deer, Blue bul,  Hare, Jackal, Fox, Grey partridge, Chakor partridge</td>
                       <td>71:23:28.77 E     </td>
                       <td>33:34:28.17 N  </td>
                     
                     </tr>
                     <tr>
                       <td>Kotal</td>
                       <td>100</td>
                       <td>Kotal</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Chinkara, Urial, Hog deer, Blue bul, Hare, Jackal, Fox, Grey partridge, Chakor partridge  </td>
                       <td>71:24:53.05 E    </td>
                       <td>33:38:22.73 N </td>
                     
                     </tr>
                     <tr>
                       <td>Togh Mangara</td>
                       <td>1250</td>
                       <td>Kohat</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Jackal, Fox,  Hare, Black partridge, Grey partridge, Chakor partridge </td>
                       <td>71.58568993 </td>
                       <td>33.59607225</td>
                     
                     </tr>
                     <tr>
                       <td>Nizampur</td>
                       <td>2612</td>
                       <td>Nowshehra</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Urial, Hog deer, Chukar Partridge, Grey Partridge, Black Partridge, Chinkara, Hare,Jackal.</td>
                       <td>71.9180  </td>
                       <td>33.7570 </td>
                     
                     </tr>
                     <tr>
                       <td>Malakand Safari Park</td>
                       <td>97.12</td>
                       <td>Malakand</td>
                       <td>Sub Tropical Pine Forest, Sub Tropical Scrub Forest </td>
                       <td>Ringnecked pheasant, Wood green pheasant, Silver pheasant, Kalij pheasant, Golden pheasant</td>
                       <td>71.9270   </td>
                       <td>34.5580</td>
                     
                     </tr>
                     <tr>
                       <td>Lakki</td>
                       <td>10.11</td>
                       <td>Lakki Marwat</td>
                       <td>Sub Tropical Scrub Forest </td>
                       <td>Grey Partridge, Black Partridge, See-See partridge, Dakkani grey partridge  </td>
                       <td>70.8550   </td>
                       <td>32.75800</td>
                     
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