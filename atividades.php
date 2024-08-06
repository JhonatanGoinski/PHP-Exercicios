<?php
// ATV CONTA BANCARIA
// Consultar saldo da conta, Sacar valor da conta e depositar valor na conta.

$saldo = 1_000;
$titularConta = "Jhonatan Goinski";

echo "*******************************\n";
echo "BRADESCO CONTA \n";
echo "Titular: ", $titularConta, "\n";
echo "*******************************\n";
do{
    echo "*******************************\n";
    echo "1 - Consultar saldo atual\n";
    echo "2 - Sacar valor \n";
    echo "3 - Depositar valor\n";
    echo "4 - Sair\n";
    echo "*******************************\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao){
        case 1:
            echo "*******************************\n";
            echo "Titular: $titularConta\n";
            echo "Saldo atual: $saldo\n";
            echo "*******************************\n";
            break;
        case 2:
            echo "Qual valor deseja sacar? ";
            $valorSacar = (float) fgets(STDIN);

            if ($valorSacar > $saldo){
                echo "Saldo insuficiente\n";
            } else{
                $saldo -= $valorSacar;
            }
            break;
        case 3:
            echo "Quanto deseja depositar?\n";
            $valordeposito = (float) fgets(STDIN);
            $saldo += $valordeposito;
            break;
        case 4:
            echo "Obrigado!\n";
            break;
        default:
            echo "Opção inválida";
            break;
    }
} while ($opcao != 4);
