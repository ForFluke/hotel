<!DOCTYPE html>
<html>
    <?php include 'header.php'; ?>
    <body>
        <div class="content" >
            <div class="content-add" >
                <div class="row" >
                    <div class="col-lg-12 col-md-12  col-sm-12 header-text">
                        <span class=""> Manage Hotel</span>
                    </div>
                </div>
                <div class="row" >
                    <div class="col-lg-12 col-md-12  col-sm-12 ">
                        <a href="add_hotel.php" class="btn btn-primary">Add Hotel</a> 
                    </div>
                </div>
            </div>
            <div class="content-table" >
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Hotel Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Picture</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 	
                            $i = 1;
                            $sql = "SELECT * FROM hotel " ;
                            $rs = $mysqli->query($sql);
                            $items = array();
                            while($hotel = $rs->fetch_assoc()){
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $hotel['hotel_name']; ?></td>
                                <td><?php echo $hotel['hotel_description']; ?></td>
                                <td>
                                    <a href="#" target="_blank">
                                        <?php echo $hotel['picture']; ?>
                                    </a> 
                                </td>
                                <td>
                                    <a href="#" ><i class="fas fa-edit"></i></a> | <a href="#" ><i class="far fa-trash-alt"></i> </a> 
                                </td>
                            </tr>
                        <?php   
                            $i++;  
                           }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
