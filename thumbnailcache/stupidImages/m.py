import mysql.connector
import urllib.request
from PIL import Image
import re
pattern = r"watch\?v=([a-zA-Z0-9_-]+)"

# Connect to database
mydb = mysql.connector.connect(
host = "89.117.188.204",
user = "u121593376_adhithya",
password = "63799740710@Adhithya",
database = "u121593376_eeresources"
)

mycursor = mydb.cursor()
mycursor.execute("SELECT id, Resources FROM resourcesmaster_01 WHERE Resources LIKE '%&%'")

results = mycursor.fetchall()

for result in results:
    video_id = result[0]
    video_url = result[1]
    match = re.search(pattern, video_url)
    if match:
      video_url = match.group(1)


    thumbnail_url = f"http://img.youtube.com/vi/{video_url}/hqdefault.jpg"
    thumbnail_file = f"{video_id}.jpg"

    print(thumbnail_url)

    try:
      urllib.request.urlretrieve(thumbnail_url, thumbnail_file)
    except:
      continue  

    thumbnail = Image.open(thumbnail_file)
    width, height = thumbnail.size
    thumbnail = thumbnail.crop((0, 45, width, height - 45))
    
    thumbnail.save(f"./{video_id}.jpg")
