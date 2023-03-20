<h1>Log in</h1>

<?php $form = \app\core\form\Form::begin('', "post") ?>
    <?php echo $form->field($model, 'email') ?>
    <?php echo $form->field($model, 'password')->passwordField() ?>
    <buton type="submit" class="btn btn-primary">Submit</button>
<?php \app\core\form\Form::end() ?>


<form action="" method="POST">
    <div class="form-group mt-2">
        <label>Subject</label>
        <input type="text" name="subject" class="form-control" placeholder="Subject">
    </div>
    <div class="form-group mt-2">
        <label>Email address</label>
        <input type="email" name="email" class="form-control" placeholder="name@example.com">
    </div>
    <div class="form-group mt-2">
        <label>Body</label>
        <textarea class="form-control" name="body" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>