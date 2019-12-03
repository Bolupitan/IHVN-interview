<?

$con = mysql_connect("localhost","john","john");
 
if (!$con)
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("employees", $con);
$emp_no = $_GET['id'];
if( ! is_numeric($emp_no) )
  die('invalid employee id');
  
$query = "SELECT employees.first_name, employees.last_name
FROM (( dept_emp
INNER JOIN department
ON dept_emp.dept_no=department.dept_no)
INNER JOIN employees
ON dept_empt.emp_no=employees.emp_no)
WHERE department.dept_name <> emp_no='10003'
GROUP BY deptartment.dept_name 
ORDER BY dept_name;


$comments = mysql_query($query);

echo "<h1>Running</h1>";

while($row = mysql_fetch_array($comments, MYSQL_ASSOC))
{

   
  echo "  <div style='margin:30px 0px;'>
      Name: $first_name<br />
      LastName: $last_name<br />
      Department: $dept_no
    </div>
  ";
}

mysql_close($con);

?>
