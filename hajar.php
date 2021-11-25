<?php
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$tgl_sekarang=date("Y-m-d");//tanggal sekarang
$tgl_mulai="2021-08-2";// tanggal launching aplikasi
$jangka_waktu = strtotime('+1 days', strtotime($tgl_mulai));// jangka waktu + 1 hari
$tgl_exp=date("Y-m-d",$jangka_waktu);//tanggal expired
/*if ($tgl_sekarang >=$tgl_exp )
{
echo @color('red',"cuan rah cuan sing penting jngan ada dusta di antara kita");
echo @color('green',"JANGAN LUPA BAHAGIA\n");
die;
}
else
{
echo @color('green',"Masih dalam jangka waktu, Jika Expired Hubungi Creator!!");
}
echo @color('purple',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
$timestamp = date("d-m-Y | H:i:s");
echo @color('nevy',$timestamp);
echo @color('green',"  | MAMA EKHA SAYANG KOE  \n");
echo @color('yellow',"        Build For  Team\n");
echo @color('yellow',"      GOJEK CLUB NEW LENGKAP\n");
echo @color('red',"   Please Verify Your Device Fisrt ^^\n");
echo @color('purple',"~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
keygen:
$x9 = @file_get_contents("chrome");
if($x9 == ""){
echo @color('green',"Masukkan Password Device Anda : ");
$x9 = trim(fgets(STDIN));
d1("chrome", $x9);
}
echo @color('nevy',"Proses Verifikasi Device ID, Mohon Tunggu ..");
sleep(4);
$d6 = @file_get_contents("chace");
echo "\n";
$enkripsihash = $x9;
$passwordlogin  = $d6;
if (password_verify($passwordlogin, $enkripsihash)) {
    echo @color('yellow',"Berhasil Login");
    echo "\n";
}else{
$d3 = sessionId();
$d4 = str_replace("-","", $d3);
    //shell_exec("termux-vibrate");
    echo @color('red',"KODE MU SALAH JON!!!\n");
    echo @color('nevy',"Vertifikasi Handphone Anda =>  ");
    echo @color('yellow',$d4);
    echo @color('nevy'," Silahkan Hubungi Creator Untuk Verifikasi https://wa.me/6282176358295\n\n");
    @unlink("chace");
    d1("chace", $d4);
    @unlink("chrome");
    goto keygen;
    }*/
