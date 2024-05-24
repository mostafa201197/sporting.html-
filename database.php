<?php 
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "login";
    $conn = "";

try{
     $conn = mysqli_connect($db_server,
                            $db_user,
                            $db_pass,
                            $db_name );

}
catch(mysqli_sql_exception){
    echo "could't connceted <br>" ;
}

    if($conn){
        echo "you are conncted <br>";
    }



?>
<!-- data base after editing the file  -->
<!-- CREATE TABLE contact_us (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100),
    email VARCHAR(100),
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE feed (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
CREATE TABLE search (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    other_column1 VARCHAR(100),  -- Example column
    other_column2 TEXT,          -- Example column
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
); -->
