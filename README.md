# Server
server logic based on http post request and mySQL database running on apache web server (RPI) or external web server

## Getting started
* Either dump the code on a web server with php enabled and update the password to mySQL db or install it locally on RPI
Installation on RPI
```
sudo apt-get update
sudo apt-get upgrade
sudo apt install apache2 -y
sudo apt install mariadb-server
sudo mysql_secure_installation
sudo mysql -u root -p
sudo apt install php-mysql
sudo apt install phpmyadmin
```
* Put the files into htdocs in Apache and change the password and username in all PHP files accordinly 
* Create database and tables required by calling db.php, table1.php and table2.php through web browser
* Change the address in serverlib.py and gui.py to the address of the data.php file (usually [your_ip]/data.php)