echo @color('nevy',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
date_default_timezone_set('Asia/Jakarta');
awal:
$timestamp = date("d-m-Y | H:i:s");
echo @color('nevy',$timestamp);
echo @color('green',"  | MAMA EKHA SAYANG KOE \n");
echo @color('yellow',"        Build FOR  CREW\n");
echo @color('yellow',"       YANG NYEBARIN SCRIPT INI \n");
echo @color('yellow'," SEMOGA LOBANG PANTAT NYA BISULAN!!!!! \n");
echo @color('yellow',"               AAMIIN \n");
echo @color('purple',"JANGAN LUPA BAHAGIA KAWAN G\n  Terima Kasih, Semoga Cuan ^^");
echo @color('nevy',"\n~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~\n");
echo @color("red","Notice.. !! : \n");
echo @color("yellow"," - Harap Teliti Dalam Menggunakan Script\n");
echo @color("yellow"," - Dilarang Keras Memberi Dan Menyebar Script Ini\n");
echo @color("yellow"," - Segala Bentuk Kerugian Anda Bukan Tanggung Jawab Kami\n");
echo @color("yellow"," - Semoga Cuan ^^ Terima Kasih Telah Membeli Script Ini\n");
echo @color("red","=====================================================\n");
echo @color('nevy',"Mau Pilih Opsi Mana ? : \n");
echo @color("yellow"," 1  . REGISTER\n");
echo @color("yellow"," 2  . LOGIN\n");
echo @color("yellow"," 3  . CAIRIN DUIT\n");
echo @color("yellow"," 4  . BELI GPC DI CODA\n");
echo @color("yellow"," 5  . GENERATE PEMBAYARAN ALFAMART\n");
echo @color("green"," 1 / 2 / 3 / 4 / 5 ? : ");
$case = trim(fgets(STDIN));
echo "\n";
if($case == 1){
    echo "\n";
    echo @color("yellow","   REGISTER  \n");
$sesid = sessionId();
$uniqid = uniqueId();
$nama = name();
$email = strtolower(str_replace(" ", "", $nama) . mt_rand(100,999999) . "@gmail.com");
echo @colored("green","Masukkan Nomor : ");
$nohp = trim(fgets(STDIN));
$data = '{"email":"'.$email.'","name":"'.$nama.'","phone":"+62'.$nohp.'","signed_up_country":"ID"}';
$regist = post("https://api.gojekapi.com/v5/customers", $data, $sesid, $uniqid);
echo "\n";
$adasda = json_decode($regist, true);
$otptoken=@$adasda["data"]["otp_token"];
$message=@$adasda["data"]["message"];
$errormsg=@$adasda["errors"][0]["message"];
echo $message;
if($errormsg == "Nomor HP-mu sudah terdaftar."){
    echo "\n";
    echo @colored("red",$errormsg);
    echo "\n";
    goto awal;
}
ulangotp:
echo "\n";
echo @colored("nevy","Masukkan OTP : ");
$otp = trim(fgets(STDIN));
$data = '{"client_name":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"'.$otp.'","otp_token":"'.$otptoken.'"}}';
$verify = post("https://api.gojekapi.com/v5/customers/phone/verify", $data, $sesid, $uniqid);
echo "\n";
$cxcx = json_decode($verify, true);
$errro=@$cxcx["errors"][0]["message"];
$id=@$cxcx["data"]["resource_owner_id"];
$tokold=@$cxcx["data"]["access_token"];
$reftok=@$cxcx["data"]["refresh_token"];
if($errro == "Sepertinya kode yang kamu masukkan tidak valid."){
    echo @colored("red",$errro);
    goto ulangotp;
}
$data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"refresh_token":"'.$reftok.'"},"grant_type":"refresh_token","scopes":[]}';
$goid = postlog("https://goid.gojekapi.com/goid/token", $data, $sesid, $uniqid, $tokold, $id);
$ahgad = json_decode($goid, true);
$toknew=@$ahgad["access_token"];
sleep(3);
echo @colored("yellow"," Masukkan PIN Anda : ");
$pin = trim(fgets(STDIN));
ulangpinotp:
$data = '{"pin":"'.$pin.'"}';
$pinnya = postsend("https://customer.gopayapi.com/v1/users/pin", $data, $sesid, $uniqid, $toknew, $id);
echo "\n";
print_r($pinnya);
echo "\n";
echo @colored("purple"," Masukkan OTP Pin Anda : ");
$otpsetpin = trim(fgets(STDIN));
$data = '{"pin":"'.$pin.'"}';
$verify = postpin("https://customer.gopayapi.com/v1/users/pin", $data, $otpsetpin, $sesid, $uniqid, $toknew, $id);
print_r($verify);
$ahgadd = json_decode($verify, true);
$errmseg=@$ahgadd["errors"][0]["message_title"];
$errmsegs=@$ahgadd["errors"][0]["message"];
if($errmseg == "Kode OTP-nya salah"){
    echo "\n";
    echo @color("red",$errmsegs);
    echo @colored("nevy","\nKode OTP nya Salah.\n");
    echo @colored("green","Mengirim Kembali OTP Anda..\n");
    goto ulangpinotp;
}
echo "\n".@color("yellow","  PIN SUDAH TERPASANG ")."\n";
echo "\n".@color("green"," PIN ANDA $pin ")."\n";
echo @color("green"," PIN ANDA $pin ")."\n";
echo @color("red"," SEMOGA CUAN ")."\n";
$awalan = getRequest("https://api.gojekapi.com/goclub/v1/program", $uniqid, $sesid, $toknew, $id);
$data = "";
$member = postlogin("https://api.gojekapi.com/goclub/v1/members", $data, $sesid, $uniqid, $toknew, $id);
print_r($member);
echo "\n";
$clubvc = getRequest("https://api.gojekapi.com/goclub/v1/membership", $uniqid, $sesid, $toknew, $id);
// kita buat top up
aloman:
echo @colored("red","Notice !!\n");
echo @colored("green","Lakukan Topup  Terlebih Dahulu : \n");
echo @colored("blue"," - Untuk BCA Pake Kode 70001+nope (ex 70001081245xxxx) \n");
echo @colored("green"," - Untuk BRI Pake Kode 301341+nope (ex 301341081245xxxx) \n");
echo @colored("nevy"," - Admin Fee Rp 1.000 Min. Top Up Rp 10.000\n\n");
echo @colored("yellow"," Apakah Sudah Top UP ? ( y / n ) : ");
$yakah = trim(fgets(STDIN));
$r1= "0";
$r2= "7";
for($r1; $r1 < $r2; $r1++){
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("green","Saldo Anda : Rp ");
echo @colored("green",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda   : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
$hem="Proses Scan";
  for($time=20;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
sleep(1);
        }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
}
echo "\n";
echo @colored("green","Scan Ke 7..\n");
echo @colored("nevy","Mohon Tunggu Sejenak Kawan....");
echo "\n";
$hem="Proses Scan";
  for($time=90;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
  } 
$a1= "0";
$a2= "7";
for($a1; $a1 < $a2; $a1++){
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("yellow","Saldo Anda : Rp ");
echo @colored("yellow",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
    $hem="Proses Scan";
    for($time=20;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
  sleep(1);
          }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
}
echo "\n";
echo @colored("nevy","Scan Ke 14..\n");
echo @colored("green","Mohon Tunggu Sejenak Kawan....");
echo "\n";
$hem="Proses Scan";
  for($time=90;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
  }
$c1= "0";
$c2= "7";
for($c1; $c1 < $c2; $c1++){
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("purple","Saldo Anda : Rp ");
echo @colored("purple",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
    $hem="Proses Scan";
    for($time=20;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
  sleep(1);
          }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
}
echo "\n";
echo @colored("purple","Scan Ke 21..\n");
echo @colored("red","Mohon Tunggu Sejenak Kawan....");
echo "\n";
$hem="Proses Scan";
  for($time=90;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
  }
$e1= "0";
$e2= "7";
for($e1; $e1 < $e2; $e1++){
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("blue","Saldo Anda : Rp ");
echo @colored("blue",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
    $hem="Proses Scan";
    for($time=20;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
  sleep(1);
          }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
}
echo "\n";
echo @colored("green","Scan Ke 28..\n");
echo @colored("nevy","Mohon Tunggu Sejenak Kawan....");
echo "\n";
$hem="Proses Scan";
  for($time=90;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
  }
$f1= "0";
$f2= "7";
for($f1; $f1 < $f2; $f1++){
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("yellow","Saldo Anda : Rp ");
echo @colored("yellow",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
    $hem="Proses Scan";
    for($time=20;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
  sleep(1);
          }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
}
echo @colored("purple","Scan Ke 35..\n");
scanlagi:
$balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$duit = json_decode($balance, true);
$duitmu=@$duit["data"][0]["balance"]["value"];
echo @colored("red","Saldo Anda : Rp ");
echo @colored("red",$duitmu);
echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
if($duitmu == "0"){
    echo "\n";
    echo @colored("green","Tunggu Jon, Duitmu Belum Balik..");
    $hem="Proses Scan";
    for($time=20;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
  sleep(1);
          }
}
echo "\n";
//ini utk scan 500k
$data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
$qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
//print_r($qr500);
//echo "\n";
$idempotency = sessionId();
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
$aslila = json_decode($payment, true);
$paymentid=@$aslila["data"]["payment_id"];
//print_r($payment);
//echo "\n";
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
$ntonku = json_decode($apolah, true);
$tokenwal=@$ntonku["data"][0]["token"];
$ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
$last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
//print_r($dapekdak);
//echo "\n";
$data = '{"token":"'.$tokenwal.'"}';
$putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
//print_r($putra);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
//print_r($patcik);
//echo "\n";
$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
$patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
print_r($patcikwo);
echo "\n";
$hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(1);
        }
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow"," EXP mu Sekarang Adalah : ");
echo @colored("green",$expmu);
echo "\n";
echo @color("nevy"," Kurang Puas ? Mau Scan LAgi ? ( y / n ) : ");
$pilihbarangnya = trim(fgets(STDIN));
echo "\n";
if($pilihbarangnya == "y"){
echo @colored("purple","Oke, Scan Lagi");
echo "\n";
goto scanlagi;
}
echo "\n";
echo exec("mpv /sdcard/music");
echo "\n";
echo @colored("green","Selesai Scan, Apakah Mau Reedem Kupon ? ( y / n ) : ");
$pilinjoku = trim(fgets(STDIN));
if($pilinjoku == "y"){
    echo "\n";
    goto redemkupon;
}
}





















































if($case == 2){
    echo "\n";
    echo @color("yellow","   LOGIN  \n");
    echo @colored("nevy","Masukkan Nomor : ");
$nohp = trim(fgets(STDIN));
echo "\n";
    $sesid = sessionId();
    $uniqid = uniqueId();
    $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","country_code":"+62","magic_link_ref":"","phone_number":"'.$nohp.'"}';
    $regist = post("https://goid.gojekapi.com/goid/login/request", $data, $sesid, $uniqid);
    $cxcx = json_decode($regist, true);
    $otptok=@$cxcx["data"]["otp_token"];
    $sda=@$cxcx["success"];
    echo @colored("purple"," Masukkan OTP : ");
    $otp = trim(fgets(STDIN));
    $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"'.$otp.'","otp_token":"'.$otptok.'"},"grant_type":"otp","scopes":[]}';
    $dasdas = post("https://goid.gojekapi.com/goid/token", $data, $sesid, $uniqid);
    $cxdasdcx = json_decode($dasdas, true);
    $toknew=@$cxdasdcx["access_token"];
    echo "\n";
    sleep(3);
    $ntah = getcust("https://api.gojekapi.com/gojek/v2/customer", $uniqid, $sesid, $toknew);
    $cxcxcxa = json_decode($ntah, true);
    $id=@$cxcxcxa["customer"]["id"];
    $namany=@$cxcxcxa["customer"]["name"];
    echo @colored("purple"," Hy $namany , Selamat Datang Kembali ^^\n");
    echo @colored("yellow"," Masukkan PIN Anda : ");
    $pin = trim(fgets(STDIN));
    ulangpinotpd:
    $data = '{"pin":"'.$pin.'"}';
    $pinnya = postsend("https://customer.gopayapi.com/v1/users/pin", $data, $sesid, $uniqid, $toknew, $id);
    $asdzzz = json_decode($pinnya, true);
    $erasd=@$asdzzz["access_token"];
    echo "\n";
    print_r($pinnya);
    echo "\n";
    echo @colored("purple"," Masukkan OTP Pin Anda : ");
    $otpsetpin = trim(fgets(STDIN));
    $data = '{"pin":"'.$pin.'"}';
    $verify = postpin("https://customer.gopayapi.com/v1/users/pin", $data, $otpsetpin, $sesid, $uniqid, $toknew, $id);
    print_r($verify);
    $ahgadd = json_decode($verify, true);
    $errmseg=@$ahgadd["errors"][0]["message_title"];
    $errmsegs=@$ahgadd["errors"][0]["message"];
    if($errmseg == "Kode OTP-nya salah"){
        echo "\n";
        echo @color("red",$errmsegs);
        echo @colored("nevy","\nKode OTP nya Salah.\n");
        echo @colored("green","Mengirim Kembali OTP Anda..\n");
        goto ulangpinotpd;
    }
    echo "\n".@color("yellow","  PIN SUDAH TERPASANG ")."\n";
    echo "\n".@color("green"," PIN ANDA $pin ")."\n";
    echo @color("green"," PIN ANDA $pin ")."\n";
    echo @color("red"," SEMOGA CUAN ")."\n";
    $awalan = getRequest("https://api.gojekapi.com/goclub/v1/program", $uniqid, $sesid, $toknew, $id);
    $data = "";
    $member = postlogin("https://api.gojekapi.com/goclub/v1/members", $data, $sesid, $uniqid, $toknew, $id);
    print_r($member);
    echo "\n";
    $clubvc = getRequest("https://api.gojekapi.com/goclub/v1/membership", $uniqid, $sesid, $toknew, $id);
    // kita buat top up
    alomana:
    echo @colored("red","Notice !!\n");
    echo @colored("green","Lakukan Topup  Terlebih Dahulu : \n");
    echo @colored("blue"," - Untuk BCA Pake Kode 70001+nope (ex 70001081245xxxx) \n");
    echo @colored("green"," - Untuk BRI Pake Kode 301341+nope (ex 301341081245xxxx) \n");
    echo @colored("nevy"," - Admin Fee Rp 1.000 Min. Top Up Rp 10.000\n\n");
    echo @colored("yellow"," Apakah Sudah Top UP ? ( y / n ) : ");
    $yakah = trim(fgets(STDIN));
    $r1= "0";
    $r2= "7";
    for($r1; $r1 < $r2; $r1++){
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("green","Saldo Anda : Rp ");
    echo @colored("green",$duitmu);
    echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
if($expmu == "3620"){
  goto selesaibro;
}
echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    }
    echo "\n";
    echo @colored("green","Scan Ke 7..\n");
    echo @colored("nevy","Mohon Tunggu Sejenak Kawan....");
    echo "\n";
    $hem="Proses Scan";
    for($time=90;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
    }
    $a1= "0";
    $a2= "7";
    for($a1; $a1 < $a2; $a1++){
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("yellow","Saldo Anda : Rp ");
    echo @colored("yellow",$duitmu);
    echo "\n";
    $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
    $expnya = json_decode($landing, true);
    $expmu=@$expnya["data"]["current_tier"]["member_xp"];
    echo @colored("yellow","EXP Anda  : ");
    echo @colored("green",$expmu);
    if($expmu == "3620"){
      goto selesaibro;
    }
    echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    }
    echo "\n";
    echo @colored("blue","Scan Ke 14..\n");
    echo @colored("green","Mohon Tunggu Sejenak Kawan....");
    $hem="Proses Scan";
    for($time=90;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
    }
    sleep(90);
    $c1= "0";
    $c2= "7";
    for($c1; $c1 < $c2; $c1++){
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("purple","Saldo Anda : Rp ");
    echo @colored("purple",$duitmu);
    echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
if($expmu == "3620"){
  goto selesaibro;
}
echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    }
    echo "\n";
    echo @colored("nevy","Scan Ke 21..\n");
    echo @colored("red","Mohon Tunggu Sejenak Kawan....");
    echo "\n";
    $hem="Proses Scan";
    for($time=90;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
    }
    $e1= "0";
    $e2= "7";
    for($e1; $e1 < $e2; $e1++){
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("blue","Saldo Anda : Rp ");
    echo @colored("blue",$duitmu);
    echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    }
    echo "\n";
    echo @colored("purple","Scan Ke 28..\n");
    echo @colored("nevy","Mohon Tunggu Sejenak Kawan....");
    echo "\n";
    $hem="Proses Scan";
    for($time=90;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==90 or$time==87 or$time==84 or$time==81 or$time==78 or$time==75 or$time==72 or$time==69 or$time==66 or$time==63 or$time==60 or$time==57 or$time==54 or$time==51 or$time==48 or$time==45 or$time==42 or$time==39 or$time==36 or$time==33 or$time==30 or$time==27 or$time==24 or$time==21 or$time==18 or$time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==89 or$time==86 or$time==83 or$time==80 or$time==77 or$time==74 or$time==71 or$time==68 or$time==65 or$time==62 or$time==59 or$time==56 or$time==53 or$time==50 or$time==47 or$time==44 or$time==41 or$time==38 or$time==35 or$time==32 or$time==29 or$time==26 or$time==23 or$time==20 or$time==17 or$time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==88 or$time==85 or$time==82 or$time==79 or$time==76 or$time==73 or$time==70 or$time==67 or$time==64 or$time==61 or$time==58 or$time==55 or$time==52 or$time==49 or$time==46 or$time==43 or$time==40 or$time==37 or$time==34 or$time==31 or$time==28 or$time==25 or$time==22 or$time==19 or$time==16 or$time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
    }
    $f1= "0";
    $f2= "7";
    for($f1; $f1 < $f2; $f1++){
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("yellow","Saldo Anda : Rp ");
    echo @colored("yellow",$duitmu);
    echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
if($expmu == "3620"){
  goto selesaibro;
}
echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    }
    echo @colored("green","Scan Ke 35..\n");
    scanlagid:
    $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($balance, true);
    $duitmu=@$duit["data"][0]["balance"]["value"];
    echo @colored("red","Saldo Anda : Rp ");
    echo @colored("red",$duitmu);
    echo "\n";
$landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
$expnya = json_decode($landing, true);
$expmu=@$expnya["data"]["current_tier"]["member_xp"];
echo @colored("yellow","EXP Anda  : ");
echo @colored("green",$expmu);
if($expmu == "3620"){
  goto selesaibro;
}
echo "\n";
    if($duitmu == "0"){
        echo "\n";
        echo @colored("green","Tunggu Jon, Duitmu Belum Balik..\n");
        $hem="Proses Scan";
        for($time=20;$time>-1;$time--){
      echo "\r                             \r";
      echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
           if($time==20 or$time==16 or$time==13 or$time==10 or$time==6 or$time==3){
      echo color("yellow","•");
          }
          if($time==19 or$time==15 or$time==12 or$time==9 or$time==5 or$time==2){
      echo color("yellow","••");
         }
         if($time==18 or$time==14 or$time==11 or$time==8 or$time==4 or$time==1){
      echo color("yellow","•••");
        }
        if($time==0){
      echo color("yellow","••••");
      echo "\n";
       }
      sleep(1);
              }
    }
    echo "\n";
    //ini utk scan 500k
    $data = '{"data":"00020101021226590016ID.CO.SHOPEE.WWW011893600918000091808002069180800303UMI51440014ID.CO.QRIS.WWW0215ID10210657735380303UMI5204539953033605409500000.005802ID5913amira pampers6013KAB. SIDOARJO61056125362290525WFqSVKgqPU870n0yXtc8nyNhH63049883","type":"QR_CODE"}';
    $qr500 = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($qr500);
    //echo "\n";
    $idempotency = sessionId();
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"amount":{"currency":"IDR","value":500000},"channel_type":"DYNAMIC_QR","checksum":{"version":"3","value":"95022321"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"6c75a094-eca7-4257-bfbd-70148ea92b51","type":"MERCHANT"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
    $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
    $aslila = json_decode($payment, true);
    $paymentid=@$aslila["data"]["payment_id"];
    //print_r($payment);
    //echo "\n";
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
    $ntonku = json_decode($apolah, true);
    $tokenwal=@$ntonku["data"][0]["token"];
    $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"transactions":[{"net_spend":500000,"payment_type":"GOPAY_WALLET","service_type":99}]}';
    $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($dapekdak);
    //echo "\n";
    $data = '{"token":"'.$tokenwal.'"}';
    $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($putra);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
    //print_r($patcik);
    //echo "\n";
    $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH","merchant_city":"KAB. SIDOARJO","retrieval_reference_number":"","transaction_currency_code":"360","merchant_id":"918080","purpose_of_transaction":"","store_label":"","terminal_label":"","bill_number":"","qr_transaction_type":"OFF-US-GOPAY-ISSUER","loyalty_number":"","merchant_criteria":"UMI","reference_label":"WFqSVKgqPU870n0yXtc8nyNhH","merchant_pan":"936009180000918080","additional_consumer_data_request":"","merchant_category_code":"5399","trx_fee_amount":0.0,"merchant_name":"amira pampers","issuer_name":"gopay","issuer_id":"93600914","acquirer_name":"Airpay Shopee","country_code":"ID","acquirer_id":"93600918","customer_label":"","postal_code":"61253","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"3","value":"95022321"},"metadata":{"merchant_cross_reference_id":"6c75a094-eca7-4257-bfbd-70148ea92b51","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"airpay shopee","aspi_qr_data":"{\"amount\":500000,\"postal_code\":\"61253\",\"merchant_city\":\"KAB. SIDOARJO\",\"merchant_id\":\"918080\",\"merchant_criteria\":\"UMI\",\"merchant_pan\":\"936009180000918080\",\"country_code\":\"ID\",\"transaction_currency_code\":\"360\",\"additional_data_national\":\"61056125362290525WFqSVKgqPU870n0yXtc8nyNhH\",\"additional_data\":{\"store_label\":null,\"mobile_number\":null,\"reference_label\":\"WFqSVKgqPU870n0yXtc8nyNhH\",\"purpose_of_transaction\":null,\"customer_label\":null,\"terminal_label\":null,\"bill_number\":null,\"additional_consumer_data_request\":null,\"loyalty_number\":null},\"merchant_category_code\":\"5399\",\"merchant_name\":\"amira pampers\",\"trx_fee_amount\":0,\"acquirer_id\":\"93600918\"}","external_merchant_name":"amira pampers - Airpay Shopee","checksum":"{\"version\":\"3\",\"value\":\"95022321\"}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
    $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
    print_r($patcikwo);
    echo "\n";
    $hem="Proses Scan";
    for($time=15;$time>-1;$time--){
  echo "\r                             \r";
  echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
       if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
  echo color("yellow","•");
      }
      if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
  echo color("yellow","••");
     }
     if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
  echo color("yellow","•••");
    }
    if($time==0){
  echo color("yellow","••••");
  echo "\n";
   }
   sleep(1);
          }
    $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
    $expnya = json_decode($landing, true);
    $expmu=@$expnya["data"]["current_tier"]["member_xp"];
    echo @colored("yellow"," EXP mu Sekarang Adalah : ");
    echo @colored("green",$expmu);
    if($expmu == "3620"){
      goto selesaibro;
    }
    echo "\n";
    echo @color("nevy"," Kurang Puas ? Mau Scan LAgi ? ( y / n ) : ");
    $pilihbarangnya = trim(fgets(STDIN));
    echo "\n";
    if($pilihbarangnya == "y"){
    echo @colored("purple","Oke, Scan Lagi");
    echo "\n";
    goto scanlagid;
    }
    selesaibro:
    echo "\n";
    echo exec("mpv /sdcard/music");
    echo "\n";
    echo @colored("green","Selesai Scan, Apakah Mau Reedem Kupon ? ( y / n ) : ");
    echo "\n";
    $pilinjoku = trim(fgets(STDIN));
    echo "\n";
    if($pilinjoku == "y"){
        goto redemkupon;
    }
    
