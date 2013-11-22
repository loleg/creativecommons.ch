<?php
/*== google-proxy.php ==================================================
google-proxy.php gets around access restrictions in cross-domain scripting.
Version     : $Id: XmlTemplateProcessor.java 451 2010-05-28 11:54:53Z hartwig $
Application : Web Utilities
Description : google_proxy.php receives a target URL path (must be URL-encoded!)
              as a query parameter named "path".
              It issues the request (as an HTTP client) to the target
              URL http://www.google.com followed by this path and returns the
              resulting content unchanged - but now in the domain of this
              web site and therefore accessible to scripting.
------------------------------------------------------------------------
Created    : 03.09.2013, Hartwig Thomas
Copyright  : Enter AG, Zurich, Switzerland, 2013
License    : CC-BY-SA http://creativecommons.org/licenses/by/3.0/ch/deed.en_US
------------------------------------------------------------------------
  /* determine request parameter */
  $path = $_GET['path']; /* is already urldecoded! */
  if (get_magic_quotes_gpc()) /* should really be off */
    $path = stripslashes($path);
  /* return the request page */
  $response = file_get_contents("http://www.google.com" . $path);

  /* return response as this page - getting around cross-domain security! */
  echo $response;
?>
