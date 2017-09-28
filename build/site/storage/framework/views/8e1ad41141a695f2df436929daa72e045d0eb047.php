<?php $__env->startSection('content'); ?>
<div class="col-md-12">
    <div class="row">
        <div class="col-md-10">
            <?php echo e($contacts->links()); ?>

        </div>
        <div class="col-md-2">
            <a href="/contacts/cards" class="btn btn-default btn-block"><i class="pe-7s-id"></i> Cards</a>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>
    <div class="card ">
        <div class="header">
            <h4 class="title">My Contacts</h4>
            <p class="category">You can Edit and Delete your contacts from here.</p>
        </div>
        <div class="content">
            <div class="table-full-width">
                <table class="table table-striped">
                    <tbody>
                    <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>
                                <label class="checkbox">
                                    <input type="checkbox" value="" data-toggle="checkbox">
                                </label>
                            </td>
                            <td>
                            <?php
                                $photo = ! is_null($contact->photo) ? $contact->photo : 'default.png';
                            ?>
                                <?php echo e(Html::image(
                                    'uploads/contacts/' . $photo, $contact->name,
                                    [
                                        'class' => 'media-object img-circle',
                                         'width' => 100, 'height' => 100
                                    ])); ?>

                            </td>
                            <td>
                            Name: <?php echo e($contact->name); ?>

                            <ul>
                                <li>Company:<?php echo e($contact->company); ?></li>
                                <li>Address:<?php echo e($contact->address); ?></li>
                                <li>Email:<?php echo e($contact->email); ?></li>
                            </ul>
                            </td>
                            
                            <td class="td-actions text-right">
                                <a href="/contacts/<?php echo e($contact->id); ?>/edit" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-xs">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <?php echo e(Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['contacts.delete', $contact->id ]
                                ])); ?>

                                <button onclick="return confirm('Are you sure');" type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                    <i class="fa fa-times"></i>
                                </button>
                                <?php echo e(Form::close()); ?>

                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
             <?php echo e($contacts->links()); ?>

             

            <div class="footer">
                <hr>
                <div class="stats">
                    <i class="fa fa-history"></i> Updated 3 minutes ago
                </div>
            </div>
        </div>
    </div>
</div>	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.message.success', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>