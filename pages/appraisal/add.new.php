<?php
  $sql = "select * from questions,question_category where questions.question_category_id = question_category.id";
  $qr = mysqli_query($link,$sql);

?>
   
   <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
      <form action = "dashboard.php?page=insert-appraisal" method="post" id="formAppraisal">
        <div class="row">
           <div class="col-md-12">

            <!-- -->
            <?php
            $i=1;
            while($q = mysqli_fetch_assoc($qr)){
                $id=$q['id'];
                if($q['id'] == '1'):

                  echo '
                  <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">'.$q['category'].'</h3>
                  </div>';
                  $sc1 = "select * from questions where question_category_id = '1'";
                  $qr1 = mysqli_query($link,$sc1);
                  while($c1 = mysqli_fetch_assoc($qr1)){
                    echo '<div class="card-body" style="text-align:center;">
                    <input type="hidden" value="'.$c1['id'].'" name="q_id[]">
                    <p>'.$i.'. '.$c1['question'].'</p>
                    <!-- radio -->
                    <fieldset>
                    <div class="form-group clearfix">
                      <div class="icheck-danger">
                        <input type="radio" id="radioPrimary1" name="radio['.$id.']" value="1">
                        <label for="radioPrimary1">
                          Strongly Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="2">
                        <label for="radioPrimary2">
                          Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="3">
                        <label for="radioPrimary2">
                          Undecided
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="4">
                        <label for="radioPrimary2">
                          Agree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="5">
                        <label for="radioPrimary2">
                          Strongly Agree
                        </label>
                      </div>
                    </div>
                    <input type="hidden" value="'.$c1['question_value'].'" name="q_score[]">
                    </fieldset>
              </div>
              ';
                  }

                elseif($q['id'] == 2):
                  echo '
                  <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">'.$q['category'].'</h3>
                  </div>';
                  $sc2 = "select * from questions where question_category_id = '2'";
                  $qr2 = mysqli_query($link,$sc2);
                  while($c2 = mysqli_fetch_assoc($qr2)){
                  echo '
                  <div class="card-body" style="text-align:center;">
                    <input type="hidden" value="'.$c2['id'].'" name="q_id[]">
                    <p>'.$i.'. '.$c2['question'].'</p>
                    <!-- radio -->
                    <fieldset>
                    <div class="form-group clearfix">
                      <div class="icheck-danger">
                        <input type="radio" id="radioPrimary1" name="radio['.$id.']" value="1">
                        <label for="radioPrimary1">
                          Strongly Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="2">
                        <label for="radioPrimary2">
                          Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="3">
                        <label for="radioPrimary2">
                          Undecided
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="4">
                        <label for="radioPrimary2">
                          Agree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="5">
                        <label for="radioPrimary2">
                          Strongly Agree
                        </label>
                      </div>
                    </div>
                    <input type="hidden" value="'.$c2['question_value'].'" name="q_score[]">
                    </fieldset>
              </div>
              ';
                }
                elseif($q['id'] == 3):
                  echo '
                  <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">'.$q['category'].'</h3>
                  </div>';
                  $sc3 = "select * from questions where question_category_id = '3'";
                  $qr3 = mysqli_query($link,$sc3);
                  while($c3 = mysqli_fetch_assoc($qr3)){
                  echo '
                  <div class="card-body" style="text-align:center;">
                  <input type="hidden" value="'.$c3['id'].'" name="q_id[]">
                    <p>'.$i.'. '.$c3['question'].'</p>
                    <!-- radio -->
                    <fieldset>
                    <div class="form-group clearfix">
                      <div class="icheck-danger">
                        <input type="radio" id="radioPrimary1" name="radio['.$id.']" value="1">
                        <label for="radioPrimary1">
                          Strongly Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="2">
                        <label for="radioPrimary2">
                          Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="3">
                        <label for="radioPrimary2">
                          Undecided
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="4">
                        <label for="radioPrimary2">
                          Agree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="5">
                        <label for="radioPrimary2">
                          Strongly Agree
                        </label>
                      </div>
                    </div>
                    <input type="hidden" value="'.$c3['question_value'].'" name="q_score[]">
                    </fieldset>
              </div>
              ';
                  }
                
                elseif($q['id'] == 4):
                  echo '
                  <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">'.$q['category'].'</h3>
                  </div>';
                  $sc4 = "select * from questions where question_category_id = '4'";
                  $qr4 = mysqli_query($link,$sc4);
                  while($c4 = mysqli_fetch_assoc($qr4)){
                    echo '
                  <div class="card-body" style="text-align:center;">
                  <input type="hidden" value="'.$c4['id'].'" name="q_id[]">
                    <p>'.$i.'. '.$c4['question'].'</p>
                    <!-- radio -->
                    <fieldset>
                    <div class="form-group clearfix">
                      <div class="icheck-danger">
                        <input type="radio" id="radioPrimary1" name="radio['.$id.']" value="1">
                        <label for="radioPrimary1">
                          Strongly Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="2">
                        <label for="radioPrimary2">
                          Disagree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="3">
                        <label for="radioPrimary2">
                          Undecided
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="4">
                        <label for="radioPrimary2">
                          Agree
                        </label>
                      </div>
                      <div class="icheck-success">
                        <input type="radio" id="radioPrimary2" name="radio['.$id.']"  value="5">
                        <label for="radioPrimary2">
                          Strongly Agree
                        </label>
                      </div>
                    </div>
                    <input type="hidden" value="'.$c4['question_value'].'" name="q_score[]">
                    </fieldset>
              </div>
              ';
              }
                endif;
                $i++;
              }
            ?>
            </div>
            <!-- -->
            <!-- /.card -->
            <div style="text-align:center; margin:20px 0;">
               <input type="submit" class="btn btn-primary" value="Submit" id="saveAppraisal">
            </div>
          </div> 
          <!-- /. Col -->
        </div>
        </form>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->