<div align="center">

<h1> CRUD API PACIENTES LARAVEL | AUTENTIFICACIÓN Y PAGINACIÓN </h1>

[![Status](https://img.shields.io/badge/status-active-success.svg)]()
[![GitHub Issues](https://img.shields.io/github/issues/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/issues)
[![GitHub Pull Requests](https://img.shields.io/github/issues-pr/kylelobo/The-Documentation-Compendium.svg)](https://github.com/kylelobo/The-Documentation-Compendium/pulls)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

## 💬 Descripción del proyecto <a name="point_right-descripción-del-proyecto-"></a>

<p>Este proyecto implementa una API RESTful en Laravel que permite realizar operaciones CRUD (Crear, Leer, Actualizar y Eliminar) en una base de datos. La API también incluye autenticación de usuarios y paginación de resultados para una mejor experiencia de usuario.

## 🥇 DEMO 🥇 <a name="-demo--"></a>

</p>
</div>

<div align="center">
<p align="center">
  <a href="" rel="noopener">
 <img width=900px  src="./demo.gif" alt="demo"></a>
</p>
</div>

---

<h2> 📝 Tabla de contenido </h2>

- [💬 Descripción del proyecto ](#-descripción-del-proyecto-)
- [🥇 DEMO 🥇 ](#-demo--)
- [💎 Tecnologías utilizados](#-tecnologías-utilizados)
  - [📖 Características ](#-características-)
  - [✒️ Clonar ](#️-clonar-)
  - [⌨️ Uso ](#️-uso-)
- [👨‍💻 Desarrollador](#-desarrollador)

## 💎 Tecnologías utilizados<a name="beginner-tecnologías-utilizados"></a>

-   Este proyecto utiliza las siguientes tecnologías:

-   **Laravel** - un framework de PHP para aplicaciones web
-   **Tailwind CSS** - un framework de CSS para diseñar interfaces de usuario
-   **Alpine.js** - un framework de JavaScript para la capa de presentación
-   **Livewire** - una biblioteca de componentes para Laravel que permite construir interfaces de usuario dinámicas sin tener que escribir JavaScript

### 📖 Características <a name="dart-prerrequisitos-"></a>

Este proyecto incluye las siguientes características:

-   Operaciones CRUD (Crear, Leer, Actualizar y Eliminar) en una base de datos utilizando una API RESTful en Laravel
-   Autenticación de usuarios para proteger los endpoints de la API y restringir el acceso a ciertas partes de la aplicación solo para usuarios registrados y autenticados
-   Paginación de resultados para manejar grandes cantidades de datos de manera más eficiente y permitir al usuario navegar por los resultados de manera más fácil y rápida.

### ✒️ Clonar <a name="-clonar-"></a>

Clonar para usarlo en tu servidor local

```
git@github.com:cybertcode/APIPacientes.git
```

ó

```
https://github.com/cybertcode/APIPacientes.git
```

### ⌨️ Uso <a name="-uso-"></a>

-   En el terminal

    ```
    composer install
    cp .env.example .env
    php artisan key:generate
    ```

-   Crear tu base de datos
-   Cambiar los datos de usuario

    ```
    DB_DATABASE=api-pacientes
    DB_USERNAME=root
    DB_PASSWORD=
    ```

-   En el terminal
    ```
    php artisan migrate
    php artisan db:seed
    php artisan serve
    ```
-   ## 🧑‍✈️ Para uso en postman
    -   ### ⭐ Autenticación de Usuario
        -   API Sanctun - crear usuario - autenticación - cerrar sesión
            -   Crear Usuario
            ```
            http://127.0.0.1:8000/api/usuarios/registro
            ```
            -   Iniciar sesión
            ```
            http://127.0.0.1:8000/api/usuarios/acceso
            ```
            -   Cerrar sesión
            ```
            http://127.0.0.1:8000/api/usuarios/salir
            ```
    -   ### ⭐ CRUD Pacientes
        -   API CRUD operaciones básicas
            -   Ver Pacientes
            ```
            http://127.0.0.1:8000/api/pacientes
            ```
            -   Crear Paciente
            ```
            http://127.0.0.1:8000/api/pacientes
            ```
            -   Ver Paciente
            ```
            http://127.0.0.1:8000/api/pacientes/1
            ```
            -   Actualizar Paciente
            ```
            http://127.0.0.1:8000/api/pacientes/2
            ```
            -   Eliminar Paciente
            ```
            http://127.0.0.1:8000/api/pacientes/1
            ```

## 👨‍💻 Desarrollador<a name="desarrollador"></a>

<div  align="center">

[![MKevyn](https://readme-typing-svg.demolab.com?font=Fira+Code&weight=500&size=18&pause=1&multiline=true&width=435&lines=Ing.+MKevyn+%7C+BackEnd+developer;+%7B%7B+Codeo+y+luego+existo+%7D%7D)](https://github.com/cybertcode)

[![cuenta](https://github-widgetbox.vercel.app/api/profile?username=cybertcode&data=followers,repositories,stars,commits&theme=nautilus)](https://github.com/cybertcode)

<p align="center">
  <img src="https://raw.githubusercontent.com/MartinHeinz/MartinHeinz/master/wave.gif" width="20px"> Mis redes sociales :<br/><br/>
    <a href="https://www.linkedin.com/in/marvyn-kevyn-huanca-hilario-a12699b7/"><img src="https://img.shields.io/badge/linkedin-0077B5.svg?style=for-the-badge&logo=linkedin&logoColor=white"/></a>
    <a href="https://www.facebook.com/profile.php?id=100047330599374"><img src="https://img.shields.io/badge/facebook-1D4292.svg?style=for-the-badge&logo=facebook&logoColor=white"/></a>
    <a href="https://gitlab.com/cybert22"><img src="https://img.shields.io/badge/gitlab-1D4292.svg?style=for-the-badge&logo=gitlab"/></a>
    <a href="https://www.instagram.com/mkevynhh"><img src="https://img.shields.io/badge/instagram-E4405F.svg?style=for-the-badge&logo=instagram&logoColor=white"/></a>
    <a href="https://www.twitch.tv/cybert22"><img src="https://img.shields.io/badge/twitch-9146FF.svg?style=for-the-badge&logo=twitch&logoColor=white"/></a>
    <a href="https://twitter.com/Kevyn94"><img src="https://img.shields.io/badge/twitter-1DA1F2.svg?style=for-the-badge&logo=twitter&logoColor=white"/></a>
</p>

</div>

---

</br>
<div align="center">
<p align="center"> © 2023 Cybertcode, todos los derechos Reservados. Hecho con mucho ❤️ . </p>
<p align="center">
https://www.cybertcode.com
</p>
</div>
