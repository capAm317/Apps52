$("document").ready(function(){
    
    $.ajax({
        type: 'GET',
        url: 'ajaxhandler.php',
        data: {'type' : 'report'},
        dataType: 'html',
        success: function(html){
            $("#reportBody").html(html);
        }
    }); 
    
});


