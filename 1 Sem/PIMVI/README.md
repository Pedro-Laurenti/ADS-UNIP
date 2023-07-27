# Projeto Integrado Multidisciplinar - PIM VI

<div align="center">

![Logo desenvolvida para os meus trabalhos PIM](./p%C3%A1gina%20de%20explica%C3%A7%C3%B5es/img/PIM-VI-LOGO.png)

</div>

## Tema:

> Levantamento e análise de requisitos de um sistema de controle de vendas de uma loja de jogos, acessórios e produtos geek. <b>Aparentemente é um trabalho puramente teórico</b>.

O projeto consiste em uma análise de requisitos para um sistema de controle de vendas de uma loja <i>geek</i>. A loja atualmente utiliza planilhas em Excel para gerenciar suas vendas, mas deseja um sistema mais eficiente e automatizado. O objetivo é criar um software desktop com módulos de acessibilidade, visando atender a todos os usuários, inclusive aqueles com deficiência. O sistema deve permitir o controle de estoque, gerenciamento de vendas e considerar a raridade e disponibilidade dos produtos. O foco principal é proporcionar um melhor gerenciamento das vendas efetuadas aos clientes.

## Escopo:

As disciplinas abordadas nesse PIM VI serão: <b> Análise de Sistemas Orientada a Objetos</b>, <b>Banco de Dados</b> e <b>Gestão Estratégica de Recursos Humanos</b>;

o trabalho final deverá contemplar:

<br>

1. [X] &nbsp; Cenário e Situação Problema:

    - Criar um cenário fictício que envolva uma loja de jogos, acessórios e produtos geek.
    - Identificar um problema ou desafio relacionado ao controle de vendas nessa loja.
      - Exemplo: A loja de produtos geek "GeekStore" deseja otimizar o controle de estoque e vendas para oferecer um melhor atendimento aos seus clientes e aumentar a eficiência operacional.

<br>

2. [X] &nbsp; Funções de Negócio:

    - Identificar as principais funções de negócio do sistema de controle de vendas da loja, como cadastro de produtos, cadastro de clientes, controle de acesso ao sistema, etc.
      - Exemplo: As funções de negócio incluem cadastro de produtos, cadastro de clientes, registro de vendas, consulta de estoque e controle de acesso ao sistema.

<br>

3. [X] &nbsp; Pesquisa de Soluções:

    - Pesquisar as soluções disponíveis no mercado que atendem às necessidades do sistema proposto.
    - Comparar essas soluções com a solução que está sendo proposta, considerando critérios como funcionalidades, custos, escalabilidade, etc.
      - Exemplo: Será realizada uma pesquisa de sistemas de controle de estoque e vendas no mercado, como o sistema "InventoryPro", para comparar suas funcionalidades com a solução proposta para a GeekStore.

<br>

4. [X] &nbsp; Processos de Negócio:

    - Para cada função de negócio identificada, definir os processos que devem ser realizados para executar essa função. Por exemplo, o processo de cadastro de produtos, o processo de venda, etc.
      - Exemplo: O processo de negócio para o cadastro de produtos inclui a inserção de informações como nome, categoria, fabricante, quantidade e valor. O processo de negócio para o registro de vendas envolve a seleção de produtos, informações do cliente e geração de um código único para a venda.

<br>

5. [X] &nbsp; Automação de Operações:

    - Identificar quais operações dos processos de negócio podem ser automatizadas.
    - Essas operações podem incluir o cadastro de produtos e clientes, geração de códigos de venda, controle de pagamentos, etc.
      - Exemplo: No processo de cadastro de produtos, a operação de geração automática de código de barras pode ser automatizada para agilizar o processo. No processo de registro de vendas, a operação de cálculo automático do valor total da venda pode ser automatizada.

<br>

6. [X] &nbsp; Casos de Uso:

    - Identificar os casos de uso correspondentes às operações que serão automatizadas.
    - Um caso de uso representa uma interação entre um ator (usuário) e o sistema, descrevendo o que o sistema faz em resposta às ações do usuário.
      - Exemplo: Um caso de uso seria "Cadastrar Produto", onde o atendente preenche os campos necessários e o sistema gera automaticamente o código de barras.

