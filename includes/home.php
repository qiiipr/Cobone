



    <section>

<div id="wrapper">

<?php 

if(isset($_GET['cat']) AND $_GET['cat']>0)
$more  	=	" where cat_id='".$_GET['cat']."' ";
else
$more  	=	"  ";
$result  = $conn->query("SELECT * FROM `offer` $more ORDER BY id DESC");
while($row = mysqli_fetch_assoc($result)){ ?>
    <div class="offer">

        <a href="?id=<?php echo $row['id'];?>"> <img class="offer-image" src="<?php echo $upload_file.$row['image'];?>"></a>

        <h2><?php echo $row['title'];?></h2>

        <p><?php echo nl2br($row['description']);?></p>

        <div class="discount">

            <div class="discount-value">

                <?php echo $row['discount'];?>% OFF

            </div>

            <div class="discount-location">

               <?php echo user_name($row['user_id']);?>

            </div>

        </div>

        <div class="price">

            SAR

            <del><?php echo $row['org_price'];?></del>
            
            <?php 
            $discout = ((100-$row['discount'])/100)*$row['org_price'];
            echo $discout;?>
            <a href="?id=<?php echo $row['id'];?>"> <button class="button2"> VIEW DEAL ></button></a>
        </div>

    </div>

<?php }?>


</div>

</section>
