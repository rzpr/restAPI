import requests as r
import json

long_url = 'https://stackoverflow.com/questions/ask';
apiv4 = 'https://api-ssl.bitly.com/v4/bitlinks';
genericAccessToken = '7f66e1eba7a655540dfce29bad93095af9c8567c';
headers = {
    'Authorization': 'Bearer '+genericAccessToken,
    'Content-Type': 'application/json',
    'Content-Length': json.dumps({'long_url':long_url})
}

req = r.post(apiv4, data=json.dumps({'long_url':long_url}),headers=headers)
print(req.json()['id'])
