<br>
    <hr>


    <div class="bg-div">
        <nav>
            <ul>
                <li><a href="index.php">ALL DEALS</a></li>
                <li><a href="#" class="list">DELIVERY&TAKE-AWAY </a></li>
                <li><a href="#">BEST SELLERS</a></li>
                
                <?php 
					$result = $conn->query("SELECT * FROM `category` ");
						while($row	=	mysqli_fetch_assoc($result))
							echo ' <li><a href="?cat='.$row['id'].'">'.$row['title'].'</a></li>';
                ?>
             
            </ul>
        </nav>
    </div>



    <br>

