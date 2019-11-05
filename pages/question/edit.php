<?php
  // Category Select
  $sql_c = "select * from question_category";
  $cat_q   = mysqli_query($link,$sql_c);
  // Category Select
    $sql_qe = "select * from questions where id='$_GET[id]'";
    $cat_qe   = mysqli_query($link,$sql_qe);
    $row_q   = mysqli_fetch_array($cat_qe);
?>
   <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">  
                <div class="card-body">
                  <div class="form-group">
                  <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group">
                            <label>Category</label>
                            <select class="form-control" name="category" id="category" disabled>
                              <?php while($cat = mysqli_fetch_assoc($cat_q)) { ?>
                              <option value="<?php ?>"><?php echo $cat['category'] ?></option>
                              <?php } ?>
                            </select>
                          </div>
                        </div>
                  
                      </div>
                  </div>
                  <!-- --- -->
                  <div class="form-group">
                  <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group">
                            <label>Question</label>
                            <textarea class="form-control" rows="3" placeholder="Enter ..." name="question" id="question"><?php echo $row_q['question']; ?></textarea>
                          </div>
                        </div>

                      </div>
                  </div>

                  <div class="form-group">
                  <div class="row">
                        <div class="col-sm-6">
                          <!-- select -->
                          <div class="form-group">
                            <label>Question Value</label>
                            <input type="number" class="form-control" placeholder="0" name="question_value" id="question_value" value="<?php echo $row_q['question_value']; ?>"> 
                          </div>
                        </div>

                      </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <input type="submit" class="btn btn-primary" name="submit" text="Submit">
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="plugins/toastr/toastr.min.js"></script>
<?php 
  // insert
  if(isset($_POST['submit'])){
    $sql_q = "update question set question_category_id='$_POST[category]',question='$_POST[question]',question_value='$_POST[question_value]') WHERE ";
    //echo $sql_q;
    $que_q = mysqli_query($link, $sql_q);
    if($que_q){
          ?>
          <script>
              $(function(){
              toastr.success('Input Data Success');
              });
              window.setTimeout(function() {
                  window.location = 'dashboard.php';
                }, 1000);
            </script>

          <?php
    }
  }

?>
