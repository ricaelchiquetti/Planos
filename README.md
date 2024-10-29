
# Planos


**Planos** é um sistema em Laravel para gerenciar planos de assinatura e usuários de forma prática e organizada.

## Funcionalidades

- 📋 **Gerenciamento de Planos**: Criar, atualizar e excluir planos.
- 👥 **Gerenciamento de Usuários**: Acompanhar planos ativos de usuários.
- 🔔 **Notificações**: Avisos sobre alterações ou renovações.
- 📊 **Dashboard**: Visualizar dados de uso.

## Requisitos

- Docker
- Laravel Sail

## Instalação

1. Clone o repositório:
   ```bash
   git clone https://github.com/ricaelchiquetti/Planos.git
   ```
2. Acesse o diretório do projeto:
   ```bash
   cd Planos
   ```
3. Instale as dependências:
   ```bash
   composer install
   ```
4. Configure o arquivo de ambiente:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
5. Ajuste `.env` para o Sail (certifique-se de que `DB_HOST=mysql` e `REDIS_HOST=redis`).

6. Inicie o Sail:
   ```bash
   ./vendor/bin/sail up -d
   ./vendor/bin/sail artisan migrate
   ```

7. Acesse a aplicação em [http://localhost](http://localhost).

## Uso

Utilize o dashboard para gerenciar usuários e planos.

## Contribuição

Contribuições são bem-vindas. Para mudanças significativas, abra um issue para discutir sua ideia.

## Licença

Este projeto é licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE) para mais detalhes.
