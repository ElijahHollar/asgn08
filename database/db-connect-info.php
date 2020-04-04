<?php

// siteground

if($_SERVER['HTTP_HOST'] == "elijahh.sgedu.site")
{
  define('SERVER', 'localhost' );
  define('USER', 'elijahh3_admin' );
  define('PW', 'S!j9&DL(13z#' );
  define('DB', 'elijahh3_test' );
}
// local

else
{
  define('SERVER', 'localhost' );
  define('USER', 'wbip' );
  define('PW', 'wbip123' );
  define('DB', 'test' );
}