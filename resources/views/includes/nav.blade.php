<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">RBX1 <span class="glyphicon glyphicon-home"></span></a>
            <!-- Trigger the modal with a button -->
            <button type="button" id="btnInfoNav" class="btn btn-default navbar-btn btn-xs" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-info-sign"></span>
            </button>
        </div>
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#"><span class="glyphicon glyphicon-arrow-up"></span> Top</a></li>
                @if (Request::is('/'))
                    <li><a href="#sectionBrazo">Brazo robot</a></li>
                    <li><a href="#video">Video</a></li>
                    <li><a href="#contact"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
                @endif
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/novedades">UserExperience</a></li>
                    <li><a href="/layout">Layout</a></li>
                    <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                    <li><a href="#" data-toggle="modal" data-target="#loginModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>