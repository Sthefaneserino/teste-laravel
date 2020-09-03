# Unifev

Este teste é parte do processo de seleção da Unifev para a vaga de Analista Programador, de acordo com o [Edital N°XXX - CONTRATAÇÃO DE ANALISTA DE SISTEMAS](https://www.unifev.edu.br/edital/contratacao/00000000#editais).

[Conheça a Unifev](https://unifev.edu.br)

## Objetivo do teste

O objetivo do teste é conhecer as habilidades em:
- Programação PHP / Laravel.
- Javascript (Jquery, Ajax), HTML5, CSS.
- Organização (código/arquivos)
- Versionamento de código (Git)

## O teste 
Crie um projeto utilizando o *framework* Laravel.

O projeto deverá conter:

* Autenticação e Registro de Usuário

* Um menu na Tela inicial com os itens: 
> - Sobre a Unifev: Link para a página institucional https://unifev.edu.br/a-unifev.
> - Lista de Professores: Deverá ser visualizada mesmo sem *Login*.
> - Área Restrita: Deverá ser acessada apenas através de *Login* e deverá conter os links para os CRUDS definidos no próximo item.

* CRUD (inserir, listar, alterar, remover) completo para cada um dos itens abaixo:
> - Áreas (Descrição)
> - Cursos (Descrição, Duração, Valor): Um Curso deve estar vinculado a uma Área.
> - Professores (Nome, E-mail, Telefone): Um Professor pode lecionar em vários Cursos.

* Utilização da biblioteca [Datatables](https://datatables.net/) em todas as listas (O carregamento dos dados da Datatable com [Ajax](https://datatables.net/examples/ajax/index.html) é um *plus*).


***ATENÇÃO!***
* Escreva um código limpo e organizado.
* É imprescindível a utilização de Ajax em ao menos uma das funcionalidades.
* É obrigatório o uso de *migrations* para a estruturação do banco de dados.
* Utilize banco de dados MySQL.

## Instruções

Antes de iniciar, tenha em mente que você deverá seguir todos os requisitos citados aqui.

1. Faça a sua inscrição no processo seletivo através do link [Edital N°XXX - CONTRATAÇÃO DE ANALISTA DE SISTEMAS](https://www.unifev.edu.br/edital/contratacao/00000000#editais).
2. Dê um *fork* neste repositório.
3. Clone o *fork* na sua máquina.
4. Escreva seu programa utilizando estritamente todos os requisitos listados pelo teste. É muito importante você ter em mente que avaliaremos seus *commits* no *Git*, então, não esqueça de realizar um *commit* a cada vitória conquistada!
5. Seu repositório deverá conter um `README.md` descrevendo os passos para executar sua aplicação.
6. Assim que testar tudo e validar que tudo funciona, faça seu último *commit* com o título 'Finalizado'.
7. Abra uma *issue* neste repositório com o título '[TESTE] {{Seu nome}} - {{Protocolo de inscrição}}'.
8. No conteúdo da *issue* faça um breve resumo sobre você, coloque o link do seu *fork* aqui do *github* com o código que você gerou, seguido do seu *LinkedIn* e se quiser, seu e-mail, além de outras formas de contato, como suas redes sociais por exemplo.

---

## Boa sorte!
