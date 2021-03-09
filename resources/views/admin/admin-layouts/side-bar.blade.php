<style>
    li.menu {
        padding: 2px;
        border-radius: 5px;
        margin: 5px;
    }
    li.menu:hover{
        background-color: #ebedf2;
        color: white;
    }
    .head-line {
        display: flex;
        justify-content: left;
        margin-left: 28px;
    }
    .logout-icon {
        margin: 0 0 0 -119px;
        padding-top: 6px;
    }
    .btn-logout{

        border: none;
        color: white;
        border-radius: 5px;
        height: 40px;
        /*-moz-box-shadow: 0px 0px 31px 0px rgba(97,91,97,1);*/

    }
    li.menu.active {
        background-color: lightgrey;
    }
    /*li.menu.active ,a,i {*/
    /*    color: black;*/
    /*}*/
    .btn-cover {
        display: flex;
        justify-content: center;
    }
    .margin-custom-control{
        margin-top: -4px !important;
    }
</style>
<div class="sidebar-wrapper sidebar-theme">
    @php $UserInfo = Auth::user(); @endphp

    <nav id="sidebar">

        <ul class="navbar-nav theme-brand theme-bg flex-row  text-center">
            <li class="nav-item theme-text theme-color">
                <a href="" class="nav-link theme-color">{{$UserInfo->name}}</a>
            </li>
        </ul>

        <ul class="list-unstyled menu-categories pt-0" id="accordionExample">

            @if($UserInfo->role <= 2)
                <li class="menu {{Request::segment(2)=='register'?"active":""}}">
                    <a href="{{route('UserList')}}" class="dropdown-toggle">
                        <i class="material-icons ">account_circle <small class="text-black margin-custom-control" > ACCOUNT </small></i>
                    </a>
                </li>
                <li class="menu {{Request::segment(2)=='company'?"active":""}}">
                    <a href="{{route('Company')}}" class="dropdown-toggle">
                        <i class="material-icons ">home <small class="text-black margin-custom-control" > COMPANY </small></i>
                    </a>
                </li>
                <li class="menu {{Request::segment(2)=='station'?"active":""}}">
                    <a href="{{route('StationList')}}" class="dropdown-toggle">
                        <i class="material-icons ">api <small class="text-black margin-custom-control" >STATION</small></i>
                    </a>
                </li>
                <li class="menu {{Request::segment(2)=='department'?"active":""}} ">
                    <a href="{{route('DepartmentList')}}" class="dropdown-toggle">
                        <i class="material-icons ">view_agenda <small class="text-black margin-custom-control" >DEPARTMENT</small></i>
                    </a>
                </li>
                @endif
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">meeting_room <small class="text-black margin-custom-control" >MEETING</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">corporate_fare <small class="text-black margin-custom-control" >ORGANIZATION NEWS</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">preview <small class="text-black margin-custom-control" >ORGANIZATION POLICIES</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">thumb_up_alt <small class="text-black margin-custom-control" >HOLIDAYS</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">announcement <small class="text-black margin-custom-control" >ANNOUNCEMENT</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">table_rows <small class="text-black margin-custom-control" >WORK SCHEDULE</small></i>
                </a>
            </li>
            <li class="menu ">
                <a href="{{route('StationList')}}" class="dropdown-toggle">
                    <i class="material-icons ">miscellaneous_services <small class="text-black margin-custom-control" >SETTING</small></i>
                </a>
            </li>

{{--            <li class="menu">--}}
{{--                <form method="POST" action="{{route('logout')}}">--}}
{{--                    @csrf--}}
{{--                    <div class="btn-cover">--}}
{{--                        <button class="btn-logout w-100 theme-bg" type="submit">--}}
{{--                            <i class="material-icons theme-color logout-icon " >power_settings_new LOGOUT</i>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </li>--}}

        </ul>

    </nav>

</div>
