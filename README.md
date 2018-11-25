# Imperibyte
<p>Imperibyte Admin Panel es un sistema de control y manejo para sitio web (OnePage) esta desarrollado en programacion Estructurada<br />y como motor de bases de dato usamos mysql. En el Archivo <code>db.php</code> que se encuentra en el directorio <code>conexion/db.php</code> se encuetra la conexion a la base de datos y el nombre de las tabllas asignadas a unas variables</p>
<p><code>&lt;?php</code><br /><code>$mysqli=new mysqli("localhost","root","1234567","imperibyte");</code></p>
<p><code>$tb_users = 'users';</code><br /><code>$tb_posts = 'posts';</code><br /><code>$tb_categories = 'categories';</code><br /><code>$tb_portfolio = 'portfolio';</code><br /><code>$tb_teams = 'teams';</code></p>
<p><br /><code>if(mysqli_connect_errno()){</code><br /><code>echo 'Conexion Fallida : ', mysqli_connect_error();</code><br /><code>exit();</code><br /><code>}</code><br /><code>?&gt;</code></p>
