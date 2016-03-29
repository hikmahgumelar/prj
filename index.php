<!DOCTYPE html>
<html lang="en" ng-app="gapps">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{cari}}</title>

    <!-- Bootstrap Core CSS -->
    <link href="../prj/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../prj/css/blog-home.css" rel="stylesheet">
    <!--Angular init -->
    <script type="text/javascript" src="../prj/angular/angular.min.js"></script>
    <script type="text/javascript" src="../prj/js/controller.js"></script>

</head>

<body>

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
        <a class="navbar-brand" href="">{G.apps}</a>
        </div>
         <div class="navbar-text navbar-right" ng-controller="controller">username {{dataKaryawan[0].name}}</div>
        <form class="navbar-form navbar-right" role="cari"></form> 
    </nav>
<!-- Page Content -->
    <div class="container">
    <div class="row">
                       
<!-- Blog Entries Column -->
    <div class="col-md-8" ng-controller="controller">
      <li ng-repeat="item in dataKaryawan">
     <h>nama :  {{item.name}}</h1> 
     <p><h>Deskripsi : {{item.description}}</h2></p>
        
     </li>
                     <!--isi-->
      
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
