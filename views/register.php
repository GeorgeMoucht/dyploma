<h1>Create an Account</h1> 
<?php $form = \app\core\form\Form::begin('', "post") ?>
    <div class="row">
        <div class="col">
            <?php echo $form->field($model, 'firstname', [Placeholder::class ,'register']) ?>
        </div>
        <div class="col">
            <?php echo $form->field($model, 'lastname', [Placeholder::class ,'register']) ?>
        </div>
    </div>
    
    <?php echo $form->field($model, 'email' , [Placeholder::class ,'register']) ?>
    <?php echo $form->field($model, 'password', [Placeholder::class ,'register'])->passwordField() ?>
    <?php echo $form->field($model, 'confirmPassword', [Placeholder::class ,'register'])->passwordField() ?>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>

<?php \app\core\form\Form::end('', "post") ?>