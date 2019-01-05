<?php
    $breakfast = "SELECT * FROM foods WHERE Categories = 'Breakfast' ORDER BY id ASC";
    $breakfastlist = mysqli_query($link, $breakfast);
    if(mysqli_num_rows($breakfastlist) > 0)
    {
        while($row = mysqli_fetch_array($breakfastlist))
        {
        ?>
            <div class="item">
                <form method="post" action="breakfast.php?action=add&Id=<?php echo $row["Id"]; ?>">
                    <div class="block-34">
                        <div class="image">
                            <a href="#"><img src="<?php echo $row["images"]; ?>" alt="Image placeholder"></a>
                        </div>
                        <div class="text">
                            <h2 class="heading"><?php echo $row["Name"]; ?></h2>
                            <p><?php echo $row["Description"]; ?></p>
                            <div class="price"><sup>$</sup><span class="number"><?php echo $row["Price"]; ?></span></div>
                        </div>
                    </div>
                </form>
            </div>
        <?php      
        }
    }
?>  