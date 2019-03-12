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
                    <input type="text" id="tname" class="form-control" placeholder="tname" required="required">
                    <label for="tname">Teacher Name</label>
                  </div>
                </div>
              </div>
            </div>
              
                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="email" class="form-control" placeholder="email." required="required" autofocus="autofocus">
                    <label for="email">email</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="phone" class="form-control" placeholder="phone" required="required">
                    <label for="phone">phone</label>
                  </div>
                </div>
              </div>
            </div>
              
                <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="cname" class="form-control" placeholder="cname" required="required" autofocus="autofocus">
                    <label for="cname">Subject Name</label>
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
                    <input type="date" id="jyear" class="form-control" placeholder="jyear" required="required" autofocus="autofocus">
                    <label for="jyear">Joined Year</label>
                  </div>
                </div>
                <div class="col-md-6"> 
                  <div class="form-label-group">
                    <input type="date" id="hdate" class="form-control" placeholder="hdate" required="required">
                    <label for="hdate">Hire Date</label>
                  </div>
                </div>
              </div>
            </div>
            
            
                <div class="form-group">
                            <label for="des">des</label>
                            <textarea class="form-control" id="des" rows="3"></textarea>
                        </div>
                        <div class="row justify-content-end">
                        <button id="submit" class="btn btn-primary col-1 mr-3" >Submit</button>
                            <button id="submitnew" class="btn btn-success col-2 mr-3" >Submit & New</button>
                            <a class="btn btn-danger col-1 mr-3" href="http://localhost/xampserver/drcol/admin/teachers/">Cancel</a>
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

 

  </body>

</html>
