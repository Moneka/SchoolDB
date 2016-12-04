<?php
include_once 'connect_to_DB.php';

function login($userid, $password, $conn)
{
	//global $conn;
	
	//$conn = connection();
	$sql = "SELECT * FROM userlogin WHERE userId='$userid'";
	
    $result = mysqli_query($conn, $sql);
    $rowvalue = mysqli_fetch_row ($result);

    if ($result-> num_rows > 0)
	{
		
        if ($password == $rowvalue[3]) 
		{	
			$_SESSION['pid'] = $rowvalue[1];
			
			
			$personid = $rowvalue[1];
			if( $personid[0] == "A")
			{
				return 1;
			}
			else if( $personid[0] == "T")
			{
                return 2;
			}
			else if( $personid[0] == "S")
			{
                return 3;
			}
			else
			{
				
                return 4;
			}
				
		}
		
		else
        {       
                return 5;
		}
        
    }
	
	
	else
	{
		return 0;
	}
		
	mysqli_free_result($result);
	mysqli_close($conn);
}

function contact($name, $email, $comments, $conn)
{
	

    $sql = "INSERT INTO contact VALUES (default, '$name', '$email', '$comments')";
    $result = $conn->query($sql);

   if ($result) 
   {
     return true;
   }
   
   else{
	   
	   return false;
   }
    mysqli_free_result($result);
	mysqli_close($conn);
}

function addMember($role, $fname, $mname, $lname, $dob, $gender, $street1, $street2, 
$city, $state, $zip, $contact, $email, $bgroup, $allergy, $conn)
{

	//$conn = connection();
    $sqlr = "SELECT * FROM person WHERE role='$role'";
    
    $resultr = $conn->query($sqlr);
    
        if ($resultr->num_rows > 0)
        {
            $count = mysqli_num_rows($resultr) + 1;
			
			if($role == 1)
			{
				$pid = 'T'. $count;
			}
			
			else if($role == 2)
			{
				$pid = 'S'. $count;
			}
			else if($role == 3)
			{
				$pid = 'MS'. $count;
			}
			
        }
    
    else
        {
            if($role == 1)
			{
				$pid = 'T1';
			}
			
			else if($role == 2)
			{
				$pid = 'S1';
			}
			else if($role == 3)
			{
				$pid = 'MS1';
			}
        }
               
    $sql = "INSERT INTO person VALUES ('$pid', $role, '$fname', '$mname', '$lname', '$dob', '$gender', '$street1',
	'$street2', '$city', '$state', $zip, $contact,'$email', '$bgroup', '$allergy')";
	
			if($role == 1)
            {
				$userid = uniqid ("teacher", true);
				
			}
			
			else if($role == 2)
			{
				$userid = uniqid ("student", true);
			}
			else if($role == 3)
			{
				$userid = uniqid ("staff", true);
			}
			
			

	$password = generatePassword();
	
	$sql2 = "INSERT INTO userlogin VALUES (default, '$pid', '$userid', '$password')";
    

    if ($conn->query($sql) === TRUE && $conn->query($sql2) === TRUE) 
   {
        
     return true;
   }
    else
	{
	 return false;
	}
    mysqli_free_result($result);
	mysqli_close($conn);
	
}

function generatePassword($length = 8) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $count = mb_strlen($chars);

    for ($i = 0, $result = ''; $i < $length; $i++) {
        $index = rand(0, $count - 1);
        $result .= mb_substr($chars, $index, 1);
    }

    return $result;
}

function changeFee($percourse, $amountinc, $conn)
{
	
	$sqlr = "SELECT * FROM fee";
    
    $resultr = $conn->query($sqlr);
	
        if ($resultr)
        {
            
            $sql ="INSERT INTO fee VALUES (default, '$percourse', '$amountinc', null, default)";
            
        }
    
	if ($conn->query($sql) === TRUE) 
   {
     return true;
   }
    else
	{
	 return false;
	}
    mysqli_free_result($result);
	mysqli_close($conn);
}