goto awal;
redemkupon:
echo @colored("purple"," Redeem Kupon Apa ? : \n");
echo @colored("red"," 1  . Alfamart\n");
echo @colored("nevy"," 2  . GPC\n");
echo @colored("yellow"," 1 / 2 ? : ");
$gaskanbosssss = trim(fgets(STDIN));
echo "\n";
if($gaskanbosssss == 1){
    ambilterusssc:
$lp = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($lp, true);
    $tc=@$duit["data"]["current_tier"]["treasure_cards"][0]["id"];
ulanglagiyaac:
$balance = getRequest("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $uniqid, $sesid, $toknew, $id);
$select = json_decode($balance, true);
$satu=@$select["data"]["claim_from"][0]["id"];
$namasatu=@$select["data"]["claim_from"][0]["details"]["title"];
$dua=@$select["data"]["claim_from"][1]["id"];
$namadua=@$select["data"]["claim_from"][1]["details"]["title"];
$tiga=@$select["data"]["claim_from"][2]["id"];
$namatiga=@$select["data"]["claim_from"][2]["details"]["title"];
if($namasatu == ""){
    goto habisgana;
}
echo @colored("nevy","Tunggu Sejenak..\n");
if($namasatu == "Cashback GoPay 10rb jajan & belanja"){
    echo @colored("green",$namasatu);
    $idb = $satu;
    echo " ";
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusssc;
}elseif($namadua == "Cashback GoPay 10rb jajan & belanja"){
    echo @colored("green",$namadua);
    echo " ";
    $idb = $dua;
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusssc;
}elseif($namatiga == "Cashback GoPay 10rb jajan & belanja"){
    echo @colored("green",$namatiga);
echo " ";
    $idb = $tiga;
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusssc;
}else{
    echo "\n";
    echo @colored("purple","Ulang Lagi Ya");
    echo "\n";
    goto ulanglagiyaac;
}
}
if($gaskanbosssss == 2){
    ambilterusa:
    $lp = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($lp, true);
    $tc=@$duit["data"]["current_tier"]["treasure_cards"][0]["id"];
ulanglagiyaaa:
$balance = getRequest("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $uniqid, $sesid, $toknew, $id);
$select = json_decode($balance, true);
$satu=@$select["data"]["claim_from"][0]["id"];
$namasatu=@$select["data"]["claim_from"][0]["details"]["title"];
$dua=@$select["data"]["claim_from"][1]["id"];
$namadua=@$select["data"]["claim_from"][1]["details"]["title"];
$tiga=@$select["data"]["claim_from"][2]["id"];
$namatiga=@$select["data"]["claim_from"][2]["details"]["title"];
if($namasatu == ""){
    goto habisgana;
}
echo @colored("nevy","Tunggu Sejenak..\n");
if($namasatu == "Cashback GoPay 75% belanja & ngegame"){
    echo @colored("green",$namasatu);
    echo " ";
    $idb = $satu;
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusa;
}elseif($namadua == "Cashback GoPay 75% belanja & ngegame"){
    echo @colored("green",$namadua);
    echo " ";
    $idb = $dua;
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusa;
}elseif($namatiga == "Cashback GoPay 75% belanja & ngegame"){
    echo @colored("green",$namatiga);
    echo " ";
    $idb = $tiga;
    $data = '{"select_benefit":"'.$idb.'"}';
    $payment = postpatchklem("https://api.gojekapi.com/goclub/v1/user-claims/".$tc, $data, $uniqid, $sesid, $toknew, $id);
    $duit = json_decode($payment, true);
    $statusclaim=@$duit["data"]["status"];
    echo @colored("green",$statusclaim);
    echo "\n";
    goto ambilterusa;
}else{
    echo "\n";
    echo @colored("purple","Ulang Lagi Ya");
    echo "\n";
    goto ulanglagiyaaa;
}
}
}































































if($case == 3){
  echo "\n";
  echo @color("yellow","   CAIRIN DUIT  \n");
  echo @colored("nevy","Masukkan Nomor : ");
$nohp = trim(fgets(STDIN));
echo "\n";
echo @colored("yellow"," Masukkan PIN Anda : ");
$pin = trim(fgets(STDIN));
echo "\n";
  $sesid = sessionId();
  $uniqid = uniqueId();
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","country_code":"+62","magic_link_ref":"","phone_number":"'.$nohp.'"}';
  $regist = post("https://goid.gojekapi.com/goid/login/request", $data, $sesid, $uniqid);
  $cxcx = json_decode($regist, true);
  $otptok=@$cxcx["data"]["otp_token"];
  $sda=@$cxcx["success"];
  echo @colored("purple"," Masukkan OTP : ");
  $otp = trim(fgets(STDIN));
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"'.$otp.'","otp_token":"'.$otptok.'"},"grant_type":"otp","scopes":[]}';
  $dasdas = post("https://goid.gojekapi.com/goid/token", $data, $sesid, $uniqid);
  $cxdasdcx = json_decode($dasdas, true);
  $toknew=@$cxdasdcx["access_token"];
  echo "\n";
  sleep(3);
  $ntah = getcust("https://api.gojekapi.com/gojek/v2/customer", $uniqid, $sesid, $toknew);
  $cxcxcxa = json_decode($ntah, true);
  $id=@$cxcxcxa["customer"]["id"];
  $namany=@$cxcxcxa["customer"]["name"];
  echo @colored("purple"," Hy $namany , Selamat Datang Kembali ^^\n");
  echo "\n";
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  //ini utk scan 500k
  scanlagidongjonn:
  echo @colored("nevy","Masukkan LINK QR ANDA : ");
  $linkqrjon = trim(fgets(STDIN));
  $data = '{"data":"'.$linkqrjon.'","type":"QR_CODE"}';
  $cairkan = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
  $cxcx = json_decode($cairkan, true);
  $additional=@$cxcx["data"]["additional_data"]["aspiqr_information"]["additional_data_national"];
  $merchancity=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_city"];
  $tcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["transaction_currency_code"];
  $mcid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_id"];
  $qrtt=@$cxcx["data"]["additional_data"]["aspiqr_information"]["qr_transaction_type"];
  $mctr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_criteria"];
  $tlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["terminal_label"];
  $rlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["reference_label"];
  $bnr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["bill_number"];
  $mp=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_pan"];
  $mcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_category_code"];
  $mcname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_name"];
  $isname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_name"];
  $issuerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_id"];
  $acquirername=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_name"];
  $acquirerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_id"];
  $postalcode=@$cxcx["data"]["additional_data"]["aspiqr_information"]["postal_code"];
  $amount=@$cxcx["data"]["amount"]["value"];
  $version=@$cxcx["data"]["checksum"]["version"];
  $valuenya=@$cxcx["data"]["checksum"]["value"];
  $mcridr=@$cxcx["data"]["metadata"]["merchant_cross_reference_id"];
  $aspiqracquirer=@$cxcx["data"]["metadata"]["aspi_qr_acquirer"];
  $aspiqrdata=@$cxcx["data"]["metadata"]["aspi_qr_data"];
  $payeeid=@$cxcx["data"]["payee"]["id"];
  $payeetype=@$cxcx["data"]["payee"]["type"];
  $externalmerchantname=@$cxcx["data"]["metadata"]["external_merchant_name"];
  $ferdyskuy = explode('aspi_qr_data": "',$cairkan);
  $ramskuy = explode('\"}",',$ferdyskuy[1]);
  $aspiqrdataku = $ramskuy[0];
  //echo $aspiqrdataku;
  $ferdyskuadsy = explode('"checksum": "',$cairkan);
  $ramskudasy = explode('}"',$ferdyskuadsy[1]);
  $ceksumku = $ramskudasy[0];
  //print_r($qr500);
  echo "\n";
  if($amount == ""){
    echo @colored("nevy","Masukkan Nominal Tf Anda : ");
    $amount = trim(fgets(STDIN));
    echo "\n";
  }
  $idempotency = sessionId();
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"amount":{"currency":"IDR","value":'.$amount.'},"channel_type":"DYNAMIC_QR","checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"'.$payeeid.'","type":"'.$payeetype.'"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
  $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
  $aslila = json_decode($payment, true);
  $paymentid=@$aslila["data"]["payment_id"];
  print_r($payment);
  echo "\n";
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $ntonku = json_decode($apolah, true);
  $tokenwal=@$ntonku["data"][0]["token"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  $data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  print_r($dapekdak);
  echo "\n";
  $data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  $fdfda = json_decode($last, true);
  $statudasd=@$fdfda["data"]["estimations"][0]["xp_awarded"];
  echo @colored("nevy","\nBakal dapet ");
  echo @colored("green",$statudasd);
  echo @colored("nevy"," XP\n");
  print_r($dapekdak);
  echo "\n";
  $data = '{"token":"'.$tokenwal.'"}';
  $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
  print_r($putra);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
  print_r($patcik);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
  print_r($patcikwo);
  echo "\n";
  $piuuyu = json_decode($patcikwo, true);
  $dascxxcvb=@$piuuyu["data"]["payment_id"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/payments/".$dascxxcvb."/status", $uniqid, $sesid, $toknew, $id);
  print_r($ntah);
  echo "\n";
  $hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(2);
}
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  echo @color("nevy"," Kurang Puas ? Mau Scan LAgi ? ( y / n ) : ");
  $pilihbarangnya = trim(fgets(STDIN));
  echo "\n";
  if($pilihbarangnya == "y"){
  echo @colored("purple","Oke, Scan Lagi");
  echo "\n";
  goto scanlagidongjonn;
  }
  echo @colored("red","YAH PERCOBAAN IF MU GAGAL");
  goto scanlagidongjonn;
}







































































































































