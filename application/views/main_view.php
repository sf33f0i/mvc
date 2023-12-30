<form action="<?$_SERVER['SCRIPT_NAME']?>" method = "POST">
    <input type="text" name = 'name'>
    <input type="text" name = 'value'>
    <input type="submit" name = 'submit'>
</form>
<?php foreach($data as $value ):?>
    <p><?=$value['name']?></p>
<? endforeach; ?>