<html>
    <head>
    
     </head>
    <h1> Produto </h1>
        <body>
        <form  name="formCadastro" method = "POST" action = "index1.php">
                Cod: <input type = "num" name ="cod" /><br />
                Nome: <input type = "text" name ="nome" /><br />
                Qtd: <input type = "num" name ="qtd" /><br />
                PUni: <input type = "num" name ="puni" /><br />
                PTt: <input type = "num" name ="ptt" /><br />
                <input type = "submit" name = "button" value = "Salvar" />
            </form>
            <?php
        
        @$Cod = $_POST['cod'];
        @$Nome = $_POST['nome'];
        @$Qtd = $_POST['qtd'];
        @$Puni = $_POST['puni'];
        @$PTT = $_POST['ptt'];   
        ?>
         <h2> Lista de Produtos </h2>
        <table>
        <tr>
                <th> Cod </th>
                <th> Nome</th>
                <th> Qtd  </th>
                <th> Preço</th>
                <th> Preço Total </th>
            </tr>
           
             
                <tr>
                <td> <?php echo $Cod?></td>
                <td> <?php echo $Nome;?></td>
                <td> <?php echo $Qtd;?></td>
                <td> <?php echo $Puni;?></td>
                <td> <?php echo $PTT;?></td>
            </tr>
        </table>
         </body>
</html>
