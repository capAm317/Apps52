<?php
    require_once 'errorhandler.php';
    require_once 'appquery.php';
    
    function createCategoryDropdown(){
        $arrCat = getCategories();
        
        echo '<option>All</option>';
        
        for($ctr = 0; $ctr < count($arrCat); $ctr++){
            echo '<option>' . $arrCat[$ctr] . '</option>';
        }
    }
    
    function createCategoryButtons(){
        $arrCat = getCategories();
        
        $btn = "<div class='btn-group' role='group'>
                <button type='button' class='btn btn-default btnCat' id='All'>All</button>
                </div>";
        
        $head = "<div class='btn-group' role='group'>";
        $class = 'btn btn-default btnCat';
        
        for($ctr = 0; $ctr < count($arrCat); $ctr++){
            $btn = $btn . $head 
                   . "<button type='button' class='". $class ."' id='". $arrCat[$ctr] ."'>"
                   . $arrCat[$ctr] ."</button></div>";
        }
        
        echo $btn;
    }
    
    function createAppCollection($category){
        $arrApp;
        $ctr = 0;
        $item = "";
        $class = "col-lg-3 col-md-4 col-xs-6 thumb-2 appdiv";
        
        if(strtolower($category) == 'all'){
            $arrApp = getApps();
            $totalSet = count($arrApp);
        } else {
            $arrApp = getAppsByCategory($category);
            $totalSet = count($arrApp);
        }
        
        for($y = 0; $y < $totalSet; $y++){                             
            $id = $arrApp[$y][0];
            $name = $arrApp[$ctr][1];
            $cat = $arrApp[$ctr][2]; 
            $src = $arrApp[$ctr][3];
                      
            $item = $item . "<div class='" . $class . "'"
                    . "' id='" . $id . "'>"
                    . "<img class='col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2"
                    . " col-xs-8 col-sm-8 col-md-8 col-lg-8 img-responsive thumbnail appimg'"
                    . "src=" . $src . ">"
                    . "<div class = 'text-center'>"
                    . "<h4 class='col-xs-12 col-sm-12 col-md-12 col-lg-12 lg-title appCTitle'>" . $name
                    . "</h4><p class = 'col-xs-12 col-sm-12 col-md-12 col-lg-12 lg-title appCDesc'>"
                    . $cat . "</p></div>";
            $ctr++;
     
            $item = $item . "</div>";
        }
        
        echo $item;  
    }
    
    function createLinkButtons($Links){
        $BtnDiv =  "<div class = 'row'>"
                .  "<div class = 'text-center'>"
                .  "<div id = 'AppLinks'>";
        
        for($ctr = 0; $ctr < 2; $ctr++){
            
            try{
                switch($ctr){
                    case '1':
                        $BtnDiv = $BtnDiv . "<a href='". $Links[$ctr] ."'>
                                <img alt='Get it on Google Play'
                                    src='http://i.imgur.com/v2V1xEI.png' />
                                </a>";
                        break;
                    case '0':
                        $BtnDiv = $BtnDiv . "<a href='". $Links[$ctr] ."'>
                                <img alt='Get it on Ios App Store'
                                    src='http://i.imgur.com/KksxKiP.png' />
                                </a>";
                        break;
                }
            } catch(Exception $e){       
            }
        }
        
        $BtnDiv = $BtnDiv . "</div></div></div></div>";
        
        return $BtnDiv;
    }
    
    function editModal($AppID){
        $AppInfo = getApp($AppID);
        $Links = getAppLinks($AppID);
        $Title = $AppInfo[0];
        $Category = $AppInfo[1];
        $Desc = $AppInfo[2];
        $Src = $AppInfo[3];
        
        $img = ""
             . "<div class = 'col-xs-12 col-sm-12 col-md-4 col-lg-4'><div class = 'row'>"
             . "<div class = 'col-xs-2 col-sm-2 col-md-1 col-lg-1'> &nbsp; </div>"
             . "<div class = 'col-xs-8 col-sm-8 col-md-10 col-lg-10' id = 'AppImg'>"  
             . "<img src=". $Src
             . " class = 'img-responsive img-rounded text-center' style = 'height: auto; width: 100%;'>"  
             . "</div>"
             . "</div>";
                                    
        $BtnDiv = createLinkButtons($Links);
        
        $AppDesc = "<div class = 'col-xs-12 col-sm-12 col-md-4 col-lg-4'>
                    <h3 id = 'AppTitle'>" . $Title . "</h3>
                    <hr>
                    <h4 id = 'AppCategory'>". $Category ."</h4>
                    <p id = 'AppDesc'>" . $Desc . "</p>
                </div>";
        
        echo $img . $BtnDiv . $AppDesc;
    }
    
    function editlns($AppID){
        $Links = getAppLinks($AppID);
        
        echo "<fb:like href=" . $Links[2] .  "layout='button_count' show_faces='false' width='65' action='like' font='segoe ui' colorscheme='light' />" ;
    }
    
    