if($case == 4){
  echo "\n";
  echo @color("yellow","   BELI GPC  \n");
  echo @colored("nevy","Masukkan Nomor : ");
$nohp = trim(fgets(STDIN));
echo "\n";
echo @colored("yellow"," Masukkan PIN Anda : ");
$pin = trim(fgets(STDIN));
echo "\n";
  $sesid = sessionId();
  $uniqid = uniqueId();
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","country_code":"+62","magic_link_ref":"","phone_number":"'.$nohp.'"}';
  $regist = post("https://goid.gojekapi.com/goid/login/request", $data, $sesid, $uniqid);
  $cxcx = json_decode($regist, true);
  $otptok=@$cxcx["data"]["otp_token"];
  $sda=@$cxcx["success"];
  echo @colored("purple"," Masukkan OTP : ");
  $otp = trim(fgets(STDIN));
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"'.$otp.'","otp_token":"'.$otptok.'"},"grant_type":"otp","scopes":[]}';
  $dasdas = post("https://goid.gojekapi.com/goid/token", $data, $sesid, $uniqid);
  $cxdasdcx = json_decode($dasdas, true);
  $toknew=@$cxdasdcx["access_token"];
  echo "\n";
  sleep(3);
  $ntah = getcust("https://api.gojekapi.com/gojek/v2/customer", $uniqid, $sesid, $toknew);
  $cxcxcxa = json_decode($ntah, true);
  $id=@$cxcxcxa["customer"]["id"];
  $namany=@$cxcxcxa["customer"]["name"];
  echo @colored("purple"," Hy $namany , Selamat Datang Kembali ^^\n");
  echo "\n";
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  //ini utk scan 500k
  scanlagidongjonny:
  $mil = round(microtime(true) * 1000);
  echo "\n";
  echo @colored("green","Masukkan LINK QR ANDA : ");
  $qr = trim(fgets(STDIN));  
  $link = urlencode($qr);
  echo "\n";
  $katakata = getRequestjing("https://zxing.org/w/decode?u=".$link);
  $ferdyskuy = explode('Decode Succeeded</h1></div><table id="result"><tr><td>Raw text</td><td><pre>',$katakata);
  $ramskuy = explode('</pre>',$ferdyskuy[1]);
  $kodeqr = $ramskuy[0];
  echo $kodeqr;
  /*$data = '------WebKitFormBoundarywpc2Sg0K9UpHi8vh
  Content-Disposition: form-data; name="userfile"; filename=""
  Content-Type: application/octet-stream
  
  
  ------WebKitFormBoundarywpc2Sg0K9UpHi8vh
  Content-Disposition: form-data; name="userfile_url"
  
  '.$qr.'
  ------WebKitFormBoundarywpc2Sg0K9UpHi8vh
  Content-Disposition: form-data; name="requiredfile_userfile"
  
  1
  ------WebKitFormBoundarywpc2Sg0K9UpHi8vh
  Content-Disposition: form-data; name="user_screen_width"
  
  383
  ------WebKitFormBoundarywpc2Sg0K9UpHi8vh--
  ';
  $verify = postqr("https://www.onlinebarcodereader.com/", $data);
      $ferdyskuy = explode("var url = '/FW/result.php?name=",$verify);
      $ramskuy = explode("';",$ferdyskuy[1]);
      $linked = $ramskuy[0];
      echo $linked;
      sleep(2);
  $katakata = getRequestqr("https://www.onlinebarcodereader.com/FW/result.php?name=".$linked."&tscachebusttamp=".$mil);
  echo "\n";
  $ferdyskuy = explode('<textarea id="result-textarea">',$katakata);
  $ramskuy = explode('</textarea>',$ferdyskuy[1]);
  $kodeqr = $ramskuy[0];
  $linkqe = str_replace("\n","", $kodeqr);*/
  $data = '{"data":"'.$kodeqr.'","type":"QR_CODE"}';
  $cairkan = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
  $cxcx = json_decode($cairkan, true);
  $additional=@$cxcx["data"]["additional_data"]["aspiqr_information"]["additional_data_national"];
  $merchancity=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_city"];
  $tcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["transaction_currency_code"];
  $mcid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_id"];
  $qrtt=@$cxcx["data"]["additional_data"]["aspiqr_information"]["qr_transaction_type"];
  $mctr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_criteria"];
  $tlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["terminal_label"];
  $rlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["reference_label"];
  $bnr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["bill_number"];
  $mp=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_pan"];
  $mcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_category_code"];
  $mcname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_name"];
  $isname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_name"];
  $issuerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_id"];
  $acquirername=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_name"];
  $acquirerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_id"];
  $postalcode=@$cxcx["data"]["additional_data"]["aspiqr_information"]["postal_code"];
  $amount=@$cxcx["data"]["amount"]["value"];
  $version=@$cxcx["data"]["checksum"]["version"];
  $valuenya=@$cxcx["data"]["checksum"]["value"];
  $mcridr=@$cxcx["data"]["metadata"]["merchant_cross_reference_id"];
  $aspiqracquirer=@$cxcx["data"]["metadata"]["aspi_qr_acquirer"];
  $aspiqrdata=@$cxcx["data"]["metadata"]["aspi_qr_data"];
  $payeeid=@$cxcx["data"]["payee"]["id"];
  $payeetype=@$cxcx["data"]["payee"]["type"];
  $externalmerchantname=@$cxcx["data"]["metadata"]["external_merchant_name"];
  $paymntid=@$cxcx["data"]["payment_id"];
  $ferdyskuy = explode('aspi_qr_data": "',$cairkan);
  $ramskuy = explode('\"}",',$ferdyskuy[1]);
  $aspiqrdataku = $ramskuy[0];
  //echo $aspiqrdataku;
  $ferdyskuadsy = explode('"checksum": "',$cairkan);
  $ramskudasy = explode('}"',$ferdyskuadsy[1]);
  $ceksumku = $ramskudasy[0];
  //print_r($qr500);
  echo "\n";
  //$idempotency = sessionId();
  //$data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"amount":{"currency":"IDR","value":'.$amount.'},"channel_type":"DYNAMIC_QR","checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"'.$payeeid.'","type":"'.$payeetype.'"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
  //$payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
  //$aslila = json_decode($payment, true);
  //$paymentid=@$aslila["data"]["payment_id"];
  //print_r($payment);
  $pymid = getRequest("https://customer.gopayapi.com/customers/v1/payments/".$paymntid, $uniqid, $sesid, $toknew, $id);
  $ntonmu = json_decode($pymid, true);
  $kodevocer=@$ntonmu["data"]["promotions"][0]["id"];
  echo "\n";
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $ntonku = json_decode($apolah, true);
  $tokenwal=@$ntonku["data"][0]["token"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  /*$data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  print_r($dapekdak);
  echo "\n";
  $data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  $fdfda = json_decode($last, true);
  $statudasd=@$fdfda["data"]["estimations"][0]["xp_awarded"];
  echo @colored("nevy","\nBakal dapet ");
  echo @colored("green",$statudasd);
  echo @colored("nevy"," XP\n");
  print_r($dapekdak);
  echo "\n";*/
  $data = '{"token":"'.$tokenwal.'"}';
  $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
  print_r($putra);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","customer_flow":"qr","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["'.$kodevocer.'"],"channel_type":"DYNAMIC_QR","checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","checksum":"'.$ceksumku.'}","external_merchant_name":"'.$externalmerchantname.'","customer_flow":"qr","aspi_qr_transaction_type":"ON-US","aspi_qr_issuer":"gopay"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymntid."/capture", $data, $sesid, $uniqid, $toknew, $id);
  print_r($patcik);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","customer_flow":"qr","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["'.$kodevocer.'"],"channel_type":"DYNAMIC_QR","checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","checksum":"'.$ceksumku.'}","external_merchant_name":"'.$externalmerchantname.'","customer_flow":"qr","aspi_qr_transaction_type":"ON-US","aspi_qr_issuer":"gopay"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymntid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
  print_r($patcikwo);
  echo "\n";
  $piuuyu = json_decode($patcikwo, true);
  $dascxxcvb=@$piuuyu["data"]["payment_id"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/payments/".$dascxxcvb."/status", $uniqid, $sesid, $toknew, $id);
  print_r($ntah);
  echo "\n";
  $hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(2);
}
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  echo @color("nevy"," Kurang Puas ? Mau Scan LAgi ? ( y / n ) : ");
  $pilihbarangnya = trim(fgets(STDIN));
  echo "\n";
  if($pilihbarangnya == "y"){
  echo @colored("purple","Oke, Scan Lagi");
  echo "\n";
  goto scanlagidongjonny;
  }
  echo @colored("red","YAH PERCOBAAN IF MU GAGAL");
  goto scanlagidongjonny;
}



































































