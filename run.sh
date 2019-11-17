#!/bin/sh
echo "Launching docker container 'ft_server' with port redirection 1234-->80 and 1235-->443"
sudo docker run -ti -p1234:80 -p1235:443 ft_server
