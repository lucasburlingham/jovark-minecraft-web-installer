<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.webp" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/animate.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/main.css" />
    <link rel="stylesheet" href="/assets/css/LineIcons.2.0.css">

    <title>
        Jovark Minecraft Web Installer
    </title>
</head>

<body>

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="navbar-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo/logo.svg" alt="Logo" />
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#features">Features</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#about">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#pricing">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="page-scroll" href="#testimonials">Clients</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center position-relative">
                <div class="col-lg-6">
                    <div class="hero-content">
                        <h1 class="wow fadeInUp" data-wow-delay=".4s">Jovark Minecraft Web Installer</h1>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            The easiest way to install a Minecraft Java Edition Server with Advanced and Remote Management Features
                        </p>
                        <p> <?php
                            $status = shell_exec('cat status.conf | tail -n 1');
                            echo "Status: " . $status . "<br>";
                            ?>
                        </p>
                        <a href="https://rebrand.ly/ud-saaspal" rel="nofollow" class="main-btn border-btn btn-hover wow fadeInUp" data-wow-delay=".6s">Start the Process</a>

                        <a href="#features" class="scroll-bottom"> <i class="lni lni-arrow-down"></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-img wow fadeInUp" data-wow-delay=".5s">
                        <img src="assets/img/hero/hero-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="feature-section pt-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-bootstrap"></i>
                        </div>
                        <div class="content">
                            <h3>Quick Install</h3>
                            <p>Install from a modern web interface with comfort and ease.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-layout"></i>
                        </div>
                        <div class="content">
                            <h3>Intuitive Admin Interface</h3>
                            <p>Our goal is to make your life a breeze.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-10">
                    <div class="single-feature">
                        <div class="icon">
                            <i class="lni lni-coffee-cup"></i>
                        </div>
                        <div class="content">
                            <h3>Cross Platform</h3>
                            <p>Install from anywhere*, Manage from anywhere, on your choice of hardware.</p>
                            <br>
                            <p><small><b>* Not available on servers running Windows without a version of Java pre-installed.</b></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section pt-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-img">
                        <img src="assets/img/about/about-1.png" alt="" class="w-100">
                        <img src="assets/img/about/about-left-shape.svg" alt="" class="shape shape-1">
                        <img src="assets/img/about/left-dots.svg" alt="" class="shape shape-2">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-30">
                            <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Perfect For Any Minecraft Server Administrator</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Don't mess around with unstable one-click installs.
                                Manage and have full control of <i>Your Very Own</i>
                                Minecraft Java Edition Server with Jovark Minecraft Web Installer and Admin Interface</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section pt-150">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="about-content">
                        <div class="section-title mb-30">
                            <h1 class="mb-25 wow fadeInUp" data-wow-delay=".2s">Remotely Manage and Administer with Advanced Features</h1>
                            <p class="wow fadeInUp" data-wow-delay=".4s">Don't wait until you can sit down for a nice cup of tea to manage your server. Do it remotely, from anywhere!</p>
                        </div>
                        <ul>
                            <li>Online Console Client *</li>
                            <li>Remote Server Startup/Shutdown *</li>
                            <li>User accounts for Managers and Mods *</li>
                        </ul>
                        <small><i><b>* Not yet developed</b></i></small>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 order-first order-lg-last">
                    <div class="about-img-2">
                        <img src="assets/img/about/about-2.png" alt="" class="w-100">
                        <img src="assets/img/about/about-right-shape.svg" alt="" class="shape shape-1">
                        <img src="assets/img/about/right-dots.svg" alt="" class="shape shape-2">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pricing" class="pricing-section">
        <div class="container">
            <div class="section-title text-center pt-90">

            </div>
        </div>
    </section>

    <section id="testimonials" class="testimonial-section pt-90">
        <div class="container">
            <div class="section-title text-center">
                <h1 class="mb-30">Pricing</h1>
                <p>FREE! The best price for the best customers. Contact Sales for Official Support pricing.
                </p></br>
                <a href="https://rebrand.ly/ud-saasland/" class="main-btn border-btn btn-hover wow fadeInUp" rel="nofollow">Contact Sales</a>
            </div>
        </div>
    </section>

    <section id="contact" class="subscribe-section pt-120">
        <div class="container">
            <div class="subscribe-wrapper img-bg">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="section-title mb-15">
                            <h1 class="text-white mb-25">Subscribe Our Newsletter</h1>
                            <p class="text-white pr-5">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                                nonumy eirmod tempor</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5">
                        <form action="#" class="subscribe-form">
                            <input type="email" name="subs-email" id="subs-email" placeholder="Your Email">
                            <button type="submit" class="main-btn btn-hover">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h1>Example: </h1>
    <div id="terminal"></div>
    <script>
        var term = new Terminal();
        term.open(document.getElementById('terminal'));
        term.write('Hello from \x1B[1;3;31mxterm.js\x1B[0m $ ')
    </script>
    <footer class="footer">
        <div class="container">
            <div class="widget-wrapper">
                <div class="row">

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="logo mb-30">
                                <a href="index.html"> <img src="assets/img/logo/logo.svg" alt=""> </a>
                            </div>
                            <p class="desc mb-30 text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
                                sed dinonumy eirmod tempor invidunt.</p>
                            <ul class="socials">
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-facebook-original"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-twitter-original"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-instagram-original"></i> </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"> <i class="lni lni-linkedin-original"></i> </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h3>About Us</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Home</a> </li>
                                <li> <a href="javascript:void(0)">Feature</a> </li>
                                <li> <a href="javascript:void(0)">About</a> </li>
                                <li> <a href="javascript:void(0)">Testimonials</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Features</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">How it works</a> </li>
                                <li> <a href="javascript:void(0)">Privacy policy</a> </li>
                                <li> <a href="javascript:void(0)">Terms of service</a> </li>
                                <li> <a href="javascript:void(0)">Refund policy</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-3 col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3>Other Products</h3>
                            <ul class="links">
                                <li> <a href="javascript:void(0)">Accounting Software</a> </li>
                                <li> <a href="javascript:void(0)">Billing Software</a> </li>
                                <li> <a href="javascript:void(0)">Booking System</a> </li>
                                <li> <a href="javascript:void(0)">Tracking System</a> </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </footer>

    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>



