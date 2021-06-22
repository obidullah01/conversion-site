<?php
    if(!empty($_POST['inputval']))
    {
        $type="";
        $typeval="";
        if($_POST['option']=='f2i'){
            $type = "feet to inch";
            $typeval = floatval($_POST['inputval']*12);
        }
        else if($_POST['option']=='i2f'){
            $type = "inch to feet";
            $typeval = floatval($_POST['inputval']/12);
        }
        else if($_POST['option']=='f2c'){
            $type = "feet to centimeter";
            $typeval = floatval($_POST['inputval']*30.5);
        }
        else if($_POST['option']=='c2f'){
            $type = "centimeter to feet";
            $typeval = floatval($_POST['inputval']/30.5);
        }
         else if($_POST['option']=='i2c'){
            $type = "inch to centimeter";
            $typeval = floatval($_POST['inputval']*2.54);
        }
    
        $file = file_get_contents('./data.json');
        $dataJSON = json_decode($file, true);
        $id = intval(end($dataJSON)['id'])+1;
        $inputval = $_POST['inputval'];
    
        $datarow = array(
            "id"=>$id,
            "type"=>$type,
            "val1"=>$inputval,
            "val2"=>$typeval
        );
        array_push($dataJSON, $datarow);
        $dataJSON = json_encode($dataJSON);
        file_put_contents('./data.json', $dataJSON);
        echo "Successfully completed, click <a href='./page3.php'>here</a> to see history";
    }
    else
    {
        echo "Failed, click <a href='./page1.php'>here</a> to enter a value and try again";
    }
        
?>