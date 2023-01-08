import mysql.connector

db = mysql.connector.connect(
  host="localhost",
  user="admin",
  port="8889",
  passwd="updatedata",
  database="Ujian"
)

curr=db.cursor()
curr.execute('SELECT * FROM customers')

res=curr.fetchall()
print(res)

for row in res:
    print(f'customer_id             : {row[0]}\n'\
          f'name           : {row[1]}\n'\
          f'address          : {row[2]}\n')
    print(curr.rowcount)
    
    jawab = 'y'
while jawab == 'y':
    
    name = input('name    : ')
    address = input('address   :').upper()

    curr .execute('INSERT INTO customers '\
                  '(name,address)'\
                  'VALUES(%s, %s)',(name,address))
    
    db.commit()
    print('Data sudah disimpan\n')
    jawab = input('Apakah data akan di input ulang? (y/t) ').lower()
db.close()