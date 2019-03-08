<?php include "../Layout/admin_layout.php" ?>
        <div id="content-wrapper">

        <div class="container-fluid">
        <div class="col-12 ">
            <table class="table table table-hover table-stripe table-bordered" width="100%" cellspacing="0">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Exam Name</th>
                        <th>Exam Description</th>
                        <th>Exam Date</th>
                        <th>Actions</th>
                        

                    </tr>
                </thead>
                <tbody id="examstable">
                </tbody>
            </table>
        </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>©Copyright 2019 DDR's | All Rights Reserved</span>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>


<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>

<script src="js/admin.exam.js"></script>

</body>

</html>
