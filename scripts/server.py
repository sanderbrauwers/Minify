import json
from pprint import pprint

with open('../minify/data/status.json') as data_file:    
  data = json.load(data_file)

for server in data:
  pprint(server['serverid'])
  open('sweg.txt', 'w')