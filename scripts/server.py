import json, os
import pymysql.cursors
from pprint import pprint

# Connect to the database
connection = pymysql.connect(host='localhost',
                             user='root',
                             password='SuperDocScanMoustacheMan110%HairHeartbleed',
                             db='minifydb')

try:
  with connection.cursor() as cursor:
    # Read a single record
    sql = "SELECT * FROM `server` WHERE serverid=1"
    cursor.execute(sql)
    result = cursor.fetchone()
    print ("(serverid, status)")
    print(result)

    if result['status'] == 2:
      print('status is 2')
    #with connection.cursor() as cursor:
        # # Create a new record
        # sql = "INSERT INTO `server` (`status`) VALUES (%s)"
        # cursor.execute(sql, ('2'))

    # connection is not autocommit by default. So you must commit to save
    # your changes.
    #connection.commit()
    
finally:
    connection.close()


with open('../minify/data/status.json') as data_file:    
  data = json.load(data_file)

for server in data:
  print('Restarting server')
  p = os.popen('service ts3server restart',"r")
  while 1:
    line = p.readline()
    if not line: break
    print(line)
  #pprint(server['serverid'])
  print('Trying to delete json file..')
  #os.remove('C:\wamp\www\webapp\minify\data')
  os.remove('/var/www/html/webapp/minify/data/status.json')
  print('Json succesfully deleted')
