<?php
// check to see if the server root is writable
if (!is_writable('.')) {
    $error .= 'Can\'t write to the current directory. Please fix this by giving the webserver user write access to the directory.<br/>';
    echo ($error);
}
// check to see if the server root is readable
if (!is_readable('.')) {
    $error .= 'Can\'t read the current directory. Please fix this by giving the webserver user write access to the directory.<br/>';
    echo ($error);
}



// Check the status of the installation from status.conf file which has the current status as the last line of the file
$status = shell_exec('cat status.conf | tail -n 1');
echo "Status: " . $status . "<br>";
checkDependancies();

function checkDependancies()
{
    if (exec('cat status.conf | tail -n 1') === 'ready') {
        // show options to configure the install
    } elseif (exec('cat status.conf | tail -n 1') === 'installing') {

        $OS = PHP_OS;
        echo "Checking Dependancies";
        // Check main java version to see if it is installed, should print out 'YES' if it is installed, and 'NO' if it is not
        if ($OS === 'WINNT') {
            // if we are running Windows
            if (exec('java -version > NUL && echo "YES" || echo "NO"') === "YES") {
                echo "Running Installer...";
                runInstall();
            } else {
                echo "NO";
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
            echo "<br> Running Windows";
        } elseif ($OS === 'Linux' || 'FreeBSD' || 'Darwin') {
            // if we are running Linux, BSD, or macOS
            if (exec('command -v java >/dev/null && echo "YES" || echo "NO"') === 'YES') {
                echo "Running Installer...";
                runInstall();
                // change status to done
                $text = "done\n";
                $statusFIle = file_put_contents('status.conf', $text . PHP_EOL, FILE_APPEND | LOCK_EX);
            } else {
                // if we do not have java, display the help
                echo '<iframe src="javaHelper.html" height="500em" width="100%"></iframe>"';
            }
        }
    } elseif (exec('cat status.conf | tail -n 1') === 'done') {
        // show administrator page when done installing
    }
}


function runInstall()
{
    $CD = getcwd();
    $OS = PHP_OS;
    echo "Running Installer";
    mkdir("$CD/server");
    echo ("Creating server folder...");
    chdir("server");



    echo ("Downloading Server.jar<br>Please be </i>patient</i>");
    $url = 'https://launcher.mojang.com/v1/objects/35139deedbd5182953cf1caa23835da59ca3d7cd/server.jar';
    $file_name = basename($url);
    if (file_put_contents($file_name, file_get_contents($url))) {
        echo ("Downloaded $file_name to the current directory");
    } else {
        echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
    }



    echo ("Downloading goTTY dependency...");
    if ($OS === 'WINNT') {
        // Unfortunately, goTTY does not support any version of Windows. We may have to manufacture our own...
        echo ("This feature is not supported... Skipping.");
    } elseif ($OS === 'Linux') {
        // Download binary for Linux
        $url = "https://github.com/yudai/gotty/releases/download/v1.0.1/gotty_linux_amd64.tar.gz";
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo ("Downloaded $file_name to the current directory");
        } else {
            echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
        }
    } elseif ($OS === 'BSD') {
        // Download binary for FreeBSD
        $url = "https://github.com/yudai/gotty/releases/download/v1.0.1/gotty_freebsd_amd64.tar.gz";
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo ("Downloaded $file_name to the current directory");
        } else {
            echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
        }
    } elseif ($OS === 'Darwin') {
        // Download binary for FreeBSD
        $url = "https://github.com/yudai/gotty/releases/download/v1.0.1/gotty_darwin_amd64.tar.gz";
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo ("Downloaded $file_name to the current directory");
        } else {
            echo ("Downloading $file_name to the current directory failed. Please check the permissions of the index.php file located at " . $_SERVER['PHP_SELF']);
        }
    }



    chdir("../");
}

?>