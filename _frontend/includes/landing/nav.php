







<header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="<?=page('home.php')?>" style="display: flex;vertical-align:middle;"><img src="https://scontent.fceb1-3.fna.fbcdn.net/v/t39.30808-6/402092939_810649211068918_2979425544930041397_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeEtfA61NCB4UHIZMfI1bpF8XAEZcMQR5BNcARlwxBHkE7mRBZUSAD4nfg_jQKfRhr4VpmDkpYkgfft0RK83yeTE&_nc_ohc=M4gakrLhVfEQ7kNvwEVAo91&_nc_oc=AdkgAiQUczwm21yj-Spd4qg7Ei_UzMNv4yTPKrJLkA1c8qixHaAZpsI1aolkQvjTUG8&_nc_zt=23&_nc_ht=scontent.fceb1-3.fna&_nc_gid=NY0VOb5f7ZziSAt-R0HnGg&oh=00_AfJGTXzG6hwyzSNDbZpZGLEUL6wrAREcTBZ7ZInnmPOr-Q&oe=6830C8A7" height="50" width="50" lt=""><b style="margin: auto; color:white;font-size:20px;padding-left:10px;">PPhotography</b></a>
                    </div>
                </div>
                <div class="col-lg-10"  style=" padding-left:10px; margin:auto;">
                    <div class="header__nav__option">
                        <nav class="header__nav__menu mobile-menu">
                            <ul>
                                <li><a id="hm" href="<?=page('home.php')?>">Home</a></li>
                                <li><a id="about" href="<?=page('about.php')?>">About</a></li>
                                <li><a id="port" href="<?=page('portfolio.php')?>">Portfolio</a></li>
                                <li><a id="serv" href="<?=page('services.php')?>">Services</a></li>
                                <li><a id="cont" href="<?=page('contact.php')?>">Contact</a></li>
                                
                            </ul>
                        </nav>

                        <div class="header__nav__social">
                            <a href="<?=page('services.php')?>"><i><button class="book">BOOK NOW</button></i></a>
                            <a href="#"><i></i></a>
                            <a href="#"><i></i></a>
                            <a href="#"><i></i></a>
                            <a href="#"><i></i></a>
                            <a href="<?=page('loginpage.php')?>"><button class="login">LOG IN</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>

    <script>
            window.addEventListener("load", ()=>{
                $page = "<?=current_page()?>";
                if($page == "home"){
                    document.querySelector("#hm").classList.add("active");
                }
                if($page == "about"){
                    document.querySelector("#about").classList.add("active");
                }
                if($page == "portfolio"){
                    document.querySelector("#port").classList.add("active");
                }
                if($page == "services"){
                    document.querySelector("#ser ").classList.add("active");
                }
                if($page == "contact"){
                    document.querySelector("#cont").classList.add("active");
                }

            });
        </script>
        

        <style>
            .book{
                background-color: orange;
                border-radius: 20px;
                height:40px;
                width: 110px;
            }
            .login{
  
  color: black;
  padding: 5px 10px;
  border: none;
  border-radius: 6px;
  font-size: 16px;
  cursor: pointer;
  transition: background-color 0.3s ease, transform 0.2s ease;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.login:hover {

  transform: translateY(-2px);
}

.login:active {

  transform: translateY(0);
  box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.2);
}
        </style>