if($case == 5){
  echo "\n";
  echo @color("yellow","  GENERATE BARCODE ALFA  \n");
  echo @colored("nevy","Masukkan Nomor : ");
$nohp = trim(fgets(STDIN));
echo "\n";
  $sesid = sessionId();
  $uniqid = uniqueId();
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","country_code":"+62","magic_link_ref":"","phone_number":"'.$nohp.'"}';
  $regist = post("https://goid.gojekapi.com/goid/login/request", $data, $sesid, $uniqid);
  $cxcx = json_decode($regist, true);
  $otptok=@$cxcx["data"]["otp_token"];
  $sda=@$cxcx["success"];
  echo @colored("purple"," Masukkan OTP : ");
  $otp = trim(fgets(STDIN));
  $data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"'.$otp.'","otp_token":"'.$otptok.'"},"grant_type":"otp","scopes":[]}';
  $dasdas = post("https://goid.gojekapi.com/goid/token", $data, $sesid, $uniqid);
  $cxdasdcx = json_decode($dasdas, true);
  $toknew=@$cxdasdcx["access_token"];
  echo "\n";
  sleep(3);
  $ntah = getcust("https://api.gojekapi.com/gojek/v2/customer", $uniqid, $sesid, $toknew);
  $cxcxcxa = json_decode($ntah, true);
  $id=@$cxcxcxa["customer"]["id"];
  $namany=@$cxcxcxa["customer"]["name"];
  echo @colored("purple"," Hy $namany , Selamat Datang Kembali ^^\n");
  echo "\n";
  echo @colored("yellow"," Masukkan PIN Anda : ");
  $pin = trim(fgets(STDIN));
  echo "\n";
  echo @colored("yellow"," Apakah Sudah Top UP ? ( y / n ) : ");
