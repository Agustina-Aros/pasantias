<h1>Proyecto Laravel - Pasantías (Gestión de Productos)</h1>
<p> Este repositorio contiene el desarrollo del sistema de gestión de usuarios y productos construido sobre el framework Laravel y MySQL como motor de base de datos.</p>

<h2>Requisitos previos</h2>
<p>Antes de empezar, revisa de tener instalado en tu equipo:</p>
<ul>
    <li>PHP</li>
    <li>Composer</li>
    <li>MySQL (a través del servidor XAMPP)</li>
    <li>phpMyAdmin</li>
</ul>

<h2>Instrucciones de instalación y configuración</h2>

<h3>Clonar o descargar el repositorio</h3>
<p>Clona el repositorio en el git bash del proyecto con el siguiente link:</p>
    
    https://github.com/Agustina-Aros/pasantias.git

<h3>1. Configurar el archivo de entorno (.env)</h3>
<p>Copia el archivo <strong>.env.example</strong> para crear el archivo .env local:</p>

    cp .env.example .env

<p>Generar la clave de encriptación de la aplicación:</p>

    php artisan key:generate

<p>Abrí el archivo <strong>.env</strong> recien creado y configura las credenciales de la base de datos <strong>bdpasantias</strong>:</p>

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=bdpasantias
    BD_USERNAME=root
    BD_PASSWORD=

<h3>2. Configurar e importar la Base de Datos (<strong>bdpasantias</strong>)</h3>
<p> Abrí phpMyAdmin o tu gestor de base de datos y crea la base de datos vacia llamda <strong>bdpasantias</strong>.</p>
<p> En la terminal, ejecuta las migraciones para generar las tablas <strong>usuarios</strong> y <strong>productos</strong>:</p>

    php artisan migrate:fresh

<p> Iniciar el servidor de desarrollo integrado de laravel, ejecuta:</p>

    php artisan serve


<h2>Páginas:</h2>
<ul>
    <li>Registro</li>
    <li>Login/Logout</li>
    <li>CRUD de productos</li>
</ul>

<h2>Integrantes del proyecto:</h2>
<ul>
    <li>Aros, Agustina</li>
    <li>Fuentes, Aixa</li>
    <li>Illanes, Sebastián</li>
    <li>Villar, Ceferino</li>
</ul>
