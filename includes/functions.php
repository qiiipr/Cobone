
<?php

function test_input($val){
    $val = strip_tags($val); // حذف اكواد html
    $val = trim($val); // حذف المسافات من البداية والنهاية
    $val = addslashes($val);
    return $val; // ارجاع قيمة الدالة
}


    function checkEmail($email) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){return TRUE;}
        return FALSE;
    }


function msg($type,$note){
	
	if($type=='alert'){
	echo '<div class="alert">'.$note.'</div>';
	}else{
	echo '<div class="succes">'.$note.'</div>';
	}
}


function user_name($id){
	// 
	global $conn;
	$result = $conn->query("SELECT * FROM `users` WHERE id='$id' ");
	$row = mysqli_fetch_assoc($result);
	return $row['first_name']." ". $row['last_name'];	
}

?>
