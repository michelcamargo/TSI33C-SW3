<?php include 'connection.php';

$group = listCustomers();

?>

<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <title>Lista de clientes</title>
    </head>

    <body>
        <h1>Dados do cliente</h1>
        <a href="insert.php">Adicionar</a>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Nascimento</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                </tr>
            </thead>

            <tbody>
            <?php
                foreach($group as $customer){ ?>
                <tr>
                    <td> <?=$customer["c_name"] ?></td>
                    <td> <?=$customer["c_born"] ?></td>
                    <td> <?=$customer["c_phone"] ?></td>
                    <td> <?=$customer["c_email"] ?></td>
                    <td><a href="customer.php?action=update_customer">EDITAR</a></td>
                    <td><a href="connection.php?action=remove_customer">EXCLUIR</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </body>

</html>

