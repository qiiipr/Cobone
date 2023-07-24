<?php 
$max_size = "50000";
$allowsType = array ('png','jpg','gif');
// ;
?>
<section class="input">
        <h3>Add Offer</h3>
        <div id="wrapper">
            <h4>
                <a href="index.php"> Home</a>
                <a href="#"> Add Offer</a>
            </h4>

			<?php
			
				if(isset($_POST['submit'])){
					

		$title					=	test_input($_POST['title']);	
		$description			=	test_input($_POST['description']);	
		$org_price				=	test_input($_POST['org_price']);	
		$discount				=	test_input($_POST['discount']);	
		$cat_id					=	test_input($_POST['cat_id']);	
		$user_id				=	$_COOKIE['id'];	
		$quantity				=	test_input($_POST['quantity']);	
		
		
		if (isset($_FILES) AND !empty($_FILES['img']) ){
	
			$ext 			= 	pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
			$size			=	$_FILES['img']['size']; 
			$img		=	time().".".$ext;
			if($size<=$max_size){
				if(in_array($ext,$allowsType)){
					if(is_uploaded_file($_FILES['img']['tmp_name']) ) {
						$newPath = $upload_file . $img; 
						
						if(move_uploaded_file($_FILES['img']['tmp_name'],$newPath)) {	
						
					
							$sql	=	"INSERT INTO `offer` (`id`, `title`, `image`, `description`, `org_price`, `discount`, `cat_id`, `user_id`, `quantity`, `creation_date`) VALUES (NULL, '$title', '$img', '$description', '$org_price', '$discount', '$cat_id', '$user_id', '$quantity', CURRENT_TIMESTAMP ) ";
							 mysqli_query($conn,$sql) or die(mysqli_error($conn));
							 msg('succes','Succes Added your Offer ');
							 header("refresh:3; url=index.php");
							 die();
						}
					}
				}else{
                    msg("alert","Please select yoour file from your PC");
				
				
				}
		  }else{
			 msg("alert", "Size file is big, please select another file");
		  }
		}else{
			
			msg("alert", "Type file not allow, please select another file");
			
		}
      
    
			
		
		
		
					}
			
			?>
			
			
        </div>
 		
        <form  action="" method="POST" enctype="multipart/form-data" >
            <p>
                <label>Offer Title:</label><br>
                <input type="text" name="title" placeholder="Offer Title Here..." id="input-text">
            </p>

            <p>
                <label>Offer Category:</label><br>
                <select id="input-select"  name="cat_id"  >
					 <?php 
					$result = $conn->query("SELECT * FROM `category` ");
						while($row	=	mysqli_fetch_assoc($result))
							echo ' <option value="'.$row['id'].'">'.$row['title'].'</option>';
                ?>

                </select>
            </p>

            <p>
                <label>Offer Image</label><br>
                <input type="file" name="img" placeholder="Upload file.." id="input-file"  >
            </p>

            <p>
                <label>Offer Description:</label><br>
                <textarea rows="3" name="description" placeholder="Offer Description Here.." id="input-area"  required ></textarea>
            </p>


            <p>
                <label>Original Price(SAR):</label><br>
                <input type="number" name="org_price" placeholder="Example:20.75" min="0.0" step="0.1"
                    id="input-number"  required >
            </p>

            <p>
                <label>Discount(%):</label><br>
                <input type="number" name="discount" placeholder="Example:30" min="1" max="100" id="input-discount"  required >
            </p>

            <p>
                <label>Quantity:</label><br>
                <input type="number" name="quantity" placeholder="Quantity Here.." min="1" id="input-Quantity"  required >
            </p>

            <p>
                <button id="submit" name="submit" type="submit"> Save </button>
            </p>
        </form>
    </section>
 
