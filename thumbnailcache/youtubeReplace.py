import mysql.connector
from mysql.connector import errorcode

# Function to find and replace URLs
def find_and_replace_url(url):
    if url.startswith("https://youtu.be/"):
        video_id = url[17:]
        time_start = video_id.find("?t=")
        if time_start != -1:
            video_time = video_id[time_start + 3:]
            video_id = video_id[:time_start]
            
            return f"https://www.youtube.com/watch?v={video_id}&t={video_time}s"
    
    return url

# Connect to the database
try:
    db = mysql.connector.connect(
        host="89.117.188.204",
        user="u121593376_adhithya",
        password="63799740710@Adhithya",
        database="u121593376_eeresources"
    )
    
    cursor = db.cursor()
    
    # Fetch all records from the table resourcesmaster_01
    cursor.execute("SELECT id, Resources FROM resourcesmaster_01")
    records = cursor.fetchall()
    
    # Loop over the records and update the Resources field
    for record in records:
        resource_id = record[0]
        original_url = record[1]
        updated_url = find_and_replace_url(original_url)
        
        if updated_url != original_url:
            
            cursor.execute("UPDATE resourcesmaster_01 SET Resources = %s WHERE ResourceID = %s", (updated_url, resource_id))
            db.commit()

except mysql.connector.Error as err:
    if err.errno == errorcode.ER_ACCESS_DENIED_ERROR:
        print("Something is wrong with your username or password.")
    elif err.errno == errorcode.ER_BAD_DB_ERROR:
        print("Database does not exist.")
    else:
        print(err)
        
else:
    cursor.close()
    db.close()

