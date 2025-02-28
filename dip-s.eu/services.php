<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/1999/REC-html401-19991224/frameset.dtd">

<html>

<head>
    <meta charset="UTF-8">
    <meta name="author" content="EDS & Kirill Ognjov">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <script src="js/header.js" defer></script>
    <title>EDS | Services</title>
    <link rel="icon" type="image/x-icon" href="/img/favicon.webp">
    <style>
        .banner {
            height: 200px;
        }
        .banner-overlay {
            align-items: end;
        }
        
    </style>
</head>

<body id="index-page">
    <?php require_once("templates/header.php");?>

    <section class="banner">
        <div class="banner-overlay">
            <div class="banner-container">
                <h1>Services</h1>
            </div>
        </div>
    </section>

    <section class="services">
        <div class="services-container">
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
                <div class="services-grid-element">
                    <div id="service-4" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>Forth Service</h1>
                        <p>This is some information about the forth service.</p>
                    </div>  
                </div>
                <div class="services-grid-element">
                    <div id="service-5" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>Fifth Service</h1>
                        <p>This is some information about the fifth service. This is some information about the fifth service. This is some information about the fifth service.</p>
                    </div>  
                </div>
                <div class="services-grid-element">
                    <div id="service-6" class="services-grid-element-image"></div>
                    <div class="services-grid-element-info">
                        <h1>Sixth Service</h1>
                        <p>This is some information about the sixth service.</p>
                    </div>  
                </div>
            </div>
        </div>
    </section>

    <?php require_once("templates/footer.php");?>
</body>