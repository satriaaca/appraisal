<?php
  //category
  $sql = "select * from question_category";
  $qr_cat = mysqli_query($link,$sql);
  //select count all result
  $uid = $_SESSION['user_id'];
  $now = date('Y-m-d');
  $id = $_GET['id'];
  $sql2 = "SELECT  *, SUM(score) AS total_score 
            FROM detail_appraisal,appraisal 
            WHERE   appraisal.id = detail_appraisal.appraisal_id
                    AND detail_appraisal.appraisal_id = '$id'
                    AND appraisal.user_id = '$uid' 
                    AND appraisal.date_time = '$now' 

            GROUP BY question_id";
  $q2 = mysqli_query($link,$sql2);
echo $id;
?>
   
   <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">Pie Chart</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                <canvas id="pieChart" style="height: 230px; min-height: 230px; display: block; width: 852px;" width="852" height="230" class="chartjs-render-monitor"></canvas>
              </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <script>
  $(function(){
          //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutData        = {
      labels: [
        <?php
            while($data = mysqli_fetch_assoc($qr_cat)){
                echo "'".$data['category']."',";
            }
        ?>
      ],
      datasets: [
        {
          <?php
                $i=1;
                $total = mysqli_num_rows($q2);
                echo "data:[";
                while($r = mysqli_fetch_array($q2)){
                    if($i < $total){
                        echo $r['total_score'].",";
                    } else {
                       echo $r['total_score'];
                    }
                    $i++;
                }
                echo "],"
          ?>
          // data: [700,500,400,600],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    var pieChart = new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions      
    })
  })
  </script>