$yakah = trim(fgets(STDIN));
  tambahdongjon:
  echo "\n\n";
  $cekvoucher = getRequest("https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=200&page=1", $uniqid, $sesid, $toknew, $id);
  $total = fetch_value12($cekvoucher,'"total_vouchers":',',');
  $voucher1 = getStr23('"title":"','",',$cekvoucher,"1");
  $voucher2 = getStr23('"title":"','",',$cekvoucher,"2");
  $voucher3 = getStr23('"title":"','",',$cekvoucher,"3");
  $voucher4 = getStr23('"title":"','",',$cekvoucher,"4");
  $voucher5 = getStr23('"title":"','",',$cekvoucher,"5");
  $voucher6 = getStr23('"title":"','",',$cekvoucher,"6");
  $voucher7 = getStr23('"title":"','",',$cekvoucher,"7");
  $voucher8 = getStr23('"title":"','",',$cekvoucher,"8");
  $voucher9 = getStr23('"title":"','",',$cekvoucher,"9");
  $voucher10 = getStr23('"title":"','",',$cekvoucher,"10");
  $voucher11 = getStr23('"title":"','",',$cekvoucher,"11");
  $voucher12 = getStr23('"title":"','",',$cekvoucher,"12");
  $voucher13 = getStr23('"title":"','",',$cekvoucher,"13");
  echo "\n".@color("green"," Total voucher ".$total." : ");
  echo "\n".@color("yellow","  1. ".$voucher1);
  echo "\n".@color("purple","  2. ".$voucher2);
  echo "\n".@color("white","  3. ".$voucher3);
  echo "\n".@color("green","  4. ".$voucher4);
  echo "\n".@color("red","  5. ".$voucher5);
  echo "\n".@color("blue","  6. ".$voucher6);
  echo "\n".@color("yellow","  7. ".$voucher7);
  echo "\n".@color("nevy","  8. ".$voucher8);
  echo "\n".@color("green","  9. ".$voucher9);
  echo "\n".@color("purple","  10. ".$voucher10);
  echo "\n".@color("red","  11. ".$voucher11);
  echo "\n".@color("blue","  12. ".$voucher12);
  echo "\n".@color("white","  13. ".$voucher13);
  echo"\n\n";
  $orderhistory = getRequest("https://customer.gopayapi.com/v1/users/order-history?country_code=ID", $uniqid, $sesid, $toknew, $id);
  $gatau = json_decode($orderhistory, true);
  $ordersatu=@$gatau["data"]["completed"][0]["items"][0]["status"];
  $descsatu=@$gatau["data"]["completed"][0]["items"][0]["description"];
  $duitsatu=@$gatau["data"]["completed"][0]["items"][0]["amount"]["value"];
  $orderdua=@$gatau["data"]["completed"][0]["items"][1]["status"];
  $descdua=@$gatau["data"]["completed"][0]["items"][1]["description"];
  $duitdua=@$gatau["data"]["completed"][0]["items"][1]["amount"]["value"];
  echo @colored("green","Order History : \n");
  echo @colored("nevy"," - Status ");
  echo @colored("yellow",$ordersatu);
  echo @colored("nevy"," ");
  echo @colored("nevy",$descsatu);
  echo @colored("nevy"," Rp. ");
  echo @colored("nevy",$duitsatu);
  echo "\n";
  echo @colored("nevy"," - Status ");
  echo @colored("yellow",$orderdua);
  echo @colored("nevy"," ");
  echo @colored("nevy",$descdua);
  echo @colored("nevy"," Rp. ");
  echo @colored("nevy",$duitdua);
  echo "\n";
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $data = '';
  $batang = postsend("https://customer.gopayapi.com/v1/cheques", $data, $sesid, $uniqid, $toknew, $id);
  $data = '';
  $batangdua = posttang("https://customer.gopayapi.com/v1/cheques", $data, $pin, $sesid, $uniqid, $toknew, $id);
  $batangku = json_decode($batangdua, true);
  $cequeid=@$batangku["data"]["cheque_id"];
