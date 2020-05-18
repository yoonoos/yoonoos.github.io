<?php   
	include 'includes/session.php';

	$conn = $pdo->open();

		$camp = 'ZERT';


		try{

			$stmt = $conn->prepare("SELECT *, COUNT(*) AS numrows FROM campagne WHERE name = :name");
			$stmt->execute(['name'=>$camp]);
			$row = $stmt->fetch();
			if($row['numrows'] > 0){
                $city = $row['city'];
            }
        }
        		catch(PDOException $e){
			echo "There is some problem in connection: " . $e->getMessage();
		}
        echo $city ;
        
        ?>