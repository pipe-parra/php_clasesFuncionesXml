# Hotel_miras_del_mar
Servicio Web en php que permite consultara una base de datos usando PDO y mostrar opciones para el filtro de consulta llamando a un XML

# observaciones
-En primer lugar este proyecto es publico y esta en mi github, de esta forma estoy aprendiendo a gestionar git y github anticipadamente
agregue algunos estilos, si no sirviera el estilo que aparece actualmente en el ultimo commit, se puede retroceder con un rebase, al entrar en git log --oneline, se puede ver el resultado en bruto sin estilos css, en este commit: 63471e9  

# bdmira
Contiene el archivo "habitacion.sql" para generar la base de datos neceesaria (dbmira) para realizar las pruebas de forma local, en este caso se uso XAMPP.
Me genera dudas solo la parte del contraseña, ya que en mi computador es 1234, no se si eso puede generar algun problema en otro computador, al querer ingresar a la BD

# clases
Creé dos clases, una llamada coenxion donde dejo listo para conectar, y la otra es habitacion.

# funciones
Creé tres funciones:

-BuscarPorPrecio
-BuscarTodas
-CargarPrecios