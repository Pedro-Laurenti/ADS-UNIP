# Projeto Integrado Multidisciplinar - PIM V

<div align="center">

<img src="https://raw.githubusercontent.com/Pedro-Laurenti/PIM-IV-UNIP/main/Design/Logo-do-projeto.png" alt="Windows" style="display: block; margin: 0 auto; width: 100%;">

</div>

<br>

O projeto, perante uma situação problema hipotética, exige a elaboração de um software e a respectiva documentação de desenvolvimento seguindo as regras específicas da ABNT.

<center>

__Prazo de entrega: 2 semanas__

</center>

## Contextualização do caso

O Colégio Vencer Sempre disponibiliza equipamentos de informática e vídeo (tais como
datashow, TV com VCR, TV com DVD, projetor de slides, sistemas de áudio-microfone, caixa
amplificada, notebooks, kits multimídia etc.), como ferramentas de apoio para aulas e
palestras, aos professores e coordenadores da instituição, alocando-os em salas de aula e
auditórios, a pedido antecipado dos colaboradores.

<br>

O sistema de reservas de empréstimo de equipamentos e recursos audiovisuais tem
como propósito agilizar e controlar o empréstimo de equipamentos e recursos de apoio aos
professores e dos demais colaboradores que necessitem utilizar os recursos mencionados.

<br>

# Linha do tempo de atividades

1. Mercado e Economia:
    - [x]  &nbsp; Levantamento dos principais agentes econômicos.
      - identificação dos atores econômicos envolvidos com a empresa fornecedora do software e seus respectivos papéis no mercado.
    - [x]  &nbsp; Estudo de viabilidade econômica para a implementação do projeto.
      - análise financeira do projeto de software, levando em consideração o investimento necessário, o prazo de retorno do investimento e outros aspectos econômicos relevantes.

<br>

2. Engenharia de Software II:
    - [x] &nbsp; Requisitos funcionais.
      - Descrição dos serviços que o software deve fornecer;
      - Funcionalidades específicas que o software deve possuir para atender aos requisitos  do cliente ou do usuário final;
      - Qual metodologia a ser utilizada; 
      - Elaborar um planejamento de teste para os requisitos funcionais e descreva um roteiro de testes para os requisitos mencionados;
    - [x] &nbsp; Requisitos não funcionais.
      - Restrições técnicas e de desempenho que o software deve atender;
      - Requisitos de segurança, confiabilidade e disponibilidade do sistema;
      - Regulamentações e normas que devem ser respeitadas.
    - [x] &nbsp; Requisitos de negócios.
      - Objetivos do negócio que o software deve atender;
      - Requisitos relacionados a custo, orçamento e tempo de desenvolvimento do software;
      - Expectativas de retorno do investimento e de lucratividade do projeto.

<br>

3. Projeto de Interface com o Usuário:
    - &nbsp; Desenvolver protótipos de interfaces com alta fidelidade (em qualquer ferramenta);
      - [x]  Tela de login
      - [x]  Tela de cadastro
      - [x]  Main
        - [x]  Empréstimos (data de entrega)
        - [x]  Adquirir novo (vitrine)
        - [x]  Perfil do usuário
      - [x]  Checkout
    - [x]  &nbsp; explicar em detalhes o funcionamento de cada tipo de entrada de dados processamento ou saída de informação;

<br>

1. Programação Orientada a Objetos I:
    - [x]  &nbsp; Descrever tecnicamente os fundamentos acadêmicos sobre objetos, classes, herança e polimorfismo;
    - [x]  &nbsp; Identificar estes elementos técnicos em seu sistema.

<br>

# 1. Mercado e Economia

## Levantamento dos principais agentes econômicos

Identificar os atores relevantes afetados por um novo produto ou serviço é crucial para compreender suas necessidades e expectativas. Desenvolver um produto que atenda a essas demandas de maneira eficiente e econômica pode aumentar a competitividade do negócio e melhorar a qualidade do serviço oferecido.

<br>

<img src="https://t2.tudocdn.net/599663?w=1920" alt="Windows" style="display: block; margin: 0 auto; width: 100%;">

<br>

Um exemplo de como o processo de levantamento dos principais agentes econômicos pode ser aplicado é o desenvolvimento do sistema operacional Windows da Microsoft. Ao criar o Windows, a Microsoft identificou os atores relevantes que seriam afetados pelo sistema, como empresas, organizações governamentais e indivíduos.

