<div class="page-content header-clear-medium">
       
        <div class="card card-style bg-20" data-card-height="200" 
           
            style="height: 130px; background-image: url('../../assets/img/bg.jpg')">
            <div class="card-top ps-3 pt-2">
                <h2 class="mb-2 color-white font-12"  style="text-shad: 2px 2px 2px #000000;"><?php echo "Card  Holder: ".$data->sFname; ?> (<?php echo $controller->formatUserType($data->sType); ?>)</h2>
                <h4 class="btn float-end color-white ps-3 pb-2 bt-3"><i class="fa fa-wifi" aria-hidden="true"></i></h4>
            </div>
            <div class="card-center ">
               
                    <h3 class="color-white font-16 ps-3 pt-2">
                    <span style="margin-right:10px;">Balance : </span> 
                    <span id="hideEyeDiv" style="display:none;">&#8358;<?php echo number_format($data->sWallet); ?></span>
                    <span id="openEyeDiv" >&#8358; ****</span>
                    <span id="hideEye"><i class="fa fa-eye-slash" style="margin-left:20px;" aria-hidden="true"></i></span>
                    <span id="openEye" style="display:none; margin-left:20px;"><i class="fa fa-eye" aria-hidden="true"></i></span>
                    </h3>
                    <a href="fund-wallet" class="btn float-end font-16" style="background-color:<?php echo $sitecolor; ?>; border-radius:5rem; margin-right:7px"><b>+ Add Money</b></a>
            </div>
            <div class="card-bottom ps-3 pb-2 bt-3">
               <img src="../../assets/images/Mastercardd.png" 
                width="60" height="40" 
                style="border-radius:5rem;" />
                <p class="mb-2 color-white font-8"><b> Powered by OMOOBATELECOMS </b>
            </div>
            
            <div class="card-overlay bg-gradient"></div>

        </div>


<!--<div class="card card-style mb-2 ">-->
<!--<div class="content">-->
<!--<div class="d-flex">-->
<!--<div class="align-self-center">-->
<!--<h4 class="font-700 text-uppercase font-12 mb-n1 mt-n1 opacity-30">Commissions</h4>-->
<!--<h1 class="mb-0 font-20">N0</h1>-->
<!--</div>-->
<!--<div class="align-self-center ms-auto">-->
<!--<a href="fund-wallet" class="btn btn-xxs shadow-bg shadow-bg-xs gradient-red color-white rounded-s font-700 text-uppercase">Swap</a>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
<div class="content">
<a href="https://play.google.com/" style="width: 100%;" class="btn btn-full btn-l font-600 font-15 gradient-highlight mt-4 rounded-s">
                               Download Mobile App
          </a>
 </div>
<!--<div class="content mb-2"><div class="d-flex text-center px-2"><div class="me-auto"><a href="https://wa.me/message/74TH2INJDSA2N1" data-menu="menu-add-funds" class="icon icon-xxl  color-green-dark shadow-l rounded-m" style="background-color: #85c15046"><i class="fab fa-whatsapp "></i></a><span class="font-10 font-500 color-theme d-block">Whatsapp</span></div><div class="m-auto"><a href="transactions" data-menu="menu-transaction-request" class="icon icon-xxl  color-blue-dark shadow-l rounded-m" style="background: #4982dc3a"><i class="fa fa-history"></i></a><span class="font-10 font-500 color-theme d-block">History</span></div><div class="m-auto"><a href="notifications" data-menu="menu-transaction-transfer" class="icon icon-xxl  color-red-dark shadow-l rounded-m" style="background: #da49523d"><i class="fa fa-envelope"></i></a><span class="font-10 font-500 color-theme d-block">Notifications</span></div><div class="ms-auto"><a href="contact-us" data-menu="menu-transaction-1" class="icon icon-xxl  color-yellow-dark shadow-l rounded-m" style="background: #f6b63e3e"><i class="fa fa-comment"></i></a><span class="font-10 font-500 color-theme d-block">Support</span></div></div></div>-->




