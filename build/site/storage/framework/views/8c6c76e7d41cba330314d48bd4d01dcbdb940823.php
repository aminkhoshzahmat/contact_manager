<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-8">
        <div class="card">
        <?php if($success = session('success')): ?>
            <div class="alert alert-info"><?php echo e($success); ?></div>
        <?php endif; ?>
            <div class="header">
                <h4 class="title">Edit Contact</h4>
            </div>
            <div class="content">
                <?php echo e(Form::model( $contact, [
                        'url' => ['/contacts/update', $contact->id],
                        'method' => 'POST',
                        'files' => true
                ])); ?>

                    
                <?php echo $__env->make('contacts.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                <?php echo e(Form::close()); ?>

            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-user">
            <div class="image">
                <img src="/assets/img/updown.jpeg" alt="..."/>
            </div>
            <div class="content">
                <div class="author">
                     <a href="#">
                    <?php
                        $photo = ! is_null($contact->photo) ? $contact->photo : 'default.png';
                    ?>
                    <?php echo e(Html::image('uploads/contacts/' . $photo, $contact->name, 
                        [
                            'class' => 'avatar border-gray',
                            'width' => 150
                        ]
                    )); ?>


                      <h4 class="title"><?php echo e($contact->name); ?><br />
                         <small><?php echo e($contact->email); ?></small>
                      </h4>
                    </a>
                </div>
                <p class="description text-center"> "<?php echo e($contact->about); ?>"
                </p>
            </div>
            <hr>
            <div class="text-center">
                <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.message.error', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>