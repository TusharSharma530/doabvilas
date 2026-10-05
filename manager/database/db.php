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


function SendEmailer($senderemail, $subject, $bodydata, $filePath = null)
{
    $mail = new PHPMailer(true);

    try {

        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'tusharsharma6868@gmail.com';
        $mail->Password   = 'kouf rxzp oxxi rnte';

        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom(
            'tusharsharma6868@gmail.com',
            SITE_NAME
        );

        $mail->addAddress($senderemail);

        if ($filePath !== null && file_exists($filePath)) {
            $mail->addAttachment($filePath);
        }

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $bodydata;
        $mail->AltBody = strip_tags($bodydata);

        $mail->send();

        return true;

    } catch (Exception $e) {

        error_log('PHPMailer Error: ' . $mail->ErrorInfo);

        return false;
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
	define('SITE_ALTERNATE_EMAIL', __cfg($alternateemailid));
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

// DYNAMIC ROUTING HELPERS

$GLOBALS['ROUTE_MAP'] = array(
	'home'         => 'index',
	'about-us'     => 'about',
	'rooms-suites' => 'rooms',
	'dining'       => 'dining',
	'halls'        => 'weddings',
	'events'       => 'upcoming-events',
	'gallery'      => 'gallery',
	'contact-us'   => 'contact',
	'booking'      => 'booking',
);

// Slug -> view file name (no .php). Unknown slugs pass through
// untouched so a page can also be reached by its file name.
if(!function_exists('routeSlugToFile')){
	function routeSlugToFile($slug) {
		$slug = strtolower(trim((string)$slug));
		$map  = $GLOBALS['ROUTE_MAP'];
		return isset($map[$slug]) ? $map[$slug] : $slug;
	}
}

// View file name -> canonical slug, used for the active nav state
// so that both /about-us and the legacy about.php highlight the
// same menu item.
if(!function_exists('routeFileToSlug')){
	function routeFileToSlug($file) {
		$file = basename((string)$file, '.php');
		if($file === 'index'){ return 'home'; }
		$slug = array_search($file, $GLOBALS['ROUTE_MAP'], true);
		return $slug === false ? $file : $slug;
	}
}

// Builds a clean URL. Echo this instead of hardcoding hrefs.
if(!function_exists('pageUrl')){
	function pageUrl($slug = '') {
		return BASE_PATH . ltrim((string)$slug, '/');
	}
}

// The slug of whatever is being rendered right now. The front
// controller sets $currentSlug; otherwise fall back to the file
// being requested, which keeps legacy .php links working.
if(!function_exists('getCurrentSlug')){
	function getCurrentSlug() {
		if(!empty($GLOBALS['currentSlug'])){ return $GLOBALS['currentSlug']; }
		return routeFileToSlug(basename($_SERVER['PHP_SELF'], '.php'));
	}
}

if(!function_exists('getCurrentPage')){
	function getCurrentPage() {
		return getCurrentSlug();
	}
}


//if page meta title not exist
if(!function_exists('pageMeta')){
	function pageMeta() {
		static $cache = null;
		if($cache !== null){ return $cache; }

		$cache = array('title' => '', 'desc' => '');

		$slug = getCurrentSlug();
		if($slug === '' || $slug === 'home'){ return $cache; }

		global $con;
		$sql = mysqli_query($con, "SELECT `c_name`, `meta_title`, `meta_desc`
			FROM `category`
			WHERE `c_url` = '".mysqli_real_escape_string($con, $slug)."'
			AND `c_type` = 1 AND `status` = 1 LIMIT 1");

		if($sql && mysqli_num_rows($sql)){
			$rw   = mysqli_fetch_assoc($sql);
			$name = trim((string)$rw['c_name']);
			// Category names are stored in caps (ROOMS & SUITES).
			$cache['title'] = trim((string)$rw['meta_title']) !== ''
				? trim($rw['meta_title'])
				: ($name !== '' ? ucwords(strtolower($name)) : '');
			$cache['desc'] = trim((string)$rw['meta_desc']);
		}

		return $cache;
	}
}

if(!function_exists('handleRoute')){
	function handleRoute() {
		global $con;
		$root = dirname(dirname(__DIR__));

		$routeType = isset($_GET['type']) ? trim((string)$_GET['type'], '/') : '';
		if($routeType === 'home'){
			$routeType = '';
		}

		if($routeType === ''){
			return false;
		}

		$segments = array_values(array_filter(explode('/', $routeType), 'strlen'));

		$slug    = preg_replace('/[^a-z0-9_-]/i', '', $segments[0]);
		$subSlug = isset($segments[1]) ? preg_replace('/[^a-z0-9_-]/i', '', $segments[1]) : '';
		$chdSlug = isset($segments[2]) ? preg_replace('/[^a-z0-9_-]/i', '', $segments[2]) : '';

		$GLOBALS['currentSlug'] = $slug;

		$metaTitle       = '';
		$metaDesc        = '';
		$pageData        = '';
		$breadcrumbTitle = '';
		$matchedInDB     = false;
		$catId = 0; $catSlug = ''; $catName = '';

		$esc = function($value) use ($con) {
			return mysqli_real_escape_string($con, (string)$value);
		};

		// ---- Level 1: category ----
		if($slug !== ''){
			$sqlCat = mysqli_query($con, "SELECT * FROM `category` WHERE `c_url` = '".$esc($slug)."' AND `status` = 1 LIMIT 1");
			if($sqlCat && mysqli_num_rows($sqlCat)){
				$rwCat = mysqli_fetch_assoc($sqlCat);
				$matchedInDB     = true;
				$catId           = (int)$rwCat['id'];
				$catSlug         = $rwCat['c_url'];
				$catName         = $rwCat['c_name'];
				$breadcrumbTitle = $rwCat['c_name'];
				$pageData        = $rwCat['c_desc'];
				$metaTitle       = $rwCat['meta_title'];
				$metaDesc        = $rwCat['meta_desc'];
			}
		}

		// ---- Level 2: sub_cat ----
		$subId = 0;
		if($subSlug !== '' && $matchedInDB){
			$sqlSub = mysqli_query($con, "SELECT * FROM `sub_cat` WHERE `sc_url` = '".$esc($subSlug)."' AND `status` = 1 LIMIT 1");
			if($sqlSub && mysqli_num_rows($sqlSub)){
				$rwSub = mysqli_fetch_assoc($sqlSub);
				$matchedInDB     = true;
				$subId           = (int)$rwSub['id'];
				$breadcrumbTitle = $rwSub['sc_name'];
				$pageData        = !empty($rwSub['sc_desc']) ? $rwSub['sc_desc'] : $pageData;
				$metaTitle       = !empty($rwSub['meta_title']) ? $rwSub['meta_title'] : $metaTitle;
				$metaDesc        = !empty($rwSub['meta_desc']) ? $rwSub['meta_desc'] : $metaDesc;
			}
		}

		// ---- Level 3: childcategory ----
		if($chdSlug !== '' && $matchedInDB){
			$sqlChd = mysqli_query($con, "SELECT * FROM `childcategory` WHERE `url` = '".$esc($chdSlug)."' AND `status` = 1".($subId ? " AND `subcat_id` = ".$subId : "")." LIMIT 1");
			if($sqlChd && mysqli_num_rows($sqlChd)){
				$rwChd = mysqli_fetch_assoc($sqlChd);
				$matchedInDB     = true;
				$breadcrumbTitle = $rwChd['childcat'];
				$pageData        = !empty($rwChd['cdesc']) ? $rwChd['cdesc'] : $pageData;
				$metaTitle       = !empty($rwChd['meta_title']) ? $rwChd['meta_title'] : $metaTitle;
				$metaDesc        = !empty($rwChd['meta_desc']) ? $rwChd['meta_desc'] : $metaDesc;
			}
		}

		$viewFile = routeSlugToFile($slug);
		$viewPath = $root.'/'.$viewFile.'.php';
		$isSelf = (realpath($viewPath) !== false
			&& isset($_SERVER['SCRIPT_FILENAME'])
			&& realpath($viewPath) === realpath($_SERVER['SCRIPT_FILENAME']));
		if($viewFile !== '' && !$isSelf && file_exists($viewPath)){
			require_once $viewPath;
			exit();
		}

		if($matchedInDB && trim($pageData) !== ''){
			$pageTitle = !empty($metaTitle) ? $metaTitle : $breadcrumbTitle;
			require_once $root.'/includes/header.php';
			?>
			<section class="routed-content">
				<div class="container">
					<h1 class="heading-playfair text-center mb-4"><?php echo htmlspecialchars($breadcrumbTitle); ?></h1>
					<div class="cms-content"><?php echo $pageData; ?></div>
				</div>
			</section>
			<?php
			require_once $root.'/includes/footer.php';
			exit();
		}

		// ---- Not found ----
		http_response_code(404);
		$pageTitle = 'Page Not Found';
		require_once $root.'/includes/header.php';
		?>
		<section class="routed-content">
			<div class="container text-center">
				<h1 class="heading-playfair">404</h1>
				<p class="text-lato mb-4">Sorry, the page you are looking for could not be found.</p>
				<a href="<?php echo pageUrl(); ?>" class="btn btn-gold">Back to Home</a>
			</div>
		</section>
		<?php
		require_once $root.'/includes/footer.php';
		exit();
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
 