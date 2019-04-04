<?php


class Dao {
    private $host = "us-cdbr-iron-east-03.cleardb.net";
    private $db = "heroku_5e00e41867f94aa";
    private $user = "bfe03507709a2f";
    private $pass = "a6adb44a";

    public function getConnection () {
        return
            new PDO("mysql:host={$this->host};dbname={$this->db}", $this->user,
                $this->pass);
    }

    public function getUser($username) {
        $conn = $this->getConnection();
        $getQuery = "select * from user where username = :username";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":username",$username);
        $q->execute();
        return $q->fetch();
    }

    public function getGoalsIP($username) {
        $conn = $this->getConnection();
        $getQuery = "select * from goal where user_id = :username and complete = 0";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":username",$username);
        $q->execute();
        return $q->fetchAll();
    }

    public function getGoalsC($username) {
        $conn = $this->getConnection();
        $getQuery = "select * from goal where user_id = :username and complete = 1";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":username",$username);
        $q->execute();
        return $q->fetchAll();
    }

    public function addGoal($username, $goal_text) {
        $conn = $this->getConnection();
        $getQuery = "insert into goal (goal_text,complete,user_id) values(:text,0,:user)";
        $q = $conn->prepare($getQuery);
        $q->bindParam(":text", $goal_text);
        $q->bindParam(":user",$username);
        $q->execute();
    }
}