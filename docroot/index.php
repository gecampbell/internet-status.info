<?php
header('Cache-Control: no-cache');
$TITLES = array(
    'da' => 'Er internettet stadig oppe?',
    'de' => 'Ist das Internet noch auf?',
    'eo' => 'Ĉu la Interreto ankoraŭ kolektis?',
    'es' => '¿Es Internet todavía pasa?',
    'fi' => 'Onko Internetin yhä ylöspäin?',
    'fr' => 'Internet est-il toujours en place?',
    'ko' => '인터넷은 아직도입니까?',
    'no' => 'Er Internett fortsatt opp?',
    'ru' => 'Является ли Интернет еще до?',
    'sv' => 'Är Internet fortfarande upp?',
    'zh' => '互联网还没睡？'
);
$TRANS = array(
    'da' => 'ja',
    'de' => 'ja',
    'eo' => 'jes',
    'es' => 'sí',
    'fi' => 'kyllä',
    'fr' => 'oui',
    'ko' => '예',
    'no' => 'ja',
    'ru' => 'да',
    'sv' => 'ja',
    'zh' => '是'
);
$lang = strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2));
if (isset($TRANS[$lang])) {
    $title = $TITLES[$lang];
    $yes = $TRANS[$lang];
}
else {
    $title = 'Is the Internet still up?';
    $yes = 'yes';
    if (strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,5)) == 'en-gb')
        $yes = 'quite';
}
?><!DOCTYPE html>
<html>
<head>
  <title><?php echo $title;?></title>
  <meta charset="utf8">
  <meta name="keywords" content="internet,status,uptime">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="refresh" content="120" >
<?php include('css.inc');?>
</head>
<body>
<h1><?php echo "$yes\n"?></h1>
<?php include 'footer.inc';?>
</body>
</html>
<?php include 'ga.inc';?>
