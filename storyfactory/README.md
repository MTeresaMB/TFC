
![logo](https://user-images.githubusercontent.com/72388130/161275058-0e3a496e-2bd0-49b0-82d1-fc4c455de5c8.PNG)



# StoryFactory

# Descripción - objetivo de la aplicación

  Es una aplicación que facilita la escritura de una novela o historia, proveyendo al usuario de las herramientas necesarias para ello. El usuario podrá crear todos  los personajes de la historia, y tener acceso rápdio a ellos, tener a mano tanto la historia de cada uno de ellos como sus caracteristicas. Podrá crear los lugares  donde se desarrolla la historia y sus objetos. Y finalmente, cuando este acabada podrá exportarla a diferentes formatos (PDF, EPUB, DOCX).


# Tecnología utilizada

 ## BackEnd

    Como gestor de base de datos usaré Mysql. Como lenguaje utilizaré PHP con su framework Laravel en su versión 8.

 ## FrontEnd

    Utilizaré SASS, como preprocesador. Javascript, junto con una libreria para crear y procesar los documentos creados para los manuscritos que se llama Editor.js
    Tambien utilizaré Jquery. Para mostrar las estadisticas de escritura del usuario utilizaré Chart.js y para las animaciones Animejs.
    
 ## Despliegue de la aplicación
    Desplegar la aplicación en la nube: En que servidor en la nube vas a desplegarla?
      -La aplicación se desplegará en el hosting Heroku
    Dominio: Que dominio vas a utilizar (si uno gratuito, uno .es, .com?)
      -Se utilizará el dominio www.storyfactory.com, sin ningun subdominio
    SGBD: Vas a alojar la base de datos donde mismo que la web o en un servidor aparte?
      -La base de datos la alojare en el mismo hosting Heroku

# Modelo de la base de datos


![entidad-relacion db](https://user-images.githubusercontent.com/72388130/161332848-9ad117b3-ba8e-48d4-8212-43679e6679a8.png)



![esquema relacional db](https://user-images.githubusercontent.com/72388130/161332865-f8348c61-df18-41d6-acb7-22e2e6f3fc73.png)

## Acceso
  El acceso a la aplicación solo podrá ser como usuario registrado o perfil de administrador. Se podrá acceder a una landing page que ofrece información sobre la aplicación para usuarios no registrados

  Usuarios registrados. Pueden tener acceso a todas las secciones de la aplicación. Pueden ver, actualizar, eliminar cualquier elemento creado dentro de las distintas secciones.

  Administrador. Tiene acceso al listado de usuarios, no a los manuscritos creados por ellos. Puede crear, editar y eliminar usuarios. Una vez eliminado el usuario se pierden todos sus manuscritos.


# Mockup

Prototipo de la aplicación realizado en Figma

[Mockup StoryFactory](https://www.figma.com/file/Ba1P0S6p4opl8Vmd3Q3Cuz/storyfactory?node-id=0%3A1)

# Checkpoint 13 de Mayo de 2022

https://youtu.be/31DSqKRrycw


