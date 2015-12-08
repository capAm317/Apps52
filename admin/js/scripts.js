$("document").ready(function(){
    
    $.ajax({
        type: 'GET',
        url: 'ajaxhandler.php',
        data: {'type' : 'category'},
        dataType: 'html',
        success: function(html){
            $("#categoryOpt").html(html);
        }
    }); 
    
    $.ajax({
        type: 'GET',
        url: 'ajaxhandler.php',
        data: {'type' : 'apps'},
        dataType: 'html',
        success: function(html){
            $("#appOpt").html(html);
        },
        error: function(data){
            alert("hello");
            console.log(data);
        }
    }); 
    
    
    $("#app-form").submit(function(){
        
        var data = {
          "type": "addItem"
        };
        
        data = $(this).serialize() + "&" + $.param(data);
        $.ajax({
            type: "POST",
            dataType: "html",
            url: "ajaxhandler.php", //Relative or absolute path to response.php file
            data: data,
            success: function(data) {
                $('#success').html('<p>You have successfully added the App</p>');
            },
            error: function(data){
                console.log(data)
            }
            
        });
        return false;
        
    });
    
    $('#andCheck').click(function(event){
       if($(this).prop('checked')){
           $('#andlink').prop('disabled',false);
       } else {
           $('#andlink').prop('disabled',true);
           $('#andlink').val('');
       }
    });
    
    $('#iosCheck').click(function(event){
       if($(this).prop('checked')){
           $('#ioslink').prop('disabled',false);
       } else {
           $('#ioslink').prop('disabled',true);
           $('#ioslink').val('');
       }
    });
});
