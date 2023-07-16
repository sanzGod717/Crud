<?php 
class UserDAO { 
  private $db; 
  // faz a conexão assim que inicia 
  public function __construct() { 
    $this->db = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root')); 
    
  } 
  
  public function getUserById($id) { 
    $stmt = $this->db->prepare("SELECT * FROM users WHERE id = :id");
    $stmt->bindParam(":id", $id); 
    $stmt->execute(); 
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
    } 
   
    public function getAllUsers() { 
      $stmt = $this->db->prepare("SELECT * FROM users");
      $stmt->execute(); 
      $result = $stmt->
      fetchAll(PDO::FETCH_ASSOC); 
      return $result; 
      
    } 
      
      public function addUser($user) {
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)"); 
        $stmt->bindParam(":name", $user['name']); 
        
        $stmt->bindParam(":email",$user['email']);
        $stmt->bindParam(":password", $user['password']); 
        $stmt->execute(); 
        
      } 
      public function updateUser($user) { 
        $stmt = $this->db->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");
        
        $stmt->bindParam(":name",$user['name']);