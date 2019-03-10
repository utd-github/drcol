<?php include "../Layout/admin_layout.php" ?>
        <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
         

          <div class="container bg-dark">
            <div class="card bg-dark text-white">
        <div class="card-header">Teachers</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="TName" class="form-control" placeholder="TName" required="required">
                    <label for="TName">Teacher Name</label>
                  </div>
                </div>
              </div>
            </div>
              
                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="Email" class="form-control" placeholder="Email." required="required" autofocus="autofocus">
                    <label for="Email">Email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Phone" class="form-control" placeholder="Phone" required="required">
                    <label for="Phone">Phone</label>
                  </div>
                </div>
              </div>
            </div>
              
                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="CName" class="form-control" placeholder="CName" required="required" autofocus="autofocus">
                    <label for="CName">Subject Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="Qualification" class="form-control" placeholder="Qualification" required="required">
                    <label for="Qualification">Qualification</label>
                  </div>
                </div>
              </div>
            </div>
              
              
              
                   <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="JYear" class="form-control" placeholder="JYear" required="required" autofocus="autofocus">
                    <label for="JYear">Joined Year</label>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="form-label-group">
                    <input type="date" id="HDate" class="form-control" placeholder="HDate" required="required">
                    <label for="HDate">Hire Date</label>
                  </div>
                </div>
              </div>
            </div>
            
            
                <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" rows="3"></textarea>
                        </div>
                        <div class="row justify-content-end">
                            <a class="btn btn-primary col-1 mr-3" href="">Submit</a>
                            <a class="btn btn-success col-1 mr-3" href="http://localhost/xampserver/drcol/admin/teachers/">Cancel</a>
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

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

 

  </body>

</html>