function changeClubFee($perclub, $conn)
{
	
	$sqlr = "SELECT * FROM fee";
    
    $resultr = $conn->query($sqlr);
	
        if ($resultr)
        {		
            
        $sql ="INSERT INTO fee VALUES (default, null, null, '$perclub',default)";
            
        }

    if ($conn->query($sql) === TRUE) 
   {
     return true;
   }
    else
	{
	 return false;
	}
    mysqli_free_result($result);
	mysqli_close($conn);
}

function changeSalary($deptsalary, $teachersalary, $conn)
{
	
	$sqlr = "SELECT * FROM salary";
    
    $resultr = $conn->query($sqlr);
	
        if ($resultr)
        {
            
	
        $sql ="INSERT INTO salary VALUES (default, '$deptsalary', '$teachersalary', null, null, default)";

            
        }
    
	if ($conn->query($sql) === TRUE) 
   {
     return true;
   }
    else
	{
	 return false;
        
	}
    
    
    mysqli_free_result($result);
	mysqli_close($conn);
}

function changeStaffSalary($partsalary, $fullsalary, $conn)
{
	
	$sqlr = "SELECT * FROM salary";
    
    $resultr = $conn->query($sqlr);
	
        if ($resultr)
    {		

            		$sql ="INSERT INTO salary VALUES (default, null, null, '$partsalary', '$fullsalary', default)";

        }
 	
    if ($conn->query($sql) === TRUE) 
   {
     return true;
   }
    else
	{
	 return false;
	}
    mysqli_free_result($result);
	mysqli_close($conn);
}

function sample($sample, $conn)
{
  // $conn = connection();
	$sql = "SELECT * FROM userlogin WHERE userId='$userid'";
	
    $result = mysqli_query($conn, $sql);
		
    mysqli_free_result($result);
	mysqli_close($conn);

}

function profile($userid, $conn)
{
    //$conn = connection();
    $sql = "SELECT * FROM person WHERE personId = '$userid'";
    
    $result = mysqli_query($conn, $sql);
    
    if($result)
    {
        
        $value = mysqli_fetch_row ($result);
        return $value;
        
    }
    
    else
    {
        echo "Error!";
        
    }

    mysqli_free_result($result);
	mysqli_close($conn);

}

function editProfile($userid, $fname, $mname, $lname, $dob, $gender, $street1, $street2, 
$city, $state, $zip, $contact, $email, $bgroup, $allergy, $conn)
{
   // $conn = connection();    
    
	$sql = "UPDATE person SET firstName = '$fname', middleName = '$mname', lastName = '$lname', dob = '$dob', gender = '$gender', streetline1 = '$street1', streetline2 = '$street2', city = '$city', state = '$state', zip = $zip, phno = $contact, email = '$email', bloodGroup = '$bgroup', allergy = '$allergy' WHERE personId = '$userid'";
    
    $result = $conn->query($sql);    
    if($result)
    {
        
        return true;
    }
		
    else
    {
        return false;
       
    }
    
	mysqli_close($conn);

}



function addteacherinfo($dept,$notes, $role, $conn)
{
   
    $valid = validateDept($_POST['dept'],$conn);
		
    
    if($valid == true)
    {	
	$sql = "select userId from userlogin order by loginid desc limit 1";
	
    $result = mysqli_query($conn, $sql);
	
	if($result)
    {
        
        $value = mysqli_fetch_row ($result);
        
		$sql1 = "insert into teacher values(default, '$value[0]', '$dept', '$notes')";
	
    $result1 = mysqli_query($conn, $sql1);
		
		if($result1){
			 if($role == 1)
			 {
				$sql2 = "update dept set deptHead = '$value[0]'";

				$result2 = mysqli_query($conn, $sql2);
				
				if(!$result2){
					die ("Query Failed: ".mysqli_error($conn));
				 }
				 
				else{
					return true;
				}
			
			}
		}
    }
    mysqli_free_result($result);
	mysqli_close($conn);
	}
}

