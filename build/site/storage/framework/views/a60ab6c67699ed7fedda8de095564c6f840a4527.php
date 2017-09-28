<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('company', 'Company')); ?>

            <?php echo e(Form::text('company', null, [
                'placeholder' => 'Company name',
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('phone', 'phone')); ?>

            <?php echo e(Form::text('phone', null, [
                'placeholder' => 'Conact phone number',
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('name', 'name')); ?>

            <?php echo e(Form::text('name', null, [
                'placeholder' => 'Enter contact name',
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <?php echo e(Form::label('email', 'email')); ?>

            <?php echo e(Form::text('email', null, [
                'placeholder' => 'Enter contact email',
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('address', 'address')); ?>

            <?php echo e(Form::text('address', null, [
                'placeholder' => 'Contact address',
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
</div><hr>
<div class="row">
    <div class="col-md-9">
        <div class="form-group">
            <?php echo e(Form::label('group_id', 'groups Contact')); ?>

            <?php echo e(Form::select('group_id', $groups, null, [
                'class' => 'form-control'
                ])); ?>

        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label><br><br><br></label>
            <button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            <i class="pe-7s-plus"></i>Add Group
            </button>
        </div>
    </div>
</div>
<hr>
<div class="row">
        <div class="collapse" id="collapseExample">
    <div class="col-md-9">
            <?php echo e(Form::label('group', 'group name')); ?>

            <?php echo e(Form::text('group', null, [
                'placeholder' => 'Enter group name here',
                'class' => 'form-control has-success'
            ])); ?>

    </div>
    <div class="col-md-3">
        <label><br><br><br></label>
        <a id="add-new-btn" class="btn btn-success"><i class="pe-7s-add-user"></i> Add</a>
    </div>
        </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('about', 'about Contact')); ?>

            <?php echo e(Form::textarea('about', null, [
                'placeholder' => 'Write down something about this contact.',
                'class' => 'form-control',
                'rows' => 3
                ])); ?>

        </div>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <?php echo e(Form::label('photo', 'Choose Photo')); ?>

            <?php echo e(Form::file('photo')); ?>

            <p class="help-block">valid enxtensions : png, jpg, jpeg, bmp</p>
          </div>
    </div>
</div>
<input type="submit" class="btn btn-info btn-fill pull-right" value="<?php echo e(!empty($contact->id) ? "Upadate" : "Save"); ?>">
<div class="clearfix"></div>
<?php $__env->startSection('js-script'); ?>
<script type="text/javascript">
    $("#add-new-btn").click(function() {
        $.ajax({
            url: ""
        });
    });
</script>
<?php $__env->stopSection(); ?>

