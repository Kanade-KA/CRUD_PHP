# Se realizo un CRUD para lenguaje PHP utilizando php para la pagina web y el consumo de una base de datos en MySql

Para esto se necesita un servidor Web para este ejemplo se utilizara apache2.
Se utilizo un servidor Linux para montar el servidor apache2.
Dentro de este servidor se utilizaron los siguientes comandos:


```
sudo apt install apache2
```


Para instalar php tambien en ubuntu se utiliza el siguiente comando:


```
sudo apt -y install software-properties-common
sudo apt-get update
sudo apt -y install php7.4
```


Para instalar mysql se utilizan los siguientes comandos:

```
sudo apt install mysql-server
```

A todo esto se le conoce como Servidor LAMP, Linux Apache MySql/MariaDB PHP.

Adicional a ello se puede configurar Apache para que empiece en una ruta en especifica y no necesaria mente en la que trae por defecto que es
/var/www/html para ello se debe de realizar lo siguiente:

```
1. Le damos permisos 777 a la carpeta donde se encuentra el index de la pagina web
        chmod 777 -R .

2. cd /etc/apache2/sites-available

3. Editamos el archivo "000-default.conf" con sudo nano 

4. Cambiamos en la linea "DocumentRoot /home/www/html " por la ruta en el que se encuentra nuestro proyecto.

5. Reiniciamos apache2
        sudo service apache2 reload 
```
