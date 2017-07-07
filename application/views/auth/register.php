<div class="container login">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class='panel panel-primary'>
                <div class="panel-heading">
                    <strong>Registration</strong>
                </div>

                <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST">

<!-- Surname Field -->

<div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
    <label for="surname" class="col-md-4 control-label">Surname</label>

    <div class="col-md-6">
        <input id="surname" type="text" class="form-control" name="surname" required="">
    </div>
</div>

<!-- First Name field -->

<div class="form-group{{ $errors->has('Fname') ? ' has-error' : '' }}">
    <label for="Fname" class="col-md-4 control-label">First Name</label>

    <div class="col-md-6">
        <input id="Fname" type="text" class="form-control" name="Fname" required="">
    </div>
</div>

<!-- Other Names field -->

<div class="form-group{{ $errors->has('othernames') ? ' has-error' : '' }}">
    <label for="othernames" class="col-md-4 control-label">Other Names</label>

    <div class="col-md-6">
        <input id="othernames" type="text" class="form-control" name="othernames" required="">
    </div>
</div>

<!-- email field -->

<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control" name="email" required="">
    </div>
</div>

<!-- phone number field -->

<div class="form-group{{ $errors->has('tel') ? ' has-error' : '' }}">
    <label for="tel" class="col-md-4 control-label"> Phone Number </label>

    <div class="col-md-6">
        <input id="tel" type="text" class="form-control" name="tel" required="">
    </div>
</div>

<!-- Password field -->
<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 control-label">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control" name="password" required="">
    </div>
</div>

<!-- Confirm Password field -->

<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="">
    </div>
</div>

                <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-send"></span>
                                    <i class="fa fa-btn"></i> Submit
                                </button>
                                
                                <button type="cancel" class="btn btn-primary btn-md">
                                <span class="glyphicon glyphicon-send"></span>
                                    <i class="fa fa-btn"></i> Cancel
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>