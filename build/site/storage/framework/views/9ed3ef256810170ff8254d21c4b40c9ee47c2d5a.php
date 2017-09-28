  <?php
  if(!isset($activePage))
        $activePage = 'active';
  ?>
  <div class="sidebar-wrapper">
        <div class="logo">
            <a href="/contacts" class="simple-text">
                Contact Manager
            </a>
        </div>
        <ul class="nav">
            <li class="<?php echo e($activePage); ?>">
                <a href="/contacts">
                    <i class="pe-7s-user"></i>
                    <p>My Contacts
                        <span class="pull-right">
                            <?php echo e($allContacts); ?>

                        </span>
                    </p>
                </a>
            </li>
            <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php echo e(( $group->name == $activePage ) ? 'active' : ''); ?>">
                
                
                <a href="/contacts/<?php echo e($group->name); ?>">
                    <i class="pe-7s-science"></i>
                    <p>
                        <?php echo e($group->name); ?>

                        <span class="pull-right">
                            <?php echo e($group->contacts->count()); ?>

                        </span>
                    </p>
                </a>
            </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
    <li class="active-pro">
                <a href="upgrade.html">
                    <i class="pe-7s-rocket"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
  </div>
</div>