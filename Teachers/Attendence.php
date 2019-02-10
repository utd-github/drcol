<?php include "layout/teachers_layout.php" ?>
      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Attendance</a>
            </li>
          </ol>

            <div class="container">
      <div class="card">
        <div class="card-header">Select attendance info to add</div>
        <div class="card-body">
          <form>

          <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="Class" class="form-control" placeholder="Class" required="required" autofocus="autofocus">
                    <label for="Class">Class</label>
                  </div>
                </div>
                </div>
                </div>

                <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="Subject" class="form-control" placeholder="Subject" required="required">
                    <label for="Subject">Subject</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="date" id="Date" class="form-control" placeholder="Date" required="required">
                    <label for="Date">Date</label>
                  </div>
                </div>
              </div>
            </div>
           

           
           
          
              <div class="form-group">
              <div class="form-row">
                <div class="col-md-3">
            <a class="btn btn-primary btn-block" href="attendenceS.php">Control attendance</a>
                  </div>
                  </div>
              </div>
              
          </form>
          
        </div>
      </div>
    </div>
          <!-- DataTables Example -->
          
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
    <?php include "layout/footer_layout.php" ?>