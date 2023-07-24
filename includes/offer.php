<?php
 $id	=	$_GET['id'];

 $result  = $conn->query("SELECT * FROM `offer` where id='$id' ORDER BY id DESC");
		$row = mysqli_fetch_assoc($result); 
		
?>
    <section>
        <div id="wrapper">
            <h4>
                <a href="index.php"> Home/</a>
                <a href="#"><?php echo $row['cat_id'];?>/ </a>
                 <?php echo $row['title'];?>/
                 
                
               

                <div class="content"></div>
            </h4>
            <div class="left">
                <h1><i><?php echo $row['title'];?></i></h1>
                <p><?php echo nl2br($row['description']);?></p>
                <img src="<?php echo $upload_file.$row['image'];?>" alt="Nozomi" width="650" height="300">
                <h2>Highlights</h2>
                <ul>
                  
                <li>If you want more details about any product</li>
                    <li><a href="+9665758949" >Call us to get more info</li>
                </ul>
                <div class="right">
                    <phrase class="phrase"><b>For a limited time only</b></phrase>
                    <br><br>
                    <p>voucher worth SAR 100 <br></p>
                    <form action="/action_page.php">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" min="1">
                        <br><br>
                        <div class="discount"><b>30% off</b></div>
                        <div class="price1"><b>SAR<del><?php echo $row['org_price'];?></del> <?php 
                    $discout = ((100-$row['discount'])/100)*$row['org_price'];
                    echo $discout;?></b></div>
                        <button class="button3"> QUICK CHECKOUT</button>
                        <button class="button4"> ADD TO CART</button>

                        <img class="img mobile" src="img/mobile.png" ALT="mobile" ALIGN=CENTER>
                        <h6>Share this deal:</h6>
                        <a href="#" target="_blank">
                            <img src="img/whatsApp.png" alt="whatsApp" width="30">
                        </a>
                        <a href="#" target="_blank">
                            <img src="img/Email.png" alt="Email" width="30">
                        </a>
                        <a href="#" target="_blank">
                            <img src="img/Gmail.png" alt="Gmail" width="30">
                        </a>
                        <a href="#" target="_blank">
                            <img src="img/massege.png" alt="massege" width="30">
                        </a>
                        <a href="#" target="_blank">
                            <img src="img/facebook.png" alt="facebook" width="30">
                        </a>
                        <a href="#" target="_blank">
                            <img src="img/Link.png" alt="Link" width="30">
                        </a>

                        <a href="#" target="_blank">
                            <img src="img/Add.png" alt="Add" width="30">
                        </a>

                </div>
                </form>
            </div>
        </div>


    </section>


</section>



