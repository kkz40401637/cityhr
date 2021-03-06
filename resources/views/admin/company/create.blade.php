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

                <div class="col-sm-12 col-md-7  col-lg-7 layout-spacing">
                    <div class="card shadow-lg animated slideInLeft" style="border-radius: 13px 13px 0 0">
                        <h6 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            ADD NEW COMPANY
                        </h6>
                        <div class="card-body form-permission " data-form-permission="0" >
{{--                            <div class="form-group animated zoomIn" id="global-error-div" >--}}
{{--                                <div class="alert alert-light-danger my-1" role="alert">--}}
{{--                                    <button type="button" class="close" data-dismiss="" aria-label="Close">--}}
{{--                                        <i onclick="CloseAlert()" class="material-icons text-danger">clear</i>--}}
{{--                                    </button>--}}
{{--                                    <strong>Danger !</strong>Nay kaung larrr ?<b id="global-error-txt"></b>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <form id="company-info-saving" class="form-sample" method="POST"  >
                                @csrf
                                <p>Click To Chose Company Photo</p>
                                <center><img src="{{asset('admin-assets/img/company/original/company-icon.png')}}"
                                             style="height: 150px; width: 150px; " id="DisplayImageTag"   alt="" ></center>

                                <input class="btn btn-dark p-0 m-0"  type="file" name="image" id="FileInputVal" style="visibility: hidden;" />
                                <input class="btn btn-dark p-0 m-0" type="hidden" class="FileChange" id="FileChange" name="FileChange" value="0">

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">NAME</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >business</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" required name="Name" id="Name" placeholder="NAME" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">PHONE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >phone</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control"  name="Phone" id="Phone" placeholder="PHONE" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">FAX NUMBER</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >phone</i>
                                                </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" name="FaxNumber" id="FaxNumber" placeholder="FAX NUMBER" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">WEBSITE</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <i class="material-icons" >http</i>
                                                </span>
                                            </div>
                                            <input  type="text" class="form-control"  name="Website" id="Website" placeholder="WEBSITE" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>


                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">LEGAL / TRADING NAME</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="material-icons" >add_business</i>
                                             </span>
                                            </div>
                                            <input type="text" class="form-control" name="TradingName" id="TradingName" placeholder="LEGAL / TRADING NAME" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>

                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <p class="my-2">EMAIL</p>
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                             <span class="input-group-text">
                                                 <i class="material-icons" >add_business</i>
                                             </span>
                                            </div>
                                            <input required type="email" class="form-control" name="Email" id="Email" placeholder="EMAIL" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>

                                    </div>
                                </div>


                                <p class="my-2">REGISTRATION NUMBER</p>
                                <div class="input-group my-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="material-icons" >email</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="RegNo" id="RegNo" placeholder="REGISTRATION NUMBER" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="my-2">REGIONAL INFORMATION</p>
                                <div class="row">
                                    <div class="col-sm-12 col-md-4">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" name="City" id="City" placeholder="CITY / TOWNSHIP" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" name="State" id="State" placeholder="STATE" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-4">
                                        <div class="input-group my-3">
                                            <input type="text" class="form-control" name="Postal" id="Postal" placeholder="ZIP / POSTAL" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>


                                <div class="input-group my-3">
                                    <textarea name="CompanyAddress" id="CompanyAddress" class="form-control" placeholder="COMPANY ADDRESS" >U Yae Khae Str 343 Mayangone Yangon,Myanmar</textarea>
                                </div>


                                <b style="color: black !important;" class="input-group my-3">CONTACT INFORMATION </b>

                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >account_circle</i>
                                            </span>
                                            </div>
                                            <input value="Yell Htut" type="text" class="form-control" autofocus="autofocus" name="PersonName" id="PersonName" placeholder="CONTACT PERSON NAME" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="input-group my-3">
                                            <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <i class="material-icons" >assessment</i>
                                            </span>
                                            </div>
                                            <input type="text" class="form-control" autofocus="autofocus" name="Position" id="Position" placeholder="POSITION" aria-label="notification" aria-describedby="basic-addon1">
                                        </div>
                                    </div>
                                </div>

                                <div class="input-group my-3">
                                    <textarea name="PersonAddress" id="PersonAddress" class="form-control" placeholder="CONTACT PERSON ADDRESS" >U Yae Khae Str 343 Mayangone Yangon,Myanmar</textarea>
                                </div>

                                <div class="row">
                                    <div class=" col-sm-12 col-md-6">
                                        <div class="input-group my-3">
                                            <textarea name="Vision" id="Vision" class="form-control" placeholder="VISION" > Vision To be growth In ( IT Field In Myanmar )</textarea>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12 col-md-6">
                                        <div class="input-group my-3">
                                            <textarea name="Mission" id="Mission" class="form-control" placeholder="MISSION" >Mission To be growth In ( IT Field In Myanmar )</textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="input-group my-3">
                                    <textarea name="Note" id="Note" class="form-control" placeholder="NOTE" >A paragraph is a self-contained unit of discourse in writing dealing with a particular point or idea. A paragraph consists of one or more sentences.
                                        Though not required by the syntax of any language,</textarea>
                                </div>


                                {{--                                <p class="my-2"> ????????????????????? ??????????????????????????????</p>--}}
{{--                                <select class="user-role mb-3">--}}
{{--                                    @foreach($UserRoles as $Index => $Role)--}}
{{--                                        <option value="{{$RoleObj[$Role]}}">{{$Role }} &nbsp; ( {{$RoleObj[$Role] }} )</option>--}}
{{--                                    @endforeach--}}
{{--                                </select>--}}
                                <button type="submit" class="btn save-company-info-btn theme-bg theme-color mt-2 col-12">????????????????????????</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none  ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">
{{--                    <div class="widget widget-table-two  animated slideInRight">--}}
{{--                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">--}}
{{--                            ???????????????????????????????????????????????? ?????????????????????????????????????????????--}}
{{--                        </h5>--}}
{{--                        <div class="widget-content">--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table">--}}
{{--                                    <thead>--}}
{{--                                    <tr>--}}
{{--                                        <th><div class="th-content">???????????????</div></th>--}}
{{--                                        <th><div class="th-content">???????????????</div></th>--}}
{{--                                        <th><div class="th-content">???????????????</div></th>--}}
{{--                                        <th><div class="th-content">??????????????????????????????</div></th>--}}
{{--                                        <th><div class="th-content">?????????????????????</div></th>--}}
{{--                                        <th><div class="th-content">??????????????????</div></th>--}}
{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}

{{--                                    @foreach($RecentUser as $Index =>  $user)--}}

{{--                                        <tr>--}}
{{--                                            <td><div class="td-content ">{{$Index+1}}</div></td>--}}
{{--                                            <td><div class="td-content ">{{$user->name}}</div></td>--}}
{{--                                            <td><div class="td-content">{{$user->phone}}</div></td>--}}
{{--                                            <td><div class="td-content">--}}
{{--                                                    <span class="badge text-white badge-pills p-2 {{$RoleColor[$user->role-1]}}">--}}
{{--                                                    {{ $ConfigUserRole[$user->role-1]}}</span>--}}
{{--                                                </div></td>--}}
{{--                                            <td>--}}
{{--                                                <a href="" class="td-content ">--}}
{{--                                                    <span  class="badge badge-warning p-2 ">--}}
{{--                                                        <i class="material-icons">edit</i>--}}
{{--                                                    </span>--}}
{{--                                                </a>--}}
{{--                                            </td>--}}
{{--                                            <td><div class="td-content">{{$user->created_at->diffForHumans()}}</div></td>--}}
{{--                                        </tr>--}}

{{--                                    @endforeach--}}

{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>

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


    const GetInputVal = () =>
    {
        let Name = $('#Name').val();
        let Phone = $('#Phone').val();
        let FaxNumber = $('#FaxNumber').val();
        let Website = $('#Website').val();
        let TradingName = $('#TradingName').val();
        let Email = $('#Email').val();
        let RegNo = $('#RegNo').val();
        let City = $('#City').val();
        let State = $('#State').val();
        let Postal = $('#Postal').val();
        let CompanyAddress = $('#CompanyAddress').val();
        let PersonName = $('#PersonName').val();
        let Position = $('#Position').val();
        let PersonAddress = $('#PersonAddress').val();
        let Vision = $('#Vision').val();
        let Mission = $('#Mission').val();
        let Note = $('#Note').val();

        // console.log(
        //       InputVal.Name+
        // ' - '+InputVal.Phone+'-'+
        // ' - '+InputVal.FaxNumer+'-'+
        // ' - '+InputVal.Website+'-'+
        // ' - '+InputVal.TradingName+'-'+
        // ' - '+InputVal.Email+'-'+
        // ' - '+InputVal.RegNo+'-'+
        // ' - '+InputVal.City+'-'+
        // ' - '+InputVal.State+'-'+
        // ' - '+InputVal.Postal+'-'+
        // ' - '+InputVal.CompanyAddress+'-'+
        // ' - '+InputVal.PersonName+'-'+
        // ' - '+InputVal.Position+'-'+
        // ' - '+InputVal.PersonAddress+'-'+
        // ' - '+InputVal.Vision+'-'+
        // ' - '+InputVal.Mission+'-'+
        // +InputVal.Note);

        return  InputVal = {
            'Name':Name,'Phone':Phone,'FaxNumber':FaxNumber,'Website':Website,
            'TradingName':TradingName,'Email':Email,'RegNo':RegNo,'City':City,'State':State,
            'Postal':Postal,'CompanyAddress':CompanyAddress,'PersonName':PersonName,
            'Position':Position,'PersonAddress':PersonAddress,'Vision':Vision,'Mission':Mission,'Note':Note};
    }

    const OriginalPicSrc = '{{asset('admin-assets/img/company/original/company-icon.png')}}';

    const UiFun = (condition) =>
    {
        if(condition == true)
        {
            $('.save-company-info-btn').prop('disabled', true);
            $('.linear-activity').removeClass('d-none');
        }else {
            $('.save-company-info-btn').prop('disabled', false);
            $('.linear-activity').addClass('d-none');
        }

    }


    $('#company-info-saving').submit(function(e)
    {
        // $('.save-company-info-btn').prop('disabled', true);
        e.preventDefault();
        const InputVal = GetInputVal();
        if (navigator.onLine)
        {
            UiFun(true);
            let AllFormData = new FormData(this);
            $.ajax({
                type:'POST',
                _token: csrf_token,
                url: "{{route('SaveCompanyInfo')}}",
                data:new FormData(this),
                InputVal: InputVal,
                cache:false,
                contentType: false,
                processData: false,
                success:function(data){
                    console.log(data);
                    if(data.code == 200)
                    {

                        SnackAlert(data.message,'white','#8dbf42');
                        $('input').val('');
                        $('textarea').val('');
                        $('#DisplayImageTag').attr('src',OriginalPicSrc);
                        // $('.save-company-info-btn').prop('disabled', false);
                        UiFun(false);

                    }else{
                        UiFun(false);
                        SnackAlert(data.message,'white','#e2a03f');
                    }
                }
            });

        }else {
            SnackAlert('?????????????????????????????????????????????????????????????????????????????????????????????????????????','','');
            UiFun(false);

        }



    });

</script>

</body>
</html>
