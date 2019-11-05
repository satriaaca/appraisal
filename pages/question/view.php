<?php
  $sql = "SELECT questions.id, questions.question, questions.question_value, question_category.category FROM questions,question_category WHERE questions.question_category_id = question_category.id";
  $q_ques = mysqli_query($link,$sql);
  
?>
  <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="dashboard.php?page=add-question" class="btn btn-success">Add New</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Question Category</th>
                  <th>Question</th>
                  <th>Question Value</th>
                  <th></th>
                </tr>
                </thead>
                <tbody>
                  <?php
                  $i =1; while($q = mysqli_fetch_assoc($q_ques)) { ?>
                <tr>
                  <td><?php echo $i; ?></td>
                  <td><?php echo $q['category']; ?></td>
                  <td><?php echo $q['question']; ?></td>
                  <td><?php echo $q['question_value']; ?></td>
                  <td>  
                      <a class="btn btn-sm btn-warning" href="dashboard.php?page=edit-question&id=<?php echo $q['id']; ?>">Edit</a>
                      <a class="btn btn-sm btn-danger" href="dashboard.php?page=delete-question&id=<?php echo $q['id']; ?>">Delete</a>
                  </td>
                </tr>
                  <?php $i++; } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Question Category</th>
                  <th>Question</th>
                  <th>Score</th>
                  <th></th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
  <!-- /.content-wrapper -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
