# 🐘 Projetos e Exercícios de PHP — Assunto 3

Este repositório contém os exercícios, desafios práticos e scripts desenvolvidos durante os estudos do **Assunto 3** do curso/módulo de PHP. O foco principal destes projetos inclui manipulação de formulários, persistência de dados em arquivos de texto, estrutura de dados com arrays, criação de logs e dinamismo em interfaces web.

## 🚀 Projetos e Desafios em Destaque

### 1. 📝 Sistema de Cadastro de Usuários (`5_cadastro.php`)
- **Descrição:** Aplicação focada no recebimento e processamento de dados vindos de formulários HTTP.
- **Funcionalidades:**
  - Recebimento de dados cadastrais via `POST`/`GET`.
  - Validação de campos de entrada.
  - Armazenamento e persistência de dados no arquivo de texto local (`usuarios.txt`).

### 2. ⚡ Desafio 1 — Lógica e Validação (`5a_desafio1.php` & `5a_desafio1.md`)
- **Descrição:** Resolução prática do desafio descrito no documento `5a_desafio1.md`.
- **Funcionalidades:**
  - Aplicação das regras de negócio propostas na especificação do desafio.
  - Estruturação limpa do código PHP integrado ao HTML.
  - Tratamento de entradas e saídas dinâmicas.

### 3. ✨ Desafio 1 — Versão Animada e Interativa (`5a_desafio1_animado.php`)
- **Descrição:** Uma variação aprimorada do **Desafio 1**, focada em experiência do usuário (UX/UI).
- **Funcionalidades:**
  - Incorporação de estilos CSS e transições/animações visuais.
  - Feedback dinâmico ao usuário durante o preenchimento ou envio das informações.

### 4. 📊 Manipulação e Estrutura de Arrays (`7_arrays.php`)
- **Descrição:** Script dedicado ao estudo prático de vetores e matrizes em PHP.
- **Funcionalidades:**
  - Declaração, iteração (`foreach`, `for`) e ordenação de arrays.
  - Uso de funções nativas do PHP para busca, filtragem e manipulação de conjuntos de dados.

### 5. 🪵 Sistema de Logs e Persistência de Dados (`.txt`)
- **Descrição:** Conjunto de arquivos de texto utilizados para armazenamento simples sem dependência de banco de dados SQL.
- **Arquivos:**
  - `usuarios.txt`: Base de dados em formato texto contendo os registros efetuados pelo formulário de cadastro.
  - `log_acessos.txt`: Registro histórico de acessos às páginas (carimbos de data/hora e IP/origem).
  - `log_usuarios.txt`: Registro de eventos e ações específicas realizadas pelos usuários na aplicação.

## 📂 Estrutura de Diretórios

```text
Assunto_3/
├── 📄 5_cadastro.php           # Script e formulário de cadastro
├── 📄 5a_desafio1.md           # Documentação e requisitos do Desafio 1
├── 📄 5a_desafio1.php          # Implementação do Desafio 1
├── 📄 5a_desafio1_animado.php  # Versão com animações e UI aprimorada
├── 📄 7_arrays.php             # Exercícios e exemplos práticos com arrays
├── 📑 log_acessos.txt          # Histórico de acessos do sistema
├── 📑 log_usuarios.txt         # Histórico de ações de usuários
└── 📑 usuarios.txt             # Armazenamento simples de usuários
```

## 🛠️ Tecnologias Utilizadas

- **PHP:** Linguagem principal backend para lógica de negócios e manipulação de arquivos.
- **HTML5 & CSS3:** Estrutura das páginas e estilização das interfaces (incluindo animações).
- **Manipulação de Arquivos (File I/O):** Leitura e escrita de dados em arquivos `.txt`.

## 💻 Como Executar o Projeto

1. **Pré-requisitos:** Certifique-se de ter o **PHP 7.4+** (ou superior) instalado em sua máquina.
2. **Clonar/Acessar a pasta do projeto:**
   ```bash
   cd Assunto_3
   ```
3. **Iniciar o servidor embutido do PHP:**
   ```bash
   php -S localhost:8000
   ```
4. **Acessar no navegador:**
   - Cadastro: `http://localhost:8000/5_cadastro.php`
   - Desafio 1: `http://localhost:8000/5a_desafio1.php`
   - Desafio 1 (Animado): `http://localhost:8000/5a_desafio1_animado.php`
   - Arrays: `http://localhost:8000/7_arrays.php`
