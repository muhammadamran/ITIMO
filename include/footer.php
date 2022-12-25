<script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
<script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
<script src="assets/libs/js/main-js.js"></script>
<!-- Autocomple -->
<link rel="stylesheet" href="libraries/autocomplete/autocomplete.css">
<script src="libraries/autocomplete/jquery-1.10.2.js"></script>
<script src="libraries/autocomplete/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".preloader").fadeOut();
    })

    $(document).ready(function() {
        $('#dataTables').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5', 'excelHtml5', 'csvHtml5', 'pdfHtml5'
            ],
            "order": [],
            lengthMenu: [
                [10, 15, 20, 25, 50, 100, 150, 200, 250, 300, -1],
                [10, 15, 20, 25, 50, 100, 150, 200, 250, 300, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });

    $(document).ready(function() {
        $('#dataTablesN').DataTable({
            "order": [],
            lengthMenu: [
                [10, 25, 50, 100, 150, 200, 250, 300, -1],
                [10, 25, 50, 100, 150, 200, 250, 300, 'All'],
            ],
            "columnDefs": [{
                "targets": 'no-sort',
                "orderable": false,
            }],
            // iDisplayLength: -1
        });
    });
</script>
</body>

</html>