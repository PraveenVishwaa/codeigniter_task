<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>  
</head>
<body>


<div class="back">


  <div class="div-center">


    <div class="content">

    <?php
    if(isset($message)){ ?>

        <div class="alert alert-danger">
            <strong>Incorrect ! </strong> Please try again.
        </div>

    <?php }?>


      <h3>Login</h3>
      <hr />
      <?php echo form_open('user/login'); ?>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <!-- <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Use:admin"> -->
          <?php
            $email = array(
                'type'  => 'email',
                'name'  => 'email',
                'id'    => 'exampleInputEmail1',
                'class' => 'form-control',
                'placeholder' => 'Use:admin'
            );
            echo form_input($email); 
        ?>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <?php
            $email = array(
                'type'  => 'password',
                'name'  => 'password',
                'id'    => 'exampleInputPassword1',
                'class' => 'form-control',
                'placeholder' => 'Use:1234'
            );
            echo form_input($email); 
            ?>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        <hr />
        <button type="button" class="btn btn-link">New? Register Here.</button>
        
        <?php echo form_close(); ?>
    </div>


    </span>
  </div>
    <style>
        .back {
            background: #e2e2e2;
            width: 100%;
            position: absolute;
            top: 0;
            bottom: 0;
            }

            .div-center {
            width: 400px;
            height: 400px;
            background-color: #fff;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            margin: auto;
            max-width: 100%;
            max-height: 100%;
            overflow: auto;
            padding: 1em 2em;
            border-bottom: 2px solid #ccc;
            display: table;
            }

            div.content {
            display: table-cell;
            vertical-align: middle;
            }
    </style>
    <script src =  "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</body>
</html>