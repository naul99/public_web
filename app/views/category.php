<p> Category:
    <?php
    if(is_array($category)){
    foreach($category as $key=>$value){
      echo $value['title_category_product'].'<br/>';
    }
}
    ?>

</p>