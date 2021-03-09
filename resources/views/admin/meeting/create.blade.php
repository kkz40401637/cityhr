<?php echo View::make ('admin.admin-layouts.head'); ?>

{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/pipe-line.scss')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/bulb-indicator.css')}}">
{{--<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/css/forms/theme-checkbox-radio.css')}}">--}}
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/dt-global_style.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('admin-assets/plugins/table/datatable/custom_dt_custom.css')}}">

<body class="alt-menu ">
<!-- BEGIN LOADER -->
<div id="load_screen">
    <div class="loader">
        <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div>
    </div>
</div>
<!--  END LOADER -->

<!--  BEGIN NAVBAR  -->
<?php echo View::make ('admin.admin-layouts.header'); ?>
<!--  END NAVBAR  -->

<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container sidebar-closed" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>

    <!--  BEGIN SIDEBAR  -->
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

<!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">
                @if(count($CompanyDb) >= 1 )
                <div class="col-sm-12 col-md-12  col-lg-8 layout-spacing">
                    <div class="card shadow-lg animated slideInUp" style="border-radius: 13px 13px 0 0">
                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW STATION
                        </h5>
                        <div class="card-body form-permission " data-form-permission="0" >
                            <div class="form-group d-none animated zoomIn" id="global-error-div" >
                                <div class="alert alert-light-danger my-1" role="alert">
                                    <button type="button" class="close" data-dismiss="" aria-label="Close">
                                        <i onclick="CloseAlert()" class="material-icons text-danger">clear</i>
                                    </button>
                                    <strong>Danger !</strong><b id="global-error-txt"></b>
                                </div>
                            </div>
                            <form action="{{ route('store') }}" class="form-sample" method="POST" enctype="multipart/form-data" >
                                @csrf
                                @if (session('status'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>  {{session('status')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif

                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>  {{session('error')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                @endif
                                <div class="input-group form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;STATION NAME</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >business</i>
                                        </span>
                                            </div>
                                            <input id="StationName" type="text" class="form-control" name="StationName" value="{{ old('StationName') }}" required autocomplete="StationName" placeholder="StationName" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;PHONE NUMBER</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >stay_current_portrait</i>
                                        </span>
                                            </div>
                                            <input type="number" class="form-control" autofocus="autofocus" id="PhoneNumber" name="PhoneNumber" value="{{ old('StationName') }}" placeholder="Phone Number" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;COMPANY</p>
                                        <div class="input-group mb-2 col">
                                            <select id="CompanyId" name="CompanyId"  class="form-control" >
                                                @foreach($CompanyDb as $Company)
                                                    <option value="{{$Company->id}}" >{{$Company->Name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;FAX NUMBER</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <i class="material-icons" >fact_check</i>
                                                </span>
                                            </div>
                                            <input type="number" class="form-control" autofocus="autofocus" id="FaxNumber" name="FaxNumber" value="{{ old('FaxNumber') }}" placeholder="Fax Number" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;CURRENCY </p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text" id="basic-addon1">
                                                <i class="material-icons" >monetization_on </i>
                                            </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="CurrencyUse" name="CurrencyUse" value="{{ old('CurrencyUse') }}" placeholder="US dollar" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;CURRENCY SYMBOL</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >repeat_one</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="CurrencySymbol" name="CurrencySymbol" value="{{ old('CurrencySymbol') }}" placeholder="Currency Symbol" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;WEBSITE </p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >http</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="WebSite" name="WebSite" value="{{ old('WebSite') }}" placeholder="http://" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;EMAIL ADDRESS</p>
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >attach_email</i>
                                        </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" id="EmailAddress" name="EmailAddress" value="{{ old('EmailAddress') }}" placeholder="Email Address" aria-label="notification" aria-describedby="basic-addon1" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-row mb-6">
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;ADITIONAL INFORMATION </p>
                                        <div class="input-group mb-2 col">
                                            <textarea class="form-control" id="AdditionalNote" name="AdditionalNote" value="{{ old('AdditionalNote') }}" rows="6" cols="50"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="">&nbsp;&nbsp;&nbsp;&nbsp;STATION PHOTO</p>
                                        @error('image')
                                        <span class="alert alert-warning" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        <br>
                                        @enderror
                                        <div class="input-group mb-2 col">
                                            <div class="input-group-prepend">
                                                <center><img src="{{asset('admin-assets/img/station/station.jpg')}}" style="height:150px; width: 250px; "id="DisplayImageTag"   alt="" ></center>
                                                <input class="btn btn-dark p-0 m-0"  type="file" name="images" id="FileInputVal" style="visibility: hidden;" />
                                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="input-group">&nbsp;&nbsp;&nbsp;&nbsp;
                                    <button type="submit"  class="btn  user-info-save-btn theme-bg theme-color mt-3">သိမ်းမည်</button><br>
                                </div>
                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

        </div>
    </div>
    <!--  END CONTENT AREA  -->

</div>
<!-- END MAIN CONTAINER -->

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>

<script>

    let upload =$('#FileInputVal');
    $("#DisplayImageTag").on('click',function () {
        upload.click();
    });
    upload.on("change",function (e) {
        for (let i = 0; i < e.originalEvent.srcElement.files.length; i++) {
            let file = e.originalEvent.srcElement.files[i];
            let reader = new FileReader();
            reader.onloadend = function() {
                $("#DisplayImageTag").attr("src","");
                $("#DisplayImageTag").attr("src",reader.result);
            }
            reader.readAsDataURL(file);
        }
        $('#FileChange').attr('value',1);
    });

    $("#CompanyId").select2({

    });

    let CompanyDb = <?php echo $CompanyDb; ?>;
    console.log(CompanyDb);

    const CompanyAddRoute = '{{route('AddCompany')}}';

    if(CompanyDb.length == 0  )
    {
        SnackAlert( 'Please create company first ...','white','#e7515a' );
        setTimeout(function(){ window.location.href = CompanyAddRoute; }, 3000);
    }


</script>

</body>
</html>
