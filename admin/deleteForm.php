<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>   
        <link href='css/styles.css' rel='stylesheet'>
    </head>
    
    <body>
        
        <div class ='container'>
          <ul class="nav nav-tab-custom nav-tabs">
              <li id="add"><a href="main.php">Add App</a></li>
              <li id="edit"><a href="editForm.php">Edit App</a></li>
              <li id="edit"><a href="deleteForm.php">Delete App</a></li>
              <li id="edit"><a href="employeeReport.php">Employee Reports</a></li>
          </ul>
        </div>
   
        <div id="chngform" class ='container' style="margin-top: 40px;">
            
        <form id="deleting">
        
        <div class="form-group row">
              <label for="appsOpt" class = "control-label col-sm-1">Apps:</label>
              <div class = "col-md-3">
                <select class = "form-control" id = "appOpt" name = "appsOpt">

                </select>
              </div>
        </div>

            <hr> 

            <div class="row">
              <center>        
                <input type="submit" name="submit" value="Delete App"/>
                <div id="success"><p>Delete An App</p></div>
              </center>

            </div>
            
            </form>
            </div>
        

            <script src='js/jquery.js'></script>
            <script src='js/bootstrap.min.js'></script>
            <script src='js/editScript.js'></script>
                
    </body>
</html>


    
    