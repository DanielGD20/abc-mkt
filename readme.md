## Sobre el sistema

Este es un sistema de ventas web realizado para la Universidad Espíritu Santo en el cual se podra realizar la peticion de material publicitario dentro del departamento de Marketing, además de poder observar el flujo de costos del mismo y evitar la tediosa tarea de generar reportes.

## Instrucciones de instalacion:

- Descargar **Xampp** o **Wampp** [Descargar Wampp Aqui](http://www.wampserver.com/en/).

- Descargar Visual Studio Code o cualquier Ide de preferencia.

- Descargar Composer para poder utilizar los comandos del Artisan [Descargar Aqui](https://getcomposer.org/).

- Clonar el repositorio dentro de la carpeta htdocs (Xampp) o www (Wampp).

- Abrir Phpmyadmin dentro de Wampp o Xammp y crear una nueva base de datos.

- Una vez creada la base de datos se debe abrir el ide e inicializar la carpeta del proyecto clonado, dentro de esta de debe abrir el archivo **.env** y ahi editar los parametros de acuerdo a la base de datos.

# Ej:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=abc
DB_USERNAME=root
DB_PASSWORD=root

- Una vez realizado todos los pasos se debe inicializar los datos dentro de la base de datos. Se abre la linea de comandos y se ingresa el comando: **php artisan migrate** (Esto inicializa las tablas dentro de la base de datos).

- a continuación el comando: **php db:seed** (Esto genera los datos dentro de las diferentes tablas de la base de datos).

- Una vez realizado lo anterior se debe crear un virtual host en el cual podamos definir la carpeta de comienzo de nuestro host.

# Nota:

Como alternativa se puede usar la terminal con el comando: **php artisan serve** Para ejecutar un servidor local, el problema es que este no cuenta con una base de datos, es simplemente para testear el front de la aplicación.

## Aprender Laravel

Laravel tiene la biblioteca de documentación y video tutoriales más extensa y exhaustiva de cualquier marco de aplicación web moderno. La [documentación de Laravel](https://laravel.com/docs) es exhaustiva, completa y hace que sea muy fácil comenzar a aprender el marco.

Si no está de humor para leer, [Laracasts](https://laracasts.com) contiene más de 900 tutoriales en video sobre una variedad de temas que incluyen Laravel, PHP moderno, pruebas unitarias, JavaScript y más. Aumente el nivel de habilidad de usted y de todo su equipo explorando nuestra completa biblioteca de videos.

# Ejemplos de funcionalidades

- [Motor de enrutamiento simple y rápido](https://laravel.com/docs/routing).
- [Potente contenedor de inyección de dependencia](https://laravel.com/docs/container).
- Múltiples back-end para [sesión](https://laravel.com/docs/session) y [caché](https://laravel.com/docs/cache) de almacenamiento.
- Expresivo, intuitivo [base de datos ORM](https://laravel.com/docs/eloquent).
- Base de datos agnóstica [migraciones de esquema](https://laravel.com/docs/migrations).
- [Procesamiento robusto de trabajos en segundo plano](https://laravel.com/docs/queues).
- [Transmisión de eventos en tiempo real](https://laravel.com/docs/broadcasting).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
