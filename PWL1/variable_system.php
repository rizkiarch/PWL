<?php
// variable system
echo 'Dokumen Root' . $_SERVER['DOCUMENT_ROOT'];
echo '<br>Nama File' . $_SERVER['PHP_SELF'];
echo '<br>Server' . $_SERVER['SERVER_NAME'];
echo '<br>Host' . $_SERVER['HTTP_HOST'];
echo '<br>Browser' . $_SERVER['HTTP_USER_AGENT'];
echo '<br>IP' . $_SERVER['REMOTE_ADDR'];
echo '<br>Port' . $_SERVER['REMOTE_PORT'];
echo '<br>Method' . $_SERVER['REQUEST_METHOD'];
echo '<br>Query String' . $_SERVER['QUERY_STRING'];
echo '<br>Request URI' . $_SERVER['REQUEST_URI'];
