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
            <form class="form-horizontal" id="app-form">
                <div class="form-group row">
                  <label for="categoryOpt" class = "control-label col-md-2">Category:</label>
                  <div class = "col-md-3">
                    <select class = "form-control" id = "categoryOpt" name = "catOpt">
                      
                    </select>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="appName" class = "control-label col-md-2">Application Name:</label>
                  <div class = "col-md-3">
                      <input type="text" class="form-control" id="appName" name = "appNme" placeholder="" maxlength="80">
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

                <div class="form-group row">
                  <label for="appDesc" class = "control-label col-md-2">Description:</label>
                  <div class = "col-md-3">
                    <textarea class="form-control" rows="5" style="resize:none" id="appDesc" name = "appDsc"></textarea>
                  </div>

                  <label for="imgsrc" class = "control-label col-md-2">Image URL:</label>
                  <div class = "col-md-3">
                    <input type="text" class="form-control" id="imgsrc" name="src" placeholder="">
                  </div>
                </div>

                <hr> 

                <div class="row">
                  <center>        
                    <input type="submit" name="submit" value="Submit form"/>
                    <div id="success"><p>Add an App</p></div>
                  </center>

                </div>

            </form>
        </div>     
        
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/scripts.js'></script>
    </body>

    
    
</html>
