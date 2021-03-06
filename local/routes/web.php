<?php

use Illuminate\Support\Facades\Route;

 

Route::middleware(['cors'])->group(function () {

Route::post('clientSecret',"payment@updatePaymentIntent");
Route::get('pay',"payment@pay");
#************* RUTAS DE LAS VISTAS DEL SISTEMA **************# 

# ACCOUNT 
Route::get('campaign/new',"campaignNew@indexPublic"); 
Route::get('customer-info',"customerInfo@index");

# SIGNIN 
Route::get('signIn', "signIn@index");
Route::post('signIn', "signIn@auth");
Route::get('restore-password', "signIn@restore"); 
Route::post('restore-passwrod', "signIn@restorePassword");

#************* RUTAS DE LA LOGICA DEL SISTEMA **************#  
# TRACKS
Route::get('track/search',"campaignNew@buscarTrack");

# TRANSANCIONES
Route::post('account',"customerInfo@createAccount");

}); 

				  ## RUTAS PRIVADAS ##
Route::middleware(['cors','auth'])->group(function () { 
#************* RUTAS DE LAS VISTAS DEL SISTEMA **************#   

# DASHBOARD
Route::get('dashboard',"dashboard@index"); 


# CAMPAIGNS
Route::get('campaigns',"campaigns@index");
Route::get('campaign-analytics/{token}',"campaignAnalitycs@index");
Route::get('campaign-performance/{token}',"campaignPerformance@index");
Route::get('campaign-audio-analysis/{token}',"campaignAudioAnalysis@index"); 
Route::get('campaign-new',"campaignNew@index"); 
Route::get('campaign-schedule',"campaignSchedule@index"); 
Route::get('campaign-details',"campaignDetails@index");
Route::get('campaign-checkout/{id}',"campaignCheckout@index"); 

# ARTISTS 
Route::get('artist-summary/{token}',"artistSummary@index");
Route::get('artist-audience-analysis/{token}',"artistAudienceAnalysis@index");
Route::get('artist-catalogue/{token}',"artistCatalogue@index");
#Route::get('artist-team/{token}',"artistTeam@index");

# ACCOUNT 
Route::get('general',"general@index");
Route::get('billing',"billing@index");
Route::get('members',"members@index");
Route::get('security',"security@index");
Route::get('notifications',"notifications@index"); 
Route::get('logout',"customerInfo@logOut"); 

#************* RUTAS DE LA LOGICA DEL SISTEMA **************#
 
Route::post('create-campaign',"campaignDetails@createCampaign"); # CREAMOS UNA CAMPANIA
Route::post('payment/balance',"campaignCheckout@payWithBalance"); # PAGAMOS CON EL BALANCE
Route::post('update-password',"signIn@updatePassword"); # ACTUALIZAMOS EL PASSWORD
Route::post('account-update',"general@accountUpdate");


Route::get('loading-artist-catalogue/{id_campaign}',"loading@loadArtistCatalogue");
Route::get('loading-artist-summary/{id_campaign}',"loading@loadArtistSummary");
Route::get('loading-artist-audience/{id_campaign}',"loading@loadAudienceAnalisys");
Route::get('loading-artist-analysis/{id_campaign}',"loading@loadAudioAnalysis");

Route::get('load-artist-catalogue/{id_artist}',"dashboard@loadArtistCatalogue");
Route::get('load-artist-summary/{id_artist}',"dashboard@loadArtistSummary");
Route::get('load-artist-audience/{id_artist}',"dashboard@loadAudienceAnalisys");
Route::get('load-audio-analysis/{loadAudioAnalysis}',"dashboard@loadAudioAnalysis");



});
Route::get('pay',"payment@pay");