<div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <!-- Footer -->
    <footer class="page-footer font-small footer-light navbar-shadow">
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <!-- BEGIN: Vendor JS-->
    <script src="assets/admin/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="assets/admin/vendors/js/ui/jquery.sticky.js"></script>
    <script src="assets/admin/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="assets/admin/vendors/js/tables/jquery.dataTables.min.js"></script>
    <script src="assets/admin/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="assets/admin/vendors/js/tables/datatable/dataTables.responsive.min.js"></script>
    <script src="assets/admin/vendors/js/tables/datatable/dataTables.rowReorder.min.js"></script>
    <script src="assets/admin/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="assets/admin/js/core/libraries/jquery_ui/jquery-ui.min.js"></script>
    <script src="assets/admin/js/scripts/ui/jquery-ui/date-pickers.js"></script>
    <script src="assets/admin/vendors/js/forms/select/select2.min.js"></script>
    <!-- END: Page Vendor JS-->

    <script src="assets/admin/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="assets/admin/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="assets/admin/vendors/js/forms/toggle/switchery.min.js"></script>

    <!-- BEGIN: Theme JS-->
    <script src="assets/admin/js/core/app-menu.js"></script>
    <script src="assets/admin/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="assets/admin/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="assets/admin/js/scripts/pages/project-task-list.js"></script>
    <!-- END: Page JS-->

    <script src="assets/admin/js/scripts/tables/datatables/datatable-advanced.js"></script>
    <script src="assets/admin/js/tables/datatable/datatables.min.js"></script>
    <script src="assets/admin/js/tables/datatable/dataTables.buttons.min.js"></script>
    <script src="assets/admin/js/scripts/forms/validation/form-validation.js"></script>
    <script src="assets/admin/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="assets/admin/vendors/js/extensions/sweetalert.min.js"></script>
    <script src="assets/admin//vendors/js/extensions/toastr.min.js"></script>
    <script src="assets/admin/js/scripts/extensions/toastr.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
    window.setTimeout(function () {
        $(".alert").fadeTo(400, 0).slideUp(400, function () {
            $(this).remove();
        });
    }, 4000);
    $(document).ready(function () {
        $(".cancel-button").click(function () {
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })

            swalWithBootstrapButtons.fire({
                title: 'Are you sure?',
                text: "To Delete This Record!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire(
                        'Deleted!',
                        'Your record has been deleted.',
                        'success'
                    )
                    let id = $(this).parent().parent().children("#mID").html();
                    setTimeout(function () {
                        window.location.href = "?controller=dashboard&action=delete&id=" + id;
                    }, 1000);
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelled',
                        'Your record is safe :)',
                        'error'
                    )
                }
            })

        });
    });
</script>
</body>
<!-- END: Body-->

</body>
</html>