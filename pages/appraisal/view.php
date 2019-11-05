<?php
  $sql="";
  if(!isset($_POST['submit'])){
    $sql = "SELECT*, appraisal.id as appraisal_id FROM appraisal, users where appraisal.user_id = users.id order by date_time";
  } else {
    $uid = $_POST['uid'];
    if($uid == 'all'){
        $sql = "SELECT*, appraisal.id as appraisal_id FROM appraisal,users where appraisal.user_id = users.id order by date_time";
    } else {
        $sql = "SELECT*, appraisal.id as appraisal_id FROM appraisal,users where appraisal.user_id = users.id and appraisal.user_id = '$uid' order by date_time";
    }
 
  }
  $q_app = mysqli_query($link,$sql);
  
?>
     <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        
        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
          <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
                  <label>Users</label>
                  <select class="form-control" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="uid">
                  <option selected="selected" data-select2-id="3" value="all">All</option>
                  <?php
                    $q_user = mysqli_query($link, "select*from users where role != 0");
                    while($d = mysqli_fetch_array($q_user)){
                   ?>
                    <option selected="selected" data-select2-id="3" value="<?php echo $d['id']; ?>"><?php echo $d['username']; ?></option>
                  <?php } ?>
                  </select>
                  <p></p>
                  <input type="submit" Value="Submit" name="submit" class="btn btn-primary">
            </div>
          </form>

            <!-- The time line -->
            <?php while($data = mysqli_fetch_assoc($q_app)) { ?>

            <!-- -->

            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                <span class="bg-red"><?php 
                    $oriDate = $data['date_time']; 
 
                    $newDate = date("d M Y", strtotime($oriDate));
                    echo $newDate;
                    
                    ?></span>
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-envelope bg-blue"></i>
                <div class="timeline-item">
                  <h3 class="timeline-header"><a href="#">Appaisal</a></h3>
                  <div class="timeline-body">
                  <?php echo $data['username']; ?>
                  </div>
                  <div class="timeline-footer">
                    <a class="btn btn-primary btn-sm" href="dashboard.php?page=appraisal-result&id=<?php echo $data['appraisal_id'] ?>">View Result</a>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <div>
                <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
            <!-- -->
            <?php } ?>


          </div>
          <!-- /.col -->
        </div>
      </div>
      <!-- /.timeline -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->