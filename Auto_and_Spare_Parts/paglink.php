  <!--Categories product area start-->
    <!--Categories product area end-->

    
<div class="categories_product_area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="product_carousel product_details_column5 owl-carousel">
                <div class="single_categories_product">

                  
    <?PHP
						include"db/db.php";

                        $cat_p_id =[];

					//$selecte_id = $_SESSION["uid"];
					$data = "SELECT * FROM categories ";
					$view = mysqli_query($con,$data);
					while($_view = mysqli_fetch_assoc($view))
					{

                        $cat_title = $_view['cat_title'];
                        $cat_p_id[] = $_view['cat_id'];
                        
                    }

                        $data21 = "SELECT * FROM products where product_cat ='$cat_p_id[0]' ";
                        $view21 = mysqli_query($con,$data21);
                        while($_view21 = mysqli_fetch_assoc($view21))
                        {
    
                            $cat_t_img = $_view21['product_image'];
                          
                            

                        
                        
                        ?>

<div class="col-lg-3">
                            <article class="single_product">
                                <figure>
                                    <div class="product_thumb">
                                    <a class="primary_img" href="cat_product_select_sh.php?id=<?php echo $cat_p_id; ?>"> <img src='login/Image_Product/<?php echo $cat_t_img; ?>' /></a>
                                        <div class="label_product">
                                            <span class="label_sale">-52%</span>
                                        </div>
                                        <div class="quick_button">
                                            <a href="cat_product_select_sh.php?id=<?php echo $cat_p_id; ?>" data-bs-toggle="modal" data-bs-target="#modal_box"  title="quick view"><i class="icon-eye"></i></a>
                                        </div>
                                    </div>

                                </figure>
                            </article>
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
  
 
 
 
 
 

 
 
 
 
 <!--Categories product area start


 <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="login/Image_Product/<?php //echo $cat_t_img; ?>" alt=""></a>
                    </div>
                    <div class="categories_product_content">

                        <h4><a href="cat_product_select_sh.php?id=<?php //echo $cat_p_id; ?>"><?php //echo $cat_title;  ?></a></h4>

                    </div>


                <li><a href="cat_product_select_sh.php?id=<?php //echo $cat_p_id; ?>"> <?php //echo $cat_title; ?> </a></li>




  <div class="categories_product_area mb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="categories_product_inner categories_column7 owl-carousel">
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category1.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">


                        <h4><a href="all_product_sh.php"> Body Parts</a></h4>

                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category2.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Car engine</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category3.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Interiors</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category4.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Lighting & lamp</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category5.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Repair Parts</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category6.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Smart Devices</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category7.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Wheels & Tires</a></h4>
                    </div>
                </div>
                <div class="single_categories_product">
                    <div class="categories_product_thumb">
                        <a href="all_product_sh.php"><img src="assets/img/s-product/category3.jpg" alt=""></a>
                    </div>
                    <div class="categories_product_content">
                        <h4><a href="all_product_sh.php"> Smart Devices</a></h4>
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
    
    
    Categories product area end-->


