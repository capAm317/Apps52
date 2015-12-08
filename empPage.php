<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href='css/styles.css' rel='stylesheet'>

    <title>Thank you!</title>

    <!-- Bootstrap core CSS -->
  </head>

  <body>
  
      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="inner cover">
            <h1 class="cover-heading">Thank you for liking Apps52 we would like to identify if you are a Smart or Sun Employee</h1>

          <form>
          <div>
             <label>Enter Name: </label>
	         <input type="text" class="form-control" id="textbox_id"/>
             <div class="form-group">
                <label class="col-sm-4 control-label">Branch</label>
    		<div class="col-sm-8" required>
        		<label class="radio-inline"> <input type="radio" name="branch" id="NCR" value="NCR Team" checked> NCR Team </label>
        		<label class="radio-inline"> <input type="radio" name="branch" id="ST" value="South Team"> South Team </label>
        		<label class="radio-inline"> <input type="radio" name="branch" id="NCT" value="North/Central Luzon Team"> North/Central Luzon Team </label>
                <label class="radio-inline"> <input type="radio" name="branch" id="VMT" value="Visayas/Mindanao Team"> Visayas/Mindanao Team </label>
    		</div>
            </div>
            
            <h3 class="cover-heading">Please click your Company logo</h3>
            
            <div id="type">
                <input id="smart" type="image" src="http://img2.wikia.nocookie.net/__cb20131107113300/logopedia/images/8/8e/Smart2007.svg" value="smart" height="200" width="200"alt="Submit Form" onclick='getInput(this.value)'/> 
                <input id="sun" type="image" src="http://upload.wikimedia.org/wikipedia/en/thumb/7/7c/Sun_Cellular_logo.svg/919px-Sun_Cellular_logo.svg.png" value="sun" height="200" width="200" border="0" alt="Submit" onclick='getInput(this.value)'/>
            </div>
          </div>
          </form> 

        </div>

      </div>

    </div>
  
    <script src='js/jquery.js'></script>
    <script src='js/bootstrap.min.js'></script>
    <script src='js/scripts.js'></script>
</body>

</html>

