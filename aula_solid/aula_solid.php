<?php

interface TipoCliente
{
    public function descontoCliente();
}

interface DatabaseInterface
{
    public function salvarPedido($valor);
}

interface NotificadorInterface
{
    public function enviar($mensagem);
}



class DescontoVip implements TipoCliente
{
    public function descontoCliente()
    {
        return 0.2;
    }
}

class DescontoRegular implements TipoCliente
{
    public function descontoCliente()
    {
        return 0.1;
    }
}

class MySQL implements DatabaseInterface
{
    public function salvarPedido($valor)
    {
        echo "Salvando pedido no MySQL com valor {$valor} <br>";
    }
}

class Email
{
    public function enviar($mensagem)
    {
        echo "Enviando email: {$mensagem} <br>";
    }
}

class EmailNotificador implements NotificadorInterface
{
    private $email;

    public function __construct()
    {
        $this->email = new Email();
    }

    public function enviar($mensagem)
    {
        $this->email->enviar($mensagem);
    }
}


class Pedido
{
    private $tipoCliente;
    private $valor;
    private $db;
    private $notificador;

    public function __construct(
        TipoCliente $tipoCliente,
        $valor,
        DatabaseInterface $db,
        NotificadorInterface $notificador
    ) {
        $this->tipoCliente = $tipoCliente;
        $this->valor = $valor;
        $this->db = $db;
        $this->notificador = $notificador;
    }

    public function processarPedido()
    {

        $desconto = $this->tipoCliente->descontoCliente();
        $valorFinal = $this->valor - ($this->valor * $desconto);

        $this->db->salvarPedido($valorFinal);

        $this->notificador->enviar("Pedido no valor de {$valorFinal} processado");
    }
}

$tipoCliente = new DescontoVip();
$db = new MySQL();
$notificador = new EmailNotificador();

$pedido = new Pedido($tipoCliente, 100, $db, $notificador);
$pedido->processarPedido();