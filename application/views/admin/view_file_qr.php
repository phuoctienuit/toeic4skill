<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">

    <textarea rows="25" cols="40" name="content"><?php readfile($fn); ?></textarea>

    <input type="submit" value="Save"> 
</form>