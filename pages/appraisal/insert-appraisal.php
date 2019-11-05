<?php
      $user_id = $_SESSION['user_id'];
      $date = date ("Y-m-d ");
      $sql_in_app = "insert into appraisal(user_id, date_time) values ('$user_id','$date')";
      mysqli_query($link, $sql_in_app);

      // select inserted data into database
      $latest_data = mysqli_query($link,"select*from appraisal order by id desc");
      $lresult = mysqli_fetch_array($latest_data);
      $id = $lresult['id'];
      $qid = $_POST['q_id'];
      $radio = $_POST['radio'];
      $score = $_POST['q_score'];
      
      // insert into appraisal details
      foreach($radio as $key => $r){
            $skor = $r*$score[$key-1];
            $q_id =$qid[$key-1];
            //echo ". Choice = ".$r.", Score =".$score[$key-1].", Total = ".$skor."<br/>";
            //var_dump($skor);
            $sql_in_detail = "insert into detail_appraisal(appraisal_id, question_id, score) values ('$id','$q_id',$skor)";
            mysqli_query($link, $sql_in_detail);
      }

      echo '
      <!-- Main content -->
      <div class="content">
            <div class="container">
                  <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-check"></i> Success !</h5>
                        Appraisal Submit Success, Click button below to see result
                  </div>
                  <p>
                  <a href="dashboard.php?page=appraisal-result&id='.$id.'" class="btn btn-block btn-outline-success btn-lg">Show Result</a></p>
            </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->';

      

      /* $value = $_POST['radio'];
      foreach($value as $row){
            echo $row;
      }
      echo "<br/>";
      $value2 = $_POST['q_score'];
      foreach($value2 as $row2){
            echo $row2;
      }
      */
      
?>