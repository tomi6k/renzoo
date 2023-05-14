<?php 
                include "dbconnect.php";
                $sql = "SELECT * FROM `productos-renzoo`";
                $result = mysqli_query($conn, $sql);

                
                
                ?>
<html>
    <div class="container text-center">
        <div class="row">
            <div class="col-3">
                <h6 class="text-decoration-underline">ID</h6>
            </div>
            <div class="col-6">
                <h6 class="text-decoration-underline">PRODUCTO</h6>
            </div>
            <div class="col-3">
                <h6 class="text-decoration-underline">PRECIO</h6>
            </div>
        </div>
        <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <div class="row">
            <div class="col-3">
                <?php echo '<p>' . $row['id-prod'] . '</p>'; ?>
            </div>
            <div class="col-6">
                <?php echo '<p>' . $row['nombre-prod'] . '</p>'; ?>
            </div>
            <div class="col-3">
                <?php echo '<p class="btn btn-warning"> $' . $row['precio-prod'] . '</p>'; ?>
            </div>
        </div>
        <?php } ?>
    </div>
</html>