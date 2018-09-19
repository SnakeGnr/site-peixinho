<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
  </head>
  
  <body>
    <!--Navbar-->
<mdb-navbar SideClass="navbar navbar-expand-lg navbar-dark indigo">

<!-- Navbar brand -->
<mdb-navbar-brand><a class="navbar-brand" href="#">Navbar</a></mdb-navbar-brand>

<!-- Collapsible content -->


    <!-- Links -->
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link waves-light" mdbWavesEffect>Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" mdbWavesEffect>Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link waves-light" mdbWavesEffect>Pricing</a>
        </li>

        <!-- Dropdown -->
        <li class="nav-item dropdown" dropdown>
            <a dropdownToggle mdbWavesEffect type="button" class="nav-link dropdown-toggle waves-light" mdbWavesEffect>
            Basic dropdown<span class="caret"></span></a>
            <div *dropdownMenu class="dropdown-menu dropdown dropdown-primary" role="menu">
                <a class="dropdown-item waves-light" mdbWavesEffect href="#">Action</a>
                <a class="dropdown-item waves-light" mdbWavesEffect href="#">Another action</a>
                <a class="dropdown-item waves-light" mdbWavesEffect href="#">Something else here</a>
                <div class="divider dropdown-divider"></div>
                <a class="dropdown-item waves-light" mdbWavesEffect href="#">Separated link</a>
            </div>
        </li>

    </ul>
    <!-- Links -->

<!-- Search form -->
    <form class="form-inline waves-light" mdbWavesEffect>
        <div class="md-form mt-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search">
        </div>
    </form>

<!-- Collapsible content -->

</mdb-navbar>
<!--/.Navbar-->
  





  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/js/mdb.min.js"></script>
  </body>
</html>