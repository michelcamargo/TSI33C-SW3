<meta charset="UTF-8">

<form name="customerData" action="connection.php" method="POST">

    <table border="1">
        <tbody>
        <tr>
            <td>Nome</td>
            <td><input type="text" name="name" value="" /></td>
        </tr>
        <tr>
            <td>Nascimento</td>
            <td><input type="date" name="born" value="" /></td>
        </tr>
        <tr>
            <td>Telefone</td>
            <td><input type="text" name="phone" value="" /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="" /></td>
        </tr>
        <tr>
            <!--SECURITY HTML-->
            <td> <input type="hidden" name="action" value="add_customer"</td>
            <td> <input type="submit" name="Enviar" value="enviar"</td>
        </tr>
        </tbody>
    </table>
</form>