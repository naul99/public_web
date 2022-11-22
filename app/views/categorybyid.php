<p> Category:
    <?php
    if(is_array($categorybyid)){
    foreach($categorybyid as $key=>$value){
      echo $value['title_category_product'].'<br/>';
    }
}
    ?>

</p>