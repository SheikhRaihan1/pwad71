<?php

class User
{
    public function index()
    {
        global $db;
        $stmt = $db->query("select * from users");
        $result = array_map(fn($u) => (object) $u, $stmt->fetch_all(MYSQLI_ASSOC));
        return ["users" => $result];
    }
    public function find($data, $id)
    {
        global $db;
        $stmt = $db->query("select * from users where id= $id");
        $result =  $stmt->fetch_object();
        return ["users" => $result];
    }
    public function create($data)
    {
        global $db;
        $stmt = $db->query("insert into users(name, email , password, role_id)
        values('{$data["name"]}', '{$data["email"]}', '{$data["password"]}', '{$data["role_id"]}')");
       
        return ["users" => $db->insert_id];
    }
    public function update($data , $id)
    {
        global $db;
        $stmt = $db->query("update users set name='{$data["name"]}', email='{$data["email"]}'
         , password='{$data["password"]}' , role_id={$data["role_id"]} where id= $id;
         ");
       
        return ["users" => $this->find($data, $id)];
    }
    public function delete($data,$id)
    {
        global $db;
        $stmt = $db->query("delete from users where id= $id");
        return ["data" => $stmt];
    }
}
