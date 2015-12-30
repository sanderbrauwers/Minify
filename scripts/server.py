import json, os
from pprint import pprint

with open('../minify/data/status.json') as data_file:    
  data = json.load(data_file)

for server in data:
  print('Restarting server')
  #pprint(server['serverid'])
  print('Trying to delete json file..')
  #os.remove('C:\wamp\www\webapp\minify\data')
  os.remove('/var/www/html/webapp/minify/data/status.json')
  print('Json succesfully deleted')