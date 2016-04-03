<!DOCTYPE html>
<html lang="en" ng-app="gapps">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Gapps</title>
    <link href="../prj/css/bootstrap.min.css" rel="stylesheet">
    <link href="../prj/css/navbar/navbar.css" rel="stylesheet">
    <link href="../prj/css/blog-home.css" rel="stylesheet">
    <script src="../prj/js/jquery.min.js"></script>
    <script src="../prj/js/bootstrap.min.js"></script>
    <script src="../prj/angular/angular.min.js"></script>
    <script src="../prj/js/controller.js"></script>

</head>

<body>

<!-- Navigation -->
    <!-- navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     <table>
       <tr>
         <td>
            <img src="../prj/images/logo.png" class="img-responsive" width="50" height="40">
         </td>
         <td>
           <a style="color:white;" class="navbar-brand" href="#">{G.Apps}</a>
         </td>
       </tr>
     </table>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class=""><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Option<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
       <li><a href="#"><button class="btn btn-default login">  <span class="glyphicon glyphicon-lock"></span> Login </button></a></li>
        <li><a href="#"><button class="btn btn-success">  <span class="glyphicon glyphicon-user"></span> Daftar </button></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<!-- Page Content -->
    <div class="container">
        <div class="row">
                       
<!-- Blog Entries Column -->
    <div class="col-md-8" ng-controller="controller">
      <div>
     <table class="table table-striped">
    <thead>
      <tr>
        <th>Nama </th>
        <th>Deskripsi</th>
        <th>Negara</th>
          <th>Pilihan</th>
      </tr>
    </thead>
    <tbody  ng-repeat="item in dataKaryawan">
      <tr>
          <td>{{item.name}}</td>
     <td>{{item.description}}</td>
          <td>{{item.country}}</td>
      </tr>
    </tbody>
  </table>
        </div> 
    <div ng-controller="myCtrl">


<form ng-submit="kirim()">
     <p>Nama        : <input type="text" name="nama" ng-model="nama" required /></p>
     <p>Negara      : <input type="text" name="negara" ng-model="negara" required /></p>
     <p>Deskripsi   : <input type="text" name="deskripsi" ng-model="deskripsi" required /></p>
    <button type="submit">Send</button>
</form>
    
    </div>

            
            </div>
        
<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">
   
<!-- Blog Search Well -->
                <div class="well">
                        <h4>Blog Search</h4>
                        <div class="input-group">
                        <form action="/cari" method="POST" >
                        <input type="text" class="form-control" name="input" id="input" ng-model="cari">
                        <button class="btn btn-default" type="submit">mulai mencari {{cari}}</button>
                        </form>     
                        </div>
<!-- /.input-group -->
                </div>
      
<!-- Judul Artikel -->
            <div class="well">
                <h4>Judul Artikel</h4>
                    <div class="row">
                        <div class="col-lg-6">
                                    <ul class="list-unstyled">
                                        <li><a href="/detail/<%=data[i].id%>"></a>
                                        </li>
                                    </ul>
<!-- /.col-lg-6 -->
                
                            <div class="col-lg-6">
                   
                            </div>
<!-- /.col-lg-6 -->
                
      
                        </div>
<!-- /.row -->
                        </div>

<!-- Side Widget Well -->
                       <div class="well">
                          <h4>Side Widget Well</h4>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                       </div>

            </div>

</div>
<!-- /.row -->

        

<!-- Footer -->
<footer>
    <div class="row">
        <div class="col-lg-12">
            <p>Copyright &copy; {G.apps} Production 2014</p>
        </div>
<!-- /.col-lg-12 -->
    </div>
<!-- /.row -->
</footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="../js/jquery.js"></script>
    <script src="../js/socket.io.js"></script>
    <script src="../js/jquery.min.js"></script>
 
  
    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap.min.js"></script>
        <h1></h1>
</body>

</html>
