<?php
include ('array.php');
?>

<!-- main -->

<main>

    <!-- free PSD -->

    <div id="free">
        <div class="container-fluid">
            <h1>Free PSD template</h1>

            <h2>A long time ago in a galaxy far far away...</h2>
            <a href="#lorem" class="circles"><span class="circle-md"></span></a>
        </div>
    </div>

    <!-- pink -->

    <div class="pink">
        <div class="container-fluid">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing. Ad minim veniam, quis nostrud. exercitation</p>
        </div>
    </div>

    <!-- about -->

    <div id="about">
        <div class="container-fluid">
            <div>
                <h2>About Us</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                <a href="#" class="read">Read more</a>
            </div>
        </div>
    </div>

    <!-- last -->

    <div id="last">
        <div class="container-fluid">
            <h2>Check out last articles</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>


            <div id="owl-demo-2" class="owl-carousel">
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl1.jpg" alt="Lazy Owl Image"/></div>
                <div class="item"><img class="lazyOwl" data-src="img/owl2.jpg" alt="Lazy Owl Image"/></div>
            </div>
        </div>
    </div>


    <!-- lorem -->

    <div id="lorem">
        <div class="container-fluid">
            <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 jedi">
                    <p class="number">70</p>
                    <p>Jedi</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 droids">
                    <p class="number">400</p>

                    <p>Droids</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 battles">
                    <p class="number">250</p>

                    <p>Battles</p>
                </div>
            </div>
        </div>
    </div>

    <!-- impression -->

    <div id="impression">
        <div class="container-fluid">
            <h2>First impression about Us</h2>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>

            <div class="row">

                <?php foreach ($impression as $Item): ?>
                    <div class="quotes clearfix col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <img class="pull-left" src="<?php echo $Item['image']; ?>" alt="">
                        <blockquote class="text-left"><?php echo $Item['title']; ?></blockquote>
                        <em><span><?php echo $Item['author']; ?></span>&nbsp; Jedi Academy</em>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

</main>