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
            console.log(data);
        }
    }); 
    
    $('#deleting').submit(function(){
       $.ajax({
            type: "POST",
            url: "ajaxhandler.php", //Relative or absolute path to response.php file
            data: {'appID' : $('#appOpt').val(), 'type': 'delete'},
            dataType: 'html',
            success: function(data) {
                alert(data);
                $('#success').html('<p>Succesfully Deleted the App</p>');
            },
            error: function(data){
                console.log(data);
                $('#success').html('<p>Error Occured</p>');
            }
            
        });
       
        return false;
        
    });
    
    $('#editing').submit(function(){
       
       $.ajax({
            type: "POST",
            url: "ajaxhandler.php", //Relative or absolute path to response.php file
            data: {'type' : 'updateItem', 'appID' : $('#appOpt').val(), 'desc': $('#appDesc').val(), 'imgchng': $('#imgsrc').val()},
            dataType: 'html',
            success: function() {
                $('#success').html('<p>Succesfully Edited the App</p>');
            },
            error: function(data){
                console.log(data);
                $('#success').html('<p>Error Occured</p>');
            }
            
        });
       
        return false;
        
    });
    
    setchecker("urlCheck", "imgsrc");
    
    
    $('#appOpt').change(function(){
        
        $.ajax({
            type: "GET",
            url: "ajaxhandler.php", //Relative or absolute path to response.php file
            data: {'type' : 'app', 'selID' : $(this).val()},
            success: function(data) {
                setValue(data.desc, "appDesc");
                setValue(data.imgs, "imgsrc");
            },
            dataType: "json",
            error: function(data){
                console.log(data);
            }
            
        });
        return false;
    });
    
});

function setValue(data, valid){
    $('#' + valid).val(data);
}

function setchecker(chkrid, inptid){
    
    $('#' + chkrid).click(function(event){
        if($(this).prop('checked')){
           $('#' + inptid).prop('disabled',false);
       } else {
           $('#' + inptid).prop('disabled',true);
       }
    });
}


