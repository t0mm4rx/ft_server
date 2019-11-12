echo "=== Starting web services ==="
service nginx start
service mysql start
/etc/init.d/php7.3-fpm start

echo "GRANT ALL PRIVILEGES ON *.* TO 'tmarx'@'localhost' IDENTIFIED BY 'password';" | mysql -u     root
echo "FLUSH PRIVILEGES;" | mysql -u root
echo "CREATE DATABASE wordpress;" | mysql -u tmarx -ppassword
mysql -u tmarx -ppassword wordpress < /home/root/wordpress.sql
