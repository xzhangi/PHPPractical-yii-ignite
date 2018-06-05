<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">SkillsFuture</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <!--<li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span
                class="caret"></span></a>
                <ul class="dropdown-menu">
                <li><a href="#">Page 1-1</a></li>
                <li><a href="#">Page 1-2</a></li>
                <li><a href="#">Page 1-3</a></li>
                </ul>
                </li>-->
                <li><a href="<?php echo base_url() . "index.php/viewStudent/index/" ?>">View
                Students</a></li>
                <li><a href="<?php echo base_url() .
                "index.php/school/index/" ?>">View Schools</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo base_url() . "index.php/student/index/" ?>"><span
                class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </ul>
        </div>
    </div>
</nav>