echo shell_exec('xdg-open "https://barcode.tec-it.com/barcode.ashx?data="'.$cequeid.'"&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False"');
echo @color("nevy"," Tambah Kode Barcode Lagi ? ( y / n ) : ");
  $batabgasda = trim(fgets(STDIN));
  echo "\n";
  if($batabgasda == "y"){
  echo @colored("purple","Oke, Tambah Lagi");
  echo "\n";
  sleep(2);
  goto tambahdongjon;
  }
}
goto awal;
habisgana:
echo "\n";
echo @colored("red","Habis Jon Ganti Nomor Lagi\n\n");
$claimed = getRequest("https://api.gojekapi.com/goclub/v1/user-claims?status=CLAIMED", $uniqid, $sesid, $toknew, $id);
$josss = json_decode($claimed, true);
$q=@$josss["data"][0]["benefit"]["details"]["title"];
$w=@$josss["data"][1]["benefit"]["details"]["title"];
$e=@$josss["data"][2]["benefit"]["details"]["title"];
$r=@$josss["data"][3]["benefit"]["details"]["title"];
$t=@$josss["data"][4]["benefit"]["details"]["title"];
$y=@$josss["data"][5]["benefit"]["details"]["title"];
$u=@$josss["data"][6]["benefit"]["details"]["title"];
$i=@$josss["data"][7]["benefit"]["details"]["title"];
$o=@$josss["data"][8]["benefit"]["details"]["title"];
$p=@$josss["data"][9]["benefit"]["details"]["title"];
$a=@$josss["data"][10]["benefit"]["details"]["title"];
$s=@$josss["data"][11]["benefit"]["details"]["title"];
$d=@$josss["data"][12]["benefit"]["details"]["title"];
echo @colored("yellow","Detail Kupon Mu : \n");
echo @colored("nevy"," 1 . $q\n");
echo @colored("red"," 2 . $w\n");
echo @colored("blue"," 3 . $e\n");
echo @colored("green"," 4 . $r\n");
echo @colored("purple"," 5 . $t\n");
echo @colored("yellow"," 6 . $u\n");
echo @colored("blue"," 7 . $i\n");
echo @colored("red"," 8 . $o\n");
echo @colored("nevy"," 9 . $p\n");
echo @colored("green"," 10. $a\n");
echo @colored("purple"," 11. $s\n");
echo @colored("red"," 12. $d\n");
echo @colored("yellow"," 13. $q\n\n");
echo @colored("green","Selesai , Apakah Mau Cairin Duit? ( y / n ) : ");
echo "\n";
$pilinjoku = trim(fgets(STDIN));
echo "\n";
if($pilinjoku == "y"){
    goto cairkandongjon;
}
goto awal;
cairkandongjon:
echo "\n";
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  //ini utk scan 500k
  scanlagidongjonnycage:
  echo @colored("nevy","Masukkan LINK QR ANDA : ");
  $linkqrjon = trim(fgets(STDIN));
  $data = '{"data":"'.$linkqrjon.'","type":"QR_CODE"}';
  $cairkan = postlogin("https://customer.gopayapi.com/v1/explore", $data, $sesid, $uniqid, $toknew, $id);
  $cxcx = json_decode($cairkan, true);
  $additional=@$cxcx["data"]["additional_data"]["aspiqr_information"]["additional_data_national"];
  $merchancity=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_city"];
  $tcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["transaction_currency_code"];
  $mcid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_id"];
  $qrtt=@$cxcx["data"]["additional_data"]["aspiqr_information"]["qr_transaction_type"];
  $mctr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_criteria"];
  $tlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["terminal_label"];
  $rlbl=@$cxcx["data"]["additional_data"]["aspiqr_information"]["reference_label"];
  $bnr=@$cxcx["data"]["additional_data"]["aspiqr_information"]["bill_number"];
  $mp=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_pan"];
  $mcc=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_category_code"];
  $mcname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["merchant_name"];
  $isname=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_name"];
  $issuerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["issuer_id"];
  $acquirername=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_name"];
  $acquirerid=@$cxcx["data"]["additional_data"]["aspiqr_information"]["acquirer_id"];
  $postalcode=@$cxcx["data"]["additional_data"]["aspiqr_information"]["postal_code"];
  $amount=@$cxcx["data"]["amount"]["value"];
  $version=@$cxcx["data"]["checksum"]["version"];
  $valuenya=@$cxcx["data"]["checksum"]["value"];
  $mcridr=@$cxcx["data"]["metadata"]["merchant_cross_reference_id"];
  $aspiqracquirer=@$cxcx["data"]["metadata"]["aspi_qr_acquirer"];
  $aspiqrdata=@$cxcx["data"]["metadata"]["aspi_qr_data"];
  $payeeid=@$cxcx["data"]["payee"]["id"];
  $payeetype=@$cxcx["data"]["payee"]["type"];
  $externalmerchantname=@$cxcx["data"]["metadata"]["external_merchant_name"];
  $ferdyskuy = explode('aspi_qr_data": "',$cairkan);
  $ramskuy = explode('\"}",',$ferdyskuy[1]);
  $aspiqrdataku = $ramskuy[0];
  //echo $aspiqrdataku;
  $ferdyskuadsy = explode('"checksum": "',$cairkan);
  $ramskudasy = explode('}"',$ferdyskuadsy[1]);
  $ceksumku = $ramskudasy[0];
  //print_r($qr500);
  echo "\n";
