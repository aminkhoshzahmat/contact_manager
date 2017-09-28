<?php
if ($errors->any()) {
    $msg_error = '';
    foreach( $errors->all() as $error ){
        $msg_error .= "<p>" .  $error  ."</p>";
    }
}
?>
@section('js-script')

    @if ($errors->any())
    Redirect::back()->withInput();
        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

                $.notify({
                    icon: 'pe-7s-attention',
                    message: "{!! $msg_error !!}"

                },{
                    type: 'danger',
                    timer: 10000
                });

            });
        </script>
    @endif
@endsection