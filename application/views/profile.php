<?php echo modules::run('_main/top', empty($meta) ? array() : $meta); ?>
<script>
  function save_profile(){
    $.post("<?= url('_ajax/save_profile') ?>",
            $("#profile_form").serialize(),
            function(data){
              if(data.msg === '1'){
                $.each(data.field_data, function(f_key, f_value){
                  $("#div_" + f_key).removeClass('has-error');
                  $("#" + f_key).val(f_value);
                });
                $('#msg_content').html(data.msg_data);
                $('#msg_container').removeClass('alert-danger').addClass('alert-success').show();
                $('#msg_close_button').show();
              }
              else{
                $.each(data.field_data, function(f_key, f_value){
                  $("#div_" + f_key).removeClass('has-error');
                  $("#" + f_key).val(f_value);
                });
                $.each(data.error_array, function(e_key, e_value){
                  $("#div_" + e_key).addClass('has-error');
                });
                $('#msg_content').html(data.msg_data);
                $('#msg_container').removeClass('alert-success').addClass('alert-danger').show();
                $('#msg_close_button').show();
              }
            }, 'json');
    return false;
  }

  function password_check(){
    $('#div_user_password').removeClass('has-error');
    if($('#confirm_password').val() !== ''){
      if($('#user_password').val() === $('#confirm_password').val()){
        $('#div_confirm_password').removeClass('has-error').addClass('has-success');
      }
      else{
        $('#div_confirm_password').removeClass('has-success').addClass('has-error');
      }
    }
  }
</script>

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <ol class="breadcrumb">
    <li><a href="<?= url('home') ?>">Home</a></li>
    <li class="active">Profile</li>
  </ol>
  <h4 class="page-header">Profile</h4>
  <div id="msg_container" class="alert alert-dismissible" role="alert" style="display:none">
    <button id="msg_close_button" type="button" class="close" onclick="$('#msg_container').hide();" style="display:none">&times;</button>
    <span id="msg_content"></span>
  </div>
  <?php if($this->session->flashdata('msg') == '1'){ ?>
    <div id="msg_container2" class="alert alert-success alert-dismissible" role="alert">
      <button id="msg_close_button2" type="button" class="close" onclick="$('#msg_container2').hide();">&times;</button>
      <span id="msg_content2"><?= $this->session->flashdata('msg_data') ?></span>
    </div>
  <?php } ?>
  <div class="container-fluid well">
    <form id="profile_form" class="form-horizontal" role="form">
      <div id="div_user_firstname" class="form-group">
        <label for="user_firstname" class="col-sm-3 control-label">First Name</label>
        <div class="col-sm-9">
          <input type="text" id="user_firstname" name="user_firstname" class="form-control input_lg" placeholder="Enter first name" value="<?= $userinfo['user']['user_firstname'] ?>">
        </div>
      </div>
      <div id="div_user_lastname" class="form-group">
        <label for="user_lastname" class="col-sm-3 control-label">Last Name</label>
        <div class="col-sm-9">
          <input type="text" id="user_lastname" name="user_lastname" class="form-control input_lg" placeholder="Enter last name" value="<?= $userinfo['user']['user_lastname'] ?>">
        </div>
      </div>
      <?php if(is_admin($this)){ ?>
      <div id="div_user_email" class="form-group">
        <label for="user_email" class="col-sm-3 control-label">Email</label>
        <div class="col-sm-9">
          <input type="email" id="user_email" name="user_email" class="form-control input_lg" placeholder="Enter email" value="<?= $userinfo['user']['user_email'] ?>">
        </div>
      </div>
      <div id="div_user_password" class="form-group">
        <label for="user_password" class="col-sm-3 control-label">Password</label>
        <div class="col-sm-9">
          <input type="password" id="user_password" name="user_password" class="form-control input_lg" placeholder="Enter password" onkeyup="password_check();">
        </div>
      </div>
      <div id="div_confirm_password" class="form-group has-feedback">
        <label for="confirm_password" class="col-sm-3 control-label">Confirm Password</label>
        <div class="col-sm-9">
          <input type="password" id="confirm_password" name="confirm_password" class="form-control input_lg" placeholder="Confirm password" onkeyup="password_check();">
        </div>
      </div>
      <?php } ?>
      <div class="form-group nomarg">
        <div class="col-sm-offset-3 col-sm-9">
          <button type="button" class="btn btn-success" onclick="save_profile();">Save</button>
        </div>
      </div>
    </form>
  </div>
</div>

<?php echo modules::run('_main/bottom');
