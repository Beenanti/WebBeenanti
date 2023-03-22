
<!-- start: sidebar -->
<aside id="sidebar-left" class="sidebar-left">
				
                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                            <li class="nav">

                                {{-- @if(auth()->user()->role == "admin_teknisi")
                                @else --}}
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <span>User</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="/list-user">
                                            Daftar User
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-wrench" aria-hidden="true"></i>
                                        <span>Panti</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="/listPanti">
                                            Daftar Panti Asuhan 
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
            
                        <hr class="separator" />
            
                    
                    </div>
            
                </div>
            
            </aside>
<!-- end: sidebar -->