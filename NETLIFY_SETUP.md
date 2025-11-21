# Configuração para Netlify

## ⚠️ Problema Importante

**A Netlify NÃO suporta PHP nativamente.** Este projeto é uma aplicação PHP completa que requer um servidor PHP para funcionar.

## Soluções Recomendadas

### Opção 1: Vercel (Recomendado - Suporta PHP)
A Vercel oferece suporte experimental para PHP através do runtime PHP.

1. Instale a Vercel CLI:
```bash
npm i -g vercel
```

2. Faça login:
```bash
vercel login
```

3. Faça deploy:
```bash
vercel
```

4. Configure o arquivo `vercel.json` (já criado neste projeto)

### Opção 2: Railway (Suporta PHP)
Railway oferece suporte completo para PHP.

1. Acesse [railway.app](https://railway.app)
2. Conecte seu repositório GitHub
3. Configure o build:
   - Build Command: (deixe vazio)
   - Start Command: `php -S 0.0.0.0:$PORT -t .`

### Opção 3: Render (Suporta PHP)
Render oferece hospedagem gratuita para PHP.

1. Acesse [render.com](https://render.com)
2. Conecte seu repositório
3. Configure:
   - Build Command: (deixe vazio)
   - Start Command: `php -S 0.0.0.0:$PORT -t .`

### Opção 4: Servidor Tradicional com PHP
Use um servidor tradicional que suporte PHP:
- Beget (recomendado pelo autor)
- Hostinger
- DigitalOcean
- AWS EC2
- Qualquer hosting compartilhado com PHP 7.2+

## Arquivos Criados para Netlify

Mesmo que a Netlify não suporte PHP, criei os seguintes arquivos caso você queira tentar uma solução alternativa:

- `_redirects`: Configuração de redirecionamentos
- `netlify.toml`: Configuração do Netlify

## Nota sobre Netlify Functions

Embora a Netlify tenha Functions (serverless), elas não suportam PHP diretamente. Seria necessário reescrever toda a aplicação em Node.js, o que não é prático para este projeto.

## Recomendação Final

**Use Vercel ou Railway** para este projeto, pois ambos oferecem suporte nativo para PHP e são gratuitos para projetos pequenos/médios.

