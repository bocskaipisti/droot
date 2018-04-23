<?php

include_once("php/main.php");
include_once("php/php_database.php");



include_once("location.php");

include_once("user_functions.php");



  $lifetime=6;
  //setcookie(session_name(),session_id(),time()+$lifetime);
  setcookie('process2','1',time()+$lifetime);


  SHOW($_SESSION);
  SHOW($_COOKIE);




class Language{
    private $languageArray;
    private $userLanguage;

    public function __construct($language)
    {
        $this->userLanguage = $language;
        $this->languageArray = self::userLanguage();
    }

private static function userLanguage(){
    $file = 'angolll';
}

}
?>
<?php

echo '<pre>';
print_r($_SERVER);
echo '</pre>';

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);//Detecting Default Browser language
$language = New Language($lang);
$langArray = array();
$langArray =  $language->userLanguage();
?>

<div class="cssmenu">
    <ul>
        <li> class="active"><a href="/login"><?php echo $langArray['MENU_LOGIN']?></a></li>
        <li><a href="/rides"><?php echo $langArray['MENU_FIND_RIDE']?></a></li>
        <li><a  id ="btnShow"><?php echo $langArray['MENU_ADD_RIDE']?></a></li>
        <li><a href="/logout.php"><?php echo $langArray['MENU_LOGOUT']?> </a></li>
        <li><a href="/register"><?php echo $langArray['MENU_SIGNUP']?></a></li>
    </ul>
</div>