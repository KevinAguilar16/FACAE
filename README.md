# facae
## Creación de un usuario para mysql 
```
CREATE USER 'nuevo_usuario'@'localhost' IDENTIFIED BY 'contraseña';
GRANT ALL PRIVILEGES ON * . * TO 'nuevo_usuario'@'localhost';
FLUSH PRIVILEGES;
```
