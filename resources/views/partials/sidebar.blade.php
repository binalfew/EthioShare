<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">

            @if($signedIn)
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <span><img alt="image" class="img-circle" src="{{ asset('images/profile-small.jpg') }}" /></span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs"><strong class="font-bold">{{ $user->name }}</strong></span>
                            <span class="text-muted text-xs block">Art Director <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="mailbox.html">Mailbox</a></li>
                        <li class="divider"></li>
                        <li><a href="/auth/logout">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">ETS+</div>
            </li>
            @endif

            <li class="active">
                <a href="/exams">
                    <i class="fa fa-th-large"></i>
                    <span class="nav-label">Exam Papers</span>
                </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Worksheets</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-book"></i> <span class="nav-label">Books</span>
            </li>
        </ul>
    </div>
</nav>