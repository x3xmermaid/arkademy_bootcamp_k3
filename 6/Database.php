<?php
class gabungControl{

    protected $host = '127.0.0.1';
    protected $dbname = "arkademy_k3";
    protected $user = "root";
    protected $password = "";

    public function openConection(){
        $link = new PDO("mysql:host=$this->host; dbname=$this->dbname", $this->user, $this->password);
        return $link;
    }
    
    public function closeConection(&$link){
        $link  = null;
    
    }

    public function getAllDokumen(){
        $link = $this->openConection();
        
        $result = $link->query("SELECT u.id, u.name, GROUP_CONCAT(s.name) as 
                                skill FROM users as u left join skills as s on 
                                u.id=s.users_id group by u.id");
        $dokumen = array();
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            //print_r($row);
            $dokumen[] = $row;
        }
        
        $this->closeConection($link);
        //print_r($dokumen);
        return $dokumen;
    }

    public function updateVote($id){
        $link = $this->openConection();
        //echo $id;
        $query = "update candidates set earned_vote = earned_vote + 1 where id =:id";
        $statement = $link->prepare($query);
        $statement->bindValue(":id", $id, PDO::PARAM_STR);
        $statement->execute();
        
        $this->closeConection($link);
    }

    public function insertProg($name){
        $link = $this->openConection();
        $query = "insert into users (name) values(:nama)";
        $statement = $link->prepare($query);
        $statement->bindValue(":nama", $name, PDO::PARAM_STR);
        $statement->execute();
        $this->closeConection($link);
    }

    public function insertSkill($id, $name){
        $link = $this->openConection();
        $query = "insert into skills (name, users_id) values(:nama, :id)";
        $statement = $link->prepare($query);
        $statement->bindValue(":nama", $name, PDO::PARAM_STR);
        $statement->bindValue(":id", $id, PDO::PARAM_STR);
        $statement->execute();
        $this->closeConection($link);
    }
}