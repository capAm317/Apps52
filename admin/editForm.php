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
            
            <form id="editing">
        
        <div class="form-group row">
              <label for="appsOpt" class = "control-label col-sm-1" >Apps:</label>
              <div class = "col-md-3">
                <select class = "form-control" id = "appOpt" name = "appsOpt">

                </select>
              </div>
        </div>

            <div class="form-group row">
              <label for="appDesc" class = "control-label col-md-1">Description:</label>
              <div class = "col-md-9">
                  <div class="input-group">
                  <span class="input-group-addon">
                      
                 </span>
                      <textarea class="form-control" rows="6" cols="20" style="resize:none" id="appDesc" name = "appDsc" ></textarea>
                  </div>
              </div>

              
            </div>
            
            <div class="form-group row">
                
                <label for="imgsrc" class = "control-label col-md-1" >Image URL:</label>
                <div class = "col-md-9">
                    <div class="input-group">
                    <span class="input-group-addon">
                        <input type="checkbox" id = "urlCheck">
                   </span>
                  <input type="text" class="form-control" id="imgsrc" name="src" placeholder="" disabled>
                </div>
                </div>
                
            </div>
                
            <div class="form-group row">
                  <label for="ioslink" class = "control-label col-md-2">IOS Link:</label>
                  <div class = "col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" id = "iosCheck">
                        </span>
                        <input type="text" class="form-control" name = "ioslink" id = "ioslink" disabled>
                    </div>
                  </div>

                  <label for="andlink" class = "control-label col-md-2">Android Link:</label>
                  <div class = "col-md-3">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <input type="checkbox" id = "andCheck">
                        </span>
                        <input type="text" class="form-control" name = "andlink" id = "andlink" disabled = "true">
                    </div>
                  </div>
                </div>

            <hr> 

            <div class="row">
              <center>        
                <input type="submit" name="submit" value="Edit App"/>
                <div id="success"><p>Edit An App</p></div>
              </center>

            </div>
            
            </form>
            </div>
        

            <script src='js/jquery.js'></script>
            <script src='js/bootstrap.min.js'></script>
            <script src='js/editScript.js'></script>
                
    </body>
</html>


    
    