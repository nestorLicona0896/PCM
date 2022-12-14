<!DOCTYPE HTML>
<HTML>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="../css/grid.css" />
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>


        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Grid Management</title>    
    </head>

    <body>
        <!--inicializar conexion a base de datos-->
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "ecommercedb";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        ?>
        <!--header-->
        <div class="container-fluid  text-black text-center" id="header1">
            <div class="row row-cols-3 p-0 m-0" id="headerColumn">
                <div class="col-md-4 col-12">
                    <h2>Logo</h2>
                </div>

                <div class="col-md-4 col-12">
                    <img src="../imagenes/pcm.png" alt="" width="400px">
            
                </div>

                <div class="col-md-4 col-12">
                    <div class="topnav">
                        <input type="text" placeholder="búsqueda..">
                        <button type="submit"> <i class="fa fa-search"></i> </button>
                    </div>
                </div>
               
            </div>
        </div>

        <!--nav bar-->
        <div class ="container-fluid text-white text-center" id="navigationBar">
            <div class="row row-cols-3 m-0 p-0">
                <div class="col-md-4 col-12" id="navigationColumn">
                    <nav class="navbar navbar-expand navbar-light p-0">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!--main menu-->
                            <ul class="navbar-nav" id="mainMenu">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Catalogue</a>
                                        <ul class="dropdown-menu" id="catalogueMenu">
                                            <?php
                                                 $sql = "SELECT id, category_name FROM Product_Category";
                                                $result = $conn->query($sql);

                                                if ($result->num_rows > 0) {
                                                    // output data of each row
                                                    while($row = $result->fetch_assoc()) {
                                                        echo "<li><a class='dropdown-item' href='#'>"  .$row["category_name"]. "</a></li>";
                                                    }
                                                } else {
                                                    echo "0 results";
                                                }
                                            ?>
                                            <li><hr class="dropdown-divider"></li>
                                            <li><a class="dropdown-item" href="#">otra categoria</a></li>
                                        </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">About</a>
                                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown" id="aboutMenu">
                                            <li><a class="dropdown-item" href="#">Blog</a></li>
                                            <li><a class="dropdown-item" href="#">Company</a></li>    
                                            <li><a class="dropdown-item" href="#">Business</a></li>    
                                        </ul>            
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="col-md-4 col-6" id="navigationColumn">
                    <nav class="navbar navbar-expand navbar-light p-0">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!--Shop menu-->
                            <ul class="navbar-nav" id="cartSmsMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/cart_logo.png" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/msm_logo.png" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/id_profile.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 col-6" id="navigationColumn">
                    <nav class="navbar navbar-expand navbar-light p-0">
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <!--social media menu-->
                            <ul class="navbar-nav" id="mediaMenu">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/whatsapp_logo.png" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/insta_logo.png" alt="">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <img src="../imagenes/facebook_logo.png" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>       
        </div>        

        <!--slider-->
        <div class="container-fluid text-center text-black" id="slider">
            <div class="row row-cols-1 m-0 p-0">
                <div class="col-md-12 col-12">
                    <div class="carousel slide" data-bs-ride="carousel" id="demo">
                        <!-- Indicators/dots -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
                        </div>

                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="../imagenes/banner_template.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../imagenes/banner_template.jpg" alt="">
                            </div>
                            <div class="carousel-item">
                                <img src="../imagenes/banner_template.jpg" alt="">
                            </div>
                        </div>

                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
               
            </div>          
        </div>

        <!--main section-->
        <div class="container-fluid text-center" id="mainSection">
            <div class="container">
                <div class="box" id="gridMostSelled">
                    <!--shop 1 main section-->  
                        <div class="carousel slide" data-bs-ride="carousel" id="demo1">
                            <!-- The slideshow/carousel -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>
                                                       
                                </div>
                                <div class="carousel-item">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>               
                                </div>

                                <div class="carousel-item">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>              
                                </div>
                            </div>

                            <!-- Left and right controls/icons -->
                            <button class="carousel-control-prev" type="button" data-bs-target="#demo1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#demo1" data-bs-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </button>
                            
                        </div>                           
                </div>
                
                <!--banner 1 main section-->
                <div class="box" id="banner1MainSection">                    
                     <div class="article"><h3>Los mejores precios</h3></div>
                     <div class="article"><h3>Productos originales</h3></div>
                     <div class="article"><h3>Garantia del proveedor</h3></div>
                     <div class="article"><h3>Facilidad de pago</h3></div>
                     <div class="article"><h3>Opciones de credito</h3></div> 
                     <div class="article"><h3>Envios a todo el pais</h3></div>                           
                </div>
                <!--banner 2 main section-->
                <div class="box" id="banner2MainSection">
                     <div class="article">1</div>
                     <div class="article">2</div>
                     <div class="article">3</div>
                     <div class="article">4</div>
                </div>
                <!--shop 2 main section-->
                <div class="box" id="gridNewest">
                    <div class="carousel slide" data-bs-ride="carousel" id="demo2">
                        <!-- The slideshow/carousel -->
                        <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>
                                                       
                                </div>
                                <div class="carousel-item">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>               
                                </div>

                                <div class="carousel-item">
                                    <div class="grid-container">
                                        <div class="grid-item">
                                            <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>              
                                                    
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB</h2>
                                                    <p class="price">₡99.999</p>
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>       
                                                </div>   
                                            </div>
                                        </div>
                                        <div class="grid-item">
                                        <div class="card">
                                                <div class="card-head">
                                                    <span class="new">Nuevo</span>
                                                    <img src="../imagenes/RGB-Ram-Transparent.png" alt="Ram" class="product-img">
                                                    <h2>Ram Tridentz 16 GB RGB  </h2>
                                                    <p class="price">₡99.999</p>
                                                    
                                                </div>
                                                <div class="card-body">
                                                    <p>Some text about the Ram, 1.9 GHz.</p>
                                                    <button>Añadir al carrito</button>      
                                                </div>   
                                            </div>
                                        </div>      
                                    </div>              
                                </div>
                            </div>                     
                        <!-- Left and right controls/icons -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#demo2" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#demo2" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!--info section-->
        <div class="container-fluid text-center" id="bannerSection">

            <div class="row row-cols-3 m-0 p-0" id="sectionBanner">
                <div class="col-md-4 col-12" id="sectionBanner1">
                    
                </div>
                <div class="col-md-4 col-12" id="sectionBanner2">
                    
                </div>
                <div class="col-md-4 col-12" id="sectionBanner3">
                    
                </div>
            </div>          
        </div>

        <!--footer-->
        <div class="container-fluid bg-danger text-center text-white" id="footer">
            <div class="row">
               <h3>Footer</h3>
            </div>          
        </div>
        <!--finalizar conexion a base de datos-->
        <?php
            $conn->close();
        ?>
    </body>
</HTML>