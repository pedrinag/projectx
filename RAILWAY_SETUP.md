# Deploy no Railway (Recomendado)

O **Railway** é uma excelente alternativa que suporta PHP nativamente sem precisar reestruturar o projeto.

## Passos para Deploy no Railway:

1. **Acesse [railway.app](https://railway.app)** e faça login com GitHub

2. **Clique em "New Project"**

3. **Selecione "Deploy from GitHub repo"**

4. **Autorize o Railway** a acessar seus repositórios (se necessário)

5. **Selecione o repositório:** `pedrinag/projectx`

6. **O Railway detectará automaticamente** que é um projeto PHP

7. **Configure as variáveis de ambiente** (se necessário):
   - Clique em "Variables"
   - Adicione variáveis se seu projeto precisar

8. **Aguarde o deploy** (pode levar alguns minutos)

9. **Seu site estará disponível em:**
   - `https://yellow-cloaker.up.railway.app` (ou o nome que você escolheu)

10. **Para usar um domínio customizado:**
    - Clique em "Settings" → "Domains"
    - Adicione seu domínio

## Vantagens do Railway:
- ✅ Suporta PHP nativamente
- ✅ Não precisa reestruturar o projeto
- ✅ HTTPS automático
- ✅ Deploy automático via Git
- ✅ Interface muito simples
- ✅ $5 de crédito grátis por mês

## Arquivos Criados:
- `railway.json` - Configuração do Railway
- `Procfile` - Comando de inicialização (também funciona no Heroku)

## Nota:
O Railway oferece $5 de crédito grátis por mês, o que é suficiente para projetos pequenos/médios.

