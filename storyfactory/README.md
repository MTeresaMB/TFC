
![logo](https://user-images.githubusercontent.com/72388130/161275058-0e3a496e-2bd0-49b0-82d1-fc4c455de5c8.PNG)



# StoryFactory

# Descripción - objetivo de la aplicación

  Es una aplicación que facilita la escritura de una novela o historia, proveyendo al usuario de las herramientas necesarias para ello. El usuario podrá crear todos  los personajes de la historia, y tener acceso rápdio a ellos, tener a mano tanto la historia de cada uno de ellos como sus caracteristicas. Podrá crear los lugares  donde se desarrolla la historia y sus objetos. Y finalmente, cuando este acabada podrá exportarla a formato PDF.


# Tecnología utilizada

 ## BackEnd

   La aplicación esta realizada en Laravel y PHP

 ## FrontEnd

   - SASS - pre procesador CSS. 
   - Editor JS - Libreria para crear y procesar los documentos creados por el usuario
   - Chart JS - Para mostrar las estadisticas de escritura del usuario.
    
 ## Despliegue de la aplicación
   La aplicación ha sido desplegada en Heroku, sin base de datos en otro servicio. El dominio es el proporcionado por Heroku. herokuapp.com

# Modelo de la base de datos

![esquema relacional db](https://user-images.githubusercontent.com/72388130/161332865-f8348c61-df18-41d6-acb7-22e2e6f3fc73.png)

Para la base de datos he realizado algunos cambios con respecto al modelo anteriormente presentado. Eliminando las tablas notes y chapter

## Acceso
  El acceso a la aplicación solo podrá ser como usuario registrado o perfil de administrador. Se podrá acceder a una landing page que ofrece información sobre la aplicación para usuarios no registrados

  Usuarios registrados. Pueden tener acceso a todas las secciones de la aplicación. Pueden ver, actualizar, eliminar cualquier elemento creado dentro de las distintas secciones.

  Administrador. Tiene acceso al listado de usuarios, no a los manuscritos creados por ellos. Puede crear, editar y eliminar usuarios. Una vez eliminado el usuario se pierden todos sus manuscritos.


# Mockup

Prototipo de la aplicación realizado en Figma

[Mockup StoryFactory](https://www.figma.com/file/Ba1P0S6p4opl8Vmd3Q3Cuz/storyfactory?node-id=0%3A1)


## Bibliografia

- [Documentación Laravel 8](https://laravel.com/docs/8.x/readme)
- [Curso Youtube Laravel 8](https://www.youtube.com/watch?v=JRUOeMkwkIo&list=PLZ2ovOgdI-kWWS9aq8mfUDkJRfYib-SvF)
- [Javier Moreno Aguilera](https://github.com/javmoreno-developer)
- [Curso Youtube SASS](https://www.youtube.com/watch?v=I39yxJUgOuA)
- [Documentación Editor JS](https://editorjs.io/)
- [Documentación de jsPDF](https://artskydj.github.io/jsPDF/docs/jsPDF.html)
- [Documentación de Heroku](https://devcenter.heroku.com/)

# Tutorial de como usar StoryFactory

En la landing page encontrarás un poco de información de que consiste la aplicación y que puedes hacer con ella. A través de ella puedes acceder al login y al register

## Registro
El registro es muy sencillo, solo tienes que poner un nombre de usuario, un email y una contraseña. Una vez realizado el registro podrá acceder a login y después a la aplicación
    
![Registro](/capturas/register.png)
![Registro](/capturas/login.png)

## Dashboard
En el dashboard del usuario aparece todas sus historias, personajes, lugares y objetos. También tiene varios botones para acceder a la creación de cada uno
![Registro](/capturas/dashboard.png)

## Sidebar
En los apartados del sidebar pueden acceder al listado de historias, personajes, lugares y objetos. En estos apartados se puede editar y borrar o crear un elemento nuevo. Y se puede exportar la historia que quiera el usuario a formato PDF.
![Registro](/capturas/stories.png)
![Registro](/capturas/characters.png)
![Registro](/capturas/places.png)
![Registro](/capturas/object.png)
![Registro](/capturas/export.png)

## Header
A través del header se puede acceder al nombre de usuario y el email de usuario y cambiarlo.
![Registro](/capturas/change%20user%20data.png)

## Creación nuevas historias, nuevos personajes - lugares - objetos

A través de botón de *New Story* se puede acceder al panel de un documento nuevo
![Registro](/capturas/new%20story.png)

A través de botón de *New Character* se puede acceder al panel de creación de un personaje nuevo
![Registro](/capturas/new%20character.png)

A través de botón de *New Place* se puede acceder al panel de creación de un lugar nuevo
![Registro](/capturas/new%20place.png)
A través de botón de *New Object* se puede acceder al panel de creación de un objeto nuevo
![Registro](/capturas/new%20object.png)

## Administrador
El administrador de la aplicación puede acceder a su panel y en el podrá borrar usuarios
![Registro](/capturas/admin.png)
