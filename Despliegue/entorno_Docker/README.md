# Entorno de Desarrollo 
- Entorno Docker para usar en DAW
- Clone el directorio en su espacio de trabajo

    ```bash
    git clone git@github.com:dawish21/entorno.git
    ```

## Gestionar el servicio
-  Acceda a la consola y vaya hasta el directorio "entorno"
    `cd entorno`
- Desde ahí ya se puede:
    - Iniciar servicio:
        `docker-compose up -d`
    - Parar servicio
        `docker-compose down`
    - Ver máquinas corriendo
        `docker-compose ps`

# Variantes de este entorno

- Vamos a crear distintos entornos.
- Cada rama de este repositorio configura un entorno diferente.

# Configuración de esta rama

- Se define unicamente un contenedor con un servicio web apache con php.
  - El puerto 80 del contenedor se mapea al 80 del anfitrión
  - El contenido de la carpeta "sitios/web1" va a ser servido por el apache.
  - De momento es poco importante pero definimos el host virtual de nuestro sitio como "web1.com,www.web1.com"
- Ya puedes acceder a http://localhost.
