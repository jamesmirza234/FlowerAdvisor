<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing Page</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
              <!--   <a class="navbar-brand" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="..." /></a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#Application">Application</a></li>
                        <li class="nav-item"><a class="nav-link" href="#someday">Someday's</a></li>
                                             
                        <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}></a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <input type="text" value="HALLOW10" id="copyText" readonly>
        <!-- The button used to copy the text -->
        <button class="btn btn-primary btn-sm text-uppercase"  id="copyBtn">Copy text</button>
<!-- 
                <div class="masthead-subheading">Welcome To Our Studio!</div>
                <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a> -->
            </div>
        </header>
        <!-- Services-->
        <section class="page-section" id="Application">
            <div class="container">
                <div class="text-center">
                    <h4 class="section-heading text-uppercase">Download Our Application</h2>
                    
                </div>
                <div class="row text-center">
                    <div class="col-lg-4 col-sm-6 mb-4">
                         
                        
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                         
                        <a href="https://itunes.apple.com/us/app/online-florist-floweradvisor/id1185232807" target="_blank">
              <img src="{{URL::asset('/assets/play-store.png')}}" class="get-app mt-1 img-fluid">

            </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-4">
                         
                        
                    </div>
                     
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="someday">
            <div class="container">
                <div class="text-center">
                    <h3 class="section-heading text-uppercase">Someday's</h3>
                    
                </div>
                <div class="row">
                    <div class="col-lg-5 col-sm-6 mb-4">
                         
                        
                    </div>
                   
                    <div class="col-lg-4 col-sm-6 mb-4">
                       
                         <button class="btn btn-xl btn-primary" href=" https://www.floweradvisor.com.ph/flowersphilippines" target="_blank">
                           Someday's

            </button>
                    </div>
                     <div class="col-lg-4 col-sm-6 mb-4">
                         
                        
                    </div>
                   
                </div>
            </div>
        </section>
        <!-- About-->
      

       
        <!-- Footer-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                           <a href=" https://www.floweradvisor.com.ph" target="_blank">
              <img src="{{URL::asset('/assets/flower.png')}}" class="get-app mt-1 img-fluid">

            </a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
      
        <!-- Portfolio item 2 modal popup-->
       
        <!-- Portfolio item 3 modal popup-->
        
        <!-- Portfolio item 4 modal popup-->
        
        <!-- Portfolio item 5 modal popup-->
       
        <!-- Portfolio item 6 modal popup-->
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script>
            const copyBtn = document.getElementById('copyBtn')
            const copyText = document.getElementById('copyText')
            
            copyBtn.onclick = () => {
                copyText.select();    // Selects the text inside the input
                document.execCommand('copy');    // Simply copies the selected text to clipboard 
                 Swal.fire({         //displays a pop up with sweetalert
                    icon: 'success',
                    title: 'Text copied to clipboard',
                    showConfirmButton: false,
                    timer: 1000
                });
            }
        </script>
    </body>
</html>
