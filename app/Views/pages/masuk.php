<!doctype html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple.png">
   <link rel="icon" type="image/png" href="../assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <title><?= $title; ?></title>
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
   <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
   <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
   <link href="../assets/css/darkstyle.css?v=1.2.1" rel="stylesheet" />
</head>

<div class="page-header" style="background-color: #2f3337!important;">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">
            <div class="card card-signup">
               <form class="form" method="post" action="aksi-masuk.php">
                  <div class="header header-primary text-center">
                     <h4 class="card-title">Masuk</h4>
                  </div>
                  <div class="card-content">
                     <div class="form-group input-group has-primary">
                        <span class="input-group-addon">
                           <i class="material-icons">face</i>
                        </span>
                        <input type="text" name="username" class="form-control" style="color: #000;" placeholder="Nama Pengguna">
                     </div>
                     <div class="form-group input-group has-primary">
                        <span class="input-group-addon">
                           <i class="material-icons">lock_outline</i>
                        </span>
                        <input type="password" name="password" placeholder="Password..." class="form-control" style="color: #000;" />
                     </div>
                  </div>
                  <div class="footer text-center">
                     <button class="btn btn-primary btn-raised btn-lg" type="submit" name="masuk">Masuk</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

</html>