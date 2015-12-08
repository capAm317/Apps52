$(document).ready(function(){
    $('#sec1').hide();
    $('#secfoot').hide();
    $('.navbar').hide();
    $('#startModal').modal('show');
    onloadFuncs();
    
    $('#smart').click(function(){
         sendData($(this).val());
         $('#startModal').modal('hide');
         $('#startModal').html('<p>Thank you for your Response</p>');
     });
     $('#sun').click(function(){
         sendData($(this).val());
         $('#startModal').html('');
         $('#startModal').html('<p>Thank you for your Response</p>');
     });
    
});

function sendData(type){
    
    var _data = {"name": $('#textbox_id').val(), "br": $('input[name="branch"]:checked').val(), "type": type, "ptype": 'empfeed'};
    $.ajax({
      type: "POST",
      url: "ajaxhandler.php",
      data: _data,
      success: function(_data){
          alert("Help");
          console.log(_data);
          
         //$('#hello').html(_data);
     },
     error: function(_data){
          alert("help");
     }
    });
    return false;
}

$('#startBtn').click(function() {

    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
});

function addFeedback(){
    
}

function onloadFuncs(){
    getajax('ajaxhandler.php', 'category', '', '#categoryBtn'); 
    getajax('ajaxhandler.php', 'categoryDD', '', '#categoryOpt');
    getajaxFade('ajaxhandler.php', 'application', 'all', '#appCollection');
    
    $('#categoryOpt').change(function(){
       var category = $('#categoryOpt option:selected').text();
       getajaxFade('ajaxhandler.php', 'application', category, '#appCollection'); 
    });

    $('#categoryBtn').on('click', '.btnCat', function(){
        var category = $(this).attr('id');
        getajaxFade('ajaxhandler.php', 'application', category, '#appCollection'); 
    });

    $('#appCollection').on('click', '.appdiv', function(){
        $('#AppMain').html('');
        getajaxFade('ajaxhandler.php', 'modal', $(this).attr('id'), '#AppMain'); 
        alert("hello");
        getajaxFade2('ajaxhandler.php', 'lns', $(this).attr('id'), '#lns1'); 
        alert("hello2");
        $('#myModal').modal('show');
        
    });
    
}

function getEmp(id){
  
}

function getajax(ajax_page, type, value, target){
    $.ajax({
        type: 'GET',
        url: ajax_page,
        data: {'type' : type, 'value': value},
        dataType: 'html',
        success: function(html){
            console.log("Hello");
            $(target).html(html);
        }
    }); 
}

function getajaxFade(ajax_page, type, value, target){
    $.ajax({
        type: 'GET',
        url: ajax_page,
        data: {'type' : type, 'value': value},
        dataType: 'html',
        success: function(html){
            $(target).hide();
            $(target).html(html).fadeIn(300);
        }
    }); 
}

function getajaxFade2(ajax_page, type, value, target){
    $.ajax({
        type: 'GET',
        url: ajax_page,
        data: {'type' : type, 'value': value},
        dataType: 'html'    ,
        success: function(html){
            $(target).attr('data-href', html);
            console.log(html);
        },
        error: function(jqXHR,textStatus,errorThrown ){
            console.log(jqXHR);
            console.log(textStatus);
            console.log(errorThrown);
        }
    }); 
}

            
 
// Optional Function, Infinite Scrolling
////Scroll Function
//var lastScrollTop = 0;
//
//$(window).scroll(function(event){
//  var st = $(this).scrollTop();
//
//  if($(window).height() <= $(window).scrollTop()){
//    // $('.navbar').slideDown(2000);
//  }
//  
//  if (st > lastScrollTop){
//    $(window).scroll(function() {
//      if($(window).height() != $(document).height())
//                                                                                                                
//        if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
//          //insert code scroll down
//        }
//    });
//  } else {
//   //insert code scroll up
//  }
//
//  lastScrollTop = st;
//
//});

