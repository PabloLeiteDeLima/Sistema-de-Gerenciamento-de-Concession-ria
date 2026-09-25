<?php 

class Carro{
    // atributos...
    private int $id;
    private string $marca;
    private string $modelo;
    private string $ano; // (int = 2025 ou string = 2025/2026 | 25/26)
    private string $placa;
    private string $preco;
    private string $cambio; 
    private string $observacao;
    
    // Método construtor.
    public function __construct(string $marca, string $modelo, string $ano, string $placa, string $preco, 
                                string $cambio, string $observacao){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
        $this->placa = $placa;
        $this->preco = $preco;
        $this->cambio = $cambio;
        $this->observacao = $observacao;
    }

    // Métodos GETs...
    public function getId(){
        return $this->id;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getAno(){
        return $this->ano;
    }
    public function getPlaca(){
        return $this->placa;
    }
    public function getPreco(){
        return $this->preco;
    }
    public function getCambio(){
        return $this->cambio;
    }
    public function getObservacao(){
        return $this->observacao;
    }

    // Métodos SETs...
    public function setId(int $id):void{  // o :void não deixar retornar 'nada'.
        $this->id = $id;
    }
    public function setMarca(string $marca):void{
        $this->marca = $marca;
    }
    public function setModelo(string $modelo):void{
        $this->modelo = $modelo;
    }
    public function setAno(string $ano):void{
        $this->ano = $ano;
    }
    public function setPlaca(string $placa):void{
        $this->placa = $placa;
    }
    public function setPreco(string $preco):void{
        $this->preco = $preco;
    }
    public function setCambio(string $cambio):void{
        $this->cambio = $cambio;
    }
    public function setObservacao(string $observacao):void{
        $this->observacao = $observacao;
    }
}