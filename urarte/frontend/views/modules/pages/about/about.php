<main class="main">

    <div class="section-box">
        <div class="breadcrumbs-div">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a class="font-xs color-gray-1000" href="<?= $path ?>">Inicio</a></li>
                    <li><a class="font-xs color-gray-500">Acerca de</a></li>
                </ul>
            </div>
        </div>
    </div>

    <section class="section-box shop-template mt-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <?php 

                        include "modules/sec-one.php";

                        include "modules/indicators.php";

                        include "modules/team.php";

                        include "modules/partners.php";
                        
                    ?>     
                    
                </div>

            </div>

        </div>

        <?php include "modules/contact.php"; ?>
        
    </section>

    <?php include "views/modules/pages/footer/footer.php";  ?>

</main>