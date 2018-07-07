# Visualización Ordenamiento Territorial Colombia ![TravisCI](https://travis-ci.org/larry852/ordenamiento-territorial.svg?branch=master)

## Descripción
El aplicativo web, “visualización ordenamiento territorial colombia”, a través de la centralización de información abierta no estructurada sobre ordenamiento territorial colombiano, muestra al usuario de manera organizada y graficada, los datos de cada municipio y departamento del país, información referente a la distribución de zonas asignadas por cada institución municipal. Además el sistema web permite la aplicación de filtrado y búsqueda sobre esta información. También se incluye en el desarrollo del aplicativo, el diseño del mecanismo de administración de la información en la plataforma por cada municipio.

## Módulo Frontend
Producto principal para el usuario, dándole acceso a la información proveída por el módulo backend. 

## Módulo Backend
Api Rest prestadora de servicios de información.

## Direcciones de acceso de despliegue:
- [Backend](https://ordenamiento-backend.herokuapp.com)
- [Frontend](https://ordenamiento-frontend.herokuapp.com)

## Direccion de acceso de código fuente:
- [Backend](Source/Backend)
- [Frontend](Source/Frontend)


## Manual de ejecución local

- Sistema operativo testeo: Debian GNU/Linux 9 (stretch) 64-bit

### Requerimientos

**PHP 7.0**
```sh
sudo apt install php7.0
```

**php-mbstring**
```sh
sudo apt install php-mbstring
```

**php-xml**
```sh
sudo apt install php-xml
```

**php-pgsql**
```sh
sudo apt install php-pgsql
```
**php-sqlite**
```sh
sudo apt install php-sqlite3
```

**composer**
```sh
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
php -r "unlink('composer-setup.php');"
```

**curl**
```sh
sudo apt install curl
```

**Node - npm**
```sh
sudo apt install curl
curl -sL https://deb.nodesource.com/setup_9.x | sudo -E bash -
sudo apt install nodejs
sudo apt install build-essential
```


### Ejecución

**Clonación de repositorio**
```sh
git clone https://github.com/larry852/ordenamiento-territorial.git
```

**Ejecución módulo Backend**
```sh
cd ordenamiento-territorial/Source/Backend/
touch database/database.sqlite
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
## http://localhost:8000/

## Para inicialización de base de datos, abrir una nueva terminal y ejecutar.
curl http://localhost:8000/init
```

**Ejecución módulo Frontend**
```sh
cd ordenamiento-territorial/Source/Frontend/
sudo npm install -g @angular/cli
npm install
ng server --env=local
## http://localhost:4200/
```

### Formulario registro y adición de datos.
1. Ingresar a http://localhost:8000/login
2. Acceder a la plataforma con las credenciales. email: admin@admin.com password: admin


## Documentación
- [Manual de usuario](Documentacion/Manual%20usuario.pdf)
- [Manual ejecución local](Documentacion/Manual%20ejecucion%20local.pdf)
- [Manual de registro de información](Documentacion/Manual%20de%20registro%20de%20informacion.pdf)
- [Despliegue](Documentacion/Despliegue)
- [Diseño](Documentacion/Dise%C3%B1o)
- [General](Documentacion/General)
- [Gestión de la información](Documentacion/Gestion%20de%20la%20informacion)
- [Historias de usuario](Documentacion/Historias%20de%20usuario)
- [Testing](Documentacion/Testing)

## Tecnologías
- Framework(Backend)
	- Laravel 5.4.36
- Framework controlador (Frontend)
	- Angular 2
- Framework de estilos (Frontend)
	- Materialize

## Diagrama de componentes
![Componentes](Documentacion/Dise%C3%B1o/Logico/componentes.png?raw=true "Componentes")

## Diagrama de despliegue
![Despliegue](Documentacion/Dise%C3%B1o/Logico/despliegue.png?raw=true "Despliegue")

## Endpoints API
![Endpoints](Source/Backend/Endpoints.PNG?raw=true "Endpoints")

## Modelo E-R
![Modelo E-R](Source/Backend/MER.png?raw=true "Modelo E-R")

## [Contacto](https://ordenamiento-frontend.herokuapp.com/equipo)

