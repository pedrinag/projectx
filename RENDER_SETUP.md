# Deploy no Render (Alternativa Simples)

Como a Vercel requer reestruturação do projeto, o **Render** é uma alternativa excelente que funciona com a estrutura atual do projeto.

## Passos para Deploy no Render:

1. **Acesse [render.com](https://render.com)** e faça login (pode usar GitHub)

2. **Clique em "New" → "Web Service"**

3. **Conecte seu repositório GitHub:**
   - Selecione o repositório: `pedrinag/projectx`

4. **Configure o serviço:**
   - **Name**: `yellow-cloaker` (ou qualquer nome)
   - **Environment**: `PHP`
   - **Build Command**: (deixe vazio)
   - **Start Command**: `php -S 0.0.0.0:$PORT -t .`
   - **Plan**: Free (ou escolha um plano pago)

5. **Clique em "Create Web Service"**

6. **Aguarde o deploy** (pode levar alguns minutos na primeira vez)

7. **Seu site estará disponível em:**
   - `https://yellow-cloaker.onrender.com` (ou o nome que você escolheu)

## Vantagens do Render:
- ✅ Suporta PHP nativamente
- ✅ Não precisa reestruturar o projeto
- ✅ HTTPS automático
- ✅ Deploy automático via Git
- ✅ Plano gratuito disponível

## Nota:
O Render pode ter um "cold start" (inicialização lenta) no plano gratuito após períodos de inatividade. Para produção, considere um plano pago ou use Railway.

