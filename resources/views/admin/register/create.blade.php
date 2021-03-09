
<link href="{{asset('admin-assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
<?php echo View::make ('admin.admin-layouts.head'); ?>
<style>
    .disabled-cursor{
        cursor: not-allowed !important;
        pointer-events: none;
    }
</style>
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
<div class="main-container sidebar-closed" id="container">

    <div class="overlay "></div>
    <div class="cs-overlay"></div>
    <div class="search-overlay"></div>
<?php echo View::make ('admin.admin-layouts.side-bar'); ?>

    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing ">

                <div class="col-sm-12 col-md-6 col-lg-4 layout-spacing">
                    <div class="card shadow-lg " style="border-radius: 13px 13px 0 0">
                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            CREATE ACCOUNT
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
                            <form class="form-sample" method="POST" >
                                @csrf
                                <p class="">NAME</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >account_circle</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" autofocus="autofocus" id="Name" placeholder="NAME" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="">PHONE</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                         <span class="input-group-text" id="basic-addon1">
                                             <i class="material-icons" >perm_phone_msg</i>
                                         </span>
                                    </div>
                                    <input type="text" class="form-control" id="Phone" placeholder="PHONE" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="">E - MAIL</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1">
                                            <i class="material-icons" >email</i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" id="Email" placeholder="E - MAIL" aria-label="notification" aria-describedby="basic-addon1">
                                </div>


                                <p class="">PASSWORD</p>
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="basic-addon1">
                                          <i class="material-icons" >enhanced_encryption</i>
                                      </span>
                                    </div>
                                    <input type="password" class="form-control" id="Password" placeholder="PASSWORD" aria-label="notification" aria-describedby="basic-addon1">
                                </div>

{{--                                <p class="">Profile</p>--}}
{{--                                <div class="input-group mb-2">--}}
{{--                                    <div class="input-group-prepend">--}}
{{--                                       <span class="input-group-text" id="basic-addon1">--}}
{{--                                           <i class="material-icons" >mms</i>--}}
{{--                                       </span>--}}
{{--                                    </div>--}}
{{--                                    <input type="file" class="form-control" name="photo" placeholder="Choose photo" aria-label="notification" aria-describedby="basic-addon1">--}}
{{--                                </div>--}}

                                <p class=""> USER ROLE</p>
                                <select class="user-role mb-3">
                                    @foreach($UserRoles as $Index => $Role)
                                        <option value="{{$RoleObj[$Role]}}">{{$Role }} &nbsp; ( {{$RoleObj[$Role] }} )</option>
                                    @endforeach
                                </select>
                                <button type="button" onclick="SaveUserInfo()" class="btn  user-info-save-btn theme-bg theme-color mt-2 col-12">CREATE</button><br>

                            </form>
                        </div>
                        <div class="linear-activity d-none ">
                            <div class="indeterminate"></div>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6  col-lg-8 layout-spacing">
                    <div class="widget widget-table-two ">
                        <h5 class="card-header theme-bg theme-color" style="border-radius: 13px 13px 0 0">
                            RECENTS REGISTRATION
                        </h5>
                        <div class="widget-content">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th><div class="th-content">NO</div></th>
                                        <th><div class="th-content">NAME</div></th>
                                        <th><div class="th-content">PHONE</div></th>
                                        <th><div class="th-content">ROLE</div></th>
                                        <th><div class="th-content">EDIT</div></th>
                                        <th><div class="th-content">TIME</div></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($RecentUser as $Index =>  $user)

                                        <tr>
                                            <td><div class="td-content ">{{$Index+1}}</div></td>
                                            <td><div class="td-content ">{{$user->name}}</div></td>
                                            <td><div class="td-content">{{$user->phone}}</div></td>
                                            <td><div class="td-content">
                                                    <span class="badge text-white badge-pills p-2 {{$RoleColor[$user->role-1]}}">
                                                    {{ $ConfigUserRole[$user->role-1]}}</span>
                                                    </div></td>
                                            <td>
                                                <a href="" class="td-content ">
                                                    <span  class="badge badge-warning p-2 ">
                                                        <i class="material-icons">edit</i>
                                                    </span>
                                                </a>
                                            </td>
                                            <td><div class="td-content">{{$user->created_at->diffForHumans()}}</div></td>
                                        </tr>

                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>



    </div>
</div>

<?php echo View::make ('admin.admin-layouts.footer-script'); ?>

<script src="{{asset('admin-assets/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<script src="{{asset('admin-assets/plugins/blockui/custom-blockui.js')}}"></script>

<script>

    checkall('todoAll', 'todochkbox');
    $('[data-toggle="tooltip"]').tooltip()

    var user_role = $(".user-role").select2({
    });

    let GlobalUserRole = <?php echo json_encode($ConfigUserRole,true); ?>;
    let UserRoleColor = <?php echo json_encode($RoleColor,true); ?>;

    let ErrorReturn = { Errname:' Name length at least 3 characters',Errpassword: ' Password length must be 5 characters'
        ,Errphone:' Phone number at least 6 characters' ,ErrEmail: ' Email already exit ... '} ;


    function CloseAlert()
    {
        $('#global-error-div').hide();
    }


    function SaveUserInfo()
    {

        $('.user-info-save-btn').addClass("disabled-cursor");
        $('.linear-activity').removeClass("d-none");


        let Name = $('#Name').val();
        let Phone = $('#Phone').val();
        let Email = $('#Email').val();
        let Password = $('#Password').val();
        let UserRole = $('.user-role').val();
        // var AccountLimit = $("#AccountLimit").val();

        if (Name.length < 3 )
        {
            SnackAlert( ErrorReturn.Errname,'white','#e7515a' );
        }else {
            if (Phone.length < 6){
                SnackAlert( ErrorReturn.Errphone,'white','#e7515a' );
            }else{
                if (Password.length < 5){
                    SnackAlert( ErrorReturn.Errpassword,'white','#e7515a' );
                }else{

                    // console.log(UserRole);
                    // console.log(GlobalUserRole[UserRole-1]);

                    if(UserRole >=1 && UserRole<=4)
                    {
                        $.post("{{route('UserCreat')}}",
                            {
                                _token: csrf_token,
                                Name: Name,
                                Email: Email,
                                Phone: Phone,
                                Password: Password,
                                UserRole: UserRole

                            },
                            function(data){
                                console.log(data);

                                if (data.code == 200)
                                {
                                    SnackAlert(data.message,'white','#8dbf42');
                                    $('tbody').prepend(`<tr class="animated slideInLeft" >
                                                        <td><div class="td-content ">No</div></td>
                                                        <td><div class="td-content ">${Name}</div></td>
                                                         <td><div class="td-content"> ${Phone} </div></td>
                                                         <td><div class="td-content"><span class="badge text-white badge-pills p-2 ${UserRoleColor[UserRole-1]} ">${GlobalUserRole[UserRole-1]}</span></div></td>
                                                         <td><a href="" class="td-content "><span  class="badge badge-warning p-2 "><i class="material-icons">edit</i> </span>     </a> </td>
                                                         <td><div class="td-content">Today</div></td></tr>`);

                                }else if (data == 'email_exit')
                                {
                                    SnackAlert(ErrorReturn.ErrEmail,'white','#e7515a');
                                }

                            });
                    }else{
                        return 'Role error';
                    }


                }


            }

        }

    }



</script>

</body>
</html>
