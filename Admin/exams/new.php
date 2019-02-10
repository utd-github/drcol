<?php include "../Layout/admin_layout.php" ?>
        <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">New Exam Form</a>
            </li>
          </ol>

            <div class="container">
      <div class="card">
        <div class="card-header">Exams</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
               
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="EName" class="form-control" placeholder="EName" required="required">
                    <label for="EName">EName</label>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="EType" class="form-control" placeholder="EType" required="required">
                    <label for="EType">EType</label>
                  </div>
                </div>
              </div>
            </div>
              
                                 <div class="form-label-group">
                    <input type="text" id="Description" class="form-control" placeholder="Description" required="required" autofocus="autofocus">
                    <label for="Description">Description</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="Date" class="form-control" placeholder="Date" required="required">
                    <label for="Date">Date</label>
                  </div>
                </div>
              </div>
            </div>
              
              
              
                 
          
              <div class="form-group">
              
                <div class="col-md-3">
            <a class="btn btn-primary btn-block" href="index.php">Register</a>
                  </div>
                  </div>
              </div>
              
          </form>
          
        </div>
      </div>
    </div>
         
         
        <!-- /.container-fluid -->

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

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>
