<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>

<!-- Pooper -->
<script src="plugins/bootstrap/js/popper.min.js"></script>

<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- DataTables -->
<script src="plugins/datatables/dataTables.min.js"></script>

<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Select2 -->
<script src="plugins/select2/js/select2.min.js"></script>

<script src="plugins/inputmask/inputmask.min.js"></script>



<!-- Initilize Select2 -->
<script type="text/javascript">
$(function () {
    $('.select2').select2({
      theme: 'bootstrap4'
    });
    $('.datatable').DataTable();
    
    $(":input").inputmask();

  	$('.title').tooltip({
  		trigger : 'hover'
  	});
});


</script>
