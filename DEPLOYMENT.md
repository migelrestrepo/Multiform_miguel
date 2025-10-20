# Desplegar Multiform-PHP en Easypanel

Esta guía te ayudará a desplegar tu aplicación Multiform-PHP en Easypanel.

## Prerrequisitos

1. Una cuenta en Easypanel
2. Tu código subido a GitHub, GitLab o Bitbucket
3. Acceso a tu servidor con Easypanel instalado

## Pasos para el Deployment

### 1. Preparar el Repositorio

Asegúrate de que tu repositorio tenga estos archivos:
- `Dockerfile` (ya creado)
- `.dockerignore` (ya creado)
- Carpeta `src/` con todos tus archivos PHP

### 2. Subir el Código a GitHub

```bash
# Si aún no tienes un repositorio Git, inicialízalo
git init

# Añade todos los archivos
git add .

# Crea el primer commit
git commit -m "Initial commit for Easypanel deployment"

# Conecta con tu repositorio remoto (reemplaza con tu URL)
git remote add origin https://github.com/tu-usuario/multiform-php.git

# Sube el código
git push -u origin main
```

### 3. Crear un Proyecto en Easypanel

1. Inicia sesión en tu panel de Easypanel
2. Haz clic en **"New"** para crear un nuevo proyecto
3. Dale un nombre a tu proyecto (ej: "multiform-php")

### 4. Añadir un Servicio

1. Dentro del proyecto, haz clic en **"Add Service"**
2. Selecciona **"App"**
3. Conecta tu repositorio de GitHub/GitLab/Bitbucket

### 5. Configurar el Build

1. Ve a la pestaña **"Build"**
2. Selecciona **"Dockerfile"** como método de build
3. Asegúrate de que la ruta del Dockerfile sea correcta (por defecto: `./Dockerfile`)

### 6. Configurar el Puerto

1. Ve a la pestaña **"Networking"** o **"Domains"**
2. Configura el puerto interno: **80** (el que Apache expone)
3. Easypanel automáticamente asignará un dominio público

### 7. Variables de Entorno (Opcional)

Si tu aplicación necesita variables de entorno:
1. Ve a la pestaña **"Environment"**
2. Añade las variables necesarias

### 8. Desplegar

1. Haz clic en **"Deploy"**
2. Easypanel construirá la imagen Docker y desplegará tu aplicación
3. Espera a que el estado cambie a "Running"

### 9. Configurar Dominio (Opcional)

1. Ve a la pestaña **"Domains"**
2. Añade tu dominio personalizado
3. Easypanel configurará automáticamente SSL con Let's Encrypt

## Estructura del Proyecto para Easypanel

```
Multiform-PHP/
├── Dockerfile              # Configuración Docker
├── .dockerignore          # Archivos a ignorar en el build
├── src/                   # Código fuente PHP
│   ├── index.php
│   ├── assets/
│   │   ├── css/
│   │   ├── images/
│   │   └── libs/
│   └── ...
└── DEPLOYMENT.md          # Esta guía
```

## Actualizar la Aplicación

Para actualizar tu aplicación desplegada:

1. Haz cambios en tu código local
2. Commit y push a GitHub:
   ```bash
   git add .
   git commit -m "Descripción de los cambios"
   git push
   ```
3. En Easypanel, haz clic en **"Rebuild"** o configura auto-deploy

## Auto-Deploy desde GitHub

Para habilitar despliegues automáticos:

1. En Easypanel, ve a la configuración del servicio
2. Activa **"Auto Deploy"** o configura un webhook
3. Cada push a la rama principal desplegará automáticamente

## Troubleshooting

### La aplicación no carga

- Verifica que el puerto interno sea **80**
- Revisa los logs en Easypanel: pestaña **"Logs"**
- Asegúrate de que todos los archivos estén en la carpeta `src/`

### Error de build

- Revisa los logs de build
- Verifica que el Dockerfile esté correctamente configurado
- Asegúrate de que `.dockerignore` no excluya archivos necesarios

### Archivos CSS/JS no cargan

- Verifica que la carpeta `src/assets/` tenga los permisos correctos
- Asegúrate de que los archivos CSS compilados existan en `src/assets/css/`

## Recursos Adicionales

- [Documentación oficial de Easypanel](https://easypanel.io/docs)
- [Easypanel PHP Dockerizer](https://easypanel.io/dockerizer/php/)
- [Guía de Laravel en Easypanel](https://easypanel.io/docs/quickstarts/laravel)

## Notas Importantes

- **CSS Compilado**: Asegúrate de compilar los archivos SCSS antes de desplegar:
  ```bash
  npm install
  npx gulp build
  ```

- **Assets**: Los archivos en `src/assets/` deben estar compilados y listos para producción

- **Performance**: El Dockerfile usa PHP 8.4 con Apache, optimizado para producción

- **SSL**: Easypanel configura automáticamente certificados SSL gratuitos con Let's Encrypt
