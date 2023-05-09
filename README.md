# Reserva de Salas - Booked

## Instalação

- Clone o repositório
- Duplique o arquivo `TEMPLATE.env` com o nome `.env`
- Customize as configurações do `.env`
- Suba o container com um dos seguintes comandos:
  - DEV: `docker-compose -f docker-compose-dev.yml up -d --build --force-recreate`
  - STG: `docker-compose -f docker-compose-stg.yml up -d --build --force-recreate`
  - PRD: `docker-compose up -d --build --force-recreate`