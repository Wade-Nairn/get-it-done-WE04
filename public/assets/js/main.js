 
// ============================================
// jquery
 $(function() {
    
    // ============================================
    //  test to hide modal when loading
    $('.hide').removeClass('hide');
    
    // ============================================
    //  for adding the used class to pre filled inputs for edit pages
    $('input[value!=""][type!="submit"], textarea:not(:empty)').addClass('used');
    
    // ============================================
    // modal functions for new task / edit task
    $( "#dialog" ).dialog({ 
    	modal: true,
      autoOpen: false,
      width: 500,
      top: -350,
      dialogClass: 'dialog-styles',
      position: { 
        my: "center", 
        at: "center",
      },
      show: {
        effect: "blind",
        duration: 400
      },
      hide: { 
        effect: "blind",
        duration: 200
      }
    	}).closest(".ui-dialog").css('position','fixed');

    $('.openmodal').on('click', function(e){
      e.preventDefault();
      
      var elem = $(this);
      var id = elem.data('task-id');
      var url = elem.attr('href');

      if(id){
        $.ajax({
          method: 'GET',
          url: '/task/'+id,
          dataType: 'json'
        })
        .done(function(response){
          var dialog = $('#dialog');
          dialog.find('h1').replaceWith("<h1>Edit Task</h1>");
          dialog.find('#name').val(response.name).addClass('used');
          dialog.find('#description').val(response.description).addClass('used');
          dialog.find('#timeframe').val(response.timeframe).addClass('used');
          dialog.find('form').attr('action', '/task/'+id+'/edit');
        });
      } else {
        $('#dialog').find('form').attr('action', url);
        $('#dialog').find('h1').replaceWith("<h1>New Task</h1>");
        $('#dialog').find('input[type=text], textarea').val('').removeClass('used');
      }
      $( "#dialog" ).dialog( "open" )
    })

  // =============================================
  // task slide down

  $('.slide').hide(0);

    $('.toggle').click(function () {

        var $slider = $(this).find('.slide').stop(true, true);
        if ( $slider.is( ":hidden" ) ) {
            $slider.slideDown(200).prev('p').addClass('bold');
        } else {
            $slider.hide(200);
            $('.task-name').removeClass('bold');
        }
    });

  // =============================================
  // date time picker

    $('#datetimepicker1').datetimepicker({
      stepping: '15',
      format: 'YYYY-MM-DD HH:mm'

    });

  // =============================================
  // momentjs - countdown timer
  
    var then = $('.countdown').data('due');

    setInterval(function(){
         
          var days = moment()
                  .diff(then, 'days') * -1;
         
          var hours = moment()
                  .add(Math.abs(days), 'days')
                  .diff(then, 'hours') * -1;
         
          var minutes = moment()
                  .add(Math.abs(hours), 'hours')
                  .add(Math.abs(days), 'days')
                  .diff(then, 'minutes') *-1;
         


          $('.days span').text(days < 0 ? 0:days);
          $('.hours span').text(hours < 0 ? 0: hours);
          $('.mins span').text(minutes < 0 ? 0: minutes );
         
  }, 250);



  // =============================================
  // input animations

  $('input').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used'); 
  });

   $('textarea').blur(function() {
    var $this = $(this);
    if ($this.val())
      $this.addClass('used');
    else
      $this.removeClass('used');
    
  });

});
