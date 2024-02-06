### Proyecto PHP con Patrón MVC y Gestión de Dependencias con Composer

Este proyecto utiliza PHP puro implementando el patrón de diseño Modelo-Vista-Controlador (MVC) para estructurar la aplicación. Se hace uso de Composer para la gestión de dependencias y se emplea Apache como servidor web junto con PostgreSQL como sistema de gestión de bases de datos.

#### Estructura de Archivos y Carpetas

- **src/**
  - **entity/**: Contiene las entidades del proyecto.
  - **repository/**: Directorio para las clases de repositorio.
  - **controller/**: Controladores de la aplicación.
- **vendor/**: Carpeta generada por Composer que contiene las dependencias del proyecto.
- **composer.json**: Archivo de configuración de Composer.
- **config.php**: Archivo PHP para la configuración y carga del autoloader.
- **.env**: Archivo de configuración que contiene variables globales, incluyendo credenciales para la base de datos.

#### Configuración y Autoload

El archivo `config.php` se encarga de cargar el autoload generado por Composer y puede contener otras configuraciones relevantes para el proyecto.

#### Variables Globales y Credenciales de Base de Datos

El archivo `.env` se utiliza para definir variables globales, como las credenciales de acceso a la base de datos PostgreSQL, y se carga al inicio de la aplicación para su disponibilidad en todo el proyecto.

#### Servidor Web

Se utiliza Apache como servidor web para ejecutar la aplicación PHP.

#### Dependencias Externas

Composer se utiliza para gestionar las dependencias del proyecto, facilitando la instalación y actualización de librerías de terceros.

#### Instrucciones de Ejecución

1. Configurar el servidor Apache para que apunte al directorio raíz del proyecto.
2. Asegurarse de tener PostgreSQL instalado y configurado correctamente.
3. Ejecutar `composer install` en la raíz del proyecto para instalar las dependencias.
4. Configurar las variables de entorno y las credenciales de la base de datos en el archivo `.env`.
5. Iniciar el servidor Apache y acceder a la aplicación a través del navegador web.

