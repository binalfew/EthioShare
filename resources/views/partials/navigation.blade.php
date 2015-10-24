<div class="row border-bottom white-bg">
	<nav class="navbar navbar-static-top" role="navigation">
		<div class="navbar-header">
    		<a href="/" class="navbar-brand"><i class="fa fa-unlink"></i> Ethio Share</a>
		</div>

		<div class="navbar-collapse collapse" id="navbar">
			<ul class="nav navbar-nav">
				<li class="dropdown active">
                	<a aria-expanded="false"
                	   role="button"
                	   href="#"
                	   class="dropdown-toggle"
                	   data-toggle="dropdown">
                	   Academic <span class="caret"></span>
            	    </a>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="/exams">Exams</a></li>
                        <li><a href="#">Worksheets</a></li>
                        <li><a href="#">Lecture</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
        		</li>
			</ul>

			<ul class="nav navbar-top-links navbar-right">
                @if($signedIn)
                    <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> Log out</a></li>
                @else
                    <li><a href="/auth/register" class="">Sign Up</a></li>
                    <li><a href="/auth/login" class="">Sign In</a></li>
                @endif
            </ul>
		</div>
	</nav>
</div>