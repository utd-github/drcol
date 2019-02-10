<?php include "layout/teachers_layout.php" ?>


      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Messages</a>
            </li>
          </ol>

            <div class="container">
      <div class="card">
        <div class="card-header">Send Messages</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-row">
               
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="Send Message to (Username)*" class="form-control" placeholder="Send Message to (Username)*" required="required">
                    <label for="Send Message to (Username)*">Send Message to (Username)</label>
                    </div>
                </div>
              </div>
            </div>
                    <div class="form-label-group">
                    <input type="text" id="Messages" class="form-control" placeholder="Messages" required="required" autofocus="autofocus">
                    <label for="Messages">Messages</label>
                  </div>
                </div>

                <div class="form-group">
                <div class="col-md-3">
            <a class="btn btn-primary btn-block" href="Messages.php">Send Message</a>
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
