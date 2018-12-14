        
        <div class="sidebar">
            <nav class="sidebar-nav">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="main.html"><i class="icon-speedometer"></i> SOPPORTPYMES</a>
                    </li>
                    <li class="nav-title">
                        Sistema de Tickets
                    </li>
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Clientes</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=1" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Soportes</a>
                            </li>
                            <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user"></i> Usuarios Clientes</a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-user-following"></i> Servicios</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=1" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Soportes</a>
                            </li>
                            <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user"></i> Usuarios Clientes</a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=0" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-bag"></i> Tickets</a>
                    </li>
                    
                    <li class="nav-item nav-dropdown">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Usuarios</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=1" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user-following"></i> Soportes</a>
                            </li>
                            <li @click="menu=2" class="nav-item">
                                <a class="nav-link" href="#"><i class="icon-user"></i> Usuarios Clientes</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <button class="sidebar-minimizer brand-minimizer" type="button"></button>
        </div>
