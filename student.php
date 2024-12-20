<?Php

require_once 'db.php';

class Student extends DB {
    public function insertStudents($id, $name, $class, $mark) {
        $this->connect();
        
        $sql = "INSERT INTO students (id, name, class, mark) VALUES (?, ?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("issi", $id, $name, $class, $mark);

        if($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return true;
        } else {
            $error = "Error: " . $stmt->error;
            $stmt->close();
            $this->closeConnection();
            return $error;
        }
    }

    public function getAllStudnets() {
        $this->connect();
        
        $sql = "SELECT * FROM students";
        $result = $this->conn->query($sql);
        $students = [];
        
        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $students[] = $row;
            }
        }
        
        $this->closeConnection();
        return $students;
    }

    public function updateStudents($id, $name, $class, $mark){
        $this->connect();

        $sql = "UPDATE students SET name=?, class=?, mark=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $class, $mark, $id);

        if ($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return true;
        }

    }

    public function deleteStudents($id){
        $this->connect();

        $sql = "DELETE FROM students where id = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            $stmt->close();
            $this->closeConnection();
            return true;
        }

    }
}
?>