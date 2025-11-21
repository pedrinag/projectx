# Guia de Deploy - Yellow Cloaker

## ⚠️ IMPORTANTE: Netlify não suporta PHP

A **Netlify não executa PHP nativamente**. Este projeto é uma aplicação PHP completa que requer um servidor PHP para funcionar corretamente.

## ✅ Soluções que FUNCIONAM

### 1. Vercel (RECOMENDADO - Mais fácil)

A Vercel oferece suporte para PHP através do runtime `@vercel/php`.

#### Passos:

1. **Instale a Vercel CLI:**
   ```bash
   npm install -g vercel
   ```

2. **Faça login:**
   ```bash
   vercel login
   ```

3. **No diretório do projeto, execute:**
   ```bash
   vercel
   ```

4. **Siga as instruções:**
   - Deixe o diretório como está (.)
   - Não precisa de comando de build
   - O arquivo `vercel.json` já está configurado

5. **Após o deploy, seu site estará disponível em:**
   - `https://seu-projeto.vercel.app`

#### Vantagens:
- ✅ Gratuito para projetos pequenos/médios
- ✅ Deploy automático via Git
- ✅ HTTPS automático
- ✅ CDN global
- ✅ Suporte nativo para PHP

---

### 2. Railway (Alternativa Excelente)

Railway oferece suporte completo para PHP com deploy simples.

#### Passos:

1. Acesse [railway.app](https://railway.app) e faça login com GitHub

2. Clique em "New Project" → "Deploy from GitHub repo"

3. Selecione este repositório

4. Configure as variáveis de ambiente (se necessário)

5. Railway detectará automaticamente que é PHP e configurará

6. Seu site estará disponível em: `https://seu-projeto.up.railway.app`

#### Vantagens:
- ✅ Gratuito (com limites)
- ✅ Deploy automático via Git
- ✅ HTTPS automático
- ✅ Interface simples

---

### 3. Render (Outra Boa Opção)

Render também oferece suporte para PHP.

#### Passos:

1. Acesse [render.com](https://render.com) e faça login

2. Clique em "New" → "Web Service"

3. Conecte seu repositório GitHub

4. Configure:
   - **Name**: Nome do seu projeto
   - **Environment**: PHP
   - **Build Command**: (deixe vazio)
   - **Start Command**: `php -S 0.0.0.0:$PORT -t .`

5. Clique em "Create Web Service"

6. Seu site estará disponível em: `https://seu-projeto.onrender.com`

#### Vantagens:
- ✅ Plano gratuito disponível
- ✅ Deploy automático
- ✅ HTTPS automático

---

### 4. Servidor Tradicional (Mais Controle)

Se você precisa de mais controle ou recursos específicos:

#### Opções de Hosting:
- **Beget** (recomendado pelo autor do projeto) - [beget.com](https://beget.com)
- **Hostinger** - [hostinger.com](https://hostinger.com)
- **DigitalOcean** - [digitalocean.com](https://digitalocean.com)
- **AWS EC2** - [aws.amazon.com](https://aws.amazon.com)

#### Requisitos:
- PHP 7.2 ou superior
- HTTPS habilitado (OBRIGATÓRIO)
- Acesso SSH (opcional, mas recomendado)

---

## 📝 Arquivos de Configuração Criados

Criei os seguintes arquivos para facilitar o deploy:

1. **`vercel.json`** - Configuração para Vercel
2. **`_redirects`** - Redirecionamentos (para Netlify, caso use proxy)
3. **`netlify.toml`** - Configuração Netlify (limitado sem PHP)
4. **`NETLIFY_SETUP.md`** - Informações sobre limitações da Netlify

---

## 🚀 Deploy Rápido na Vercel (Recomendado)

```bash
# 1. Instalar Vercel CLI
npm install -g vercel

# 2. Fazer login
vercel login

# 3. Deploy
vercel

# 4. Produção (opcional)
vercel --prod
```

Pronto! Seu cloaker estará online em segundos.

---

## ❓ Por que Netlify não funciona?

A Netlify é focada em:
- Sites estáticos (HTML, CSS, JS)
- Aplicações JAMstack
- Serverless Functions (Node.js, Go, etc.)

PHP requer um servidor que execute o código PHP, o que a Netlify não oferece nativamente.

---

## 🔧 Configuração Pós-Deploy

Após fazer o deploy, não esqueça de:

1. **Acessar o painel admin:**
   ```
   https://seu-dominio.com/admin?password=12345
   ```
   (Altere a senha padrão!)

2. **Configurar as páginas white/black** conforme necessário

3. **Testar o cloaker** com diferentes user agents e IPs

---

## 📞 Suporte

Se tiver problemas com o deploy, verifique:
- Versão do PHP (deve ser 7.2+)
- Permissões de arquivos
- Configuração de HTTPS (obrigatório)
- Logs de erro do servidor

---

**Recomendação Final:** Use **Vercel** para o deploy mais rápido e simples! 🚀

