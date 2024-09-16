<?php 
include 'config.php';

class Oficina {

   private $conn;

    public function __construct(mysqli $conn)
    {
        $this->mysql = $conn;
    }
    public function exibirOficina(): array
    {
        $resultado = $this->mysql->query('SELECT * FROM oficina');
        $oficinas = $resultado->fetch_all(MYSQLI_ASSOC);
         
        return $oficinas;
    }

    public function adicionar(string $oficina, string $palestrante) void{
        $insereOficina = $this->mysql->prepare('INSERT INTO `oficina`( `oficina`, `palestrante`) VALUES (?,?)');
        $insereOficina->bind_param('ss', $oficina, $palestrante);
        $insereOficina->execute();
    }
}
?>
