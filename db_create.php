<<<<<<< HEAD
<?php 
$c = mysqli_connect('localhost' , 'root' , '' ); 
$s = "CREATE DATABASE IF NOT EXISTS arizona"; 
mysqli_query($c, $s); 
mysqli_select_db($c, "arizona"); 
$s = "create table translators_trainors(id int primary key ,name text ,phone text,address text,speciality text,email text,salary int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS languages(code int primary key,name text,level price int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS costumers(id int primary key , name text ,phone text,address text,language level text,email text, age int,order_type text)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS staff (id int primary key , name text ,phone text,address text,department text,email text,age int,salary int)"; 
$q = mysqli_query($c, $s); 

// ---------------------------------------------------------------------------
$s = "create table IF NOT EXISTS speak(tid int,code int,language text)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS train(tid int,cid int,count int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS work_for (cid int,eid int)"; 
$q = mysqli_query($c, $s); 
//  ------------------------------------------------------------------------
mysqli_close($c); 
?> 
</body> 
</html>
=======
<?php 
$c = mysqli_connect('localhost' , 'root' , '' ); 
$s = "CREATE DATABASE IF NOT EXISTS arizona"; 
mysqli_query($c, $s); 
mysqli_select_db($c, "arizona"); 
$s = "create table translators_trainors(id int primary key ,name text ,phone text,address text,speciality text,email text,salary int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS languages(code int primary key,name text,level price int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS costumers(id int primary key , name text ,phone text,address text,language level text,email text, age int,order_type text)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS staff (id int primary key , name text ,phone text,address text,department text,email text,age int,salary int)"; 
$q = mysqli_query($c, $s); 

// ---------------------------------------------------------------------------
$s = "create table IF NOT EXISTS speak(tid int,code int,language text)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS train(tid int,cid int,count int)"; 
$q = mysqli_query($c, $s); 
$s = "create table IF NOT EXISTS work_for (cid int,eid int)"; 
$q = mysqli_query($c, $s); 
//  ------------------------------------------------------------------------
mysqli_close($c); 
?> 
</body> 
</html>
>>>>>>> 58d6747 (upload files)
