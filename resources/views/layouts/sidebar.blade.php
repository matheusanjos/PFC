<nav id="sidebar">
    <div class="sidebar-header">
    <img src="{{ asset('images/logo.png')}}" alt="" id="sidebarLogo">
    </div>

    <ul class="list-unstyled components">
        <li class="dropdown-divider line-color"></li>
        <li>
            <a href="{{ url('/pesquisar') }}" class="sidebar-item text-center">
                <i class="fas fa-search"></i>
                Pesquisar Cliente
            </a>
        </li>
        <li class="dropdown-divider space"></li>
        <li>
            <a href="{{ url('/cadastrar') }}" class="sidebar-item text-center">
                <i class="fas fa-user-plus"></i>
                Cadastrar Cliente
            </a>
        </li>
        <li class="dropdown-divider line-color"></li>
        <li>
            <a href="{{ url('/cadastrar/funcionario') }}" class="sidebar-item text-center">
                <i class="fas fa-user-plus"></i>
                Cadastrar Funcionario
            </a>
        </li>
    </ul>
</nav>
