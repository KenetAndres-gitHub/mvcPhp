# Proyecto PHP con Patrón MVC y Gestión de Dependencias con Composer

Este proyecto utiliza PHP puro implementando el patrón de diseño Modelo-Vista-Controlador (MVC) para estructurar la aplicación. Se hace uso de Composer para la gestión de dependencias y se emplea Apache como servidor web junto con PostgreSQL como sistema de gestión de bases de datos.

#### Estructura de Archivos y Carpetas

proyecto/  
│  
├── src/  
│ ├── controller/  
│ │ └── UserController.php  
│ ├── entity/  
│ │ └── User.php  
│ ├── repository/  
├── templates/  
│ │ └── users/  
│ │ └──--- index.php  
├── config/  
│ └── router.php  
│  
├── vendor/  
│ └── autoload.php  
│  
├── .htaccess  
├── index.php  
└── config.php  

- **src/**: Directorio que contiene los controladores, entidades y repositorios de la aplicación.
- **vendor/**: Carpeta generada por Composer que contiene las dependencias del proyecto.
- **.htaccess**: Archivo de configuración para la reescritura de URL.
- **index.php**: Punto de entrada de la aplicación.
- **config.php**: Archivo de configuración de la base de datos y otras configuraciones globales.

#### Configuración y Autoload

El archivo `config.php` se encarga de configurar la conexión a la base de datos y otras configuraciones globales. El archivo `index.php` incluye este archivo de configuración y carga el autoload generado por Composer para cargar las clases de manera automática.

#### Enrutamiento

El archivo `router.php` define las rutas de la aplicación y los controladores correspondientes para manejar las solicitudes entrantes. Se utiliza una instancia de la clase `Router` para agregar rutas y manejar las solicitudes.

#### Acceso a la Base de Datos

El archivo `config.php` contiene la lógica para manejar las solicitudes a la bd. 

#### Configuración de Apache

Para que las rutas funcionen correctamente, asegúrate de configurar Apache para permitir la reescritura de URL. Agrega las siguientes líneas al archivo de configuración de Apache (`httpd.conf` o `apache2.conf`) o al archivo de configuración del virtual host:

<Directory /ruta/a/tu/proyecto>  
Options Indexes FollowSymLinks  
AllowOverride All  
Require all granted  
</Directory>  

Reemplaza `/ruta/a/tu/proyecto` con la ruta absoluta a la carpeta raíz de tu proyecto.

#### Instrucciones de Ejecución

1. Configura Apache para permitir la reescritura de URL.
2. Asegúrate de tener PostgreSQL instalado y configurado correctamente.
3. Ejecuta `composer install` en la raíz del proyecto para instalar las dependencias.
4. Configura las variables de entorno y las credenciales de la base de datos en el archivo `config.php`.
5. Inicia el servidor Apache y accede a la aplicación a través del navegador web.

#### Variables Globales y Credenciales de Base de Datos

El archivo `.env` se utiliza para definir variables globales, como las credenciales de acceso a la base de datos PostgreSQL, y se carga al inicio de la aplicación para su disponibilidad en todo el proyecto.

#### Servidor Web

Se utiliza Apache como servidor web para ejecutar la aplicación PHP.

#### Dependencias Externas

Composer se utiliza para gestionar las dependencias del proyecto, facilitando la instalación y actualización de librerías de terceros.


Proyecto creado por Kenet Chungandro.

