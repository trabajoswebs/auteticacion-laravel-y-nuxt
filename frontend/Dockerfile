FROM node:20-alpine

# Crear usuario no-root para seguridad
RUN addgroup -g 1001 -S nodejs && \
    adduser -S nuxtjs -u 1001

WORKDIR /app

# Copiar archivos de dependencias
COPY package*.json ./

# Instalar dependencias
RUN npm ci --only=production && npm cache clean --force

# Copiar código fuente
COPY . .
EXPOSE 3000

# Configurar variables de entorno para desarrollo seguro
ENV NODE_ENV=development
ENV HOST=0.0.0.0
ENV PORT=3000

# Comando de inicio
CMD ["npm", "run", "dev", "--", "--host", "0.0.0.0"]
