<?php
    include 'dbconnect.php';
    
    function addApplication($arr){
        $conn = getConnection();
        
        $name = $arr['appNme'];        
        $desc = str_replace("'" , '`', $arr['appDsc']);
        $src = $arr['src'];
        $categoryID = getCategoryID($arr['catOpt']);
        $ioslink = $arr['ioslink'];
        $andlink = $arr['andlink'];
        
        $sql = "INSERT INTO `apps` (AppName, AppDesc, ImgSrc, CatID)
        VALUES ('". $name ."', '". $desc ."', '". $src ."', '". $categoryID ."')";
        $conn->query($sql);
        
        $appID = getAppID($name);
        
        $sql = "INSERT INTO `link` (AppID, IOS, Android)
        VALUES ('". $appID ."', '". $ioslink ."', '". $andlink ."')";           
        $ret = $conn->query($sql);
        
        $conn->close();
        
        return $ret;
    }
    
    function getAppID($appNme){
        $arrApp = null;
        $conn = getConnection();
        
        $sql = "SELECT appID FROM `Apps` where appName = '". $appNme ."' limit 0,1000;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp = $row['appID'];
            }
        }
        
        $conn -> close();
        return $arrApp;        
    }
    
    function getCategoryID($category){
        $arrCat = null;
        $conn = getConnection();
        
        $sql = "select catID from `Category` where catname = '". $category ."' limit 0,1000;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrCat = $row['catID'];
            }
        }
        
        $conn -> close();
        return $arrCat; 
    }
    
    function getCategories(){
        $y = 0;
        $arrApp = array();
        $conn = getConnection();
        
        $sql = 'select CatName from `Category` limit 0,1000;';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y]= $row['CatName'];
                $y = $y + 1;
            }
        }
        
        $conn -> close();
        return $arrApp;
    }
    
    function getApps(){
        $y = 0;
        $arrApp = array();
        $conn = getConnection();
        
        $sql = 'select AppID, AppName from `apps` limit 0,1000;';
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0]= $row['AppID'];
                $arrApp[$y][1]= $row['AppName'];
                $y = $y + 1;
            }
        }
        
        $conn -> close();
        return $arrApp;
    }
    
    function getApp($AppID){
        $arrApp = array();
        
        $arrlink = getAppLinks($AppID);
        $conn = getConnection();
        
        $sql = "SELECT a.appName, a.appDesc, a.imgSrc, a.catID
                FROM  `Apps` a,  `Category` c
                WHERE a.appID = ". $AppID ."
                LIMIT 0 , 1000;";
        $result = $conn->query($sql);
        
        

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $retarr = array(
                    "appn" => $row["appName"],
                    "catn" => $row["catID"],
                    "desc" => str_replace("`", "'", $row["appDesc"]),
                    "imgs" => $row["imgSrc"],
                    "iso" => $arrlink[0],
                    "and" => $arrlink[1]
                );
                
            }
            $retarrs[] = $retarr;
            
            
        }
        
        $conn -> close();
        echo json_encode($retarr);
    }
    
    function getAppLinks($AppID){
        $y = 0;
        $arrApp = array();
        $conn = getConnection();
        
        $sql = "SELECT * 
                FROM  `Link` 
                WHERE appID = ". $AppID ."
                LIMIT 0 , 1000";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[0] = $row["IOS"];
                $arrApp[1] = $row["Android"];
                $arrApp[2] = $row["likenshare"];
                $y = $y + 1;
            }
        }
        
        $conn -> close();
        return $arrApp;     
    }
    
    function updateApp($arr){
        $conn = getConnection();
        
        $sql = 'update apps set AppDesc="'. $arr['desc'] .'", ImgSrc="'. $arr['imgchng'] .'" where AppID='. $arr['appID'];
        
        $ret = $conn->query($sql);
        
        $conn->close();
        
        return $ret;
    }
    
    function deleteApp($AppID){
        
        $conn = getConnection();
        
        $sql = 'delete from Link where AppID='. $AppID;
        $sql2 = 'delete from Apps where AppID='. $AppID;
        
        $conn->query($sql);
        $ret = $conn->query($sql2);
        
        return $sql;
    }
    
    function getEmployees(){
        $y = 0;
        $conn = getConnection();
        
        $arrApp = array();
        
        $sql = 'SELECT Distinct name, 
                type , branch
                FROM employees
                LIMIT 0 , 1000';
        
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0] = $row["name"];
                $arrApp[$y][1] = $row["type"];
                $arrApp[$y][2] = $row["branch"];
                $y++;
            }
        }
        
        return $arrApp;
    }