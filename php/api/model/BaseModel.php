<?php  

class BaseModel
{

    protected static $db;
    protected static $table;


    protected static function db()
    {
        global $db;
        return  $db;
    }

    // all
    public static function All()
    {
        $db = static::db();
        $table = static::$table;
        $result = $db->query("select * from {$table}");
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    // find
    public static function Find(int $id)
    {
        $db = static::db();
        $table = static::$table;
        $stmt = $db->prepare("select * from {$table} where id=?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_object();
    }

    public function delete(int $id)
    {
        $db = static::db();
        $table = static::$table;
        $stmt = $db->prepare("delete from {$table} where id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }

    public function Create(array $data)
    {
        $db = static::db();
        $table = static::$table;
        $columns = implode(",", array_keys($data));
        $placeholders = implode(",", array_fill(0, count($data), "?"));
        $sql = "insert into {$table}($columns) values(  $placeholders)";
        $stmt = $db->prepare($sql);
        $types = str_repeat("s", count($data));
        $stmt->bind_param($types, ...array_values($data));
        return $stmt->execute();
    }

    public function Update(int $id, array $data)
    {

        $db = static::db();
        $table = static::$table;
        $set = [];

        foreach ($data as $column => $value) {
            $set[] = "$column=?";
        }

        $set = implode(",", $set);

        $sql = "UPDATE {$table} SET {$set} WHERE id=?";
        $types = str_repeat("s", count($data)) . "i";

        $stmt = $db->prepare($sql);
        $values = array_values($data);
        $values[] = $id;
        $stmt->bind_param($types, ...$values);

        return $stmt->execute();
    }
}
