<html>
    <head>
        <meta http-equiv='content-type' content='text/html; charset=UTF-8'>
        <meta charset='utf-8'>
        <title>Apps 52 | Your tech teach tool</title>
        <meta name='generator' content='Bootply' />
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
        <link href='css/styles.css' rel='stylesheet'>
        
        
    </head>

    <body>
        
      
        <div class='navbar navbar-fixed-top alt' data-spy='affix' data-offset-top='1000'>
            <div class='container-fluid'>
                <div class='navbar-header'>
                      <a href='#' class='navbar-brand'><h5>APPS52 | your tech teach tool</h5></a>
                </div>
            </div>
        </div>

        <div class='header alt' id = 'sechead'>
            <div class='container-fluid vert'>
                <div class = 'row'>
                    <div class = 'col-xs-3 col-sm-2 col-md-4 col-lg-4'></div>
                    
                    <div class = 'col-xs-6 col-sm-8 col-md-4 col-lg-4'>
                        <img src = 'http://i.imgur.com/8W9dZx2.png' class = 'img-responsive center-img' style = 'height: auto; width: 100%'>
                    </div>
                    
                    <div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12'>&nbsp;</div>
                    
                    <div class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12'>
                        <a href='#sec3' class='btn btn-default btn-lg' id = 'startBtn'>Start APPS 52</a>
                        
                        
                    </div>
                </div>
            </div>
        </div>

        <div class = 'header-2 hidden-xs' id='sec1'>
            <div class='container-fluid'>
                <div class='row'>
                    <div class='col-md-7'>
                        <h2>APPS52 | your tech teach tool</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class='callout' id='sec2'>
            <div class='vert container-fluid'>
                <!--insert video-->
            </div>
        </div>

        <div class='featurette' id='sec3'>
            <div class='container featurette-inner'>
                <div class='row'>
                    <div class='col-md-12 col-sm-12 col-xs-12 text-center'>
                        <h1 class = 'c-black'>Applications</h1>
                        <div class='hidden-xs btn-group btn-group-justified' role='group' aria-label='...' id = 'categoryBtn'>
                            <!--Dynamically add buttons-->
                        </div>
                        <div class='visible-xs input-group col-xs-12' style = 'padding-bottom: 10px'>
                          <div class='input-group'>
                            <span class='input-group-addon' id='dd-addon'><i class='fa fa-search'></i></span>
                            <select class = 'form-control' id = 'categoryOpt'>
                                <!--Dynamically-->
                            </select>
                          </div>
                        </div>
                    </div>
                </div>                           
                <div class='row'>
                    <div class='col-md-12 col-sm-12 col-xs-12'>
                         <div class='col-md-12 col-sm-12 col-xs-12 etched'>
                            <h6>&nbsp;</h6>                      
                            <div id='appCollection'>
                            <!--Apps will be inserted here-->
                            </div>
                         </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <footer id = 'secfoot'>
            <div class='container'>
                <div class='row'>
                    <div class='col-md-6 col-md-offset-3 text-center'>
                        <hr>
                        <p>Built with <i class='icon-heart-empty'></i> at <a href='http://www.bootply.com'>Bootply</a>.<br>Company ©2014</p>
                    </div>
                </div>
            </div>
        </footer>
    
        <div class='modal fade' id='myModal' tabindex='-1' role='dialog' aria-labelledby='loginLabel' aria-hidden='true'>
          <div class='modal-dialog'>
            <div class='modal-content'>

              <div class='modal-header'>
                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'></span></button>
              </div>

                <div class='modal-body'>
                  <div class = 'row'>
                    <div class = ' col-md-2'>
                      &nbsp;
                    </div> 
                     
                    <div id = 'AppMain'>
                        <div class = 'col-md-4'>
                          <div class = 'row'>
                            <div class = 'col-md-1'> &nbsp; </div>
                            <div class = 'col-md-10' id = 'AppImg'>  
                              <!--Image-->
                            </div>
                          </div>

                          <div class = 'row'>
                            <div class = 'text-center'>
                              <div class='btn-group btn-group-justified' role='group' id = 'AppLinks'>
                                  <!--App Links-->
                              </div>
                            </div>
                          </div>

                        </div>

                        <div class = 'col-md-4'>
                          <h3 id = 'AppTitle'><!--Apptitle--></h3>
                          <hr>
                          <h4 id = 'AppCategory'><!--Appcategory--></h4>
                          <p id = 'AppDesc'><!--AppDesc--></p>
                        </div>
                        
                        
                    </div>
                      <div id='fb-root'></div>
                    <script>(function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s); js.id = id; js.async=true;
                      js.src = '//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=1599839956938259';
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                    
                    <div id="lns1" class='fb-like' data-href='https://www.facebook.com/appiness52/posts/709207932535368' data-layout='standard' data-action='like' data-show-faces='true' data-share='true'></div>
                    
                  </div>
                </div>

                <div class='modal-footer'>
                    <center>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </center>
                </div>

            </div>
          </div>
        </div>
        
        <div class='modal fade' id='startModal' tabindex='-1' role='dialog' aria-labelledby='myLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true'></span></button>
                        <h4 class="modal-title text-center" id="myLabel">
                            Help us identify if you are a Smart or Sun Employee!
                        </h4>
                    </div>
                    <div class='modal-body'>
                        <form id="foo" class="form-horizontal">
                            <div class="form-group">
                                <label for="textbox_id" class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">Name: </label>
                                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                    <input type="text" class="form-control" id="textbox_id" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-xs-12 col-sm-2 col-md-2 col-lg-2 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">Branch</label>
                                <div required>
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                        <div class="radio">
                                            <label> <input type="radio" name="branch" id="NCR" value="NCR" checked> NCR Team </label>
                                        </div>
                                        <div class="radio">
                                            <label> <input type="radio" name="branch" id="NCT" value="North/Central Luzon"> North/Central Luzon Team </label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                                        <div class="radio">
                                            <label> <input type="radio" name="branch" id="ST" value="South"> South Team </label>
                                        </div>
                                        <div class="radio">
                                            <label> <input type="radio" name="branch" id="VMT" value="Visayas/Mindanao"> Visayas/Mindanao Team </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <h4 class="text-center cover-heading"><b>Please click your Company logo</b></h4>
                            <div id="hel" class ="form-group">
                                <input id="smart" type="image" class="col-xs-4 col-sm-2 col-md-1 col-lg-1 col-lg-offset-5 col-md-offset-5 col-sm-offset-4 col-xs-offset-2" src ="http://i.imgur.com/mh2Hw56.png" value="smart" alt="Submit Form"/> 
                                <input id="sun" type="image" class="col-xs-4 col-sm-2 col-md-1 col-lg-1" src ="http://i.imgur.com/GcL4s0Q.png" value="sun" alt="Submit Form"/>
                            </div>
                        </form>                          
                    </div>
                    <div class='modal-footer'>
                        <center>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        
        <script src='js/jquery.js'></script>
        <script src='js/bootstrap.min.js'></script>
        <script src='js/scripts.js'></script>

    </body>
</html>
