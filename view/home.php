<main class="catalog  mb ">
    <div class="boxleft">
        <div class="banner">
            <img id="banner" src="./img/anh0.jpg" alt="">
            <button class="pre" onclick="pre()">&#10094;</button>
            <button class="next" onclick="next()">&#10095;</button>
        </div>
        <div class="items">
        <?php
              $i=0;
                foreach ($spnew as $sp){
                    extract($sp);
                    $hinh =  $img_path.$img;
                    if(($i==2)||($i==5)||($i==8)){
                        $mr="";
                    }else{
                        $mr="mr";
                    }
                    $linksp="index.php?act=sanphamct&idsp=".$id;
                    
                    echo '<div class="box_items '.$mr.'">
                    <div class="box_items_img">
                <img src="'.$hinh.'" alt="">
               
             </div>
              <a class="item_name" href="'. $linksp .'">'.$name.'</a>
              <p class="price">$'.$price.'</p>
              <form action="index.php?act=addcart" method="POST">
              <input type="hidden" name="id" value"'.$sp['id'].'">
              <input type="hidden" name="name" value"'.$sp['name'].'">
              <input type="hidden" name="img" value"'.$sp['img'].'">
              <input type="hidden" name="price" value"'.$sp['price'].'">
              
              <input type="submit" name="addtocart" value="ADD TO CART">
              </form>
              
           </div>';
                    $i+=1;
                }
              ?>
        </div>
    </div>
    <?php
    include_once "view/boxright.php";
    ?>

</main>
<!-- BANNER 2 -->