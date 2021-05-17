# Teste PHP #

Lista de exercícios resolvidos. Ao final dessa documentação você pode encontrar os enunciados.

## Requisitos ##

* [PHP](https://www.php.net/downloads)
* [GIT](https://git-scm.com/downloads)

## Tecnlogias utilizadas ##

O PHP foi a linguagem utilizada para desenvolver o projeto:

* [PHP](https://www.php.net/).

## Iniciando a aplicação ##

Para iniciar a aplicação primeiro é necessário clonar o projeto:
```git
git clone https://github.com/anaprzsiczny/teste-php.git
```
Entre na pasta do projeto:
```bash
cd teste-php
```
Execute a aplicação:
```bash
php -S localhost:8000
```

Com o servidor rodando, você já pode acessar a página da aplicação em localhost:8000

## Documentação ##

Toda a documentação do projeto está aqui neste **README.md**

## Enunciados ##

* Crie um script PHP que mostra o nome do país e sua capital usando uma array chamada $location. Ordene a Lista pelo nome da capital e adicione pelo menos 5 entradas no array.

        Exemplo do que deve ser mostrado de saída:

        A capital do Brasil e Brasília
        A capital dos EUA e Washington 
        A capital da Espanha e Madrid 


* Joãozinho vai morder o seu dedo 50% das vezes. Esse exercício será dividido em 2 partes. 

        1. Primeiro, cria uma função chamada foiMordido() que deverá retornar  TRUE para 50% das vezes e FALSE para os outros 50%. A função rand() pode ser útil aqui.
       
        2. Após criar a função, crie um código/página que mostre as frases “Joãozinho mordeu o seu dedo !” ou “Joaozinho NAO mordeu o seu dedo !” usando a função foiMordido() que foi criado na primeira parte.


* Escreva uma função em PHP para pegar determinar a extensão dos 3 arquivos abaixo e mostrar as extensões na tela. As saídas devem ser mostradas em uma lista em ordem alfabética.

        Arquivos de exemplo:
        a) music.mp4
        b) video.mov
        c) imagem.jpeg

        Saida experada:
        1 .jpeg
        2 .mov
        3 .mp4

* Crie um formulário contendo os campos (Nome, Sobrenome, e-mail, telefone, login & senha) e salve as submissões dentro de um arquivo chamado registros.txt. Itens mandatórios para esse exercicio:

        
        1. Os registros devem ser salvos dentro de um array() incremental no arquivo registros.txt
	      2. O formulário deverá validar os campos email e telefone aceitando somente os formatos aceitáveis
	      3. Se possivel nao salvar email ou logins que ja foram registrados anteriormente
	      4. O campo senha deverá ser salvo encriptado. 


* Crie um parser que converte um arquivo XML em um arquivo CSV usando PHP.

* Crie uma Classe para criar um select Field para um user registration form. Após criar essa classe crie um webform simples e adicione esse campo criado.