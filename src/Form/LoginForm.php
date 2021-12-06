<?php
namespace Form;
class LoginForm
{
    public function render()
    {
    	return <<<EOT
<form method="post" action="/index.php" method="post">
    <label>Firstname:</label><input type="text" name="firstName" value="Fred"/><br/>
    <label>lastname:</label><input type="text" name="lastName" value="Flintstone"/><br/>
    <label>Phone Number:</label><input type="text" name="phoneNumber" value="01159123456"/><br/>
    <label>Are you a vegetarian:</label><input type="text" name="isVegetarian" value="yes"/><br/>
    <input type="submit" name="submit" />
</form>
EOT;
	}
}

