<h1 align="center">
  :stethoscope: Sistema para Gerenciamento de Consultório Médico
</h1>

<p align="center">
  <a href="#-sobre-o-projeto">Sobre o Projeto</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-tecnologias">Tecnologias</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#%EF%B8%8F-instalação-e-uso">Instalação e Uso</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#%EF%B8%8F-imagens">Imagens</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-desenvolvedores">Desenvolvedores</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
  <a href="#-licença">Licença</a>
</p>

## 💻 Sobre o Projeto
Consiste em um sistema para gerenciamento de consultório médico que integra e otimiza processos administrativos e clínicos em uma plataforma web. O sistema permite a gestão completa de pacientes, agendamento de consultas, registro de prontuários e controle financeiro, visando melhorar a eficiência e a qualidade dos serviços prestados.

## 🚀 Tecnologias 

Esse projeto foi desenvolvido com as seguintes tecnologias:

- Laravel
  
## ⚙️ Instalação e Uso
1. Clone o projeto: ```git clone https://github.com/MatheusCervantes/ProjetoIntegrador.git``` 
2. Navegue até o diretório do projeto: ```cd ProjetoIntegrador```
3. Instale as dependências do Composer: ```composer install```
4. Copie o arquivo de ambiente de exemplo *__.env.example__* para *__.env__*: ```cp .env.example .env```
5. Configure o arquivo *__.env__* com as informações do seu banco de dados.
6. Gere a chave de aplicativo: ```php artisan key:generate```
7. Execute as migrações do banco de dados para criar as tabelas necessárias: ```php artisan migrate```
8. Após a instalação e configuração, você pode iniciar o servidor de desenvolvimento local com o seguinte comando: ```php artisan serve```

## 🖼️ Imagens

| Tela de Login | Painel Administrador | Painel Médico | Painel Recepcionista |
|---|---|---|---|
| ![tela-login](https://github.com/user-attachments/assets/d4ca851e-b4d4-4ce1-a021-db62cab33d4c)  | ![painel-admin](https://github.com/user-attachments/assets/29b84ab5-c4ad-4188-ad84-a9e75c18524e)  | ![painel-medico](https://github.com/user-attachments/assets/c018a94f-6bcb-4c3e-932f-713479247554)  | ![painel-recepcionista](https://github.com/user-attachments/assets/eeb6b34a-08ab-44f9-b041-daa0aa963afc)  |

## 🧑‍💻 Desenvolvedores
- <a href="https://github.com/camilymilsoni">Camily Milsoni</a>
- <a href="https://github.com/MatheusCervantes">Matheus Cervantes</a>

## 📝 Licença

Esse projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE.md) para mais detalhes.
