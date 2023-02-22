# TodoList-In-Laravel
Create a todo list laravel 10 and postgres
<h3>http://todo.test</h3>
Steps for setup and run this on localhost
Step 1: Create hostname on local
Go to C:\Windows\System32\drivers\etc
open "hosts" file in notepad++ with admin privilage and add below line:

127.0.0.1 todo.test

Step 2: Define virtual host in xampp httpd-vhosts.conf
Now Open directory C:\xampp\apache\conf\extra 
Open File: httpd-vhosts.conf and add below line
#Set test domain name
<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs/todo/public"
	  ServerName todo.test
</VirtualHost>

save file and restart xampp.

You can also skip above 2 steps if setup project in a sub-folder in htdocs. 
In that case you need to add a .htaccess file in project root. you can copy .htaccess file from public folder and paste that in project root and add below line:
<code>
# Remove public URL from the path
RewriteCond %{REQUEST_URI} !^/public/
RewriteRule ^(.*)$ /public/$1 [L,QSA]
</code>

Step 3: Create a database in Postgress (You can also use mariaDB or whatever you want to use, you only need to change DB_CONNECTION value according to database, I am using pgsql)
DB: postgress, DBname: db_todo, User: postgres, Password: root, port: 5432

Step 4: Update database details in .env 
<code>
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=db_todo
DB_USERNAME=postgres
DB_PASSWORD=root
</code>

Now you need to update composer, run migrate, npm install and build.
Commands:
C:\xampp\htdocs\todo> composer update
C:\xampp\htdocs\todo> php artisan migrate
C:\xampp\htdocs\todo> npm install
C:\xampp\htdocs\todo> npm run build

Now check your todo app in browser.
http://todo.test
