<h1>Create an Account</h1>
<?php $form = \app\core\form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname') ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname') ?>
        </div>
    </div>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password') ?>
    <?php echo $form->field($model, 'confirmPassword') ?>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php \app\core\form\Form::end('', "post") ?>

<!-- <form action="" method="POST">
    <div class="row">
        <div class="col">
            <div class="form-group mt-2">
                <label>Firstname</label>
                <input type="text" name="firstname" value="<?php //  echo $model->firstname ?>" class="form-control<?php // echo $model->hasError('firstname') ? ' is-invalid' : ''?>" placeholder="Firstname">
            
                <div class="invalid-feedback">
                    <?php // echo $model->getFirstError('firstname') ?>
                </div>

            </div>

        </div>
        <div class="col">
            <div class="form-group mt-2">
                <label>Lastname</label>
                <input type="text" name="lastname" class="form-control" placeholder="Lastname">
            </div>
        </div>
    </div>


    <div class="form-group mt-2">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com">
    </div>
    <div class="form-group mt-2">
        <label>Passsword</label>
        <input type="password" name="password" class="form-control" placeholder="Enter your password">
    </div>
    <div class="form-group mt-2">
        <label>Confirm Password</label>
        <input type="password" name="confirmPassword" class="form-control" placeholder="Enter your password">
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form> -->