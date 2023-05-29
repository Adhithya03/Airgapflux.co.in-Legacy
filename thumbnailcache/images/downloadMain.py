import mysql.connector
import urllib.request
from PIL import Image

# Database credentials
host = "89.117.188.204"
user = "u121593376_adhithya"
password = "63799740710@Adhithya"
database = "u121593376_eeresources"

# Connect to database
conn = mysql.connector.connect(host=host, user=user, password=password, database=database)

# Check if connection was successful
if conn.is_connected():
    print("Connected to database")

# Create cursor to execute queries
cursor = conn.cursor()

# Execute query to fetch data with resources field
query = "SELECT * FROM resourcesmaster_01 WHERE resources IS NOT NULL"
cursor.execute(query)
a  = cursor.fetchall()

for data in a:
    resources = data[4]
    
    # Check if link is Youtube video
    if "youtube" in resources:
        try:
            vid_id = resources.split("?v=")[1]
            img_url = "https://img.youtube.com/vi/" + vid_id + "/hqdefault.jpg"
            img = Image.open(urllib.request.urlopen(img_url))
            
            img = img.crop((0, 45, img.width, img.height-45))
            img.save(f"{data[0]}.jpg")
        except:
            print(f'Skipping record {data[0]}')
            continue