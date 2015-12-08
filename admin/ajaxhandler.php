<?php
    require_once 'appquery.php';

    if (is_ajax()) {
        if (isset($_POST['type']) && !empty($_POST['type'])) {
            $action = $_POST['type'];
            switch($action) {
                case 'addItem':echo addItemHandler(); break;
                case 'updateItem':echo updateApp($_POST); break;
                case 'delete':echo deleteHandler($_POST['appID']); break;
            }
        } else {
            if (isset($_GET['type']) && !empty($_GET['type'])) {
                $action = $_GET['type'];
                switch($action) {
                    case 'category': categoryHandler(); break;
                    case 'apps': appsHandler(); break;
                    case 'app': appHandler(); break;
                    case 'report': reportHandler(); break;
                }
            }           
        }
    }

    function is_ajax() {
        return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
    }

    function addItemHandler(){
        $data = $_POST;
        return addApplication($data);
    }
    
    function categoryHandler(){
        $arr = getCategories();

        for($ctr = 0; $ctr < count($arr); $ctr++){
            echo '<option>' . $arr[$ctr] . '</option>';
        }
    }
    
    function appsHandler(){
        $arr = getApps();

        for($ctr = 0; $ctr < count($arr); $ctr++){
            echo '<option value ="'. $arr[$ctr][0] . '">' . $arr[$ctr][1] . '</option>';
        }
    }
    
    function reportHandler(){
        $arr = getEmployees();

        for($ctr = 0; $ctr < count($arr); $ctr++){
            echo '<tr><td>'. $arr[$ctr][0] .'</td><td>'. $arr[$ctr][1] .'</td><td>'. $arr[$ctr][2] .'</td></tr>';
        }
    }
    
    function appHandler(){
        getApp($_GET['selID']);
    }
    
    function updateHandler(){
        $data = $_POST;
        updateApp($data);
    }
    
    function deleteHandler($AppID){
        deleteApp($AppID);
    }