O desenvolvimento de um sistema que atendesse às demandas desses agentes aumentou a competitividade da empresa no mercado de software.

<br>

## Estudo de viabilidade econômica

O estudo de viabilidade econômica é uma etapa crucial na implementação de qualquer projeto, incluindo projetos de software. Ele envolve uma análise financeira detalhada do projeto, levando em consideração os custos envolvidos, as receitas esperadas e o prazo de retorno do investimento.

Essa análise permite que os responsáveis pelo projeto tomem decisões informadas sobre a viabilidade do investimento, além de estabelecerem metas financeiras realistas. Além disso, o estudo de viabilidade econômica também ajuda a identificar riscos financeiros associados ao projeto e a implementar medidas para mitigá-los.

É importante lembrar que temos algumas informações sobre o perfil tanto da nossa empresa quanto do nosso contratante (a escola).

<br>

# 2. Engenharia de Software II

## Requisitos funcionais

Aqui precisaremos mostrar o que o nosso software precisa fazer para atender as necessidades do cliente. Os requisitos funcionais são uma especificação detalhada das funcionalidades que o software deve possuir, descrevendo o comportamento esperado em diferentes situações.

Aqui a pergunta é "O que pode fazer?"

Um exemplo de requisito funcional seria a capacidade de um software de gestão de estoques de uma loja de varejo de atualizar automaticamente o nível de estoque de um produto sempre que uma venda é realizada. Esse requisito garante que o estoque esteja sempre atualizado e evita a venda de produtos que não estão mais disponíveis em estoque.

Dentro dos requisitos funcionais decidiremos a arquitetura básica do aplicativo:

<div align="center">

![](/Reuni%C3%A3o%201%20-%20PIM%20V/diagrama.svg)

