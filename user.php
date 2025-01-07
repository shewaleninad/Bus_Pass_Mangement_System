<!DOCTYPE html>
<html>
<head>
<style type="text/css">
	* {
  margin: 0;
  
}
body{
   
}

.container {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 100vh;
  padding-left: 600px;
  
  background-image:url(images/bus.jpg);
  background-repeat: no-repeat;
  background-size: cover;

}

.container h1 {
  color: rgb(19, 17, 17);
  margin: 20px;
}

.registartion-form {
  display: flex;
  justify-content: center;
  align-items: left;
  width: 600px;
  color: rgb(20, 17, 17);
  font-size: 18px;
  font-family: sans-serif;
  background-color: #d8dfe4;
  padding: 5px;
}

.registartion-form input,
.registartion-form select,
.registartion-form textarea {
  width: 100%;
  border: none;
  padding: 5px;
  margin-top: 5px;
  margin-bottom: 5px;
}
.registartion-form .submit {
  width: 100%;
  padding: 8px 0;
  font-size: 20px;
  color: black;
  background-color: green;
  border-radius: 5px;
}
.registartion-form .option {
  width: 100%;
}


</style>
</head>
<body>
<div class="container">
	<h1>Registration form</h1>
  <form action="user1.php" method="post" class="registartion-form">
    <table>
      <tr colspan="2">
        <td>First Name</td>
      </tr>
      <tr colspan="2">
      	<td><input type="text" name="fname" id="name" placeholder="First name" required></td>
      </tr>
      <tr colspan="2">
        <td>Last Name</td>
      </tr>
      <tr colspan="2">
        <td><input type="text" name="lname" id="name" placeholder="Last name" required></td>
      </tr>
      <tr colspan="2">
        <td>Email</td>
      </tr>
      <tr colspan="2">
        <td><input type="text" name="email" id="name" placeholder="email" required></td>
      </tr>
      <tr>
        <td>Phone Number</td>
      </tr>
      <tr>
       <td><input type="number" name="phone" placeholder="Enter Phone No" required></td>
      </tr>
      <tr>
        <td>Profile Image</td>
      </tr>
      <tr><td><input type="file" name="profile" required></td>
      </tr>
      <tr>
      	<td>Identity Card</td>
      </tr>
      <tr>
        <td>
          <select  name="idcard" class="identity card" required>
            <option selected disabled>Choose Option</option>
            <option value="Adhar no" name="idcard">Aadhar card</option>
            <option value="voter id" name="idcard">voter id</option>
            <option value="student id no" name="idcard">student id</option>
          </select>
        </td>
      </tr>
            <tr>
        <td>Identity Card Number</td>
      </tr>
        <td><input type="text" name="idno" placeholder="Enter Id Card No" required></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="btn" class="submit" value="Submit" /></td>
      </tr>
    </table>
  </form>
</div> 
</body>
</html>