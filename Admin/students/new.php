<?php include "../Layout/admin_layout.php"?>
<div id="content-wrapper">

    <div class="container-fluid">

        <!-- Breadcrumbs-->


        <div class="container bg-dark">
            <div class="card bg-dark text-white">
                <div class="card-header">Students</div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="fname" class="form-control" placeholder="fname" required="required" autofocus="autofocus">
                                        <label for="fname">Full Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="rnum" class="form-control" placeholder="rnum" required="required">
                                        <label for="rnum">Roll No</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-label-group">
                                        <input type="text" id="phone" class="form-control" placeholder="phone" required="required">
                                        <label for="phone">Phone No</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="pob" class="form-control" placeholder="pob" required="required" autofocus="autofocus">
                                        <label for="pob">Place Of Birth</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="date" id="dob" class="form-control" placeholder="dob" required="required">
                                        <label for="dob">Date Of Birth</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="pid" class="form-control" placeholder="pid" required="required" autofocus="autofocus">
                                        <label for="pid">parent Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-label-group">
                                        <input type="text" id="pname" class="form-control" placeholder="pname" required="required">
                                        <label for="pname">Parent Type</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-label-group">
                                        <input type="text" id="sem" class="form-control" placeholder="sem" required="required" autofocus="autofocus">
                                        <label for="sem">semester</label>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-label-group">
                                <div class="form-label-group">
                                    <input type="date" id="sdate" class="form-control" placeholder="sdate" required="required" autofocus="autofocus">
                                    <label for="sdate">Submission Date</label>
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="des">Description</label>
                            <textarea class="form-control" id="des" rows="3"></textarea>
                        </div>
                        <div class="row justify-content-end">
                        <button id="submit" class="btn btn-primary col-1 mr-3" href="">Submit</button>
                            <button id="submitnew" class="btn btn-success col-2 mr-3" href="">Submit & New</button><a class="btn btn-danger col-1 mr-3" href="http://localhost/xampserver/drcol/admin/students/">Cancel</a>
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


</body>

</html>
