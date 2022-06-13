<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="../assets/img/sary.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            Misasoa
                            <span class="user-level">Administrateur</span>
                            <span class="caret"></span>
                        </span>
                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile">
                                    <i class="fas fa-user">
                                        <span class="link-collapse">My Profile</span>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#edit">
                                    <i class="fas fa-camera">
                                        <span class="link-collapse">Edit Profile</span>
                                    </i>
                                </a>
                            </li>
                            <li>
                                <a href="#settings">
                                    <i class="fas fa-cog">
                                        <span class="link-collapse">Settings</span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item ">
                    <a href="{{ route('accueil') }}" aria-expanded="false">
                        <i class="flaticon-home"></i>
                        <p>Accueil</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('commande') }}">
                        <i class="flaticon-list"></i>
                        <p>Commandes</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a data-toggle="collapse" href="#client">
                        <i class="flaticon-users"></i>
                        <p>Clients</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="client">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('client') }}">
                                    <i class="flaticon-add-user"></i>
                                    <p>Mes clients</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tsena') }}">
                        <i class="flaticon-box-3"></i>
                        <p>Produits</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('nouveau') }}">
                        <i class="flaticon-interface-6"></i>
                        <p>Nouveaux Produits</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('message') }}">
                        <i class="flaticon-envelope-1"></i>
                        <p>Urgence</p>
                    </a>
                </li>
                <li class="nav-section">

                </li>

                <li class="nav-item">
                    <a data-toggle="collapse" href="#forms">
                        <i class="flaticon-settings"></i>
                        <p>Paramètre</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse" id="forms">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('param') }}">
                                    <i class="flaticon-user-5"></i>
                                    <p>Compte</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
