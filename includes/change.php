
    <form action="change copy.php"  method="post">
    <?php 
        echo "<input type='hidden' name='idi' value=".$_GET['id'].">"
    ?>
    Type new note: <input type='text' name='mes'>
    <button type="submit" class="butinsert">Change</button>
    </form>