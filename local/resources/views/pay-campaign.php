<!DOCTYPE html>
<html lang="en">
    <meta content="text/html;charset=utf-8" http-equiv="content-type"/>
    <!-- /Added by HTTrack -->
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
         <link href="<?= Request::root();?>/local/resources/views/assets/favicon/favicon.ico" rel="shortcut icon" type="image/x-icon"/> 
        <link href="<?= Request::root();?>/local/resources/views/assets/css/libs.bundle.css" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme.bundle.css" id="stylesheetLight" rel="stylesheet"/>
        <link href="<?= Request::root();?>/local/resources/views/assets/css/theme-dark.bundle.css" id="stylesheetDark" rel="stylesheet"/>
           <link href="https://cdnjs.cloudflare.com/ajax/libs/line-awesome/1.3.0/line-awesome/css/line-awesome.min.css" rel="stylesheet"/>
        
        <style>
            body{display: none;}
            .accordion-button:after{
               margin-left: 10px !important;
               background-size: 10px !important;
               height: 10px !important;
               width: 10px !important;
            }
            #btn-cards:after{
              display: none;
            }
            #btn-crypto:after{
              display: none;
            }
            #btn-paypal:after{
              display: none;
            }
            .accordion-item{
                border:0px; 
            }
            .accordion-button{ 
                background-color: #fff;
            }
            .accordion-button:not(.collapsed){
                box-shadow:none;
            }
            @media (max-width: 576px) {
                #btn-cards{
                    padding-bottom: 75px !important;
                }
                #contenedor-cards{
                    top: 35px !important;
                    left: 51px !important;
                }

                #btn-crypto{
                    padding-bottom: 51px !important;
                }
                #contenedor-crypto{
                    top: 35px !important;
                    left: 51px !important;
                    top: 50px !important;
                }
            }
        </style>
        <title>
            Campaign Checkout
        </title>
    </head>
    <body>
        <?php include('includes/aside.php');?>
        <!-- Modal -->
        <div class="main-content">
            <div class="container-lg container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="header mt-md-5">
                            <div class="header-body">
                                <div class="row align-items-center">
                                    <div class="col">
                                        <!-- Pretitle -->
                                        <h6 class="header-pretitle">
                                            Overview
                                        </h6>
                                        <!-- Title -->
                                        <h1 class="header-title">
                                            Campaign Checkout
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button id="btnpagoTemporal" class="btn btn-danger form-control mb-5"><strong>[BOTON TEMPORAL]</strong> PAGAR</button>
                        <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            <i class="fe fe-check-circle text-white">
                            </i>
                            Artist Protection Program is enabled! We've got you covered.
                            <i class="fe fe-info " data-bs-toggle="tooltip" style="cursor: pointer;" title="If you want to stop your campaign, then you will automatically be refunded the difference of budget that hasn't been used to your Account Balance. If we're not able to begin your campaign to our standards then you will be automatically refunded to your form of payment.">
                            </i>
                        </div>
                        <div class="accordion card" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button aria-controls="collapseOne" aria-expanded="true" class="accordion-button" data-bs-target="#collapseOne" data-bs-toggle="collapse" id="btn-summary" type="button">
                                        Hide Campaign Summary
                                    </button>
                                </h2>
                                <div aria-labelledby="headingOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample" id="collapseOne">
                                    <div class="accordion-body bg-white" style="position: relative;border-bottom-right-radius: 5px;border-bottom-left-radius: 5px;">
                                        <!-- desde aca-->
                                        <div class="row">
                                            <div class="col-12 text-left mb-2">
                                                <div class="row">
                                                    <div class="col-12 col-lg-6 mb-3">
                                                        <img class="rounded " src="<?= $checkout->data[0]->cover;?>" style="width: 100px;height: 100px;">
                                                        </img>
                                                        <div style="padding-left: 130px;position: absolute;top: 13px;">
                                                            <h4 class="card-header-title text-uppercase mt-1">
                                                                <?= $checkout->data[0]->track_name;?>
                                                            </h4>
                                                            <p class="mb-0">
                                                               <?= $checkout->data[0]->artist_name;?>
                                                            </p>
                                                            <p class="mb-0 fs-5 fw-bold">
                                                                Start Date:
                                                                <span class="badge bg-primary-soft fw-bold">
                                                                    <i class="fe fe-calendar">
                                                                    </i>
                                                                    2022-01-21
                                                                </span>
                                                            </p>
                                                            <p class="mb-0 fs-5 fw-bold">
                                                                Platforms:
                                                            </p>
                                                            <div class="mt-0">
                                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/spotify.svg" style="width: 15px;margin-right: 5px;border-radius: 50%;">
                                                                </img>
                                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/apple_music.svg" style="width: 15px;margin-right: 5px;border-radius: 50%;">
                                                                </img>
                                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/tiktok.svg" style="width: 15px;margin-right: 5px;border-radius: 50%;">
                                                                </img>
                                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/instagram.svg" style="width: 15px;margin-right: 5px;border-radius: 50%;">
                                                                </img>
                                                                <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/youtube.svg" style="width: 23px; margin-right: 5px;border-radius: 50%;">
                                                                </img>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6">
                                                        <div class="row">
                                                            <div class="col-12" style="margin-top: -2px;">
                                                                <p class="text-muted mb-0 fs-4 mb-2">
                                                                    Estimated results
                                                                </p>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4 class="card-header-title mb-2">
                                                                    Reach
                                                                    <i class="fe fe-info fs-5 fw-bold">
                                                                    </i>
                                                                </h4>
                                                                <span class="badge bg-primary-soft fw-bold">
                                                                    <i class="fe fe-user fs-5 fw-bold">
                                                                    </i>
                                                                    <?= number_format($checkout->data[0]->min_reach);?> - <?= number_format($checkout->data[0]->max_reach);?>
                                                                </span>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: <?= ($checkout->data[0]->max_reach * 100) / 1190800;?>%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-6">
                                                                <h4 class="card-header-title mb-2">
                                                                    Streams
                                                                    <i class="fe fe-info fs-5 fw-bold">
                                                                    </i>
                                                                </h4>
                                                                <span class="badge bg-primary-soft fw-bold">
                                                                    <i class="fe fe-music">
                                                                    </i>
                                                                    <?= number_format($checkout->data[0]->min_stream);?> - <?= number_format($checkout->data[0]->max_stream);?>
                                                                </span>
                                                                <div class="progress progress-sm mt-3">
                                                                    <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: <?= ($checkout->data[0]->max_stream * 100) / 238160;?>%">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 mt-3">
                                                                <h4 class="card-header-title mb-2">
                                                                    Target genres
                                                                </h4>
                                                                <div style="margin-left: -5px">
                                                                    <?php foreach (explode(",", $checkout->data[0]->group_generos) as $key): ?>
                                                                         <span class="badge bg-primary-soft fw-bold ms-2 text-capitalize">
                                                                            <?= $key;?>
                                                                        </span> 
                                                                    <?php endforeach ?> 
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mt-1">
                                                <hr/>
                                            </div>
                                            <div class="col-12">
                                                <h4 class="card-header-title mt-1 fw-normal mb-3">
                                                    Subtotal
                                                    <p class="mb-0 fw-normal mb-3" style="float: right;">
                                                        $<?= number_format($checkout->data[0]->inversion,2);?>
                                                    </p>
                                                </h4>
                                                <h4 class="card-header-title mt-1 fw-normal mb-3">
                                                    Discount
                                                    <?php 
                                                    $descuento = 0;
                                                    if ($checkout->data[0]->cupon_token!=null): ?>
                                                      
                                                        <?php if ($checkout->data[0]->tipo_cupon == "monto"): ?>
                                                            <p class="mb-0 fw-normal mb-3" style="float: right;">
                                                              
                                                                 <?php 
                                                                    $descuento = $checkout->data[0]->monto_discount;
                                                                 ?>
                                                                - $<?= number_format($descuento,2);?>
                                                            </p> 
                                                        <?php else: ?>
                                                             <p class="mb-0 fw-normal mb-3" style="float: right;">
                                                                <?php 
                                                                $descuento = ($checkout->data[0]->porcentaje_dicount / 100) * $checkout->data[0]->inversion;
                                                                 ?>
                                                                - $<?= number_format($descuento,2);?>
                                                            </p> 
                                                        <?php endif ?>
                                                    <?php else: ?> 
                                                    <p class="mb-0 fw-normal mb-3" style="float: right;">
                                                        - $0,00
                                                    </p>  
                                                    <?php endif ?>
                                                </h4>
                                                <h4 class="card-header-title mt-1 fw-normal mb-2">
                                                    Taxes (estimated)
                                                    <p class="mb-0 " style="float: right;">
                                                        $0,00
                                                    </p>
                                                </h4>
                                            </div>
                                            <div class="col-12 mt-1">
                                                <hr/>
                                            </div>
                                            <h4 class="card-header-title mt-1 fw-normal mb-2 pt-2">
                                                Total
                                                <p id="total_amount" class="mb-0 text-primary fs-3 fw-bold" style="float: right;margin-top: -5px;">
                                                    $<?= number_format($checkout->data[0]->inversion  - $descuento,2);?>
                                                </p>
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-lg-6 mt-3">
                                <h2 class="card-header-title me-auto mb-3 ">
                                    Gift Card or Discount Code
                                </h2>
                                <div class="input-group mb-3">
                                    <input aria-describedby="button-addon2" aria-label="Recipient's username" class="form-control" placeholder=" Gift Card or Discount Code" style="" type="text"/>
                                    <button class="btn btn-primary px-4" id="button-addon2" style="width: 75px;" type="button">
                                        <i class="fe fe-arrow-right" style="position: absolute;font-size: 20px;top: 4px;right: 27px;">
                                        </i>
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 mt-3">
                                <h2 class="card-header-title me-auto mb-3 ">
                                    Balance
                                </h2>
                                <div class="input-group mb-2">
                                    <input type="number" aria-describedby="button-addon2" aria-label="" class="form-control" placeholder="" style="" min="0" max="<?= number_format($checkout->data[0]->balance,2);?>" />

                                    <button type="button" class="btn btn-primary px-4" id="btnPayWithBalance">
                                        Use
                                    </button>
                                </div>
                                <small class="fs-4">
                                    My Balance:
                                    <span class="fw-bold" id="myBalance">
                                        $<?= number_format($checkout->data[0]->balance,2);?>  
                                    </span>
                                </small>
                            </div>
                        </div>
                        <h2 class="card-header-title me-auto mt-4 mb-4 ">
                            Payment
                            <p class="fw-normal mb-0">
                                <small class="text-muted ">
                                    All transactions are secured
                                </small>
                            </p>
                        </h2>
                        <!-- EXPRESS CHECKOUT-->
                        <div class="mb-4" style="display: none;">
                            <hr/>
                            <div style="margin-top: -26px;">
                                <p class="text-uppercase text-dark mb-0 fw-bold fs-5 text-center" style="width: 180px;margin: 0 auto;background-color: #f9fbfd;">
                                    Express checkout
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                </div>
                                <div class="col-6" style="padding-top: 15px;">
                                </div>
                            </div>
                        </div>
                        <div style="margin-top: -26px;display: none;">
                            <p class="text-uppercase text-dark mb-0 fs-5 fw-bold text-center" style="width: 50px;margin: 0 auto;background-color: #f9fbfd;">
                                or
                            </p>
                        </div>

                        <div class="accordion mt-2 card" id="accordionExample2">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne2">
                                    <button aria-controls="collapseOne2" aria-expanded="true" class="bg-white accordion-button text-dark" data-bs-target="#collapseOne2" data-bs-toggle="collapse" id="btn-cards" style="border-bottom: 1px solid #e3ebf6;" type="button">
                                        <input checked="" class="form-check-input" style="margin-right: 15px; margin-top: 0px;" type="radio">
                                        </input>
                                        Credit card
                                        <div id="contenedor-cards" style="position: absolute;right: 30px;">
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/apple_pay.svg" style="height: 22px;margin-right: -9px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/google_pay.svg" style="height: 42px;margin-right: -9px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/visa.svg" style="height: 24px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/master.svg" style="height: 24px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/american_express.svg" style="height: 24px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/cards.svg" style="height: 25px;margin-left: 9px;border-radius: 5px;margin-right: 10px;display: none;">
                                            </img>
                                            and more...
                                        </div>
                                    </button>
                                </h2>
                                <div aria-labelledby="headingOne2" class="accordion-collapse collapse show" data-bs-parent="#accordionExample2" id="collapseOne2">
                                    <div class="accordion-body" style="border-bottom: 1px solid #e3ebf6;">
                                        <!-- Display a payment form -->
                                        <form id="payment-form">
                                            <div id="payment-element">
                                                <!--Stripe.js injects the Payment Element-->
                                            </div>
                                            <button id="submit">
                                                <div class="spinner hidden" id="spinner">
                                                </div>
                                                <span id="button-text" style="">
                                                    Pay now
                                                </span>
                                            </button>
                                            <div class="hidden" id="payment-message">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne3">
                                    <button aria-controls="collapseOne3" aria-expanded="false" class="bg-white accordion-button text-dark" data-bs-target="#collapseOne3" data-bs-toggle="collapse" id="btn-paypal" style="border-bottom: 1px solid #e3ebf6;" type="button">
                                        <input class="form-check-input" style="margin-right: 15px; margin-top: 0px;" type="radio">
                                        </input>
                                        <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/paypal.png" style="height: 20px;">
                                        </img>
                                    </button>
                                </h2>
                                <div aria-labelledby="headingOne3" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseOne3">
                                    <div class="accordion-body" style="border-bottom: 1px solid #e3ebf6;">
                                        <div id="paypal-button-container" style="margin-top: 15px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo2">
                                    <button aria-controls="collapseTwo2" aria-expanded="false" class="bg-white accordion-button collapsed" data-bs-target="#collapseTwo2" data-bs-toggle="collapse" id="btn-crypto" style="border-bottom: 1px solid #e3ebf6;" type="button">
                                        <input class="form-check-input" style="margin-right: 15px; margin-top: 0px;" type="radio">
                                        </input>
                                        <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/pay_with_curency.png" style="height: 24px;">
                                        </img>
                                        <div id="contenedor-crypto" style="position: absolute;right: 30px;">
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/bitcoin.svg" style="height: 24px; ">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/ethereum.svg" style="height: 24px;  ">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/litecoin.svg" style="height: 24px;">
                                            </img>
                                            <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/bitcoin_cash.svg" style="height: 24px;">
                                            </img>
                                            and more...
                                        </div>
                                    </button>
                                </h2>
                                <div aria-labelledby="headingTwo2" class="accordion-collapse collapse" data-bs-parent="#accordionExample2" id="collapseTwo2">
                                    <div class="accordion-body" style="border-bottom: 1px solid #e3ebf6;">
                                        2
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="mb-5 row mt-5">
                            <div class="col-6" style="text-align: left;">
                                <a class="btn btn-primary" href="#" style="width: 120px;">
                                    Go Back
                                </a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form id="form-pay-with-balance" method="POST" action="<?= Request::root();?>/payment/balance"> 
            <input type="hidden" name="campaign_token" value="<?= $campaign_token;?>">
        </form>

        <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js">
        </script>
        <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js">
        </script> 
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
        </script> 
       
        <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
        <script src="https://js.stripe.com/v3/">
        </script>
        <script src="checkout/checkout.js">
        </script> 
        <script src="https://www.paypal.com/sdk/js?client-id=AWnPN3ca5Lms-Ek9yVe0txASM-TIsB-L80B9mB6zlJ9vFMug3a3N92xw0qri0xUX027IqkjW0wqYmLPR&disable-funding=credit">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
        <script>
            $(document).ready(function () {
                if ($(window).width() >= 992) {
                    $("html,.scroll").niceScroll({
                        cursorcolor:"#ddd"
                    });
                }
                else{
                }     
            });
        </script>
        <script>

            $(document).ready(function(){ 
                $(".paypal-button-text true").css("display","none");
                $("#submit").addClass('btn btn-primary w-100 mt-4 mb-2'); 
                deleteCookies();
            }); 

            function deleteCookies(){
                Cookies.remove("track_artist");
                Cookies.remove("track_date");
                Cookies.remove("track_generos"); 
                Cookies.remove("track_id");
                Cookies.remove("track_img");
                Cookies.remove("track_inversion"); 
                Cookies.remove("track_name");
                Cookies.remove("track_reach");
                Cookies.remove("track_reach_porcent"); 
                Cookies.remove("track_stream_porcent");
                Cookies.remove("track_streams");
            }

            $("#btn-summary").click(function(){
                if($(this).attr("aria-expanded") == "false"){
                    $(this).html('Show Campaign Summary <p class="fw-bold text-primary" style="float: right;position: absolute;top: 16px;right: 12px;font-size: 16px;">$30,00</p>'); 
                }
                else{
                    $(this).text("Hide Campaign Summary");
                } 
            }); 
             
            $("#btn-payment-method").click(function(){ 
                $(this).hide();
                $("#stripe-container").show();
            });
        </script>
        <script>
            function initPayPalButton() {
              paypal.Buttons({
                style: {
                  shape: 'rect',
                  color: 'gold',
                  layout: 'horizontal',
                  label: 'paypal',
                  tagline: false,
                  height: 40
                },

                createOrder: function(data, actions) {
                  return actions.order.create({
                    purchase_units: [{"amount":{"currency_code":"USD","value":1}}]
                  });
                },

                onApprove: function(data, actions) {
                  return actions.order.capture().then(function(orderData) { 
                    console.log('Capture result', orderData, JSON.stringify(orderData, null, 2)); 
                    const element = document.getElementById('paypal-button-container');
                    element.innerHTML = '';
                    element.innerHTML = '<h3>Thank you for your payment!</h3>'; 
                  });
                },

                onError: function(err) {
                  console.log(err);
                }
              }).render('#paypal-button-container');
            }
            initPayPalButton();

            // SCRIPT DE PAGOS
            
            $("#btnPayWithBalance").click(function(){
                monto = $("#total_amount").text();
                monto = monto.replace("$","");

                balance = $("#myBalance").text();
                balance = balance.replace("$",""); 
                if(parseFloat(monto) < parseFloat(balance)){
                    if (confirm('Desea tomar $<?= number_format($checkout->data[0]->inversion  - $descuento,2);?> de su balance para pagar esta campaign.')) {
                         $("#form-pay-with-balance").submit();
                    }   
                }  
            }); 

            $("#btnpagoTemporal").click(function(){
                 $("#form-pay-with-balance").submit();
            });

        </script>
    </body>
</html>