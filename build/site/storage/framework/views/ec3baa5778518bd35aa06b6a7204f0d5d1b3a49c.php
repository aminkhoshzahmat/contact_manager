<?php
if ($errors->any()) {
    $msg_error = '';
    foreach( $errors->all() as $error ){
        $msg_error .= "<p>" .  $error  ."</p>";
    }
}
?>
<?php $__env->startSection('js-script'); ?>

    <?php if($errors->any()): ?>
    Redirect::back()->withInput();
        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

                $.notify({
                    icon: 'pe-7s-attention',
                    message: "<?php echo $msg_error; ?>"

                },{
                    type: 'danger',
                    timer: 10000
                });

            });
        </script>
    <?php endif; ?>
<?php $__env->stopSection(); ?>