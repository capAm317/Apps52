<?php
    require_once 'dbconnect.php';

    function getFeatured(){
        $y = 0;
        $arrApp = array();
        $conn = getConnection();
        
        $sql = "select f.imgSrc from apps a, featured f where a.appID = f.appID;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y] = $row["imgSrc"];
                $y = $y + 1;
            }
        } else {
            echo "0 results";
        }
        
        $conn -> close();
        return $arrApp;        
    }
    
    function getCategories(){
        $y = 0;
        $arrApp = array();
        $conn = getConnection();
        
        $sql = "SELECT catName
               FROM  `Category` 
               LIMIT 0 , 1000";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y]= $row["catName"];
                $y = $y + 1;
            }
        }
        
        $conn -> close();
        return $arrApp;
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
    
    function getApp($AppID){
        $arrApp = array();
        $conn = getConnection();
        
        $sql = "SELECT a.appName, c.catName, a.appDesc, a.imgSrc
                FROM  `Apps` a,  `Category` c
                WHERE a.catID = c.catID
                AND a.appID = ". $AppID ."
                LIMIT 0 , 1000;";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[0] = $row["appName"];
                $arrApp[1] = $row["catName"];
                $arrApp[2] = str_replace("`", "'", $row["appDesc"]);
                $arrApp[3] = $row["imgSrc"];
            }
        }
        
        $conn -> close();
        return $arrApp;
    }
    
    function getApps(){
        $y = 0;
        $arrApp = array(array());
        $conn = getConnection();
        
        $sql = "SELECT a.appID, a.appName, c.catName, a.imgSrc
                FROM  `Apps` a,  `Category` c
                WHERE a.catID = c.catID
                LIMIT 0 , 1000";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0] = $row["appID"];
                $arrApp[$y][1] = $row["appName"];
                $arrApp[$y][2] = $row["catName"];
                $arrApp[$y][3] = $row["imgSrc"];
                $y = $y + 1;
            }
        } else {
            echo "0 results";
        }
        
        $conn -> close();
        return $arrApp;
    }
    
    function getAppsByCategory($category){
        $y = 0;
        $arrApp = array(array());
        $conn = getConnection();
        
        $sql = "SELECT a.appID, a.appName, c.catName, a.imgSrc
                FROM  `Apps` a,  `Category` c
                WHERE a.catID = c.catID
                AND c.catName =  '". $category ."'
                LIMIT 0 , 1000";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0] = $row["appID"];
                $arrApp[$y][1] = $row["appName"];
                $arrApp[$y][2] = $row["catName"];
                $arrApp[$y][3] = $row["imgSrc"];
                $y = $y + 1;
            }
        } else {
            echo "0 results";
        }
        
        $conn -> close();
        return $arrApp;
    }
    
    function getXApps($totalApps){
        $y = 0;
        $arrApp = array(array());
        $conn = getConnection();
        
        if($GLOBALS["lastCat"] != "all"){
            $GLOBALS["currRow"] = 0;
        }
        
        $sql = "select * from apps limit" . $GLOBALS["currRow"] . " ," . $totalApps . ";";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0] = $row["appName"];
                $arrApp[$y][1] = $row["imgSrc"];
                $arrApp[$y][2] = $row["category"];
                $y = $y + 1;
            }
        } else {
            echo "0 results";
        }
        
        return $arrApp;
        
    }
    
    function getXAppsByCategory($totalApps, $category){
        $y = 0;
        $arrApp = array(array());
        $conn = getConnection();
        
        if($GLOBALS["lastCat"] != $category){
            $GLOBALS["currRow"] = 0;
        }
        
        $sql = "select * from apps a, categories c where a.categoryID = c.categoryID and c.category = '"
                . $category . "' limit " . $GLOBALS["currRow"] . " , " . $totalApps . " ;";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $arrApp[$y][0] = $row["appName"];
                $arrApp[$y][1] = $row["imgSrc"];
                $arrApp[$y][2] = $row["category"];
                $y = $y + 1;
            }
        } else {
            echo "0 results";
        }

        return $arrApp;      
    }
    
   
    