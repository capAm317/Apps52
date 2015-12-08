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
            <table class="table" >
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Employee Type</td>
                            <td>Branch</td>
                        </tr>
                    </thead>
                    <tbody id="reportBody">
                        
                    </tbody>
                </table>
        </div>     
        
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/reportscript.js'></script>
    </body>

    
    
</html>
