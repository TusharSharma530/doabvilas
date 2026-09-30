<?php session_start();
error_reporting(0);
define('BASE_PATH',"//localhost/doabvilas/");
define('DB_HOST', 'localhost');
define('DB_NAME','doabvillas');
define('DB_USER','root');
define('DB_PASSWORD','');
// session_destroy();
date_default_timezone_set("Asia/Kolkata"); 
$path = BASE_PATH;
$con = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception; 
//Load Composer's autoloader
require dirname(__DIR__) . '/PHPMailer/vendor/autoload.php';


function SendEmailer($senderemail,$subject,$bodydata, $filePath=null){

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    // $mail->isSMTP();                               //Send using SMTP
    $mail->Host       = 'mail.kgimeerut.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'noreply@kgimeerut.com';                     //SMTP username
    $mail->Password   = '!Pb!CX&!+K?J';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('noreply@kgimeerut.com', 'Krishna Institute of Management');
    $mail->addAddress("$senderemail", '');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
   // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    if($filePath!= null){
    $mail->addAttachment($filePath);         //Add attachments
        
    }
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
   
    $mail->Body    = "$bodydata";
    $mail->AltBody = '';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}



// $senderemail = "promotionparadise42@gmail.com";
// $subject = "New Enquiry for Job";
// $bodydata = "Name : Testing";
// echo SendEmailer($senderemail,$subject,$bodydata, null);

