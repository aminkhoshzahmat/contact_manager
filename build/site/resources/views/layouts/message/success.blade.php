@section('js-script')
    @if ($msg_success = session('success'))
    Redirect::back()->withInput();
        <script type="text/javascript">
            $(document).ready(function(){

                demo.initChartist();

                $.notify({
                    icon: 'pe-7s-attention',
                    message: "{!! $msg_success !!}"

                },{
                    type: 'info',
                    timer: 40000
                });

            });
        </script>
    @endif
@endsection