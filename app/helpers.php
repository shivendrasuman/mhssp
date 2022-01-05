<?php
  //use Illuminate\Foundation\Auth\AuthenticatesUsers;
  use Illuminate\Support\Facades\Auth;

  function printdata($data){
  	echo "<pre>";
  	print_r($data);
  	die();
  }

function changeDateFormate($date,$date_format){
    //return \Carbon\Carbon::createFromFormat('Y-m-d', $date)->format($date_format);    
	return date($date_format);
}
  
   
function productImagePath($image_name)
{
    return public_path('images/products/'.$image_name);
}
function currentDateTime(){
	return date("Y-m-d h:i:s");
}

function isAdminlogin(){
	   $user = Auth::user();
	   $UserID = $user->id;
	   if(isset($UserID) && !empty($UserID)){
         return  $UserID;
	   }else{
          return redirect()->route('login');
	   }
}

function yesnotext($data){
	$ynArray = array("0"=>"No", "1" => "Yes");
	return $ynArray[$data];
}

function activeinactivetext($data){
	$ynArray = array("0"=>"Inactive", "1" => "Active");
	return $ynArray[$data];
}
function fileorurl($data){
	$ynArray = array("1"=>"URL", "2" => "File");
	return $ynArray[$data];
}

function fileurl($file)
{
    return public_path('Notification/Tender/'.$file);
}

/**
 * Create slug
 */
function create_slug($string, $delimeter = '-') {
    if (!empty($string)) {
        $string = str_replace(' ', '-', trim($string)); // Replaces all spaces with hyphens.
        // $string = preg_replace('/[^A-Za-z0-9\-\&]/', '', $string); // Removes special chars.
        $string = preg_replace('/[.,?~!@#$%^&*()=+_]/', '', $string); // Removes special chars.
        return strtolower(preg_replace('/-+/', $delimeter, $string)); // Replaces multiple hyphens with single one.
    }
}

/**
 * curl url method
 * @param url
 * @return array 
 */
function sendsmsbytwillio($To, $message) {
    $from = "+18563910626";
    $id = "ACd098b547033cde53e9c42c7bb6f6f3cf";
    $token = "c4b371a5f0c6fb67fffa6e2357c0df5c";
    $y = exec("curl 'https://api.twilio.com/2010-04-01/Accounts/$id/Messages.json' -X POST \--data-urlencode 'To=+$To' \--data-urlencode 'From=+$from' \--data-urlencode 'Body=$message' \-u $id:$token");
    //echo json_encode($y);
    return $y;
}


/**
 * create otp number 
 * @param null
 * @return int number 
 */
function createOtp() {
    return rand(123456, 678901);
}

function strreplace($string)
{
    $string = str_replace(' ', '-', trim($string)); // Replaces all spaces with hyphens.
    $string = preg_replace('/[.,?~!@#$%^&*()=+_]/', '', $string); // Removes special chars.
    return $string;
}