<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/frameset.dtd">

<html>

<head>
    <meta charset="UTF-8" >
    <meta name="author" content="EDS & Kirill Ognjov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <script src="js/header.js" defer></script>
    <title>European Dip Service</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.webp">
</head>


<body id="index-page">
    <?php require_once("templates/header.php");?>

    <section class="banner">
        <div class="banner-overlay">
            <div class="banner-container">
                <h1>European Dip Service</h1>
                <p>We are the revolutionary company that are ready to expand our knowledge and give our help to the customers all over the globe.</p>
                <button onclick="window.location.href='/contacts'">Learn More</button>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="services-container">
            <div class="services-heading">
                <h1>Services</h1>
                <button onclick="window.location.href='/services'">view all</button>
            </div>
            <div class="services-grid">
                <div class="services-grid-element">
                    <div id="service-1" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>First Service</h1>
                        <p>This is some information about the first service. This is some information about the first service.</p>
                    </div>  
                </div>
                <div class="services-grid-element">
                    <div id="service-2" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>Second Service</h1>
                        <p>This is some information about the second service.</p>
                    </div>  
                </div>
                <div class="services-grid-element">
                    <div id="service-3" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>Third Service</h1>
                        <p>This is some information about the third service.</p>
                    </div>  
                </div>
            </div>
        </div>
    </section>


    <section class="about-us">
        <div class="about-us-container">
            <div class="about-us-info">
                <h1>A Little About Us</h1>
                <p>We are the revolutionary company that are ready to expand our knowledge and give our help to the customers all over the globe.</p>
                <button onclick="window.location.href='/contacts'">Contact Us</button>
            </div>
            <div class="about-us-photo">
                <img id="photo-about-us" src="img/about_us.jpg" alt="Photo of About-us section">
            </div>
        </div>
    </section>

    <?php require_once("templates/footer.php"); ?>
    
</body>

</html>