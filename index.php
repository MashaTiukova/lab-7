<?php
include __DIR__.'/calc.php';
?>
<form action="/index.php" method="POST">
 <input type="text" name="x">
 <select name="operation">
 <option value="sum">+</option>
 <option value="diff">-</option>
 <option value="del">/</option>
 <option value="multiply">*</option>
 </select>
 <input type="text" name="y">
 <button type="submit">Выполнить действие</button>
</form>
