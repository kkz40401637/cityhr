<script src="{{asset('admin-assets/js/loader.js')}}"></script>
<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
{{--<script src="{{asset('admin-assets/bootstrap/js/popper.min.js')}}"></script>--}}
<script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin-assets/js/app.js')}}"></script>

<script src="{{asset('admin-assets/plugins/select2/select2.min.js')}}"></script>
{{--<script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js.map')}}"></script>--}}

<script src="{{asset('admin-assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{--<script src="{{asset('admin-assets/plugins/apex/apexcharts.min.js')}}"></script>--}}
<script src="{{asset('admin-assets/js/scrollspyNav.js')}}"></script>

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>--}}
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function() {
        App.init();
        var getWindowWidth = $( window ).width();

        if ( getWindowWidth > 980 )
        {
            $(".main-container").removeClass("sidebar-closed sbar-open");
            $(".alt-menu").removeClass("sidebar-noneoverflow");
            $(".navbar-expand-sm").removeClass("expand-header");
            $("html").removeClass("sidebar-noneoverflow");
            // console.log('Nav management ok');
        }

    });

    // var getWindowWidth = $( window ).width();
    // if ( getWindowWidth < 980 )
    // {
    //     $('#container').addClass('sidebar-closed');
    //     // $('.main-container').addClass('dlskddlfjlj');
    //
    //     console.log('add pee pi');
    // }


</script>
<!-- toastr -->
<script src="{{asset('admin-assets/plugins/notification/snackbar/snackbar.min.js')}}"></script>
<!-- END PAGE LEVEL PLUGINS -->

<!--  BEGIN CUSTOM SCRIPTS FILE  -->
<script src="{{asset('admin-assets/js/components/notification/custom-snackbar.js')}}"></script>
<script src="{{asset('admin-assets/js/clipboard/clipboard.js')}}"></script>

