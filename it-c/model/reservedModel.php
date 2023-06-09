<?php 

include "../includes/config.php"; 

$method = $_POST['method'];

if(function_exists($method)){ //fnSave
    call_user_func($method);
}
else{
    echo "Function not exists";
}

function fnSave(){
    global $con;
    $productname = $_POST['productname'];
    $description = $_POST['description'];
    $flavor = $_POST['flavor'];
    $date = $_POST['date'];
    $price = $_POST['price'];
    $productid = $_POST['productid'];

    $filename = $_FILES['productimage']['name'];
    $folder = '../uploads/';
    $destination = $folder . $filename;
    move_uploaded_file($_FILES['productimage']['tmp_name'],$destination);

    $query = $con->prepare('call sp_saveUpdateReserved(?,?,?,?,?,?,?)');
    $query->bind_param('ssssisi',$productname,$description,$flavor,$price,$date,$filename,$productid);
    
    if($query->execute()){
        echo 1;
    }
    else{
        echo json_encode(mysqli_error($con));
    }

}

function fnGetProducts(){
    global $con;
    $productid = $_POST['productid'];
    $query = $con->prepare("call sp_getReserved(?)");
    $query->bind_param('i',$productid);
    $query->execute();
    $result = $query->get_result();
    $data = array();
    while($row = $result->fetch_array()){
        $data[] = $row;
    }

    echo json_encode($data);

}
    function DeleteProducts(){
        global $con;
        $productid = $_POST['productid'];
        $query = $con->prepare("DELETE FROM tbl_reserved where productid = ?");
        $query->bind_param('i',$productid);
        $query->execute();
        $query->close();
        $con->close();
    }

?>