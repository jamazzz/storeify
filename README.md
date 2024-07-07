# Página de Landing

## **1. [ Button ] Login / Registrar**

### 1.1 **Login**

- Página para fazer o Login.

### 1.2 **Registo**

- Página para fazer o Registo.

## **2. [ SubMenu ] Sobre**

### 2.1 **Parcerias**

- Detalhes sobre possíveis parcerias.

### 2.2 **Contatos**

- Informações de contato para suporte.

## **3. [ Label w/ Scroll Down ] Preços**

### **3.1 Preços**

- Zona da Página com os pacotes disponíveis.

## Footer

### **Direitos de autor**

- Direitos de autor (DMCA).

### **Termos de Serviço (TOS)**

- Redireciona para uma Página com um Documento detalhando os termos de uso da plataforma.

### **Perguntas Frequentes (FAQ)**

- Redireciona para a Página do FAQ.

# 2º Após Login - Painel do Utilizador (Dashboard)

## **1. Pagamentos**

- Histórico de pagamentos recebidos.

## **2. Produtos**

- Gerenciamento de produtos, incluindo adição, remoção e edição.

## **3. Estatísticas**

- Dados estatísticos sobre o número de vendas, visitantes , lucro , etc ...

## **4. Clientes**

- Lista de clientes e informações básicas.

## **5. Loja**

- Configurações da loja, incluindo design e layout.

## **6. Promoções**

- Gerenciamento de promoções.
  - **6.1 Cupons:** Criação e gestão de cupons promocionais.

## **7. Equipe**

- Adição, remoção e gerenciamento de membros da equipe.

## **8. Notificações**

- Configurações de notificações para o usuário.

# 3º - Página de Administração

## **1. Controle de Utilizadores**

- Ferramentas para gerenciar utilizadores.

## **2. Estatísticas**

- Dados estatísticos globais da plataforma.

## **3. Suporte**

- Lista de Tickets com de estado atual da situação (Aguardando Resposta, Em Espera, Resolvido) e sistema de registos.

# Criação de conta

- Nome
- Email
- Password
- Data de Nascimento (+18)

# Após a Escolha da Opção de Conta

- **Escolha de Planos:** O usuário escolhe entre os três planos disponíveis.
- **Criação de Site:** Preenchimento de dados para criar um site ou juntar-se a um existente por convite/código.
- **Dashboard:** Acesso à área de controle com opções de personalização do site, gerenciamento de produtos, promoções, estoque, suporte, e banimentos.

# Opções de Sites

- **Venda de Produtos Físicos**
- **Venda de Produtos Virtuais**
- **Serviços / Host Websites**

# **Objetivo do projeto**

- O objetivo deste projeto é permitir que um utilizador consiga configurar a sua loja online, facilitando o processo de implementação e oferecendo proteção contra reembolsos, tudo em um ambiente mais simples sem a necessidade de saber programar.

# Funcionalidade (Implementação Detalhada)

## Criação de Conta

1. Verificar se o email ainda não está registado.
2. Verificar se ambas as passwords coincidem.
3. Verificar se a password segue os requisitos mínimos: mínimo de 8 caracteres e pelo menos 1 número.

Se passar em todos os testes, enviar informações para a base de dados e fazer login automaticamente, redirecionando para um painel para escolher entre criar um website ou juntar se a um já criado.

## Ao criar um "website"

O utilizador receberá um modal para escolher o plano preferido.

- Caso escolha o Plano 2 ou Plano 3, será criada uma pasta no servidor com o nome do "website", contendo os arquivos básicos.

## Pagamentos

O pagamento será direcionado para a conta da empresa para análise após 3 dias úteis. Se não houver imprevistos (reembolso), o utilizador poderá levantar o valor disponível na conta.

## Edição do HTML

O utilizador pode editar a página atual de duas maneiras:

1. Editar diretamente na web.
2. Trocar o arquivo (usando um editor ou pasta).

## Planos Disponíveis

### Plano Grátis

- O utilizador não pode modificar diretamente nada relacionado ao HTML, apenas usar templates predefinidos.
- Não terá acesso a todas as features.

### Plano 2

...

### Plano 3

...
