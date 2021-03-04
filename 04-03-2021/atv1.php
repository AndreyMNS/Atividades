<html>
        <head></head>
        <h1> Lista de Produtos </h1>
    <body>
          <?php
          
          $produtos = array(
          array("Cod" =>0, "Nome" => "Café",   "Qtd" => 5000,"Preço" => 4.90,  "Ptotal" => true),
          array("Cod" =>1, "Nome" => "Açúcar", "Qtd" => 3500, "Preço" => 3.42, "Ptotal" => false),
          array("Cod" =>2, "Nome" => "Leite",  "Qtd" => 2000, "Preço" => 1.96, "Ptotal" => true),
          array("Cod" =>3, "Nome" => "Arroz",  "Qtd" => 3200, "Preço" => 1.45, "Ptotal" => false),
          array("Cod" =>4, "Nome" => "Feijão", "Qtd" => 6000, "Preço" => 4.6,  "Ptotal" => false));
           
                echo "<pre>";
                print_r($produtos);
                echo "</pre>";
                $ajuste = 20;
            
                foreach ($produtos as $produto){
                    if($produto["Ptotal"]== true){
                        $produto["Preço"] += $produto["Preço"] * ($ajuste/100);
    
                        echo "<p> Produto: ".$produto['nome']."-".$produto['Preço']."</p>";
                    }else{
                        echo "<p> Produto ".$produto['nome']."- INATIVO </p>";
                    }
                    }
         
          ?>
        <h1>  Tabela </h1>
        <table>
            <tr>
                <th> Cod  </th>
                <th> Nome</th>
                <th> Qtd  </th>
                <th> Preço      </th>
                <th> PreçoTotal </th>
            </tr>
            <?php
            foreach ($produtos as $produto){
                ?>
                <tr>
                <td> <?php echo $produto ['Cod'];?></td>
                <td> <?php echo $produto ['Nome'];?></td>
                <td> <?php echo $produto ['Qtd'];?></td>
                <td> <?php echo $produto ['Preço'];?></td>
                <td> <?php echo $produto ['PreçoTotal'];?></td>
            </tr>
            <?php    
            }
            ?>
            

        </table>

        
    </body>
</html>
