<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="profile">
            <div class="profile_pic">
                <img src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}" class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Bem vindo,</span>
                <h2>{{ Auth::user()->name }}</h2>
                <small></small>
            </div>
        </div>
        <!-- /menu profile quick info -->
        <br />
        <br />
        <br />
        {{ $bag = Session::getMetadataBag() }}
        
        <h4> Inativo por {{ $bag }}</h4>

        <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

                <div class="menu_section">
                    <h3>General</h3>
                    <ul class="nav side-menu">
                        <li><a href="/"><i class="fa fa-dashboard"></i> Dashboard</a>
                        </li>
                        @if (in_array(Auth::user()->role_id, [1, 2]))
                        <li><a><i class="fa fa-user"></i> Funcionários <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/funcionarios">Listar Funcionários</a></li>
                                <li><a href="/funcionarios/create">Adicionar Funcionário</a></li>
                            </ul>
                        </li>

                        <li><a><i class="fa fa-anchor"></i> Fornecedores <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/fornecedores">Listar Fornecedores</a></li>
                                <li><a href="/fornecedores/create">Adicionar Fornecedores</a></li>
                            </ul>
                        </li>
                        @endif

                        @if (in_array(Auth::user()->role_id, [1]))
                        <li><a><i class="fa fa-money"></i> Financeiro <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/financeiro/plano">Plano Financeiro</a></li>
                                <li><a href="/relatorios/dre">Demonstartivo de Resultado</a></li>
                            </ul>
                        </li>
                        <li><a><i class="fa fa-bar-chart-o"></i> Relatórios <span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="/relatorios">Vendas</a></li>
                                <li><a href="/relatorios">Fornecedores</a></li>
                            </ul>
                        </li>
                        @endif
                    </ul>
                </div>

                <!-- sidebar menu -->
                    <div class="menu_section">
                        <h3>Ferramentas</h3>
                        <ul class="nav side-menu">
                            <li><a href="/voucher"><i class="fa fa-tags"></i> Voucher</a></li>
                            <li><a href="/espera"><i class="fa fa-users"></i> Espera</a></li>
                            @if (in_array(Auth::user()->role_id, [1, 2]))
                            <li><a href="/fechamento"><i class="fa fa-archive"></i> Fechamento</a></li>
                            @endif
                        </ul>
                    </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>