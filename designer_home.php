<?php include('templates/header.php') ?>


<?php 
$data = $conn->query("SELECT * FROM tb_users WHERE id_user='".$_SESSION['id_user']."'");
// $row = $data->fetch_assoc()
?>
<?php $user = $data->fetch_assoc() ?> 

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4 text-center">
      <div class="container">
        <div class="profile">
          <center>
            <img src="assets/img/profile/<?php echo $user['picture_profile'];?>" class="center" style="width:200px;">
          </center>
          <p><strong><?= $user['name'];?></strong><br>
            <p style="font-size:15px;">
              <?php echo $user['email'];?><br>
              <?php echo $user['no_tlp'];?>
            </p>
          </p>
          <hr>
          <p class="pb-3">
          <a href="edit_profile.php?id_user=<?= $_SESSION['id_user']?>" type="button" class="btn btn-primary" style="border-radius:20px;"><?= $_SESSION['role'] ?></a>
          </p>
        </div>
      </div>
    </div>

    <div class="col-sm-8">
          <p><h3>Order List:</h3></p>
          <table class="table table-striped text-center" style="font-size:15px;">
            <thead>
              <tr>
                <th>Customer</th>
                <th>Order</th>
                <th>Deskripsi</th>
                <th></th>
              </tr>
            </thead>
            <?php

            $data = mysqli_query($conn,"SELECT * FROM tb_order INNER JOIN tb_users ON tb_order.user = tb_users.id_user INNER JOIN tb_product ON tb_order.product = tb_product.id_product INNER JOIN tb_status ON tb_order.status = tb_status.id_status WHERE designer='".$_SESSION['id_user']."' ");
            while($row = mysqli_fetch_array($data))
            // var_dump($row);
            {
          ?>
            <tbody>
                <td><?= $row[12]?></td>
                <td><?= $row['product']?></td>
                <td><?= $row['o_deskripsi']?></td>
                <td><a href="designer_detail.php?id_order=<?=$row['id_order']?>" type="button" class="btn btn-primary" style="width: 100%;">Detail Order</a>
                    <?php if($row['status'] == '6'){ ?>
                      <a type="button" class="btn btn-danger mt-2" style="width: 100%;">Pesan Dibatalkan</a>
                    <?php }else{ ?>

                  <?php } ?>
                 </td>
            </tbody>
            <?php }?>
          </table>
    </div>
  </div>
</div>

<?php include('templates/footer.php') ?>