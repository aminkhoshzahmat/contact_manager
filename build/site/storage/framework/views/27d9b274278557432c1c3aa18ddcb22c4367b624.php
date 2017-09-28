<?php $__env->startSection('js-script'); ?>
    <?php if($msg_success = session('success')): ?>
    Redirect::back()->withInput();
        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

                $.notify({
                    icon: 'pe-7s-attention',
                    message: "<?php echo $msg_success; ?>"

                },{
                    type: 'info',
                    timer: 40000
                });

            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>