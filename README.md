# GitHub + Markdown: Práctica
___Mario Tarrega Beltrán___
![Imagen identificativa](https://github.com/MarioTarrega/DAW23/blob/UD1/Foto%20Ficha.jpg)

## Introduccion.
En este docuemto veremos ¿Qué es GitHub? También veremos sus usos y sus ventajas. Además tendremos una pequeña conclusión y varios enlaces de dónde podéis obtener más información.

### ¿Qué es GitHub?
  **GitHub** es un repositiorio, para crear proyectos abiertos de herramientas y aplicaciones, y se caracteriza por todas sus funciones colaborativas que nos ayudan a que todos nos ayuden.
	Los proyectos abiertos pueden ser descargados y revisados por cualquien usuario, lo que ayuda a mejorar el proyecto y a crear diferentes ramificaiones, tu código también puede ser privado, otra de las fucionalidades es **poder ver las diferentes versiones del proyecto**, restaurar versiones antigual por si algo sale mal. También permite trabajar con distintas ramas, como la de desarroyo para nuevas funciones o la depuración de bugs.

### Usos y ventajas de GitHub.

* Control de versiones.
  Sirve para conoces y autorizar los cambios que quieres que realicen los colaboradores, guardando información de qué incluyen los cambios y cuándo se hicieron. El valor de esta herramienta podríamos decir que es la más valiosa de todas, con esta herramienta puedes **tener acceso a versiones anteriores** por si algun momento se queda sin funcionar el proyecto.

* Branches.
  Es un mapa lineal de los comits para ver cuándo empezamos un proyecto con GitHub, automáticamente nos crea una rama llamada **main** de la cual nosostros crearemos la nuestra.

* ¿Que son los *commits*?
  Es como denominamos a los guardados en GitHub, en otras palabras es la acción de subir los archivos cpn los cambios realizados en los repositorios y guardarlos, para hacer los comits tenemos distintos pasos:
  1. Verificar el estado del repositorio con **git _status_** una vez verificado veremos los archivos modificados y listos para subir.
  2. Si no existe archivos agregado al **Índice** ejecutaremso el siguiente comando **git _add_**.
  3. Ahora crearemos el **commit** ejecutando este comando **git _commit -m_ "comentario de los cambios realizados"**, es importante poner una descripción clara para poder entenderla más adelante.

* Solicitudes de extracción '''pull request'''
  Estas solicitues o pull request son el formato para contribuir con  los cambios realizado en un código base y fusionarlos. Realizaremos los siguientes pasos:
  1. Crear una bifurcación en la página de GitHub que contienen la base del código donde quieres contribuir y duplicarla en nuestra cuenta para no afectar al código base.
  2. Obtener una URL de la bifurcación que acabamos de crear.
  3. Clonaremos el código base en nuestro ordenador local con el comando **git _clone_**
  4. Realizamos cambios en nuestro repositorio local.
  5. Ahora insertaremos el repositiorio local en el repositorio Fork en GitHub, con los siguientes comandos **git _add_**, **git _commit_**, **git _push_**.
  6. Vuelve a la página Fork en GitHub
  7. Presiona el botón **PULL REQUEST** dale un nombre y comenta los cambios realizados y envías.

### Conclusión

Para mi a dia 18/09/2023 me parece que es una herramienta muy útil y con muchas utilidades de las cuales conozco un 0,01% seguramente, y a final del curso espero conocer bastante más ya por lo que he leìdo por internet parece ser la mejor herramienta en red que hay para trabajar con código abierto.


### Bibliografía
* [Xataka "¿Que es GitHub?](https://www.xataka.com/basics/que-github-que-que-le-ofrece-a-desarrolladores)
* [Platzi "Usos y ventajas de GitHub](https://platzi.com/blog/que-es-github-como-funciona/)
