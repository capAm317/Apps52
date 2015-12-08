<?php
    include 'config.php';
    require_once 'dbconnect.php';

    if($_SERVER['REQUEST_METHOD'] == "GET"){
        $type = $_GET['type'];
        
        switch(strtolower($type)){
            case 'modal': modalHandler($_GET['value']);
                break;
            case 'application': applicationHandler($_GET['value']);
                break;
            case 'category': categoryHandler();
                break;
            case 'categorydd': categoryXSHandler();
        }
    }
    else if($_SERVER['REQUEST_METHOD'] == "POST"){
        $ptype = $_POST['ptype'];
        switch ($ptype){
            case 'empfeed': echo addEmp(); break;
        }
    }
    
    function modalHandler($appID){
        editModal($appID);
    }
    
    function modalHandler2($appID){
        editlns($appID);
    }
    
    function applicationHandler($category){
        createAppCollection($category);
    }
    
    function categoryHandler(){
        createCategoryButtons();
    }
    
    function categoryXSHandler(){
        createCategoryDropdown();
    }
    
    function addEmp(){
        $conn = getConnection();
        $sql = "INSERT INTO `employees` (name, type, branch)
        VALUES ('" . $_POST['name'] . "', '" . $_POST['type'] . "', '" . $_POST['br'] . "')";
        $ret = $conn->query($sql);

        $conn->close();

        return $ret;
    }