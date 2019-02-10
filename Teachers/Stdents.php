<?php include "layout/teachers_layout.php" ?>


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="Stdents.php">Students</a>
            </li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
             
            Exam List</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                     <th>ID</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Email address</th>
                      <th>Class</th>
                      <th>Operations</th>
                    </tr>

                  </thead>

                  <tfoot>
                     <tr>
                     <th>ID</th>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Email address</th>
                      <th>Class</th>
                      <th>Operations</th>
                     
                      
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                    <th></th>
                    <th></th>
                      <th></th>
                      <th></th>
                      <th></th>
                      <th></th>

                    </tr>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>                    
                      <th></th>
                       <th></th>
                      <th></th>
                      
                    </tr>
                  
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>©Copyright 2019 DDR's | All Rights Reserved </span>
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
    <?php include "layout/footer_layout.php" ?>
