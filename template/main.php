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
            <div class="owl-carousel">
                <div class="item-video" data-merge="3"><a class="owl-video" href="http://vimeo.com/23924346"></a></div>
                <div class="item-video" data-merge="1"><a class="owl-video" href="https://www.youtube.com/watch?v=JpxsRwnRwCQ"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="http://www.youtube.com/watch?v=FBu_jxT1PkA"></a></div>
                <div class="item-video" data-merge="1"><a class="owl-video" href="http://www.youtube.com/watch?v=oy18DJwy5lI"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="http://www.youtube.com/watch?v=H3jLkJrhHKQ"></a></div>
                <div class="item-video" data-merge="3"><a class="owl-video" href="https://www.youtube.com/watch?v=g3J4VxWIM6s"></a></div>
                <div class="item-video" data-merge="1"><a class="owl-video" href="http://www.youtube.com/watch?v=0fhoIate4qI"></a></div>
                <div class="item-video" data-merge="2"><a class="owl-video" href="https://www.youtube.com/watch?v=EF_kj2ojZaE"></a></div>
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