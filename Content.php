 <?php
include_once("connection.php");
?>
<hr>
     <div class="slider-area">

			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="images/mockhoa.jpg" alt="Slide">
						<div class="caption-group">

					</li>

</ul>
        
    </div>
			
    </div> 
    <hr>
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title"><strong><a color="blue">NEW TOYS</a></h2></strong>
                        <div class="product-carousel">
                           <?php

		  				   	$result = pg_query($conn, "SELECT * FROM product" );
			
			                if (!$result) { 
                                die('Invalid query: ' . pg_error($conn));
                            }
		
			            
			                while($row = pg_fetch_array($result, NULL, PGSQL_ASSOC)){
				            ?>
				            
                            <div class="single-product">
                                <div class="product-f-imagemu">
                                   <img src="img/<?php echo $row['pro_image']?>" width="550" height="450">
                                    <div class="product-hover">
                                        <a href="?page=1sanpham&&id=<?php echo  $row['pro_image']?>" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href="?page=quanly_chitietsanpham&ma=<?php echo  $row['product_id']?>"><?php echo  $row['product_name' ]?></a>
                                </h2>
                                    
                                <div class="product-carousel-price">
                                    <ins><?php echo  $row['Price']?>,0$</ins> 
                                </div> 
                            </div>
                
                <?php
				}
				?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
   
  