<div class="box-contact-support pt-80 pb-50 background-gray-50">

    <div class="container">

        <div class="row">

            <div class="col-lg-1"></div>

            <div class="col-lg-10">

                <div class="row">

                    <div class="col-lg-3 mb-30 text-center text-lg-start">
                        <h3 class="mb-5">Nos encantaría sobre ti</h3>
                        <p class="font-sm color-gray-700">Chatea con nuestro amigable equipo</p>
                    </div>

                    <div class="col-lg-3 text-center mb-30">

                        <div class="box-image mb-20">
                        	<img src="<?php echo $backoffice ?>views/assets/imgs/about/chat.svg" alt="<?= $company[0]->name_company ?>">
                        </div>
                        <h4 class="mb-5">Chatear con logística</h4>
                        <p class="font-sm color-gray-700 mb-5">Habla con nuestro equipo.</p>
                        <a class="font-sm color-gray-900" href="mailto:<?= $company[0]->email_company ?>"><?= $company[0]->email_company ?></a>

                    </div>

                    <div class="col-lg-3 text-center mb-30">
                    	
                        <div class="box-image mb-20">
                        	<img src="<?php echo $backoffice ?>views/assets/imgs/about/call.svg" alt="<?= $company[0]->name_company ?>">
                        </div>
                        <h4 class="mb-5">Llámanos</h4>
                        <p class="font-sm color-gray-700 mb-5">Lun-Vie de 8am a 5pm</p>
                        <a class="font-sm color-gray-900" href="tel:+57<?= $company[0]->phone_company ?>">+57 <?= $company[0]->phone_company ?></a>

                    </div>

                    <div class="col-lg-3 text-center mb-30">

                        <div class="box-image mb-20">
                        	<img src="<?php echo $backoffice ?>views/assets/imgs/about/map.svg" alt="<?= $company[0]->name_company ?>">
                        </div>
                    	<h4 class="mb-5">Visítanos</h4>
                    	<p class="font-sm color-gray-700 mb-5">Visite nuestra oficina</p>
                    	<span class="font-sm color-gray-900"><?= $company[0]->address_company ?><br><?= $company[0]->complementaryaddress_company ?></span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>