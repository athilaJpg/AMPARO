AMPARO - Sistema Web De Denúncias Anônimas Para Os Estudantes Do IFSP Câmpus Campinas

<img width="1881" height="900" alt="foto tela principal amparo (index html)" src="https://github.com/user-attachments/assets/25367da0-d004-4f23-b050-d5979e8cd641" />

TECNOLOGIAS UTILIZADAS:

- HTML 
- CSS
- PHP 
- MySQL 
- XAMPP 
- Visual Studio Code


INTRODUÇÃO

Amparo: ato ou efeito de amparar(-se), de escorar(-se); amparamento, sustentação, apoio;
pessoa ou algo que ampara, que ajuda ou socorre, que presta auxílio; apoio, arrimo, escora, socorro.

O AMPARO é um sistema web desenvolvido como Trabalho de Conclusão de Curso (TCC) no Instituto Federal de São Paulo (IFSP – Campus Campinas). O projeto foi criado com o objetivo de oferecer aos estudantes um canal seguro para o registro de denúncias relacionadas a situações de violência no ambiente escolar, além de disponibilizar informações educativas e orientações sobre como buscar ajuda.

MOTIVAÇÃO:

Segundo o Ministério da Educação (2026) em estudos recentes como Diagnóstico Participativo da Violência nas Escolas, realizado pela Faculdade Latino-Americana de Ciências Sociais (FLACSO) em 2015, com apoio do MEC, que revelou que 69,7% dos estudantes declaram ter presenciado alguma situação de violência dentro da escola. Muitas dessas situações não são relatadas ou tratadas da forma correta, por fatores como o medo da denúncia, o desconhecimento de como buscar ajuda e a falta de um canal seguro para falar sobre a situação. E para ajudar a combater esse problema, especialistas em um artigo para a CNN Saúde (2023) sugerem medidas como o estabelecimento de um canal de denúncias, a realização de ações educativas e a aplicação de sanções disciplinares, além da capacitação dos professores e demais funcionários da escola. 

O QUE É:

O AMPARO é um sistema web onde o aluno pode registrar denúncias de forma simples, descrevendo o que aconteceu com suas próprias palavras.
Além disso, o sistema também fornece informações educativas sobre tipos de violência e como buscar ajuda dentro e fora do campus.

FUNCIONALIDADES DESENVOLVIDAS:

- Página inicial com navegação,
- Formulário de denúncia,
- Integração com banco de dados,
- Registro das denúncias,
- Página de login com E-mail institucional e senha,
- Campo de visualização “Minhas denúncias”.

ARQUITETURA DO SISTEMA:

Front-end

HTML

CSS

JavaScript

↓

PHP

↓

MySQL

↓

XAMPP


DEMONSTRAÇÃO: 

O sistema AMPARO foi estruturado em diferentes páginas, cada uma com uma função específica. A página inicial apresenta as principais funcionalidades do sistema, permitindo ao usuário acessar todas as funcionalidades do sistema por meio dela. 

<img width="1881" height="900" alt="foto tela principal amparo (index html)" src="https://github.com/user-attachments/assets/3f6a7a35-acfc-4f66-995f-a3a1d1acfa75" />


Como o sistema é voltado somente para alunos do IFSP, ele possui um campo de login onde apenas alunos com o email institucional podem acessar a página de denúncias.

<img width="1912" height="850" alt="foto tela de login amparo (login php)" src="https://github.com/user-attachments/assets/ecd6ed20-9621-46b1-b0b8-fe450842db09" />


O sistema conta com uma área destinada ao registro de denúncias, onde o usuário pode descrever a situação ocorrida e selecionar o tipo de violência, . Essas informações são armazenadas em um banco de dados para posterior análise.

<img width="1402" height="645" alt="tela de denuncia amparo (denuncia php)" src="https://github.com/user-attachments/assets/08c77680-df8e-4ce0-a88e-35eeb5c748f3" />


O sistema possui tela onde o aluno pode se informar sobre os tipos de violências que existem nas escolas.

<img width="1408" height="857" alt="tela de deuncia amparo (violencias php)" src="https://github.com/user-attachments/assets/62c99c10-7a59-4553-bc47-bf5d1675133c" />


O sistema possui tela onde o aluno se informa onde buscar ajuda dentro e fora do campus.

<img width="1283" height="867" alt="tela onde buscar ajuda dentro do IF amparo(ajuda php)" src="https://github.com/user-attachments/assets/3b5a4e97-ca80-42a6-8d90-d672fc982566" />

<img width="1367" height="852" alt="foto tela onde buscar ajuda fora do IF (ajuda php)" src="https://github.com/user-attachments/assets/8c4afce6-1fa4-4b92-8c50-db869745630e" />

O sistema armazena as denúncias feitas no campo “Minhas denúncias” onde o aluno pode ver as denúncias feitas por ele.

<img width="1442" height="452" alt="tela minhas denuncias amparo " src="https://github.com/user-attachments/assets/57e2ca33-49ec-493d-a80e-1b154c4c639d" />

Durante os testes, não foi possivel ultilizar diretamente no celular. Mas, usando um aplicativo de espelhamento, tive esse resultado em um celular simulando o uso do amparo: 

https://github.com/user-attachments/assets/3841c8ea-f6f5-49ab-b616-a57c41bb4845



FUNCIONALIDADES DO SISTEMA

O sistema apresenta como principais funcionalidades o registro de denúncias anônimas, a consulta de informações educativas sobre diferentes tipos de violência e o acesso a orientações de ajuda.

O formulário de denúncia permite que o usuário relate a situação de forma detalhada, garantindo o anonimato das informações.

O sistema também possibilita que a coordenação tenha acesso às denúncias registradas por meio do banco de dados, contribuindo para o conhecimento dos fatos ocorridos e encaminhamento dos casos.

O sistema possui uma página de login onde só alunos com contas institucionais podem fazer denúncias. 

Além de páginas informativas sobre as violências, como buscar ajuda e um campo onde podem ser vistas as denúncias realizadas pelo aluno. 

Dessa forma, o sistema busca promover um ambiente escolar mais seguro, incentivando a comunicação e o combate a situações de violência.

APRENDIZADOS:

Durante o desenvolvimento deste projeto pude aprofundar conhecimentos em:

- Desenvolvimento Full Stack;
- Estruturação de banco de dados MySQL;
- Integração entre PHP e banco de dados;
- Autenticação de usuários;
- Organização de projetos web;
- Desenvolvimento de interfaces utilizando HTML, CSS e JavaScript.


<p> O AMPARO contribui para um ambiente mais seguro, permitindo denúncias anônimas e acesso à informação.
Como melhorias futuras, o sistema pode evoluir com novas funcionalidades e expansão do suporte.</p>