// Check connection
if (mysqli_connect_errno()){ echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

  // Actual Link 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . ($_SERVER['HTTP_HOST'] ?? '') . ($_SERVER['REQUEST_URI'] ?? '');

$query_str = parse_url($actual_link, PHP_URL_QUERY);
$query_params = [];
parse_str($query_str ?? '', $query_params);
$getparam = $query_params;


// SEO FRIENDLY URL
function seo_friendly_url($string){
     $string = str_replace(array('[\', \']'), '', $string);
     $string = preg_replace('/\[.*\]/U', '', $string);
     $string = preg_replace(array('/[^a-z0-9]/i', '/[-]+/') , '-', $string); 
     return strtolower(trim($string, '-'));
}

// FUNCTION FOR MOBILE 
function isMobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function createImgWebp($fileinputname, $imagepath){
    $filename = $_FILES[$fileinputname]['name'];
    $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
    $tmp = $_FILES[$fileinputname]['tmp_name'];
    if(!isset($_FILES[$fileinputname]['error']) || $_FILES[$fileinputname]['error'] != UPLOAD_ERR_OK || !is_uploaded_file($tmp)){
        return "";
    }
    $targetdir = dirname(__DIR__, 2)."/branch/assets/".$imagepath."/";
    if(!is_dir($targetdir)){
        mkdir($targetdir, 0777, true);
    }
    $file1 = $fileinputname . time().'.'.$ext;
    if($ext=='webp' || $ext=='png' || $ext=='pdf' || $ext=='avif' || $ext=='mp4' || $ext=='webm' || $ext=='mov' || $ext=='avi' || $ext=='mkv' || $ext=='3gp'){
        $filenewname = $file1;
        move_uploaded_file($tmp, $targetdir.$file1);
    }else{
        $filenewname = $fileinputname . time().'.webp';
        move_uploaded_file($tmp, $targetdir.$file1);

        $img = @imagecreatefromstring(file_get_contents($targetdir.$file1));
        if($img !== false){
            imagepalettetotruecolor($img);
            imagealphablending($img, true);
            imagesavealpha($img, true);
            imagewebp($img, $targetdir . $filenewname, 80);
            imagedestroy($img);
            unlink($targetdir.$file1);
        }else{
            $filenewname = $file1;
        }
    }
    if(!file_exists($targetdir.$filenewname)){
        return "";
    }
    return "branch/assets/".$imagepath."/".$filenewname;
}
// $file_type = exif_imagetype($file);
//exif_imagetype($file);
// 1    IMAGETYPE_GIF
// 2    IMAGETYPE_JPEG
// 3    IMAGETYPE_PNG
// 6    IMAGETYPE_BMP
// 15   IMAGETYPE_WBMP
// 16   IMAGETYPE_XBM

/*** DEFAULT DATA LOAD ***/
$sqlsetting = mysqli_query($con,"SELECT * FROM `settings`");
$rwlinks = mysqli_fetch_array($sqlsetting);
$websitename = $rwlinks['web_name'];
$headercenterline = $rwlinks['headercenterline'];
$emailid = $rwlinks['email_id'];
$alternateemailid = $rwlinks['alternate_email_id'];
$contactno = $rwlinks['contact_no'];
$alternateno = $rwlinks['alternate_no'];
$whatsapp = $rwlinks['whatsapp_no'];
$address = $rwlinks['address'];
$youtubeembedcode = $rwlinks['youtubelink'];
$facebook = $rwlinks['facebook'];
$instagram = $rwlinks['instagram'];
$youtube = $rwlinks['youtube'];
$linkedin = $rwlinks['linkedin'];
$twitter = $rwlinks['twitter'];
$mapiframe = $rwlinks['map_iframe'];
$googletag = $rwlinks['googletag'];
$footerdesc = $rwlinks['footerdesc'];
$metatitle = $rwlinks['meta_title'];
$metakeywords = $rwlinks['meta_keywords'];
$metadesc = $rwlinks['meta_desc'];
$logo = $rwlinks['logo'];
$time = $rwlinks['reception_time'];


// ===== site config value with fallback ======
function __cfg($value, $fallback = ''){
	$value = trim((string)$value);
	return ($value === '') ? $fallback : $value;
}

if(!defined('SITE_CONFIG_LOADED')){
	define('SITE_CONFIG_LOADED', true);

	// Site Info
	define('SITE_NAME', __cfg($websitename));
	define('SITE_TAGline', __cfg($headercenterline));
	define('SITE_EMAIL', __cfg($emailid));
    define('RECEPTION_TIME', __cfg($time));
	define('SITE_PHONE', __cfg($contactno));
    define('SITE_ALTERNATE_PHONE', __cfg($alternateno));
	define('SITE_WHATSAPP', preg_replace('/[^0-9]/', '', __cfg($whatsapp)));
	define('SITE_ADDRESS', __cfg($address));
	define('SITE_LOGO', $logo);
	define('SITE_FOOTER_DESC', $footerdesc);
	define('SITE_MAP_IFRAME', $mapiframe);
	define('SITE_GOOGLETAG', $googletag);
	define('SITE_META_TITLE', __cfg($metatitle, SITE_NAME));
	define('SITE_META_KEYWORDS', $metakeywords);
	define('SITE_META_DESC', $metadesc);

	// Social Media Links
	define('SOCIAL_FACEBOOK', __cfg($facebook));
	define('SOCIAL_INSTAGRAM', __cfg($instagram));
	define('SOCIAL_YOUTUBE', __cfg($youtube));
	define('SOCIAL_TWITTER', __cfg($twitter));
	define('SOCIAL_LINKEDIN', __cfg($linkedin));

	// // Additional Details (no column in `settings` table - static)
	// define('SITE_URL', 'https://www.doabvilas.com');
	// define('SITE_ADDRESS_LINE1', 'Doab Vilas');
	// define('SITE_ADDRESS_LINE2', 'Meerut Bypass Rd, Sector - 3');
	// define('SITE_CITY', 'Meerut');
	// define('SITE_STATE', 'Uttar Pradesh');
	// define('SITE_PINCODE', '250103');
	// define('SITE_COUNTRY', 'India');
	define('SITE_GOOGLE_MAP', $mapiframe);

	// Asset Paths
	define('ASSETS_URL', 'assets/');
	define('CSS_URL', ASSETS_URL . 'css/');
	define('JS_URL', ASSETS_URL . 'js/');
	define('IMAGES_URL', ASSETS_URL . 'images/');
	define('FONTS_URL', ASSETS_URL . 'fonts/');
}

if(!function_exists('getCurrentPage')){
	function getCurrentPage() {
		$page = basename($_SERVER['PHP_SELF'], '.php');
		return $page === 'index' ? 'home' : $page;
	}
}

if(!function_exists('imageUrl')){
	function imageUrl($folder, $filename) {
		return IMAGES_URL . $folder . '/' . $filename;
	}
}



// ===== get state name ====== 
function __getStateName($con, $id){
    $sql = mysqli_query($con, "SELECT * FROM `state` WHERE `id` = $id");
    $rw = mysqli_fetch_array($sql);
    return $rw['state'];
}

// ===== encrypt data ========
function encryptIt($q) {
    $secret_key = 'kgimeerut@)*(@)Ena234!212IOU';
    $secret_iv = '8';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    $output = base64_encode( openssl_encrypt( $q, $encrypt_method, $key, 0, $iv ) );
    return $output;
}       


// ===== decrypt data ========
function decryptIt($q) {
    $secret_key = 'kgimeerut@)*(@)Ena234!212IOU';
    $secret_iv = '8';
    $output = false;
    $encrypt_method = "AES-256-CBC";
    $key = hash( 'sha256', $secret_key );
    $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
    $output = openssl_decrypt( base64_decode( $q ), $encrypt_method, $key, 0, $iv );
    return $output;
}   


// ===== get indian currency ========
function getIndianCurrency(float $number){
$no = floor($number);
$decimal = round($number - $no, 2) * 100;
$decimal_part = $decimal;
$hundred = null;
$hundreds = null;
$digits_length = strlen($no);
$decimal_length = strlen($decimal);
$i = 0;
$str = array();
$str2 = array();
$words = array(0 => '', 1 => 'one', 2 => 'two',
    3 => 'three', 4 => 'four', 5 => 'five', 6 => 'six',
    7 => 'seven', 8 => 'eight', 9 => 'nine',
    10 => 'ten', 11 => 'eleven', 12 => 'twelve',
    13 => 'thirteen', 14 => 'fourteen', 15 => 'fifteen',
    16 => 'sixteen', 17 => 'seventeen', 18 => 'eighteen',
    19 => 'nineteen', 20 => 'twenty', 30 => 'thirty',
    40 => 'forty', 50 => 'fifty', 60 => 'sixty',
    70 => 'seventy', 80 => 'eighty', 90 => 'ninety');
$digits = array('', 'hundred','thousand','lakh', 'crore');

while( $i < $digits_length ) {
    $divider = ($i == 2) ? 10 : 100;
    $number = floor($no % $divider);
    $no = floor($no / $divider);
    $i += $divider == 10 ? 1 : 2;
    if ($number) {
        $plural = (($counter = count($str)) && $number > 9) ? 's' : null;
        $hundred = ($counter == 1 && $str[0]) ? '  ' : null;
        $str [] = ($number < 21) ? $words[$number].' '. $digits[$counter]. $plural.' '.$hundred:$words[floor($number / 10) * 10].' '.$words[$number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
    } else $str[] = null;
}

$d = 0;
while( $d < $decimal_length ) {
    $divider = ($d == 2) ? 10 : 100;
    $decimal_number = floor($decimal % $divider);
    $decimal = floor($decimal / $divider);
    $d += $divider == 10 ? 1 : 2;
    if ($decimal_number) {
        $plurals = (($counter = count($str2)) && $decimal_number > 9) ? 's' : null;
        $hundreds = ($counter == 1 && $str2[0]) ? ' and ' : null;
        @$str2 [] = ($decimal_number < 21) ? $words[$decimal_number].' '. $digits[$decimal_number]. $plural.' '.$hundred:$words[floor($decimal_number / 10) * 10].' '.$words[$decimal_number % 10]. ' '.$digits[$counter].$plural.' '.$hundred;
    } else $str2[] = null;
}

$Rupees = implode('', array_reverse($str));
$paise = implode('', array_reverse($str2));
$paise = ($decimal_part > 0) ? $paise . ' Paise' : '';

if($decimal_part > 0){
    $txt = 'and '.$paise;
}else{
    $txt = '';
    
}


return ($Rupees ? $Rupees . 'Rupees ' : '') . $txt;
}




// echo getIndianCurrency(25201);


function __getJobTitle($con, $id){
$sql = mysqli_query($con, "SELECT * FROM `jobs` WHERE `status`=1 AND `id`=$id");
$rw = mysqli_fetch_object($sql);
return $rw->title;
}






?>
 