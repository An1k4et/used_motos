<?php 
    
    include_once "config.php";
    $manu_name = mysqli_real_escape_string($conn, $_POST['brand']);
    $veh_name = mysqli_real_escape_string($conn, $_POST['veh_name']);
    $manu_year = mysqli_real_escape_string($conn, $_POST['manu_year']);
    $driven = mysqli_real_escape_string($conn, $_POST['driven']);
    $owners = mysqli_real_escape_string($conn, $_POST['owners']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $note = mysqli_real_escape_string($conn, $_POST['note']);
    $contact = mysqli_real_escape_string($conn, $_POST['phone_no']);
    if(!empty($manu_name) && !empty($veh_name) && !empty($manu_year) && !empty($driven) && !empty($owners) && !empty($price) && !empty($note) ){
        if(isset($_FILES['image'])){//checking file is uploaded or not
            $img_name = $_FILES['image']['name'];
            $tmp_name = $_FILES['image']['tmp_name'];
            $img_explode = explode('.',$img_name);
            $img_ext=end($img_explode);
            $extension = ['png','jpeg','jpg'];
            if(in_array($img_ext,$extension) == true){
                $time = time(); //storing image with time

                $new_img_name=$time.$img_name;
                if(move_uploaded_file($tmp_name, "images/".$new_img_name)){
                    $sql2 = mysqli_query($conn, "INSERT INTO allads (manufacturer_name, model, manufactured_year, number_of_ownership, kms_driven, expected_price, special_note, pictures, contact) VALUES ('{$manu_name}','{$veh_name}',{$manu_year},{$owners},{$driven},{$price},'{$note}','{$new_img_name}', '{$contact}')");
                    if($sql2){
                        echo "sucess";
                    }
                }
            }
        }
    }
?>




                            