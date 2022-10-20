<html>
<head>
    <style>
        </style>
</head>

<body>
<center>
    <form name="agg" action="agg.php" method ="post">
        <table border="1">
    
        <tr>
        <td colspan="4"><label>Agregar servicio </label></td>
        </table></tr>

        <tr><td colspan="4"><label>registrar</label></td></tr>

        <td><label>codigo</label></td><td><input type="text" value="" maxlength="7" name="txtcodigo"></td>
        <td><label>peso</label></td><td><input type="text" value="" maxlength="2" name="txtpeso"  maxlength="2" size="10"></td>
        <td><label>valor</label></td><td><input type="text" value="" maxlength="10" name="txtvalor"  maxlength="2" size="10"></td>

        <tr><td colspan="4" align="center">
        <input type="submit" value="nuevo" name="limpiar">
        <input type="submit" value="grabar" name="grabar">
        <input type="submit" value="modificar" name="modificar">
        <input type="submit" value="eliminar" name="eliminar">
</td>
<tr>
</center>
</body>
