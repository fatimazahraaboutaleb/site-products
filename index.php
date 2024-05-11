<?php

$conn = new PDO("mysql:host=localhost; dbname=products", "root", "");
if(@$_GET["action"]== "add" && @$_GET["id"]){
    $id = $_GET["id"];
    $query=$conn->prepare("SELECT * FROM products WHERE id=?");
    $query->execute([$id]);
    $row = $query->fetchObject();
}

if(@$_GET["action"]== "add" && @$_GET["id"]){
    $id = @$_GET["id"];
    $name=$row->name;
    $price=$row->price;
    $query=$conn->prepare("INSERT INTO cart VALUES (?,?,?)");
    $query->execute([$id, $name, $price]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="/projet-site/bootstrap/bootstrap-5.3.2-dist/css/bootstrap-grid.min.css">
    <title>VG's WORLD</title>
</head>

<body>
    <header id="home">
        <div id="navbar">
            <img src="VG.png" class="logo" alt="VG's world logo">
            <nav>
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#paint">Paintings</a></li>
                    <li><a href="#prod">Products</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="#account"><img src="user.png" class="contact" alt=""></a></li>
                    <li><a href="cart.php"><img src="cart.png" alt=""></a></li>
                </ul>
            </nav>
        </div>
        <div class="header">
            <div>
                <h1>VAN GOGH<span class="text-blue2">'s</span> WORLD</h1>
                <p>Step into our store to uncover Van Gogh's world and find exactly what you're looking for.</p>
                <a href="#account" class="butn butn-first">Login in/Sign up</a>
            </div>
            <img src="van.png" alt="">
        </div>
    </header>

    <main>
        <div class="yellow">

        </div>
        <section id="about">
            <img src="vangogh.png" alt="">
            <div class="life">
                <h3 class="text-yellow">About Vincent Van Gogh</h3>
                <p>Vincent van Gogh, born in 1853 in the Netherlands, led a turbulent life marked by mental illness and
                    poverty. Despite this, he created an extraordinary body of work characterized by bold colors and
                    emotional intensity. Influenced by Impressionism and Post-Impressionism, his time in Arles, France,
                    produced masterpieces like "Starry Night" and "Sunflowers." Sadly, Van Gogh's artistry was
                    underappreciated in his lifetime, and he died by suicide at 37. Yet, his unique perspective and raw
                    emotion continue to inspire generations, cementing his legacy as one of history's most celebrated
                    artists.</p>
                <br>
                <a href="https://en.wikipedia.org/wiki/Vincent_van_Gogh" target="_blank"
                    class="butn butn-second">More!</a>
            </div>
        </section>
        <section id="paint">
            <h2 class="text-blue3">Popular Paintaings</h2>
            <div class="container">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-3 col-sm-5 col-10 one">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>The Starry Night</h3>
                                <p>1889. Museum of Modern Art, New York</p>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1 col-sm-5 col-10 two">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>Self-Portrait</h3>
                                <p>1889. Musée d'Orsay</p>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1 col-sm-5 col-10 three">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>Almond Blossom</h3>
                                <p>1890. Van Gogh Museum, Amsterdam</p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-5 col-10 four">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>Starry Night Over the Rhône</h3>
                                <p>1888. Musée d'Orsay, Paris</p>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1 col-sm-5 col-10 five">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>Self-Portraitt</h3>
                                <p>1888. Van Gogh Museum, Amsterdam
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 offset-md-1 col-sm-5 col-10 six">
                            <div class="empty"></div>
                            <div class="content">
                                <h3>Still Life: Vase with Twelve Sunflowers</h3>
                                <p>1888. Neue Pinakothek, Munich</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="prod">
            <div class="container">
                <div class="row">
                    <img src="ourproducts.png" class="name" alt="">
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/hodie.jpg" class="img-fluid" alt="">
                        <h3>Hodie Van Gogh</h3>
                        <div class="buy">
                            <p>200 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="1">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/sweater.jpg" class="img-fluid" alt="">
                        <h3>Sweater Starry Night</h3>
                        <div class="buy">
                            <p>240 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="2">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/tshirt1.jpg" class="img-fluid" alt="">
                        <h3>T-shirt Starry Night</h3>
                        <div class="buy">
                            <p>130 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="3">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/tshirt2.jpg" class="img-fluid" alt="">
                        <h3>T-shirt Van Gogh</h3>
                        <div class="buy">
                            <p>130 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="4">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/totebag1.jpg" class="img-fluid" alt="">
                        <h3>Totebag Van Gogh</h3>
                        <div class="buy">
                            <p>80 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="5">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/totebag2.jpg" class="img-fluid" alt="">
                        <h3>Totebag Starry Night</h3>
                        <div class="buy">
                            <p>80 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="6">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/totebag3.jpg" class="img-fluid" alt="">
                        <h3>Totebag Starry Night 2</h3>
                        <div class="buy">
                            <p>80 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="7">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/notebook.jpg" class="img-fluid" alt="">
                        <h3>Notebooks Van gogh</h3>
                        <div class="buy">
                            <p>50 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="8">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/bookmarks.jpg" class="img-fluid" alt="">
                        <h3>Bookmarks Van Gogh</h3>
                        <div class="buy">
                            <p>5 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="9">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/washitape.jpg" class="img-fluid" alt="">
                        <h3>Washitapes Van Gogh</h3>
                        <div class="buy">
                            <p>30 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="10">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/stickers.jpg" class="img-fluid" alt="">
                        <h3>Stickers Van Gogh</h3>
                        <div class="buy">
                            <p>20 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="11">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-6">
                        <img src="products/posters.png" class="img-fluid" alt="">
                        <h3>Posters Van Gogh</h3>
                        <div class="buy">
                            <p>20 Dh</p>
                            <form action="">
                                <input type="hidden" name="action" value="add">
                                <input type="hidden" name="id" value="12">
                                <button>Add to cart +</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produc">
                <a href="#account" class="butn butn-first">All Products</a>
            </div>
        </section>
        <section id="contact">
            <div class="container">
                <div class="contact">
                    <div class="info">
                        <div>
                            <h3>ADRESSE</h3>
                            <p>C. dek Parc, 1, Ciutat Vella, 08002 Barcelona Spain</p>
                            <p><a href="tel:+212612345678">+212 612 345 678</a></p>
                            <p><a href="mailto:vgsworld@gmail.com">vgsworld@gmail.com</a></p>
                        </div>
                        <div>
                            <h3>WORKING HOURS</h3>
                            <p>10:00 am to 10:00 pm</p>
                            <p><del>friday</del></p>
                        </div>
                        <div>
                            <h3>FOLLOW US</h3>
                            <a href=""><img src="icons/fb.png" alt=""></a>
                            <a href=""><img src="icons/x.png" alt=""></a>
                            <a href=""><img src="icons/insta.png" alt=""></a>
                        </div>
                    </div>
                    <form action="">
                        <input type="text" placeholder="Full Name" required>
                        <input type="email" placeholder="Email" required>
                        <input type="text" placeholder="Subject">
                        <textarea name="" id="" placeholder="Message" cols="30" rows="5"></textarea>
                        <button type="submit" class="butn butn-second">Send Message</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <p>Copyright &copy; 2024 All rights reserved | Made by <b>MISAKI</b></p>
    </footer>

</body>

</html>