<?php include_once("includes/header.php") ?>
<table id="dtMaterialDesignExample" class="table table-striped" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Id
      </th>
      <th class="th-sm">Country
      </th>
      <th class="th-sm">Rooms
      </th>
      <th class="th-sm">Checkin
      </th>
      <th class="th-sm">Checkout
      </th>
      <th class="th-sm">NOrooms
      </th>
      <th class="th-sm">NOadults
      </th>
      <th class="th-sm">NOchildrens
      </th>
      <th class="th-sm">Firstname
      </th>
      <th class="th-sm">Lastname
      </th>
      <th class="th-sm">Email
      </th>
      <th class="th-sm">Phone
      </th>
    </tr>
  </thead>
  <tbody>
      <?php
          $query = "SELECT * FROM reservation ORDER BY Id ASC";
          $result = mysqli_query($link, $query);
          if(mysqli_num_rows($result) > 0)
          {
              while($row = mysqli_fetch_array($result))
              {
              ?>
              <tr>
                <form method="post" action="reservation.php?action=add&Id=<?php echo $row["Id"]; ?>">
                    <td><?php echo $row["Id"]; ?></td>
                    <td><?php echo $row["country"]; ?></td>
                    <td><?php echo $row["rooms"]; ?></td>
                    <td><?php echo $row["checkin"]; ?></td>
                    <td><?php echo $row["checkout"]; ?></td>
                    <td><?php echo $row["norooms"]; ?></td>
                    <td><?php echo $row["noadults"]; ?></td>
                    <td><?php echo $row["nochildren"]; ?></td>
                    <td><?php echo $row["firstname"]; ?></td>
                    <td><?php echo $row["lastname"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["phone"]; ?></td>
                </form>
              </tr>
          <?php      
              }
          }
      ?>    
  </tbody>
</table>
<?php include_once("includes/footer.php") ?>