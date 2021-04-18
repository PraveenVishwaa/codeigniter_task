

    


<h3>Hi <?php echo $_SESSION['username']; ?></h3>
<div class="container">
    <a class="btn btn-secondary pull-right" href="<?php echo base_url(); ?>index.php/user/front_page">Back</a>
    <div class="row">

    <?php echo form_open_multipart('user/add'); ?>
    
        <div class="form-group">
          <label for="exampleInputtext">Username</label>
          <!-- <input type="email" name="email" class="form-control" id="exampleInputtext" placeholder="Use:admin"> -->
          <?php
            $email = array(
                'type'  => 'text',
                'name'  => 'username',
                'id'    => 'exampleInputtext',
                'class' => 'form-control',
                'placeholder' => 'Enter Username',
                'required' => true
            );
            echo form_input($email); 
        ?>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Use:admin"> -->
          <?php
            $email = array(
                'type'  => 'email',
                'name'  => 'email',
                'id'    => 'exampleInputEmail1',
                'required' => true,
                'class' => 'form-control',
                'placeholder' => 'Enter email',
                "onfocusout" => "check_exist()"
            );
            echo form_input($email); 
            ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <?php
            $pwd = array(
                'type'  => 'password',
                'name'  => 'password',
                'id'    => 'exampleInputPassword1',
                'class' => 'form-control',
                'required' => true,
                'placeholder' => 'Enter Password'
            );
            echo form_input($pwd); 
            ?>
        </div>
        <div class="form-group">
          <label for="age_input">Age</label>
          <!-- <input type="email" name="email" class="form-control" id="age_input" placeholder="Use:admin"> -->
          <?php
            $age = array(
                'type'  => 'number',
                'name'  => 'age',
                'id'    => 'age_input',
                'class' => 'form-control',
                'placeholder' => 'Enter Age'
            );
            echo form_input($age); 
        ?>
        </div>
        <div class="form-group">
        <label for="exampleInputtext">Gender</label><br>

        <input id="gender" name="gender" type="radio" class=""  value="1" />
                <label for="gender" class="">Male</label>

                <input id="gender" name="gender" type="radio" class="" value="2" />
                <label for="gender" class="">Female</label>

                <input id="gender" name="gender" type="radio" class="" value="3" />
                <label for="gender" class="">Others</label>

        </div>
        <input type="file" name="userphoto" size="20" required/>

        <br>
            <br>
        <button type="submit" id="savebtn" class="btn btn-primary">Save</button>
        
        <?php echo form_close(); ?>


    </div>

</div>
<script>

function check_exist() {
    // ver a = elem.val();
    var email = $("#exampleInputEmail1").val();
    $.ajax({
    url : '<?php echo base_url(); ?>index.php/user/check_exist',
    type : 'POST',
    data : {
        'email' : email
    },
    dataType:'json',
    success : function(data) {  
        if(data.exist == true){
            alert('Email Already Exist');
            $("#savebtn").prop( "disabled", true );
        }else{
            $("#savebtn").prop( "disabled", false );
        }
    },
    error : function(request,error)
    {
        alert("Request: "+JSON.stringify(request));
    }
    });
}
</script>