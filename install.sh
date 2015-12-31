apt-get -y update
apt-get -y install apache2
apt-get -y install mysql-server libapache2-mod-auth-mysql php5-mysql
mysql_install_db
apt-get -y install php5 libapache2-mod-php5 php5-mcrypt


apt-get install python-dev libmysqlclient-dev


apt-get -y install python3-pip
pip3 install PyMySQL