<?php $__env->startSection('content'); ?>
<?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="col-sm-6 col-md-4 col-lg-3">
    <div class="card card-user">
        <div class="image">
            <img src="/assets/img/updown.jpeg" alt="..."/>
        </div>
        <div class="content">
            <div class="author">
                 <a href="#">
                <img class="avatar border-gray" src="/assets/img/default.png" alt="..."/>

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
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<hr>
<div class="clearfix"></div>
<?php echo e($contacts->links()); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>