$(document).ready(function() {
  var cookedHTML  = '',
      JSONdataURL   = 'data.json.php',  // define your data source here
      templateText  = $('#itemTemplate').html(), // "compiled" underscore template
      $accordion    = $('#accordion'),
      gettingJSON   = $.getJSON(JSONdataURL); // this will get our data

  // use jQuery's deferred (Promise) to handle the returned data
  $.when(gettingJSON).then(function(data) { // this is the 'done' handler
    _.each(data, function(el) { // get each array member and populate the template
      cookedHTML += _.template(templateText, el);
    });

    if(cookedHTML) {
      $accordion.html(cookedHTML);
      handleClicks();        // make sure URLs work properly
    }        
  }, function(data) {  // and this is the error handler
      displayError($accordion, data);
  });

  // support functions 
  function handleClicks() {  // make sure our links function properly
    $('.clickable').click(function(e) {
      var url = $(this).attr('href'); //.attr('target','_blank');
      window.open(url);
      return false;
    });
  } 

  function displayError($where, data) { // let them know if somehthing's gone wrong...
    $where.html(_.template($('#ajaxError').html(), data));
  }
});
