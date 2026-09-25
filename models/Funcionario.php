<?php 

class Funcionario{
    // Atributos...
    private int $id;
    private string $nome;
    private string $email;
    private string $funcao;
    private string $login;
    private string $senha;

    public function __construct(string $nome, string $email, string $funcao, string $login, string $senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->funcao = $funcao;
        $this->login = $login;
        $this->senha = $senha;
    }

    // Métodos GETs...


    // Métodos SETs...

    
    
}

?>