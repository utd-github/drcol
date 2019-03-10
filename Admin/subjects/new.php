<?php include "../Layout/admin_layout.php"?>
<div id="content-wrapper">
    <div class="container-fluid">
        <div class="container bg-dark">
            <div class="card bg-dark text-white mt-3">
                <div class="card-header">New Subjects Form</div>
                <div class="card-body">
                    <form id="subjectform">
                        <div class="form-group">
                            <input type="text" id="sname" class="form-control" placeholder="Subject Name">
                        </div>
                        <div class="form-group">
                            <label for="sdes">Description</label>
                            <textarea class="form-control" id="sdes" rows="3"></textarea>
                        </div>
                        <div class="row justify-content-end">
                            <button id="submit" class="btn btn-primary col-1 mr-3" href="">Submit</button>
                            <button id="submitnew" class="btn btn-success col-2 mr-3" href="">Submit & New</button>
                            <a class="btn btn-danger col-1 mr-3" href="http://localhost/xampserver/drcol/admin/subjects/">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer bg-dark text-white">
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

<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<script src="js/admin.subjects.js"></script>


</body>

</html>
