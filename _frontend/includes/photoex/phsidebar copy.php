<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>PPHOTOGRAPHY</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>photographer</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a id="homepage" href="<?=page('photographer/photodashboard.php')?>" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a id="inv" href="<?=page('photographer/photoinventory.php')?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Portfolio</a>
                    <a id="serv" href="<?=page('photographer/photoportfolio.php')?>" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Inventory</a>
                </div>
            </nav>
        </div>
        <style>
            .nav-link{
                font-size: 13px;
            }
        </style>

        <script>
            window.addEventListener("load", ()=>{
                $page = "<?=current_page()?>";
                if($page == "photographer/photodashboard"){
                    document.querySelector("#homepage").classList.add("active");
                }
                
                if($page == "photographer/photoinventory"){
                    document.querySelector("#inv").classList.add("active");
                }

                if($page == "photographer/photoportfolio"){
                    document.querySelector("#serv").classList.add("active");
                }
            });
        </script>