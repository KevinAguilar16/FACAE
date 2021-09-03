# FACAE
Integrates
==========
- Kevin Aguilar.
- Stalin Francis.
- Damaris Miranda

Objetivo 👍
------------
Pograma para la gestión de archivos pdf.

Composición
-----------
### <- Index.php
Este es el archivo principa
### <- Readm.md
Este es pare explicar el proyecto
- Modelo (Model)
- Vista (View)
- Controlador (Controller).
   - Login.php
# Instalación
## Instalación de base de datos
### Crear la base de datos
- ingresar a phpmyadmin
- Crear la base de datos facae
### importar la base de datos
- Ingersar a la opcion de importar
### Crear un usuario
  mysql> create user 'utlvte-ti'@'localhost' IDENTIFIED BY 'utLVte2@3#';
### Dar permiso a la base de datos
  mysql> GRANT ALL PRIVILEGES ON facae . * TO 'utlvte-ti'@'localhost'; \\
  mysql> FLUSH PRIVILEGES;
### Corregir errores 

- Editar el archivo facae.sql que se encuentra la carpeta FACAE del sitio web
- Corregir el error #1273 - Collation desconocida: 'utf8mb4_0900_ai_ci'
- Buscar el texto 'utf8mb4_0900_ai_ci'  por    'utf8mb4_general_ci'
- Importar la base de datos con el archivo facae.sql.
### Ejemplo de creación de vistas
mysql> CREATE VIEW `usuario1` AS select usuario.idusuario, usuario.password, usuario.idpersona,persona.nombres,usuario.idperfil,perfil.descripcion,usuario.email from usuario,perfil,persona where usuario.idpersona=persona.idpersona and usuario.idperfil=perfil.idperfil;
