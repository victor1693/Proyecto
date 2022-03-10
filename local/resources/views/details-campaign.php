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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.1/js.cookie.min.js"></script>
      <script>
        if(typeof Cookies.get("track_id") !== "undefined"){
             $("#id_track").val(Cookies.get('track_id'));
        }else{
            Cookies.remove('track_name');
            Cookies.remove('track_img');
            Cookies.remove('track_artist');
            Cookies.remove('track_id'); 
            window.location.href = "<?= Request::root();?>/campaign-new";
        }
      </script>

      <style>
         body{display: none;}
         .tooltip-inner {
         max-width: 400px; 
         width: 400px; 
         }
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
         Campaign details
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
                                 Campaign checkout
                              </h1>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                     <i class="fe fe-check-circle text-white">
                     </i>
                     <strong>Artist Protection Program</strong> is enabled! We've got you covered.
                     <i class="fe fe-info" data-bs-toggle="tooltip" style="cursor: pointer;" title="If you want to stop your campaign, then you will automatically be refunded the difference of budget that hasn't been used to your GoLoudr Balance. If we're not able to begin your campaign to our standards then you will be automatically refunded to your form of payment.">
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
                                 <div class="row">
                                    <div class="col-4">
                                       <img id="track-img" class="img-fluid rounded mb-2" src="https://media.istockphoto.com/vectors/image-preview-icon-picture-placeholder-for-website-or-uiux-design-vector-id1222357475?k=20&m=1222357475&s=170667a&w=0&h=YGycIDbBRAWkZaSvdyUFvotdGfnKhkutJhMOZtIoUKY="/>
                                       <p class="mb-0 fw-bold text-center" id="track-name">
                                          Track Name
                                       </p>
                                       <p class="mb-0 text-center" id="track-artist">
                                          Artist Name
                                       </p>
                                    </div>
                                    <div class="col-8">
                                       <div class="row">
                                          <div class="col-md-6 col-sm-12">
                                             <h4 class="card-header-title mb-2">
                                                Reach
                                                <i class="fe fe-info fs-5 fw-bold" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the number of people we estimate you'll reach in your genre throughout your campaign. This has to do with factors like your budget, genre, playlist size and ad placements. Your actual reach may be higher or lower than this estimate.">
                                                </i>
                                             </h4>
                                             <span class="badge bg-primary-soft fw-bold">
                                             <i class="fe fe-user fs-5 fw-bold">
                                             </i>
                                             <span id="track-reach"></span>
                                             </span>
                                             <div class="progress progress-sm mt-3">
                                                <div id="reach_p" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                                </div>
                                             </div>
                                          </div>
                                          <div class="col-md-6 col-sm-12">
                                             <h4 class="card-header-title mb-2">
                                                Conversions
                                                <i class="fe fe-info fs-5 fw-bold" style="font-size: 16px;cursor: pointer;" data-bs-toggle="tooltip" data-bs-placement="top" title="This is the number of plays, streams, likes, saves, playlist adds, comments, etc that we estimate you can get from your campaign based on your performance and estimated daily reach. The actual number of conversions you get may be higher or lower than this estimate.">
                                                </i>
                                             </h4>
                                             <span class="badge bg-primary-soft fw-bold">
                                             <i class="fe fe-music">
                                             </i>
                                             <span id="track-streams"></span>
                                             </span>
                                             <div class="progress progress-sm mt-3">
                                                <div id="stream_p" aria-valuemax="100" aria-valuemin="0" aria-valuenow="10" class="progress-bar" role="progressbar" style="width: 10%">
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <p class="text-muted mt-3 fs-5">
                                          The accuracy of estimates is based on factors like past campaign data, the budget you entered, market data, targeting criteria and ad placements. Numbers are provided to give you an idea of performance for your budget, but are only estimates and don't guarantee results.
                                       </p>
                                       <div class="row">
                                          <div class="col-6">
                                             <h4 class="card-header-title mb-2">
                                                Start Date <span class="badge bg-primary-soft fw-bold"  id="start_date">
                                                
                                             </h4>
                                          </div>
                                          <div class="col-6">
                                             <h4 class="card-header-title mb-3">
                                                Platforms
                                                <div class="" style="position: absolute;margin-left: 75px;margin-top: -19px;">
                                                   <img src="<?= Request::root();?>/local/resources/views/assets/svg_icons/spotify.svg" style="width: 15px;margin-right: 5px;border-radius: 50%;">
                                                   </img> 
                                                </div>
                                             </h4>
                                          </div>
                                       </div>
                                       <h4 class="card-header-title mb-2">
                                          Target genres
                                       </h4>
                                       <div style="margin-left: -5px" id="track-generos" class="mb-3"> 
                                       </div>
                                    </div>
                                    <div class="col-12 mt-1">
                                       <hr/>
                                    </div>
                                    <div class="col-12">
                                       <h4 class="card-header-title mt-1 fw-normal mb-3">
                                          Subtotal
                                          <p class="mb-0 fw-normal mb-3" style="float: right;" id="sub_total"> 
                                          </p>
                                       </h4>
                                       <h4 class="card-header-title mt-1 fw-normal mb-3">
                                          Discount
                                           <p class="mb-0 " style="float: right;" id="discount">
                                                $0,00
                                           </p>
                                       </h4>
                                       <h4 class="card-header-title mt-1 fw-normal mb-2" id="balance_title">
                                          Pay with balance
                                          <p class="mb-0 " style="float: right;" id="balance_value">
                                             $0,00
                                          </p>
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
                                       </p>
                                    </h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="card">
                     <div class="card-header">
                        <!-- Title -->
                        <h4 class="card-header-title">
                           Benefits
                        </h4>
                     </div>
                     <div class="card-body">
                        <p class="mb-0">
                           <i class="fe fe-check-circle text-primary">
                           </i>
                           Submitting
                           <strong>
                           Ads Campaign
                           </strong>
                           and
                           <strong>
                           Independent Playlisting Campaign.
                           </strong>
                        </p>
                        <p class="mb-0">
                           <i class="fe fe-check-circle text-primary">
                           </i>
                           You are covered by the
                           <strong>
                           'Artist Protection Program'
                           </strong>
                           <i class="fe fe-info fw-bold" data-bs-toggle="tooltip" style="cursor: pointer;" title="If you want to stop your campaign, then you will automatically be refunded the difference of budget that hasn't been used to your GoLoudr Balance. If we're not able to begin your campaign to our standards then you will be automatically refunded to your form of payment."></i>
                        </p>
                        <p class="mb-0">
                           <i class="fe fe-check-circle text-primary">
                           </i>
                           Auto-refund to your GoLoudr balance in case you want to pause or end campaign before it reaches its goal. Balance can be used for future campaigns.
                        </p>
                     </div>
                  </div>
                  <div class="row"> 
                     <div class="col-12 mt-3">
                        <h2 class="card-header-title me-auto mb-3 ">
                           Balance
                        </h2>
                        <?php if (count($data->balance)>0): ?>
                            <?php if ($data->balance > 0): ?>
                              <div class="input-group mb-2">
                                 <input id="input_balance" type="number" class="form-control" placeholder="Your balance here: $0.00" min="0" max="" />
                                 <button type="button" class="btn btn-primary px-4" id="btnPayWithBalance">
                                 Use
                                 </button>
                              </div>
                            <?php else: ?>
                              <div class="input-group mb-2">
                                 <input disabled id="input_balance" type="number" class="form-control" placeholder="" min="0" max="" />
                                 <button disabled type="button" class="btn btn-primary px-4" id="btnPayWithBalance">
                                 Use
                                 </button>
                              </div>
                            <?php endif ?> 
                            <?php else: ?>
                               <div class="input-group mb-2">
                                 <input disabled id="input_balance" type="number" class="form-control" placeholder="" min="0" max="" />
                                 <button disabled type="button" class="btn btn-primary px-4" id="btnPayWithBalance">
                                 Use
                                 </button>
                              </div>
                        <?php endif ?>
                        
                        <small class="" style="font-size: 17px;padding-top: 3px;margin-right: 5px;">
                        My Balance:
                        <span class="fw-bold" id="myBalance">
                        <?php if (count($data->balance)>0): ?>
                            $<?= number_format($data->balance[0]->balance,2);?>
                        <?php endif ?>
                        </span>
                        </small>
                        <p class="mb-0 badge bg-light fs-4" id="text_cupon" style="position: absolute;display: none;">
                            <span class="fw-bold text-primary text-uppercase" id="text_cupon_value"><span id="tx_balance_used">-14.00</span></span>
                            <i id="delete-balance" title="Remove" class="fe fe-x-circle text-secondary" style="cursor: pointer;"></i>
                        </p>

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
                            <form id="payment-form">
                              <div id="payment-element"> 
                              </div>
                              <button id="submit" class="btn btn-primary form-control mt-3">
                                <div class="spinner hidden" id="spinner"></div>
                                <span id="button-text">Pay now</span>
                              </button>
                              <div id="payment-message" class="hidden"></div>
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
                  <div class="mb-5 row">
                     <div class="col-6" style="text-align: left;">
                        <a class="btn btn-primary" href="<?= Request::root();?>/campaign-schedule" style="width: 120px;">
                        Go Back
                        </a>
                     </div> 
                  </div>
               </div>
            </div>
         </div>
         <form id="form-campaign" method="get" action="<?= Request::root();?>/pay">
            
            <input type="hidden" name="id_track" id="id_track"> 
            <input type="hidden" name="start_date" id="date">
            <input type="hidden" name="generos" id="generos">   
            <input type="hidden" name="balance" id="paid_with_balance" value="0">
            <input type="hidden" name="discount" id="cupon_code" value="">
            <input type="hidden" name="card_amount" id="card_amount">

            <input type="hidden" name="k_card" id="k_card">
            <input type="hidden" name="k_balance" id="k_balance"> 
            <input type="hidden" name="k_discount" id="k_discount">



            <input type="hidden" name="cupon_amount" id="cupon_amount" value="0">
            <input type="hidden" name="payment_amount" id="inversion" value="0"> 
            <input type="hidden" name="clientSecret" id="clientSecret">

         </form>
      </div>
    
    <script src="<?= Request::root();?>/local/resources/views/assets/js/vendor.bundle.js"></script>
    <script src="<?= Request::root();?>/local/resources/views/assets/js/theme.bundle.js"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/df-number-format/2.1.6/jquery.number.min.js"></script> 
    <script src="https://js.stripe.com/v3/">
    </script> 
    <script src="https://www.paypal.com/sdk/js?client-id=AWnPN3ca5Lms-Ek9yVe0txASM-TIsB-L80B9mB6zlJ9vFMug3a3N92xw0qri0xUX027IqkjW0wqYmLPR&disable-funding=credit">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

   <script>
      $("html,.scroll").niceScroll({
         cursorcolor:"#ddd"
      }); 

      $("#delete-balance").click(function(){
        $("#text_cupon").hide();
        $("#tx_balance_used").text("");
        $("#paid_with_balance").val("");
        Cookies.remove("balance");
        loadInfo();
        getCs();
      });

       $(document).ready(function () {
         loadInfo();
         if ($(window).width() >= 992) {
           $("html,.scroll").niceScroll({
             cursorcolor:"#ddd"
           });
         }  
       }); 
        
       <?php if (count($data->balance)>0): ?>
          <?php if ($data->balance[0]->balance == ""): ?>
            Cookies.remove("balance");
          <?php endif ?> 
       <?php endif ?>

       
       total_a_pagar = 0;

      function loadInfo() {

          if (typeof Cookies.get("track_date") !== "undefined") {
              $("#start_date").html('<i class="fe fe-calendar"></i>' + Cookies.get("track_date") + '</span>');
          }
          inversion = 0;
          if (typeof Cookies.get("track_inversion") !== "undefined") {
              $("#sub_total").text("$" + $.number(Cookies.get("track_inversion"), 2, '.', ','));
              total_a_pagar = Cookies.get("track_inversion");
              inversion = Cookies.get("track_inversion");
          }

          if (typeof Cookies.get("cupon_code") !== "undefined") {
              $("#start_date,#cupon_code").val(Cookies.get("cupon_code"));
              $("#k_discount").val("true");
              if (typeof Cookies.get("cupon_percent") !== "undefined" && Cookies.get("cupon_percent") != 0) {
                  inversion = $.number(Cookies.get("track_inversion"));
                  discount = Cookies.get("cupon_percent");
                  discount = inversion * (discount / 100);
                  total_a_pagar = inversion - discount;
                  $("#cupon_amount").val(discount);
                  $("#discount").text("$" + $.number(discount, 2, '.', ','));

              } else if (typeof Cookies.get("cupon_amount") !== "undefined" && Cookies.get("cupon_amount") != 0) {
                  inversion = $.number(Cookies.get("track_inversion"));
                  discount = Cookies.get("cupon_amount");
                  total_a_pagar = inversion - discount;
                  $("#cupon_amount").val(discount);
                  $("#discount").text("$" + $.number(discount, 2, '.', ','));
              }
          }

          if (typeof Cookies.get("balance") !== "undefined") {
              $("#k_balance").val("true");
              $("#balance_value").text("$" + $.number(Cookies.get("balance"), 2, '.', ','));
              $("#tx_balance_used").text("$" + $.number(Cookies.get("balance"), 2, '.', ','));
              $("#text_cupon").show();
              $("#paid_with_balance").val($.number(Cookies.get("balance"), 2, '.', ','));
              total_a_pagar = total_a_pagar - Cookies.get("balance");
          }



          $("#total_amount").text("$" + $.number(total_a_pagar, 2, '.', ','));

          if (typeof Cookies.get("track_img") !== "undefined") {
              $("#track-img").attr('src', Cookies.get('track_img'));
          }

          if (typeof Cookies.get("track_id") !== "undefined") {
              $("#id_track").val(Cookies.get('track_id'));
          }

          if (typeof Cookies.get("track_name") !== "undefined") {
              $("#track-name").text(Cookies.get('track_name'));
          }

          if (typeof Cookies.get("track_inversion") !== "undefined") {
              $("#inversion").val(Cookies.get('track_inversion'));
          }
          if (typeof Cookies.get("track_generos") !== "undefined") {
              $("#generos").val(JSON.parse(Cookies.get('track_generos')).toString());
          }
          if (typeof Cookies.get("track_date") !== "undefined") {
              $("#date").val(Cookies.get('track_date'));
          }
          if (typeof Cookies.get("track_artist") !== "undefined") {
              $("#track-artist").text(Cookies.get('track_artist'));
          }

          if (typeof Cookies.get("track_reach") !== "undefined") {
              $("#track-reach").text(Cookies.get('track_reach'));
          }
          if (typeof Cookies.get("track_streams") !== "undefined") {
              $("#track-streams").text(Cookies.get('track_streams'));
          }
          if (typeof Cookies.get("track_stream_porcent") !== "undefined") {
              $("#stream_p").css('width', Cookies.get('track_stream_porcent'));
          }
          if (typeof Cookies.get("track_reach_porcent") !== "undefined") {
              $("#reach_p").css('width', Cookies.get('track_reach_porcent'));
          }
          if (typeof Cookies.get("track_generos") !== "undefined") {
              generos = Cookies.get("track_generos");
              generos = JSON.parse(generos);
              generos_tags = "";
              $.each(generos, function(key, value) {
                  genero_text = value.split("_");
                  generos_tags = generos_tags + '<span class="text-capitalize badge bg-primary-soft fw-bold ms-2">' + genero_text[1] + '</span>';
              });
              $("#track-generos").html(generos_tags);
          }
      }

      // GESTION DE PAGOS
      $("#btnPayWithBalance").click(function() {
          if ($("#input_balance").val() == "") {
              return 0;
          }
          if ($("#input_balance").val() <=0) {
              return 0;
          }
          if ($("#cupon_amount").val() == "") {
              $("#cupon_amount").val(0);
          }

          if (parseFloat($("#input_balance").val()) < (inversion - parseFloat($("#cupon_amount").val()))) {
              Cookies.set("balance", $("#input_balance").val());
              $("#balance_value").text("$" + $.number($("#input_balance").val(), 2, '.', ','));
              loadInfo();
          }

          if (parseFloat($("#input_balance").val()) >= (inversion - parseFloat($("#cupon_amount").val()))) {
              if (confirm("Esta seguro que desea pagar este campaign con su balance?") == true) {
                  var balan = $("#input_balance").val(); 
                  $("#paid_with_balance").val((inversion - parseFloat($("#cupon_amount").val())));
                  $("#k_balance").val("true");
                  $("#form-campaign").submit();
              }
          }
          getCs();
      });
    </script>

    <script> 
      const pk = "pk_test_51IcHMdLBCvwwtaP2SeTJ9ylRkneOvXmXUZ1D4nbtR4v1izKxWLSHuO9sQfKDqT5V9f4lTPc3YX8t6fCLWlerCf8h00ycAH0Vyo";
      const stripe = Stripe(pk); 
      let elements; 
      let paymentElement;

      $(document).ready(function(){
         getCs();
      });

      function getCs() { 

         cupon_amount = $("#cupon_amount").val();
         inversion = $("#inversion").val();
         paid_with_balance = $("#paid_with_balance").val();
         total = inversion - cupon_amount - paid_with_balance;

         var form = new FormData();
         form.append("monto", total);

         var settings = {
            "url": "<?= Request::root();?>/clientSecret",
            "method": "POST",
            "timeout": 0,
            "headers": {},
            "processData": false,
            "mimeType": "multipart/form-data",
            "contentType": false,
            "data": form
         };

          $.ajax(settings).done(function (response) {
            response = jQuery.parseJSON(response);
            console.log(response); 
            $("#card_amount").val(response.data.amount);
            $("#clientSecret").val(response.data.clientSecret); 
            renderPaymentForm();
         }); 
      }

      function renderPaymentForm(){ 
         if($("#clientSecret").val()==""){
            console.log("Ocurrio un error al cargar el formulario.");
         }
         else{   
            elements = stripe.elements({clientSecret: $("#clientSecret").val()});  
            paymentElement = elements.create('payment'); 
            paymentElement.mount("#payment-element");   
         }
      }

      document.querySelector("#payment-form").addEventListener('submit', async (event) => {
       $("#k_card").val("true"); 
        stripe.confirmPayment({
          elements,
          confirmParams: {
            return_url: '<?= Request::root();?>/pay?' + $("#form-campaign").serialize(), 
          },
        }).then(function(result) {
            console.log(result);
        });
      });
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"></script> 
    <script>
       $.notify("Ejemplo", "info");
      <?php if (Session::has('info')): ?>
         alert("<?= Session::get('info');?>");
         $.notify("<?= Session::get('info');?>", "info");
      <?php elseif(Session::has('error')): ?> 
        $.notify("<?= Session::get('error');?>", "error");
      <?php endif ?>
    </script>

   </body>
</html>