<div class="splide single-slider slider-no-arrows slider-no-dots visible-slider splide--loop splide--ltr splide--draggable is-active" id="single-slider-1" style="visibility: visible;">
<div class="splide__arrows"><button class="splide__arrow splide__arrow--prev" type="button" aria-controls="single-slider-1-track" aria-label="Previous slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button><button class="splide__arrow splide__arrow--next" type="button" aria-controls="single-slider-1-track" aria-label="Next slide"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button></div><div class="splide__track" id="single-slider-1-track">
<div class="splide__list" id="single-slider-1-list" style="transform: translate(-1062px, 0px); transition: transform 400ms cubic-bezier(0.42, 0.65, 0.27, 0.99) 0s;">
<div class="splide__slide splide__slide--clone" aria-hidden="true" tabindex="-1" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-18" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Fedility Bank</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sFidelityBank; ?>')"><?php echo $data->sFidelityBank; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-green"></div>
</div>
</div><div class="splide__slide splide__slide--clone" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-21" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Sterling Bank</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sSterlingBank; ?>')"><?php echo $data->sSterlingBank; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-red"></div>
</div>
</div><div class="splide__slide is-active is-visible" id="single-slider-1-slide01" aria-hidden="false" tabindex="0" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-14" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Wema Bank</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sBankNo; ?>')"><?php echo $data->sBankNo; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-blue"></div>
</div>
</div>
<div class="splide__slide" id="single-slider-1-slide02" aria-hidden="true" tabindex="-1" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-18" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Moniepoint</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sRolexBank; ?>')"><?php echo $data->sRolexBank; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-green"></div>
</div>
</div>
<div class="splide__slide" id="single-slider-1-slide03" aria-hidden="true" tabindex="-1" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-21" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Sterling Bank</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sSterlingBank; ?>')"><?php echo $data->sSterlingBank; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-red"></div>
</div>
</div>
<div class="splide__slide splide__slide--clone" style="width: 354px;">
<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-14" style="height: 150px;">
<div class="card-top p-3">
<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>
<h2 class="color-white font-30">Wema Bank</h2>
</div>
<div class="card-bottom p-3">
<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>
<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('<?php echo $data->sBankNo; ?>')"><?php echo $data->sBankNo; ?></h5>
</div>
<div class="card-top p-3">
<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>
<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>
</div>
<div class="card-overlay gradient-blue"></div>
</div>
<!--</div><div class="splide__slide splide__slide--clone" style="width: 354px;">-->
<!--<div data-card-height="150" class="card card-style shadow-xl mb-2 bg-18" style="height: 150px;">-->
<!--<div class="card-top p-3">-->
<!--<h5 class="font-monospace opacity-70 font-10 mb-0 color-white">Account</h5>-->
<!--<h2 class="color-white font-30">Moniepoint</h2>-->
<!--</div>-->
<!--<div class="card-bottom p-3">-->
<!--<h5 class="font-monospace opacity-70 font-10 mb-n1 color-white">Account Number</h5>-->
<!--<h5 class="font-monospace font-14 color-white" onclick="copyToClipboard('6436536518')">6436536518</h5>-->
<!--</div>-->
<!--<div class="card-top p-3">-->
<!--<h5 class="text-end font-monospace opacity-70 font-10 mb-n1 color-white">Charges</h5>-->
<!--<h5 class="text-end font-monospace font-14 color-white">1.7%</h5>-->
<!--</div>-->
<!--<div class="card-overlay gradient-green"></div>-->
<!--</div>-->
</div></div>
</div>
<ul class="splide__pagination"><li><button class="splide__pagination__page" type="button" aria-controls="single-slider-1-slide01" aria-label="Go to slide 1"></button></li><li><button class="splide__pagination__page is-active" type="button" aria-controls="single-slider-1-slide02" aria-label="Go to slide 2" aria-current="true"></button></li><li><button class="splide__pagination__page" type="button" aria-controls="single-slider-1-slide03" aria-label="Go to slide 3"></button></li></ul></div>





<div class="content mt-3">
  <div class="row">
<a href="buy-data" data-menu="menu-login-e1" class="col-6">
<div class="card card-style me-0 mb-3 text-center pt-2">
<i class="fa fa-wifi color-yellow-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Data</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">SME, CG and GIFTING</p>
</div>
</a>
    
<a href="buy-airtime" class="col-6">
<div class="card card-style ms-0 mb-3 text-center pt-2">
<i class="fa fa-mobile-alt color-dark-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Airtime</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">2% DISCOUNT</p>
</div>
</a>
<a href="cable-tv" class="col-6">
<div class="card card-style me-0 mb-3 text-center pt-2">
<i class="fa fa-tv color-green-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Cable</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">GOTV,DSTV, STARTIMES </p>
</div>
</a>
<a href="exam-pins" class="col-6">
<div class="card card-style ms-0 mb-3 text-center pt-2">
<i class="fa fa-graduation-cap color-blue-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Exam</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">NECO, WAEC, NABTEB</p>
</div>
</a>
<a href="electricity" class="col-6">
<div class="card card-style me-0 mb-3 text-center pt-2">
<i class="fa fa-bolt color-red-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Electricity</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">PHED, KEDCO, </p>
</div>
</a>

<!--<a href="sendbulksms" class="col-6">-->
<!--<div class="card card-style ms-0 mb-3 text-center pt-2">-->
<!--<i class="fa fa-sms color-dark-dark fa-3x mt-4"></i>-->
<!--<h1 class="pt-4 font-20">Bulk Sms</h1>-->
<!--<p class="font-11 opacity-50 mt-n2 mb-4">MULTI-MESSAGING</p>-->
<!--</div>-->
<!--</a>-->
<a href="referrals" class="col-6">
<div class="card card-style me-0 mb-3 text-center pt-2">
<i class="fa fa-users color-green-dark fa-3x mt-4"></i>
<h1 class="pt-4 font-20">Referrals</h1>
<p class="font-11 opacity-50 mt-n2 mb-4">Downlines</p>
<!--</div>-->
<!--</a> -->
<!--<a href="recharge-pin" class="col-6">-->
<!--<div class="card card-style ms-0 mb-3 text-center pt-2">-->
<!--<i class="fa fa-print color-brown-dark fa-3x mt-4"></i>-->
<!--<h1 class="pt-4 font-20">Recharge Card</h1>-->
<!--<p class="font-11 opacity-50 mt-n2 mb-4">MTM, AIRTEL, GLO</p>-->
<!--</div>-->
<!--</a>-->
    
</div>
</div>
</div>






<div class="menu-hider"></div><p class="offline-message bg-red-dark color-white">No internet connection detected</p><p class="online-message bg-green-dark color-white">You are back online</p></body></html>