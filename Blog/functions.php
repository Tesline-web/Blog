<?php
session_start();

function get_PDO():PDO{
    $host = '127.0.0.1';
    $db   = 'blog';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
   
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,

    ];

    try {
        
    return $pdo = new PDO($dsn, $user, $pass, $options);
    
    } catch (\PDOException $e) {
      
    }

}

function sign_in($mail,$password){
    if(check_user_not_exist($mail) == true){
        $pdo = get_PDO();
        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users(mail,pass) VALUES(?,?)";
        $stmt = $pdo->prepare($query);
      if($stmt->execute([$mail, $password]) ){
        $_SESSION['connected'] = true;
        $_SESSION['mail'] = $mail;
        header("Location: account.php");
      }else{
        header("Location: sign_in.php");
        
      }
        
    } 
    else{

    }

}

function check_user_not_exist($mail){
   $pdo = get_PDO();
   $query = "SELECT mail FROM users WHERE mail = ?";
   $stmt = $pdo->prepare($query);
    $stmt->execute([$mail]);
    $nombreUtilisateurs = $stmt->fetchColumn();
    if($nombreUtilisateurs > 0){
        return false;
    }
    else{
        return true;
    }

   
}


function get_user($mail){
    $pdo = get_PDO();
    $query = "SELECT  * FROM users WHERE mail = ?";
   $stmt = $pdo->prepare($query);
    $stmt->execute([$mail]);
   
    $user = $stmt->fetch();
    
    return $user;

}

function login($mail,$password){
    
  $pdo = get_PDO();
  if(!check_user_not_exist($mail)){
  
    $user = get_user($mail);
     if(password_verify($password, $user['pass'])){
      $_SESSION['connected'] = true;
      $_SESSION['mail'] = $mail;
      header("Location: account.php");
    }
    else{
      header("Location: login.php");
    }

  }
}

function get_id_by_username($mail){
  $pdo = get_PDO();
  $query = "SELECT id FROM users WHERE mail = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$mail]);
  $id = $stmt->fetchColumn();
  return $id;
}

function get_all_articles(){
    $pdo = get_PDO();
    $stmt = $pdo->query("SELECT * FROM articles");
    $articles = $stmt->fetchAll();
    return $articles;
}

function get_all_articles_admin(){
  $pdo = get_PDO();
  $stmt = $pdo->query("SELECT id,title FROM articles");
  $articles = $stmt->fetchAll();
  return $articles;
}

function get_one_article($id){
  $pdo = get_PDO();
  $query = "SELECT * FROM articles WHERE id = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$id]);
  $articles = $stmt->fetch();
  return $articles;
}


function add($user_id, $title, $content){
  $pdo = get_PDO();
  $query = "INSERT INTO articles(user_id,title,content) VALUES(?,?,?)";
  $stmt = $pdo->prepare($query);
  $result = $stmt->execute([$user_id, $title, $content]);
  if($result == true){
    header("Location: admin_blog.php");
  }
  else{
    header("Location: addpost.php");
  }
}

function update_article($id, $title, $content, $user_id){
  $pdo = get_PDO();
  $query = "UPDATE articles SET title = ?, content = ?, user_id = ? WHERE id = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$title, $content, $user_id, $id]);
  header("Location: admin_blog.php");
}

function delete_article($id){
  $pdo = get_PDO();
  $query = "DELETE FROM articles WHERE id = ?";
  $stmt = $pdo->prepare($query);
  $stmt->execute([$id]);
  header("Location: admin_blog.php");
}

function isConnected(){
  if(isset($_SESSION['connected']) && $_SESSION['connected'] == true){
  }else
  header("Location: login.php");
}

function get_exerpt($content){
  $exerpt = substr($content,0,150);
  return $exerpt."...";
}

function logout(){
    session_unset();
    session_destroy();
    header("Location: index.php");
}