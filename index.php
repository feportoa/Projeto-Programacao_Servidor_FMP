<?php
 
$nome = '';
 
if (isset($nome) && empty($nome) == false) {
    echo $nome;
}
 
function retornarEnderecoFormatado($endereco, $quantidade_lixo, $teste)
{
    return 'Endereço: ' . $endereco . '. Quantidade de lixo: ' . $quantidade_lixo . '.' . ' Teste: ' . $teste;
}
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Meu Documento</title>
</head>
 
<body class="bg-gray-100">
    <form action="index.php" method="GET" class="w-full max-w-[768px] flex flex-col p-10 border shadow mx-auto mt-10 bg-white space-y-3">
        <?php
        if (isset($_GET['endereco']) && isset($_GET['quantidadeLixo']) && isset($_GET['campoTeste'])) :
        ?>
            <div><b>Endereço:</b> <?php echo $_GET['endereco'] ?></div>
	    <div><b>Complemento:</b> <?php echo $_GET['complemento']?></div>
            <div><b>Quantidade de Lixo:</b> <?php echo $_GET['quantidadeLixo'] ?></div>
	    <div><b>Resultado do teste: "</b><?php echo $_GET['campoTeste']?><b>"</b></div>
            <a href="index.php" class="text-blue-500 font-bold">Voltar</a
        <?php
	return;
        endif;
	?> 

        <input type="text" name="endereco" placeholder="Endereço" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="text" name="complemento" placeholder="Complemento" class="py-2 px-2 border border-gray-300 outline-none">
        <input type="number" name="quantidadeLixo" placeholder="Quantidade de lixo" class="py-2 px-2 border border-gray-300 outline-none">
	<input type="text" name="campoTeste" placeholder="Campo de testes" class="py-2 px-2 border border-gray-300 outline-none"/>
	<button type="submit" class="bg-blue-500 text-white font-bold py-2">Enviar</button>

    </form>
</body>
 
</html>
