cd /root
wget http://dl.4players.de/ts/releases/3.0.11.4/teamspeak3-server_linux-amd64-3.0.11.4.tar.gz
tar zxvf teamspeak3-server_linux-amd64-3.0.11.4.tar.gz
cd teamspeak3-server_linux-amd64
cd /etc/init.d/
ln -s ~/teamspeak3-server_linux-amd64/ts3server_startscript.sh ts3server
update-rc.d ts3server defaults
update-rc.d ts3server enable
service ts3server start


------------------------------------------------------------------
                      I M P O R T A N T
------------------------------------------------------------------
               Server Query Admin Account created
         loginname= "serveradmin", password= "+gApN6ue"
------------------------------------------------------------------


------------------------------------------------------------------
                      I M P O R T A N T
------------------------------------------------------------------
      ServerAdmin privilege key created, please use it to gain
      serveradmin rights for your virtualserver. please
      also check the doc/privilegekey_guide.txt for details.

       token=RPdGMBX1yNGl11rciMsGc7r0xAJIlwAJ+89SMwVS
------------------------------------------------------------------
