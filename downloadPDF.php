<?php
// type=details || summary - if omitted, details will default
// download will trigger a file attachment
  $type = $_REQUEST['type'];
  $download = isset($_REQUEST['download']);

  switch($type) {    
    case 'details':          $file = 'details.pdf'; break;
    case 'summary': default: $file = 'summary.pdf'; break;
  }


  if($file && file_exists($file) && is_readable($file) && isPDF($file))  { 
    header('Content-type: ' . getPDFtype());
    if($download) {
      header("Content-Disposition: attachment; filename=\"$file\"");	 
    }
    readfile($file); 
  } else { echo 'failed';}
  // end of inline code
    
  function getPDFtype() {return 'application/pdf'; }

  function isPDF($filename) {
    if(function_exists(finfo_open)) {
      $finfo = @new finfo(FILEINFO_MIME_TYPE);
      $fres = @$finfo->file($filename);
      
      if($fres && is_string($fres)) {
        return getPDFType() == $fres;
      }

      return false; 
    }      
    
    if(function_exists(mime_content_type)) {
      return getPDFtype() ==  mime_content_type($filename);
    }

    // if all else fails, look at the extension    
    return preg_match('/\.pdf$/',$file);
  }
?> 