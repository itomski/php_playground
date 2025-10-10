<?php

require_once 'FormatHelper.php';

//$fh = new FormatHelper();
//$fh = new NextFormatHelper();
//var_dump($fh);

echo date(FormatHelper::DATE_FMT).'<br>';
echo date(FormatHelper::TIME_FMT).'<br>';