function validateDept($dept, $conn)
{
   //$conn = connection();
	$sql = "select * from dept where deptName = '$dept'";
	
    $result = mysqli_query($conn, $sql);
	
	if (!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{
		$count = mysqli_num_rows($result);
		
		if($count == 1){
			return true; 
		}
		
		else{
		
				$message = "Deptarment doesnot exist!";
				echo "<script type='text/javascript'>alert('$message');</script>";
        
		}
	}
		
    mysqli_free_result($result);
	mysqli_close($conn);

}

function addstudentinfo($mom, $dad, $class, $notes, $conn){
	
	$sql = "select userId from userlogin order by loginid desc limit 1";
	
	$result = mysqli_query($conn, $sql);
	
	if($result){
		$value = mysqli_fetch_row ($result);
		
		$sql1 = "insert into student values(default, '$value[0]', '$class', '$mom', '$dad', '$notes')";
		
		$result1 = mysqli_query($conn, $sql1);
		
		if(!$result1){
			die ("Query Failed: ".mysqli_error($conn));
		}		
		else{
			return true;
		}
			
	}
    mysqli_free_result($result);
	mysqli_close($conn);
}

function addstaffinfo($job, $jtype, $notes, $conn){
//	$conn = connection();
	
	$sql = "select userId from userlogin order by loginid desc limit 1";
	
	$result = mysqli_query($conn, $sql);
	
	if($result){
		$value = mysqli_fetch_row ($result);
		
		$sql1 = "insert into staff values(default, '$value[0]', '$job', '$jtype', '$notes')";
		
		$result1 = mysqli_query($conn, $sql1);
		
		if(!$result1){
			die ("Query Failed: ".mysqli_error($conn));
		}		
		else{
			return true;
		}
			
	}
    mysqli_free_result($result);
	mysqli_close($conn);
}

function getDept($conn){
	//$conn = connection();
	
    $sql = "SELECT DISTINCT deptName FROM dept";
	
    $result = mysqli_query($conn, $sql);
    
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	else{
		return $result;
	}
}

function getTeacher($conn){
	//$conn = connection();
	
    $sql = "select * from person where role = 1";
	
    $result = mysqli_query($conn, $sql);
    
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	else{
		return $result;
	}
}

function addCourse($coursetype, $cname, $dept, $room, $teacher, $gid, $conn){
	//$conn = connection();
	
    $sql = "select * from course where courseGrade = $gid";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query1 Failed: ".mysqli_error($conn));
	}
	
	else{	
		
		$count = mysqli_num_rows($result);
		
		if($count>0){
				
			$count = $count+1;
		
			$cid = 'G'.$gid.'C'.$count;
		}
		
		else{
			$cid = 'G'.$gid.'C1';
		}
		
		$sql1 = "insert into course values(default, '$cid', '$coursetype', '$cname','$dept', '$room', '$teacher', $gid)";
	
		$result1 = mysqli_query($conn, $sql1);
		
		if(!$result1){
			die ("Query2 Failed: ".mysqli_error($conn));
		}
		else{
			return true;
		}
	}
}

function getCourse($gid, $conn){
	//$conn = connection();
	
    $sql = "select * from course where courseGrade = $gid";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return $result;
	}
}

function editCourse($coursetype, $dept, $room, $teacher, $code, $conn){
	
    $sql = "update course set courseType = $coursetype, courseDept = '$dept', courseRoom = '$room', teacherId= '$teacher' where courseCode = '$code'";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return true;
	}
}

function deleteCourse($code,$conn){
	
    $sql = "delete from course where courseCode = '$code'";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return true;
	}
}

function getStudentCourse($id,$conn){

$sql = "select c.courseCode, c.courseName, c.courseDept, 		c.courseRoom, p.firstname, p.lastname, p.email
from course c
inner join studentcourse sc
on sc.courseId = c.courseCode
inner join person p
on p.personId = c.teacherId
where sc.studentId = '$id'";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return $result;
	}
}

function getTeacherCourse($id,$conn){
	
    $sql = "select courseCode, courseName, courseDept, courseRoom from course where teacherId = 'id'";
    
    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return $result;
	}
}

function directory($conn){

		
    $sql = "select * from person";

    $result = mysqli_query($conn, $sql);
	
	if(!$result){
		die ("Query Failed: ".mysqli_error($conn));
	}
	
	else{	
		return $result;
	}
}


?>



    
    
