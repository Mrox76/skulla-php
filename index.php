<?php
	// Allow the config
	define('__CONFIG__', true);
	// Require the config
	require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./bootstrap/css/fontawesome.min.css">


    <title>SKULLA &REG;</title>

</head>
<body>
    <div class="container-fluid">
        <header class="header">
            <nav class="navigation">
                <div class="logo">skulla<sup>&reg;</sup></div>
                <ul class="nav">
                    <li class="nav-link"><a href="#">inicio</a></li>
                    <li class="nav-link"><a href="#">cursos</a></li>
                    <li class="nav-link"><a href="#">blog</a></li>
                    <li class="nav-link"><a href="#">contactos</a></li>
                    <li class="nav-link  btn btn-outline-light" onclick="document.querySelector('.login').style.display='block'"><a href="#">entrar</a></li>
                    <li class="nav-link btn btn-light" onclick="document.querySelector('.register').style.display='block'"><a href="#">registrar</a></li>
                </ul>
            </nav>
            <div class="menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </header >
        <section class="hero">
            <div class="wellcome">
                <h1 class="t-h-1">bem vindo!</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus, reiciendis iure sit cumque sapiente culpa distinctio optio quae dolorem porro perferendis consequatur in. Quod sunt consequuntur ullam itaque vel beatae ducimus distinctio.</p>
                <form action="">
                    <input type="text" class="input-search" placeholder="O que deseja aprender?" class="form-control" style="width: 100%; padding: 8px; border: 1px solid #eee;">
                    <button type="submit" name="" id="search" class="btn">
                    <img src="./assets/images/hero/search.png" alt=""></button>
                </form>
            </div>
            <img class="hero-computer" src="./assets/images/hero/skulla.png" alt="">
            <p class="fa-arrow-down" style="position: absolute; bottom: 0; margin: 0 50%;"></p>            
        </section>
        <section class="cards-container">
            <h2 class="text-center t-h-2">Aprenda connosco</h2>
            <div class="cards">
                <div class="card-item">
                    <div class="card-img text-center">
                        <span>novo</span>
                        <img src="./assets/images/card/html.png" alt="HTML icon">
                    </div>
                    <div class="card-details">
                        <h3 class="t-h-3">HTML5 </h3>
                        <p>Zacarias Torrizão</p>
                        <h4>500.00MT</h4>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-img text-center">
                        <span>novo</span>
                        <img src="./assets/images/card/css.png" alt="CSS icon">
                    </div>
                    <div class="card-details">
                        <h3 class="t-h-3">CSS</h3>
                        <p>Zacarias Torrizão</p>
                        <h4 class="t-h-4">500.00MT</h4>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-img text-center">
                        <span>novo</span>
                        <img src="./assets/images/card/bootstrap.png" alt="Bootstrap icon">
                    </div>
                    <div class="card-details">
                        <h3 class="t-h-3">BOOTSTRAP</h3>
                        <p>Zacarias Torrizão</p>
                        <h4 class="t-h-4">500.00MT</h4>
                    </div>
                </div>
                <div class="card-item">
                    <div class="card-img text-center">
                        <span>novo</span>
                        <img src="./assets/images/card/js.png" alt="JavaScript icon">
                    </div>
                    <div class="card-details">
                        <h3 class="t-h-3">JAVASCRIPT</h3>
                        <p>Zacarias Torrizão</p>
                        <h4 class="t-h-4">500.00MT</h4>
                    </div>
                </div>

            </div>
        </section>
        <section class="reviews">
            <h2 class="t-h-2 text-center">Realize os seus sonhos</h2>
            <div class="reviews-content">
                <div class="reviews-item">
                    <span class="quote-left fa-quote-left"></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus in, sapiente architecto.</p>
                    <div class="user">
                        <p class="text-right">Lorem, ipsum dolor.</p>
                        <img src="./assets/images/avatar/photo_4.png" alt="">
                    </div>
                </div>
                <div class="reviews-item">
                    <span class="quote-left fa-quote-left"></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus in, sapiente architecto.</p>
                    <div class="user">
                        <p class="text-right">Lorem, ipsum dolor.</p>
                        <img src="./assets/images/avatar/photo_20.png" alt="">
                    </div>
                </div>
                <div class="reviews-item">
                    <span class="quote-left fa-quote-left"></span>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus in, sapiente architecto.</p>
                    <div class="user">
                        <p class="text-right">Lorem, ipsum dolor.</p>
                        <img src="./assets/images/avatar/photo_17.png" alt="">
                    </div>
                </div>
            </div>
            <h3 class="t-h-3 text-center">Capacite-se e trabalhe nas melhores empresas</h3>
            <div class="brands">    
                <h1 class="t-h-1 text-dark">SKULLA<sup>&reg;</sup></h1>
                <h1 class="t-h-1 text-dark">SKULLA<sup>&reg;</sup></h1>
                <h1 class="t-h-1 text-dark">SKULLA<sup>&reg;</sup></h1>
                <h1 class="t-h-1 text-dark">SKULLA<sup>&reg;</sup></h1>
                <h1 class="t-h-1 text-dark">SKULLA<sup>&reg;</sup></h1>
            </div>
        </section>
        <section class="blog">
            <h2 class="t-h-2 text-center">Nosso blog</h2>
            <div class="blog-content">
                <div class="blog-item">
                    <img src="./assets/images/blog/intelidev.jpg" alt="photo-of-man-in-grey-sweater-holding-yellow-sticky-note">
                    <div class="blog-details">
                        <h3 class="t-h-3">Seja um inteliDev</h3>
                        <p class="text-dark">10/06/2021</p>
                    </div>
                </div>
                <div class="blog-item">
                    <img src="./assets/images/blog/team-work.jpg" alt="photo-of-people-near-wooden-table
                    ">
                    <div class="blog-details">
                        <h3 class="t-h-3">Trabalhe em equipe</h3>
                        <p class="text-dark">10/06/2021</p>
                    </div>
                </div>
                <div class="blog-item">
                    <img src="./assets/images/blog/computer-in-gray.jpg" alt="grayscale-photo-of-computer-laptop-near-white-notebook">
                    <div class="blog-details">
                        <h3 class="t-h-3">Prepare o setup</h3>
                        <p class="text-dark">10/06/2021</p>
                    </div>
                </div>
                <div class="blog-item">
                    <img src="./assets/images/blog/punching.jpg" alt="photo-of-mirrors-edge-catalyst-5k-o8">
                    <div class="blog-details">
                        <h3 class="t-h-3">Não lute com o seu código</h3>
                        <p class="text-dark">10/06/2021</p>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <h1 class="t-h-1 text-center">SKULLA&reg;</h1>
            <div class="social-media text-center">
                <div class="s-m-item fa-facebook-f"></div>
                <div class="s-m-item fa-instagram"></div>
                <div class="s-m-item fa-twitter"></div>
                <div class="s-m-item fa-linkedin-in"></div>
            </div>
            <p class="text-center">&copy; 2020 SKULLA, TODOS OS DIREITOS RESERVADOS</p>
        </footer>
    </div>

    <div class="sign login">
        <form class="sign-content animate ">
            <div class="imgcontainer text-center">
                <span class="close" onclick="document.querySelector('.login').style.display='none'">&times;</span>
                <img src="./assets/images/avatar/photo_17.png" alt="Avatar" class="avatar"> 
            </div>
            <div class="container">

                    <label for="uname"><strong>E-mail</strong></label>
                    <input type="text" placeholder="username@example.com" name="email" required>
                
                    <label for="password"><strong>Password</strong></label>
                    <input type="password" placeholder="Enter password" name="password" required> 

                    <button class="btn btn-primary loginbtn">Login</button>

            </div>
            <div class="container">
                <button class="btn btn-danger cancelbtn" onclick="document.querySelector('.login').style.display='none'">Cancel</button>
                <span class="f-psw">Forgot <a href="#">password</a></span>
            </div>
        </form>
    </div>

    <div class="sign register">
        <form action="#" class="sign-content animate js-register">
            <h1 class="text-center text-dark">REGISTRAR-SE</h1>
            <span class="close" onclick="document.querySelector('.register').style.display='none'">&times;</span>
            <div class="container">
                <label for="uname"><strong>Username</strong></label>
                <input type="text" placeholder="Enter username" name="uname" required>
            
                <label for="email"><strong>Email</strong></label>
                <input type="email" placeholder="username@example.com" name="email" required>

                <label for="password"><strong>Password</strong></label>
                <input type="password" placeholder="Enter password" name="password" required> 

                <div class="js-error text-danger" style="display: none; padding-top: 15px; ">teste</div>
    
                <button class="btn btn-primary loginbtn">Registrar-se</button>
            </div>
    
            <div class="container">
                <button type="submit" class="btn btn-danger cancelbtn" onclick="document.querySelector('.register').style.display='none'">Cancel</button>
            </div>
        </form>
       
    </div>

    <?php require_once "inc/footer.php"; ?> 
    <script src="./bootstrap/js/jquery-3.5.1.min.js"></script>
</body>
</html>