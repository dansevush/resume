<?php
  // these first four variables are pretty important, please put in your own info
  $firstName    = 'Dan';
  $lastName     = 'Sevush';
  $avatarURL    = 'http://lh5.googleusercontent.com/-L6-k2Xlc_is/AAAAAAAAAAI/AAAAAAAAAQ4/whMLBvPFky8/s113-c-k-no/photo.jpg';
  $emailAddr    = 'dan@sevush.com';
  $firstAndLast = $firstName . ' ' . $lastName;
  $description  = 'Resume of ' . $firstAndLast;  
  $spinnerURL   = 'images/rectSpinner.gif';  
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?=$description ?>" />
    <meta name="author" content="<?=$firstAndLast ?>" />
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <!-- facebook tags -->
    <meta property="og:image" content="<?=$avatarURL ?>" />    
    <meta property="og:title" content="<?=$description ?>" />
    <meta property="og:site_name" content="<?=$description ?>" />
    <meta property="og:type" content="article" />
    
    <title><?=$description ?></title>
    <!-- Bootstrap core CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="resume.css" rel="stylesheet" />
    <style>
      body {
        padding-top: 5em;
        padding-botttom: 5em;
        color:  #006699;
      }      
    </style>
  </head>

  <body>
    <div id="wrapper">

    <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
<? if(isset($avatarURL)) { ?>
        <img  src="<?=$avatarURL ?>"  class="avatar img-rounded" />
<? } ?>
        &nbsp;Dan Sevush&nbsp;
      </a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">PDF<b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="downloadPDF.php" target="_blank">View PDF</a></li>
                <li><a href="downloadPDF.php?download">Download PDF</a></li>
                <li><a href="downloadPDF.php?type=details&download">Download Detailed PDF</a></li>
              </ul>
            </li>
<? if(isset($emailAddr)) { ?>
            <li class="active">
              <a href="mailto:<?=$emailAddr ?>">email <?=$emailAddr ?></a>
            </li>
<? } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <!-- end of menubar -->
    
    <!-- content -->
    <div class="container">
      <div class="starter-template" id="heading-container"></div>
      <div class="panel-group" id="accordion">
        <br /><br /><br /><br />
          <center><img src="<?=$spinnerURL ?>" /></center>  <!-- this gets blown away when we load data or display error message -->
      </div> <!-- accordian -->
    </div>     <!-- /.container -->
    <!-- end of content -->
    </div>  <!-- wrapper -->

    <!-- use CDN for libraries -->
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/underscore.js/1.5.2/underscore-min.js"></script>
    <!-- grab our code -->
    <script src="resume.js"></script>

    <!-- templates for underscore -->
    <script id="itemTemplate" type="text/template">
      <div class="panel panel-info">
        <div class="panel-heading pointer" data-toggle="collapse" data-parent="#accordion" href="#collapse<%- thisID %>" >
          <h3 class="panel-title">
             <%= header %> <%= start %>
          </h3>
        </div>
        <div id="collapse<%- thisID %>" class="panel-collapse collapse <%- open %>" >
          <div class="panel-body pointer" data-toggle="collapse" data-parent="#accordion" href="#collapse<%- thisID %>" >
          <% var endDate = typeof endYear === 'undefined' ? false : true; %>
          <% if(endDate) { %>
          <%- start%> - <%- endYear %>
          <% } %>
            <%- title %>
            <ul>
            <% _.each(done, function(item) { %>
              <li><%= item %></li>
            <% }); %>
            </ul>
          </div>
        </div>
      </div>
    </script>

    <script id="ajaxError" type="text/template">    
      <br /><br /><br /><br />
      <div class="alert alert-danger alert-dismissable">
      <% if(responseText) { %>
        <%= responseText %>
      <% } else { %>
        <h3>Status Code: <%- status %></h3>
        <h3>Status Text: <%- statusText %></h3>
      <% } %>
      </div>    
    </script>    

  </body>
</html>
