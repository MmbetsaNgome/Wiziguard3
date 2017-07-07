
  <?php if( $this->session->flashdata('loginerror') != "" ) : ?>
          <div class="row"><div class="col-xs-12"><div class="alert alert-error"><?php echo $this->session->flashdata('loginerror'); ?></div>
    <?php endif; ?>
     <?php if( $this->session->flashdata('loginsuccess') != "" ) : ?>
          <div class="row"><div class="col-xs-12"><div class="alert alert-success"><?php echo $this->session->flashdata('loginsuccess'); ?></div>
    <?php endif; ?>

<?php echo form_open('auth'); ?>
<div class="container login">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><strong>Login</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" >
                        <div>
                            <!-- <img class="center-block" src="<?php echo base_url(); ?>assets/images/logo.png" height = "100px" width ="100px"> -->
                            <h2 class="text-center"><b>WIZIGUARD</b></h2>
                            <p class="text-info text-center">Log in to find your phone and other features</p>

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address <span class="glyphicon glyphicon-envelope"></span></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email">
                            </div>
                        </div></br>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password <span class="glyphicon glyphicon-lock"></span></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-send"></span>
                                    <i class="fa fa-btn"></i> Login
                                </button>

                                <a class="btn forgotpass-link" href="">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo form_close(); ?>