<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Laravel Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('public/frontend/vendor/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?php echo e(asset('public/frontend/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href=" <?php echo e(asset('public/frontend/css/clean-blog.min.css')); ?> " rel="stylesheet">

  <!-- Sweet alert CDN link -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

  <!--Font Awesome CDN link -->

  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href=" <?php echo e(url('/')); ?> ">ASR Avishek</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo e(url('/')); ?> ">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo e(url('/about-us')); ?> ">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" <?php echo e(route('contact')); ?> ">Contact</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href=" <?php echo e(route('post')); ?> ">Write Post</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('shoishob')); ?>">Blog</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('allstudent')); ?>">Student</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo e(asset('public/frontend/img/home-bg.jpg')); ?>)">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
            <h1> Laravel Blog</h1>
            <span class="subheading">A Blog Theme by ASR AVISHEK LARAVEL</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.twitter.com/asravishekroy">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/developeravishek">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/asravishek">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">&copy; Copyright Your Website <?php echo date('Y') ?>. Developed By <a href="http://asravishek.com" target="_blank">ASR Avishek</a> </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo e(asset('public/frontend/vendor/jquery/jquery.min.js')); ?>"></script>
  <script src="<?php echo e(asset('public/frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>



  <!--Normal sweet alert nonification-->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  <script src="<?php echo e(asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')); ?>"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="<?php echo e(asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')); ?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo e(asset('public/frontend/js/clean-blog.min.js')); ?>"></script>
  <script>
        <?php if(Session::has('messege')): ?>
            var type="<?php echo e(Session::get('alert-type','info')); ?>"
            switch(type){
                case 'info':
                    toastr.info("<?php echo e(Session::get('messege')); ?>");
                    break;
                case 'success':
                    toastr.success("<?php echo e(Session::get('messege')); ?>");
                    break;
                case 'warning':
                toastr.warning("<?php echo e(Session::get('messege')); ?>");
                    break;
                case 'error':
                    toastr.error("<?php echo e(Session::get('messege')); ?>");
                    break;
            }
        <?php endif; ?>
    </script>

  <!-- Sweet Alert CDN and Code Start-->
  <script src=" <?php echo e(asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')); ?> "></script>
  <script>
      $(document).on("click", "#delete", function(e){
        e.preventDefault();
        var link = $(this).attr("href");
        swal({
            title: "Are You Want to Delete?",
            text: "Once Delete, This will be Permanently Delete!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
        .then((willDelete) =>{
            if (willDelete) {
                window.location.href = link;
            } else {
                swal("Safe Data!");
            }
        });
      });
  </script>
  <!-- Sweet Alert CDN and Code End-->




</body>

</html>
<?php /**PATH F:\xampp\htdocs\laravel\resources\views/welcome.blade.php ENDPATH**/ ?>