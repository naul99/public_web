<form autocomplete="off" action="http://localhost/blogs_ecommerce/category/insertcategory" method="POST">

    <?php
        if(isset($msg)){
            echo '<span style="color:blue">'.$msg.'</span>';
        }
    ?>
    <table>
    <tr>
        <td>Title</td>
        <td><input type="text" required="1" name="title"></td>
    </tr>
    <tr>
        <td>Desc</td>
        <td><input type="text" required="1" name="description"></td>
    </tr>
    <tr>
        
        <td><input type="submit" name="addcategory" value="insert"></td>
    </tr>

</table>







</form>