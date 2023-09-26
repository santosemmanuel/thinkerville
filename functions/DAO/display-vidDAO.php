<?php
include "BaseDAO.php";

class displayVidDAO extends BaseDAO {

    function displayVideos(){
        $this->openConn();
        $stmt = $this->dbh->prepare("SELECT * FROM tbl_vid ORDER BY RAND() LIMIT 1");
        $stmt->execute();
        $this->closeConn();

        while ($row = $stmt->fetch()) {
            echo "<video src='". $row[1] ."' controls width='370' height='210'>
                    Your browser does not support the video tag.
                </video>";
        }
    }
}
