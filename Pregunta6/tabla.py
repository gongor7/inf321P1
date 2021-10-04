# -*- coding: utf-8 -*-


import mysql.connector

conexion1=mysql.connector.connect(host="localhost", 
                                  user="root",                             
                                  database="mibasemicristhian")
cursor1=conexion1.cursor()
sql = "INSERT INTO `usuario`(`ci`, `Usuario`, `user_password`) VALUES (%s,%s,%s)"
datos=("999999999","alumno","999999999")
cursor1.execute(sql, datos)
datos=("hhh","Docente","hhh")
cursor1.execute(sql, datos)
conexion1.commit()
conexion1.close()

