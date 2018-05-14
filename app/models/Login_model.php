<?php
/**
* 
*/
class Login_model extends base_model
{
	
	public function login()
    {
		
		// kolla om alla fälten är ifyllda
        if (empty($_POST['login']['username']) || empty($_POST['login']['password'])) {
        	echo "Fyll i de tomma fälten";
        } else { // kolla så att alla fälten är korrekt ifyllda
        	if (!preg_match('/^[a-zA-Z]*$/', $_POST['login']['username'])) {
        		echo "fel tecken";
            } else { //hasha och kolla om lösenord matchar
            			$username = $_POST['login']['username'];
						//$hashedPassword = password_hash($_POST['login']['password'], PASSWORD_DEFAULT);
						$hashedPassword = md5($_POST['login']['password']);
						
						$this->sql = "SELECT username, uid, password FROM account WHERE username = :username AND password = :password";
						$paramBinds = [':username' => $username, ':password' => $hashedPassword];
						$this->prepQuery($this->sql, $paramBinds);
						$result = $this->getOne();
						if ($result == 0) { //om det är fel så omdirigera användaren tillbaka till formuläret
							echo "du finns inte i db, försök igen";
						} else { //om rätt användare finns i db, logga in användaren 
							if ($result['username'] === $username && $result['password'] === $hashedPassword) {
								$_SESSION['loggedIn']['username'] = $username;
								$_SESSION['loggedIn']['uid'] = $result['uid'];
								header('Location:'.URLrewrite::BaseURL().'account/index');
							}
					}
						
					
                }
        }
	}

	public function logout()
	{
		//unset session
		unset($_SESSION["loggedin"]['username']);
		//destroy session
		session_destroy();
		// redirect to homepage
		header('Location:'.URLrewrite::BaseURL().'index');
	}
}