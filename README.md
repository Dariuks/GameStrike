# GameStrike
#Programación para internet.

Dario Davila Godinez

---

## Descripción:

Game Strike es un sitio web donde los usuarios pueden dejar sus opiniones y reseñas de videojuegos, 
otorgando un punjate a base de las opinones de los jugadores.
Los visitantes podran mirar las reseñas de escritas por los usuarios y el puntaje generado por estas 
en distintos juegos, pudiendo buscar juegos por categoria.
Los usuarios registrados podran dejar su reseña sobre los juegos que hayan probado.
Los administradores agregaran nuevos juegos al catalogo o podran eleminiarlos de ser pertinente, ademas 
podran modificar los datos de los juegos, ademas, tendran el privilegio de eliminar las reseñas que 
incumplan con el codigo de etica de las web.

---

## Instalación:

 Clonar proyecto: `git clone https://github.com/Dariuks/GameStrike.git` 

 Cambiarse al directorio del proyecto: `cd GameStrike`

 Instalar dependiencias mediante composer: `composer install`

 Crear archivo de variables de entorno: `cp .env.example .env`

 Crear llave: `php artisan key:generate`

 Configurar los datos del mailtrap en el archivo: `.env`

 Crear la base de datos en tu sistema gestor de bases de datos: `CREATE DATABASE GameStrike`

 Configurar nombre de base de datos en _.env_ y ejecutar migraciones: `php artisan migrate`

 Ejecutar seeds: `php artisan db:seed`

 Borrar el acceso directo en public/images a gameImages si existe.
 
 Link storage: `php artisan storage:link`


## Cuentas de usuario:
 Admin:
SoyAdmi@gmail.com<br>
password

User:
NoSoyAdmi@gmail.com<br>
password

