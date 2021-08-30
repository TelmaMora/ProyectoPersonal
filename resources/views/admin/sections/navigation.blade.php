<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="/home" class="site_title"><i class="fa fa-address-book"></i> <span>RH_ITZ</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{ asset('images/img.jpg') }}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bienvenido,</span>
                <h2>{{ auth()->user()->name }}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>Escritorio</h3>
                <ul class="nav side-menu">
                    <li>
                        <a href="{{ route('home') }}"><i class="fa fa-home"></i> Inicio </a>

                    </li>
                    {{--@allows(get_auth_user(), ['user.create', 'user.update', 'user.view','user.delete','role.create','role.view'])--}}

                    <li><a><i class="fa fa-user"></i> Personal <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu"> 
                            <li><a id="Personal" href="{{route('personal.index')}}">Personal</a></li>

                            <li>{{link_to_route('estadistica.index','Estadistica personal docente y no docente por edad y genero',null,['class'=>'btn btn-primary'])}}</li>
                            <li>{{link_to_route('estadisticand.index','Estadistica personal no docente',null,['class'=>'btn btn-primary'])}}</li>
                            <li>{{link_to_route('estadisticperdoc.index','Estadistica personal docente',null,['class'=>'btn btn-primary'])}}</li>
                            
                        </ul>
                    </li>
                    {{--@endAllows--}}

                </ul>
            </div>


        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            {{--<a data-toggle="tooltip" data-placement="top" title="Settings">--}}
                {{--<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>--}}
            {{--</a>--}}
            {{--<a data-toggle="tooltip" data-placement="top" title="FullScreen">--}}
                {{--<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>--}}
            {{--</a>--}}
            {{--<a data-toggle="tooltip" data-placement="top" title="Lock">--}}
                {{--<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>--}}
            {{--</a>--}}
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="{{ route('user.logout') }}">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>