Para editar <u> [clique aqui](https://app.diagrams.net) </u>.

</div align="center">

### Testes

Devemos elaborar um planejamento de testes para esses requisitos funcionais serem aprovados.
Seria algo semelhante à função de "Beta tester".

<br>

> O teste é a única parte do desenvolvimento que não acompanha a linearidade da produçãoda documentação, hajavista que para que os testes ocorram, precisamos antes desenvolver o aplicativo.

<br>

## Requisitos não funcionais

Os requisitos não funcionais são aqueles que não estão diretamente relacionados às funcionalidades específicas do software, mas sim a suas características mais gerais, como performance, segurança, usabilidade, escalabilidade, disponibilidade, entre outros.

Um exemplo de requisito não funcional seria a necessidade de um software bancário de garantir a segurança dos dados dos clientes, através de criptografia de ponta a ponta, certificados digitais e medidas de segurança rigorosas. Esse requisito não está relacionado diretamente à funcionalidade específica do software, mas é essencial para a confiança do cliente e para o cumprimento das normas regulatórias do setor bancário.

<br>

## Requisitos de negócios

Objetivos do negócio que o software deve atender; Requisitos relacionados a custo, orçamento e tempo de desenvolvimento do software; Expectativas de retorno do investimento e de lucratividade do projeto.

<br>

# 3. Projeto de Interface com o Usuário

<div align="center">

<img src="https://raw.githubusercontent.com/Pedro-Laurenti/PIM-IV-UNIP/main/Reuni%C3%A3o%201%20-%20PIM%20V/Captura%20de%20tela%202023-04-01%20185600.png" alt="drawing" width="80%">

Protótipo postado <u>[Aqui](https://www.stockedu.orbytesistemas.com)</u>

</div>

<br>

# 4. Programação Orientada a Objetos

Aqui devemos informar o que é a programação orientada ao objeto, sem aplicar a nenhum caso. É um texto **puramente técnico** nessa parte.

Logo após classificar a programação orientada a objetos, devemos aplicar esse conceito no nosso projeto.

Aqui vale ressaltar que podemos ou não programar, podemos muito bem indicar uma programação hipotética.

<br>

# Documentação

A estrutura do trabalho acadêmico (dissertação, tese, monografia, trabalho de conclusão
de curso e similares) definida na NBR-14724:2002 (com vigência a partir de 29.09.2002)
deve contemplar os elementos pré-textuais, textuais e pós-textuais, de acordo com que se
indica na tabela a seguir:

<br>

<center>

| Estrutura     | Condição      | Elemento                                                                                                        |
|---------------|---------------|-----------------------------------------------------------------------------------------------------------------|
| Pré-textuais  | Obrigatório   | Capa<br> Lombada<br> Folha de rosto<br> Errata<br> Folha de aprovação<br> Dedicatória<br> Agradecimentos<br> Epígrafe<br> Resumo<br> Resumo em língua estrangeira<br> Sumário<br> Lista de ilustrações<br> Lista de tabelas<br> Lista de abreviaturas e siglas<br> Lista de símbolos<br> |
| Textuais      | Obrigatório   | Introdução<br> Desenvolvimento<br> Conclusão<br>                                                                  |
| Pós-textuais  | Obrigatório   | Referências<br> Glossário<br> Apêndice<br> Anexo<br> Índice(s)<br>                                              |


</center>

<br>

## Sobre o uso de LaTex

O uso de latex facilita muito a vida de escrita de documentos ABNT, desta forma apenas precisaremos prestar atenção no conteúdo, sem nos preucuparmos com a diagramação.

O uso de latex não só é permitido em **qualquer** trabalho acadêmico quanto é muito bem visto pelas instituições de ensino, sendo que a simples adesão da logo no início já é motivo de pontos extras.

O LaTex é o compilador oficial de documentos científicos, sendo que em algumas empresas de engenharia e tecnologia tornam ele **obrigatório** nos documentos.

# Análise de similares

Para qualquer desenvolvimento, um dos primeiros passos é analizar a concorrencia e o histórico do produto.

<br>

Segue-se o mesmo trabalho desenvolvido com exelência por [outra equipe](https://github.com/albertosdneto/pim5).

<br>

<div align="center" style="display:flex; flex-direction:row;">

<img src="https://raw.githubusercontent.com/albertosdneto/pim5/main/assets/images/Screenshot_1618627102.png" alt="drawing" width="40%"/>

<img src="https://raw.githubusercontent.com/albertosdneto/pim5/main/assets/images/Screenshot_1618627859.png" alt="drawing" width="40%"/>

</div>

<div align="center" style="display:flex;">
Framework utilizado: Flutter/Dart.
</div>

> Vale ressaltar que este grupo estava no mesmo período que o nosso, e já estavam utilizando outras linguagens e tecnologias (desenvolvimento Web).

<br>

---

<br>

# Tutorial: Github pelo CMD

Para adicionar um novo arquivo corrigido ao repositório Github pelo CMD (linha de comando), siga os seguintes passos:

1. Abra o terminal (CMD) e navegue até o diretório do seu repositório local usando o comando `cd` (change directory). Por exemplo:

```bash
    cd C:\Users\NomeDoUsuario\Documents\MeuRepositorio
```

<br>

2. Certifique-se de que você está na branch correta usando o comando `git branch`. Por exemplo:

```bash
    git branch
```

<br>

3. Certifique-se de que seu repositório local está sincronizado com o repositório remoto usando o comando `git pull`. Por exemplo:

```bash
    git pull origin NomeDaBranch
```

<br>

4. Adicione o arquivo corrigido usando o comando `git add` ou `git add .` (adiciona todos os arquivos modificados). Por exemplo:

```bash
    git add NomeDoArquivoCorrigido
```

<br>

5. Confirme as mudanças usando o comando `git commit`. Por exemplo:

```bash
    git commit -m "Mensagem de confirmação"
```

<br>

6. Envie as alterações para o repositório remoto usando o comando `git push`. Por exemplo:

```bash
    git push origin NomeDaBranch
```

Agora o seu novo arquivo corrigido foi adicionado ao repositório Github pelo CMD. Lembre-se de que esses comandos são apenas um exemplo e podem variar dependendo da sua configuração específica.

<br>

---

<br>

# Considerações finais

Agradeço a disposição de todos neste projeto, espero que façamos história com o mesmo.

- Integrantes:
  - Pedro José Laurenti de Matos (RA:0621134)
  - Cleverson da Silva Souza (RA: 0620885)
  - Luiz Gustavo Nascimento de Souza (RA: 0618130)
  - Fernando de Sampaio Steimback Vidal (RA: 0626729)
  - Larissa Tamires de Araujo Nascimento (RA: 0622906)

<br>

# Leia aqui

<div align="center">

<img src="https://pkgs.rstudio.com/rmarkdown/reference/figures/logo.png" alt="drawing" width="20%"/>

Página feita com R Markdown e postada <u>[Aqui](https://www.stockedu.orbytesistemas.com/documentacao/)</u>

<br>

Documentação seguindo ABNT postada <u>[Aqui](http://www.stockedu.orbytesistemas.com/pdf/)</u>

</div>
