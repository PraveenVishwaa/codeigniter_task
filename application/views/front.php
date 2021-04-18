


<h3>Hi <?php echo $_SESSION['username']; ?></h3>
<div class="container">
    <a class="btn btn-primary pull-right" href="<?php echo base_url(); ?>index.php/user/create_new">Register New</a>
    <div class="row">
    <table class="table table-hover">
        <thead>
            <tr>
            <th>#</th>
            <th>Username</th>
            <th>E-mail</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user_list as $key => $value) {
                if ($_SESSION['user_id'] == $value->user_id) { ?>
                    <tr id="row_<?= $value->user_id ?>">
                        <td>1</td>
                        <td><?= $value->username ?></td>
                        <td><?= $value->email ?></td>
                        <td><?= $value->age ?></td>
                        <td><?= ($value->gender == '1') ? 'Male' : 'Female' ?></td>
                        <td>
                        <img  data-toggle="modal" data-target="#myModal" src="<?php echo base_url().$value->photo; ?>" style="width:100px;height:100px;cursor:pointer;" onclick="popup(<?= $value->user_id ?>)" />
                        </td>
                    </tr>
            <?php  } } ?>
            <?php $i=2; foreach ($user_list as $key => $value) { if ($_SESSION['user_id'] == $value->user_id) { continue;} ?>
                <tr id="row_<?= $value->user_id ?>">
                    <td><?= $i ?></td>
                    <td><?= $value->username ?></td>
                    <td><?= $value->email ?></td>
                    <td><?= $value->age ?></td>
                    <td><?= ($value->gender == '1') ? 'Male' : 'Female' ?></td>
                    <td>
                        <img  data-toggle="modal" data-target="#myModal" src="<?php echo base_url().$value->photo; ?>" style="width:100px;height:100px;cursor:pointer;" onclick="popup(<?= $value->user_id ?>)" />
                    </td>
                </tr>
            <?php  $i++; } ?>
        </tbody>
    </table>

    </div>

</div>

<div class="container">
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Details</h4>
        </div>
        <div class="modal-body">
          <p>Username: <strong id="disp_name"></strong></p>
          <p>E-mail: <strong id="disp_email"></strong></p>
          <p>Age: <strong id="disp_age"></strong></p>
          <p>Gender: <strong id="disp_gender"></strong></p>
          <div id="disp_image">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script>
function popup(id){
    // alert(id);
   var dat = $("#row_"+id).children();
   $("#disp_name").html(dat[1].innerHTML);
   $("#disp_email").html(dat[2].innerHTML);
   $("#disp_age").html(dat[3].innerHTML);
   $("#disp_gender").html(dat[4].innerHTML);
   $("#disp_image").html(dat[5].innerHTML);
//    alert(dat[1].innerHTML);
}
</script>