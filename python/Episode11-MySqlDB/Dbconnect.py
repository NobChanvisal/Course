import mysql.connector 

conn = mysql.connector.connect(
    host="127.0.0.1",
    user="root",
    password="Visal##SQL16",
    database="python_db"
)
# cursor = conn.cursor()#You use it to: Run SQL commands (SELECT, INSERT, etc.)