<br>

7. [X] &nbsp; Modelo de Casos de Uso:

    - Elaborar um modelo de casos de uso que inclua todos os casos de uso identificados.
    - Cada caso de uso deve ter uma descrição sucinta do seu comportamento, fluxos principais, fluxos alternativos e de exceção, pré e pós-condições.
      - Exemplo: O caso de uso "Cadastrar Produto" tem como fluxo principal o preenchimento dos campos, o sistema gera o código de barras e salva as informações no banco de dados. Como exceção, se algum campo obrigatório não for preenchido, exibirá uma mensagem de erro ao usuário.

<br>

8. [X] &nbsp; Relacionamentos e Requisitos:

    - Identificar relacionamentos entre os casos de uso, como includes (inclusões), extends (extensões) e generalizações (heranças).
    - Descrever os requisitos não funcionais do sistema, como desempenho, segurança, usabilidade, etc.
      - Exemplo: O caso de uso "Cadastrar Produto" pode incluir o caso de uso "Gerar Código de Barras" e pode estender o caso de uso "Verificar Disponibilidade de Estoque" caso o produto esteja em falta.

<br>

9. [X] &nbsp; Contexto de Uso:

    - Identificar e descrever o contexto de uso do sistema, incluindo usuários, tarefas que eles executam e ambiente em que o sistema será utilizado.
      - Exemplo: Os usuários incluem atendentes, supervisores e administradores. As tarefas envolvem cadastro de produtos, registro de vendas e consultas. O ambiente é o sistema desktop da GeekStore, utilizado na loja física.

<br>

10. [X] &nbsp; Regras de Negócio e Glossário:

     - Descrever as regras de negócio que são aplicáveis ao sistema.
       - Exemplo: Uma regra de negócio pode ser que produtos com estoque abaixo de um determinado limite não podem ser vendidos.
     - Elaborar um glossário que defina os termos e conceitos relevantes para o sistema.
       - Exemplo: Glossário contendo definições de termos utilizados no sistema, como "estoque", "venda", "cliente", entre outros.

<br>

11. [x] &nbsp; Diagrama de Classes de Análise:

     - Elaborar um diagrama de classes de análise que represente as entidades (classes), interfaces (fronteiras) e controladores (lógica de negócio) do sistema.
       - Exemplo: Sistema de vendas. Classes: Produto, Cliente, Venda. Interfaces: Cadastro de Produto, Venda. Controladores: Gerenciador de Produtos, Gerenciador de Vendas.

<br>

12. [x] &nbsp; Modelo de Dados (MER):

     - Construir um Modelo de Entidade e Relacionamento (MER) que represente a estrutura e os relacionamentos das entidades de dados do sistema.
       - Exemplo: Sistema de vendas. Entidades: Produto, Cliente, Venda. Relacionamentos: Venda realiza Produto, Venda possui Cliente. Atributos: Nome do Produto, Quantidade em Estoque, Nome do Cliente, Data da Venda.

<br>

Essas são as principais atividades e requisitos a serem considerados para a análise do sistema de controle de vendas.

> Prazo do desenvolvimento de 2 semanas

# Considerações finais

Agradeço a disposição de todos neste projeto, espero que façamos história com o mesmo.

- Integrantes:
  - Pedro José Laurenti de Matos (RA:0621134)

<br>

# Leia aqui

<div align="center">

<img src="https://pkgs.rstudio.com/rmarkdown/reference/figures/logo.png" alt="drawing" width="20%"/>

[Página feita com R Markdown](https://www.pimvi.orbytesistemas.com)
<br>
[Github com código fonte](https://github.com/Pedro-Laurenti/PIM-VI)

<br>

<img src="https://cdn.worldvectorlogo.com/logos/latex.svg" alt="drawing" width="20%"/>

[Documentação final seguindo ABNT](https://pimvi.orbytesistemas.com/PIM-VI.pdf)

</div>