if($amount == ""){
  echo @colored("nevy","Masukkan Nominal Tf Anda : ");
  $amount = trim(fgets(STDIN));
  echo "\n";
}
  $idempotency = sessionId();
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"amount":{"currency":"IDR","value":'.$amount.'},"channel_type":"DYNAMIC_QR","checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"fetch_promotion_details":true,"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payee":{"id":"'.$payeeid.'","type":"'.$payeetype.'"},"payment_intent":"DYNAMIC_QR_OFF_US"}';
  $payment = postpay("https://customer.gopayapi.com/customers/v1/payments", $data, $idempotency, $sesid, $uniqid, $toknew, $id);
  $aslila = json_decode($payment, true);
  $paymentid=@$aslila["data"]["payment_id"];
  print_r($payment);
  echo "\n";
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  $apolah = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $ntonku = json_decode($apolah, true);
  $tokenwal=@$ntonku["data"][0]["token"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/customer/payment-options?intent=DYNAMIC_QR_OFF_US", $uniqid, $sesid, $toknew, $id);
  $data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $dapekdak = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  print_r($dapekdak);
  echo "\n";
  $data = '{"transactions":[{"net_spend":'.$amount.',"payment_type":"GOPAY_WALLET","service_type":99}]}';
  $last = postlogin("https://api.gojekapi.com/goclub/v1/estimate-xp", $data, $sesid, $uniqid, $toknew, $id);
  $fdfda = json_decode($last, true);
  $statudasd=@$fdfda["data"]["estimations"][0]["xp_awarded"];
  echo @colored("nevy","\nBakal dapet ");
  echo @colored("green",$statudasd);
  echo @colored("nevy"," XP\n");
  print_r($dapekdak);
  echo "\n";
  $data = '{"token":"'.$tokenwal.'"}';
  $putra = postput("https://customer.gopayapi.com/v1/customer/payment-options/settings/last-used", $data, $sesid, $uniqid, $toknew, $id);
  print_r($putra);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcik = postpatch("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $sesid, $uniqid, $toknew, $id);
  print_r($patcik);
  echo "\n";
  $data = '{"additional_data":{"merchant_order_id":"","aspiqr_information":{"additional_data_national":"'.$additional.'","merchant_city":"'.$merchancity.'","retrieval_reference_number":"","transaction_currency_code":"'.$tcc.'","merchant_id":"'.$mcid.'","purpose_of_transaction":"","store_label":"","terminal_label":"'.$tlbl.'","bill_number":"'.$bnr.'","qr_transaction_type":"'.$qrtt.'","loyalty_number":"","merchant_criteria":"'.$mctr.'","reference_label":"'.$rlbl.'","merchant_pan":"'.$mp.'","additional_consumer_data_request":"","merchant_category_code":"'.$mcc.'","trx_fee_amount":0.0,"merchant_name":"'.$mcname.'","issuer_name":"'.$isname.'","issuer_id":"'.$issuerid.'","acquirer_name":"'.$acquirername.'","country_code":"ID","acquirer_id":"'.$acquirerid.'","customer_label":"","postal_code":"'.$postalcode.'","mobile_number":""}},"applied_promo_code":["NO_PROMO_APPLIED"],"checksum":{"version":"'.$version.'","value":"'.$valuenya.'"},"metadata":{"merchant_cross_reference_id":"'.$mcridr.'","payment_widget_intent":"DYNAMIC_QR_OFF_US","aspi_qr_acquirer":"'.$aspiqracquirer.'","aspi_qr_data":"'.$aspiqrdataku.'\"}","external_merchant_name":"'.$externalmerchantname.'","checksum":"'.$ceksumku.'}","channel_type":"DYNAMIC_QR","aspi_qr_transaction_type":"OFF-US-GOPAY-ISSUER","aspi_qr_issuer":"gopay","tags":"{ \"service_type\": \"GOPAY_OFFLINE\" }"},"order_signature":{"reason":"","partner_id":"","partner_name":"","source":"","channel_type":"","transaction_type":"","customer_fulfillment_type":""},"payment_token":"'.$tokenwal.'"}';
  $patcikwo = postpatchwo("https://customer.gopayapi.com/customers/v1/payments/".$paymentid."/capture", $data, $pin, $sesid, $uniqid, $toknew, $id);
  print_r($patcikwo);
  echo "\n";
  $piuuyu = json_decode($patcikwo, true);
  $dascxxcvb=@$piuuyu["data"]["payment_id"];
  $ntah = getRequest("https://customer.gopayapi.com/v1/payments/".$dascxxcvb."/status", $uniqid, $sesid, $toknew, $id);
  print_r($ntah);
  echo "\n";
  $hem="Proses Scan";
  for($time=15;$time>-1;$time--){
echo "\r                             \r";
echo color ("yellow","\r".$hem." Tunggu ".$time." Detik ");
     if($time==15 or$time==12 or$time==9 or$time==6 or$time==3){
echo color("yellow","•");
    }
    if($time==14 or$time==11 or$time==8 or$time==5 or$time==2){
echo color("yellow","••");
   }
   if($time==13 or$time==10 or$time==7 or$time==4 or$time==1){
echo color("yellow","•••");
  }
  if($time==0){
echo color("yellow","••••");
echo "\n";
 }
 sleep(2);
}
  $balance = getRequest("https://customer.gopayapi.com/v1/payment-options/balances", $uniqid, $sesid, $toknew, $id);
  $duit = json_decode($balance, true);
  $duitmu=@$duit["data"][0]["balance"]["value"];
  echo @colored("purple","Saldo Anda : Rp ");
  echo @colored("purple",$duitmu);
  echo "\n";
  $landing = getRequest("https://api.gojekapi.com/goclub/v1/landing-page", $uniqid, $sesid, $toknew, $id);
  $expnya = json_decode($landing, true);
  $expmu=@$expnya["data"]["current_tier"]["member_xp"];
  echo @colored("yellow"," EXP mu Sekarang Adalah : ");
  echo @colored("green",$expmu);
  echo "\n";
  echo @color("nevy"," Kurang Puas ? Mau Scan LAgi ? ( y / n ) : ");
  $pilihbarangnya = trim(fgets(STDIN));
  echo "\n";
  if($pilihbarangnya == "y"){
  echo @colored("purple","Oke, Scan Lagi");
  echo "\n";
  goto scanlagidongjonnycage;
  }
  goto awal;
  
  
  


  function getRequestjing($url)
  {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
         $header[]='User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.4; id-id; NA Build/NA) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.9.8-g';
         $header[]='accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
   curl_setopt($ch, CURLOPT_AUTOREFERER, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
   curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
   curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
   curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
   $response = curl_exec($ch);
   $httpcode = curl_getinfo($ch);
  if (!$httpcode)
      return false;
  else {
      $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
      $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
  }
  $json = json_decode($body, true);
  print_r ($json);
  return $response;
}
 function getStr01($a,$b,$c){
	$a = @explode($a,$c)[1];
	return @explode($b,$a)[0];
}
function getStr23($a,$b,$c,$d){
        $a = @explode($a,$c)[$d];
        return @explode($b,$a)[0];
}
function fetch_value12($str,$find_start,$find_end) {
	$start = @strpos($str,$find_start);
	if ($start === false) {
		return "";
	}
	$length = strlen($find_start);
	$end    = strpos(substr($str,$start +$length),$find_end);
	return trim(substr($str,$start +$length,$end));
}
function postbatang($url, $data=null)
{
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);
       $header[]='x-requested-with: XMLHttpRequest';
       $header[]='user-agent: Mozilla/5.0 (Linux; U; Android 5.1; id-id; Sm-a9000 Build/LMY47I) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.9.8-g';
       $header[]='content-type: application/x-www-form-urlencoded; charset=UTF-8';
 curl_setopt($ch, CURLOPT_AUTOREFERER, true);
 curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
 curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
 curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
 curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
 curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
 $response = curl_exec($ch);
 $httpcode = curl_getinfo($ch);
if (!$httpcode)
    return false;
else {
    $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
}
$json = json_decode($body, true);
print_r ($json);
return $response;
}
function posttang($url, $data=null, $pin, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='pin: '.$pin;
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequestqr($url)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
           $header[]='User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.4; id-id; NA Build/NA) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.9.8-g';
           $header[]='Connection: Keep-Alive';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postqr($url, $data=null)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='Connection: keep-alive';
           $header[]='Content-Type: multipart/form-data; boundary=----WebKitFormBoundarywpc2Sg0K9UpHi8vh';
           $header[]='User-Agent: Mozilla/5.0 (Linux; U; Android 4.0.4; id-id; NA Build/NA) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/71.0.3578.141 Mobile Safari/537.36 XiaoMi/MiuiBrowser/10.9.8-g';
           $header[]='Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
  function getcust($url, $uniqid, $sesid, $toknew)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $header[]='x-platform: Android';
      $header[]='x-uniqueid: '.$uniqid;
      $header[]='x-appversion: 4.23.2';
      $header[]='x-appid: com.gojek.app';
      $header[]='accept: application/json';
      $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
      $header[]='x-session-id: '.$sesid;
      $header[]='authorization: Bearer '.$toknew;
      $header[]='x-user-type: customer';
      $header[]='x-deviceos: Android,5.1';
      $header[]='user-uuid: ';
      $header[]='x-devicetoken: ';
      $header[]='x-phonemake: Samsung';
      $header[]='x-pushtokentype: FCM';
      $header[]='x-phonemodel: samsung,Gt-p3100';
      $header[]='accept-language: id';
      $header[]='x-user-locale: id';
      $header[]='gojek-country-code: ID';
      $header[]='content-type: application/json; charset=UTF-8';
      $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postput($url, $data=null, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='d1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}

function postpatchwo($url, $data=null, $pin, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='pin: '.$pin;
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}


function postpatchklem($url, $data=null, $uniqid, $sesid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postpatch($url, $data=null, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='pin: ';
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postpay($url, $data=null, $idempotency, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='idempotency-key: '.$idempotency;
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postpin($url, $data=null, $otpsetpin, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='otp: '.$otpsetpin;
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postsend($url, $data=null, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='Connection: Keep-Alive';
           $header[]='content-type: application/json; charset=UTF-8';           
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postlogin($url, $data=null, $sesid, $uniqid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$toknew;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='gojek-country-code: ID';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function getRequest($url, $uniqid, $sesid, $toknew, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      $header[]='x-platform: Android';
      $header[]='x-uniqueid: '.$uniqid;
      $header[]='x-appversion: 4.23.2';
      $header[]='x-appid: com.gojek.app';
      $header[]='accept: application/json';
      $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
      $header[]='x-session-id: '.$sesid;
      $header[]='authorization: Bearer '.$toknew;
      $header[]='x-user-type: customer';
      $header[]='x-deviceos: Android,5.1';
      $header[]='user-uuid: '.$id;
      $header[]='x-devicetoken: ';
      $header[]='x-phonemake: Samsung';
      $header[]='x-pushtokentype: FCM';
      $header[]='x-phonemodel: samsung,Gt-p3100';
      $header[]='accept-language: id';
      $header[]='x-user-locale: id';
      $header[]='gojek-country-code: ID';
      $header[]='content-type: application/json; charset=UTF-8';
      $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function postlog($url, $data=null, $sesid, $uniqid, $tokold, $id)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer '.$tokold;
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: '.$id;
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function sessionId()
{
      return sprintf(
         '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0x0fff) | 0x4000,
         mt_rand(0, 0x3fff) | 0x8000,
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff)
      );
}
function uniqueId()
{
      return sprintf(
         '%04x%04x%04x%04x',
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0x0fff) | 0x4000,
         mt_rand(0, 0x3fff) | 0x8000,
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff),
         mt_rand(0, 0xffff)
      );
}
function name()
    {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    $ex = curl_exec($ch);
    // $rand = json_decode($rnd_get, true);
    preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
    return $name[2][mt_rand(0, 14) ];
    }

function post($url, $data=null, $sesid, $uniqid)
    {
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_POST, 1);
           $header[]='x-platform: Android';
           $header[]='x-uniqueid: '.$uniqid;
           $header[]='x-appversion: 4.23.2';
           $header[]='x-appid: com.gojek.app';
           $header[]='accept: application/json';
           $header[]='D1: 47:1D:6B:6F:70:38:E3:70:56:15:75:13:71:49:90:2F:CC:82:9F:0E:E5:D8:D2:89:A9:AD:EF:98:C1:D3:43:D5';
           $header[]='x-session-id: '.$sesid;
           $header[]='authorization: Bearer ';
           $header[]='x-user-type: customer';
           $header[]='x-deviceos: Android,5.1';
           $header[]='user-uuid: ';
           $header[]='x-devicetoken: ';
           $header[]='x-phonemake: Samsung';
           $header[]='x-pushtokentype: FCM';
           $header[]='x-phonemodel: samsung,Gt-p3100';
           $header[]='accept-language: id';
           $header[]='x-user-locale: id';
           $header[]='content-type: application/json; charset=UTF-8';
           $header[]='user-agent: okhttp/3.12.13';
     curl_setopt($ch, CURLOPT_AUTOREFERER, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_COOKIEJAR, "klik.txt");
     curl_setopt($ch, CURLOPT_COOKIEFILE, "klik.txt");
     $response = curl_exec($ch);
     $httpcode = curl_getinfo($ch);
    if (!$httpcode)
        return false;
    else {
        $header = substr($response, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
        $body   = substr($response, curl_getinfo($ch, CURLINFO_HEADER_SIZE));
    }
    $json = json_decode($body, true);
    print_r ($json);
    return $response;
}
function colored($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
function color($color = "default" , $text)
    {
        $arrayColor = array(
            'grey'      => '1;30',
            'red'       => '1;31',
            'green'     => '1;32',
            'yellow'    => '1;33',
            'blue'      => '1;34',
            'purple'    => '1;35',
            'nevy'      => '1;36',
            'white'     => '1;0',
        );  
        return "\033[".$arrayColor[$color]."m".$text."\033[0m";
    }
    function d1($v28, $w29)
{
    $s2a = fopen($v28, "a");
    fputs($s2a, $w29);
    fclose($s2a);
}
function save($filename, $content)
{
    $save = fopen($filename, "a");
    fputs($save, $content);
    fclose($save);
}
    
?>
