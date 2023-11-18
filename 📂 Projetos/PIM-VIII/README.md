
# Projeto Integrado Multidisciplinar - PIM VII

<div align="center">

![Logo desenvolvida para o trabalho](./img/PIM-VIII-LOGO.png)

<br>

![](https://geps.dev/progress/10)

</div>

- Tema: Sistema de Marketplace para compra e venda de produtos diversos via app/web;

O que precisa entregar (por matéria):

### Desenvolvimento de Software para internet
1. Código ASPX interface gráfica com usuário ASP.net
2. Inclua no trabalho as capturas de tela
3. Incluir no trabalho o código ASPX


### Tópicos Especiais de Programação Orientada a Objetos
1. Protótipo de interface gráfica com usuário Android usando XML
2. Inclua as capturas de tela
3. Inclua código XML


### Programação Orientada a Objetos II
1. Código C# acesso ao Banco de Dados
2. Codificar as classes de entidades:
    - Cliente
    - Carrinho
    - Produto
    - Vendedor
3. Codificar a classe CarrinhoRepository
4. Implementar os métodos da classe CarrinhoRepository

- O diagrama Entidade-Relacionamento do trecho do banco de dados sob responsabilidade da equipe JÁ FOI DADO, a partir dele desenvolve-se o mecanismo de acesso em C#
- O diagrama de Classes do mecanismo de acesso ao trecho do banco de dados também já foi dado


# Sumário

1. **Introdução**
    - 1.1 Contexto e objetivos do Projeto

2. **Interface Gráfica Android**
    - 2.1 Android usando XML
    - 2.2 Prints

3. **Interface Gráfica Desktop**
    - 3.1 Web/Desktop usando ASP.NET
    - 3.2 Prints 

4. **Banco de Dados**
    - 3.1 Classes de Entidades
        - Cliente
        - Carrinho
        - Produto
        - Vendedor
    - 3.2 Classe CarrinhoRepository
        - Lógica dos métodos

5. **Conclusão**
    - 6.1 Retomada da proposta inicial
    - 6.2 Resumo dos Principais Pontos

6. **Referências**
    - 7.1 Fontes de Informação Utilizadas

# Classes de entidade

|     | **CLIENTE**  |               |
|-----|--------------|---------------|
| PK  | ID           | INTEGER       |
| PK  | NOME         | VARCHAR(256)  |
| PK  | CPF          | BIGINT        |
| PK  | EMAIL        | VARCHAR(70)   |
| PK  | SENHA        | VARCHAR(25)   |
| FK  | ENDERECO_ID  | INTEGER       |

|     | **CARRINHO**     |               |
|-----|------------------|---------------|
| PK  | ID               | INTEGER       |
| PK  | DATA_PEDIDO      | DATE          |
| PK  | VALOR_TOTAL      | FLOAT(7,2)    |
| FK  | STATUS_PEDIDO_ID | INTEGER       |
| FK  | CLIENTE_ID       | INTEGER       |

|       | **ITEM_CARRINHO**  |               |
|-------|--------------------|---------------|
| PK,FK | CARRINHO_ID        | INTEGER       |
| PK,FK | PRODUTO_ID         | INTEGER       |
|       | QUANTIDADE         | VARCHAR(45)   |
|       | TOTAL              | FLOAT(7,2)    |

|     | **PRODUTO**   |               |
|-----|---------------|---------------|
| PK  | ID            | INTEGER       |
| PK  | DESCRICAO     | VARCHAR(45)   |
| PK  | PRECO         | FLOAT(5,2)    |
| PK  | IMAGEM        | VARCHAR(200)  |
| PK  | STATUS        | BOOL          |
| FK  | VENDOR_ID     | INTEGER       |
| FK  | CATEGORIA_ID  | INTEGER       |

|     | **VENDEDOR**  |               |
|-----|---------------|---------------|
| PK  | ID            | INTEGER       |
| PK  | RAZAO_SOCIAL  | VARCHAR(100)  |
| PK  | NOME_FANTASIA | VARCHAR(70)   |
| PK  | EMAIL         | VARCHAR(70)   |
| PK  | SENHA         | VARCHAR(25)   |
| PK  | CNPJ          | VARCHAR(18)   |
| PK  | COMISSAO      | INTEGER       |
| FK  | ENDERECO_ID   | INTEGER       |

# Divisão de tarefas

## Semana 1

- [X] Dia 1: Planejamento e Escopo (2 horas)

| Quem fará | Tempo de Execução  | Descrição                                                         | 
|-----------|--------------------|-------------------------------------------------------------------|
| Pedro     | 1 hora             | Desenvolver um Plano de Negócios para a startup (Empreendedorismo)|
| Lucas     | 1 hora             | Redigir a introdução e o resumo do trabalho                       |

- [X] Dia 2: Plano de Negócios (3 horas)

| Quem fará | Tempo de Execução  | Descrição                                                         | 
|-----------|--------------------|-------------------------------------------------------------------|
| Pedro     | 1 hora             | 2.1 Desenvolvimento do Plano de Negócios                          |
| Allan     | 1 hora             | 2.2 Estratégias Empresariais                                      |
| Lucas     | 1 hora             | 3.1 Requisitos Funcionais e Não Funcionais                        |

- [x] Dia 3: Requisitos e Diagramas (3 horas)

| Quem fará | Tempo de Execução  | Descrição                                                         | 
|-----------|--------------------|-------------------------------------------------------------------|
| Lucas     | 1 hora             | 3.2 Diagrama de Caso de Uso                                       |
| Pedro     | 1 hora             | 3.3 Diagrama de Atividades                                        |
| Allan     | 1 hora             | 4.1 Diagrama de Classes                                           |

- [x] Dia 4: Diagramas e Metodologia (3 horas)

| Quem fará | Tempo de Execução  | Descrição                                                         | 
|-----------|--------------------|-------------------------------------------------------------------|
| Pedro     | 1 hora             | 4.2 Diagrama de Sequência                                         |
| Lucas     | 1 hora             | 4.3 Diagrama de Componentes e de Implantação                      |
| Pedro     | 1 hora             | 4.4 Metodologia de Desenvolvimento                                |

- [x] Dia 5: Gerenciamento de Projeto (3 horas)

| Quem fará | Tempo de Execução  | Descrição                                                         | 
|-----------|--------------------|-------------------------------------------------------------------|
| Allan     | 1 hora             | 5.1 Termo de Abertura de Projeto                                  |
| Pedro     | 1 hora             | 5.2 Matriz de Papéis e Responsabilidades                          |
| Lucas     | 1 hora             | 5.3 Cronograma de Atividades e Custos                             |


> Prazo do desenvolvimento de 9 dias

# Considerações finais

Agradeço a disposição de todos neste projeto, espero que façamos história com o mesmo.

- Integrantes:
  - Pedro José Laurenti de Matos (RA: 0621134)
  - Lucas Andrade da Silva (RA: 0621821)
  - Allan Cândido Mendes (RA: 0618169)

## Leia aqui

<div style=" display: flex; flex-direction: row; align-items: center; justify-content: center; ">

![ [Github com arquivos do projeto](https://github.com/Pedro-Laurenti/ADS-UNIP/tree/main/%F0%9F%93%82%20Projetos/PIM-VII) ](img/github.png){width=50%}

![ [Documentação final](https://www.orbytesistemas.com/pimvii/PIM-VII.pdf) ](img/latex.png){width=50%}



</div>
