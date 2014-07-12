<?php
if (!defined('IN_FRAME')) exit();

define('ALTERNATE_LANGUAGE' , 'zh-CN');
define('LANGUAGE_IN_URL_ARG', true);
define('LANGUAGE_IN_COOKIE' , true);
define('LANGUAGE_IN_REQUEST', true);

if (LANGUAGE_IN_URL_ARG && !isset ($langue) && isset ($_GET['lang'])) {
  $langue_tester = htmlspecialchars($_GET['lang'],ENT_QUOTES);
  if (array_key_exists($langue_tester, $langues)) {
    $langue = $langue_tester;
    setcookie('langue', $langue, time()+3600*24*30, '/', '.anthonos.org');
  }
}
if (LANGUAGE_IN_COOKIE && !isset ($langue) && isset ($_COOKIE['langue'])) {
  if (array_key_exists($_COOKIE['langue'], $langues)) $langue = $_COOKIE['langue'];
}
function sortByWeight($a, $b) {
  if (strpos ($a,'q=') == false) $_a_w = 1;
  else $_a_w = floatval(substr($a, strpos($a, 'q=')+3));
  if (strpos ($b,'q=') == false)$_b_w = 1;
  else $_b_w = floatval(substr($b, strpos($b, 'q=')+3));
  if ($_a_w == $_b_w) return 0;
  return ($_a_w > $_b_w) ? -1 : 1;
}
if (LANGUAGE_IN_REQUEST && !isset ($langue) && isset ($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
  $langue_http = explode(",",$_SERVER['HTTP_ACCEPT_LANGUAGE']);
  usort($langue_http, 'sortByWeight');
  foreach($langue_http as $langue_i) {
    $langue_tester = '';
    if (strpos ($langue_i,';') == false) $langue_tester = trim($langue_i);
    else $langue_tester = trim(substr($langue_i, 0, strpos($langue_i, ';')));
    if (array_key_exists($langue_tester, $langues)) {
      $langue = $langue_tester;
      break;
    }
  }
}

if (!isset ($langue)) $langue = ALTERNATE_LANGUAGE;

?>
