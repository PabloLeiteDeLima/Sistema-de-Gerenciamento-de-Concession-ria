# 🚗 AutoDrive - Sistema de Gerenciamento de Concessionária  

O "AutoDrive" é um sistema completo para gerenciamento de estoque de veículos de uma concessionária. O projeto conta com uma área administrativa restrita protegida por login para o gerenciamento do estoque (CRUD).  

-> Este projeto foi desenvolvido com foco em boas práticas de programação, utilizando uma arquitetura robusta no backend e validações completas no frontend.  

## 🚀 Tecnologias Utilizadas:  

### Frontend: (Está parte do front foi criada por I.A) demonstrando o contato e trabalho em "equipe" homem / máquina, que a tecnologia esta nos proporcionando!  
* **HTML5** & **CSS3**: Estrutura semântica e estilização moderna, totalmente responsiva.
* * **JavaScript (Vanilla)**: Validações de formulários em tempo real e máscaras dinâmicas (como formatação de moeda R\$ e placas).

### Backend & Banco de Dados: (criada por mim: Pablo Leite de Lima).  
* **PHP 8**: Linguagem principal do servidor.
* * **Programação Orientada a Objetos (POO)**: Código modular, reutilizável e de fácil manutenção.
* **Padrão Arquitetural MVC**: Separação clara de responsabilidades (*Model-View-Controller*).
* **PDO (PHP Data Objects)**: Camada segura de abstração de banco de dados.
* **MySQL**: Banco de dados relacional para persistência das informações.

## 🛡️ Segurança Implementadas:  
* **Prevenção contra SQL Injection**: Uso obrigatório de *Prepared Statements* (`prepare()` e `bindValue()`) em todas as consultas ao banco de dados.
* **Validação Dupla**: Os dados são validados no Frontend (UX/Velocidade) com JavaScript e revalidados no Backend (Segurança) com PHP.

## 📁 Estrutura do Projeto (Padrão MVC)

meu-projeto-concessionaria/
│
├── config/                  # Configurações globais e conexão PDO
├── models/                  # Classes de negócio e persistência de dados (Models)
├── controllers/             # Processamento de requisições e regras de negócio (Controllers)
├── views/                   # Páginas HTML/PHP apresentadas ao usuário (Views)
└── public/                  # Arquivos estáticos globais  

****** DEIXO ABERTO PARA DICAS E SUJESTOES ******  
LINKEDLN-> https://www.linkedin.com/in/pablo-leite-254147249/
    ├── css/                 # Estilos visuais das páginas
    └── js/                  # Scripts de validação e máscaras
