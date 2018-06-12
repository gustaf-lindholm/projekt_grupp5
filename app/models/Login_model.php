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
        	echo "Please, fill out the required fields";
        } else { // kolla så att alla fälten är korrekt ifyllda
        	if (!preg_match('/^[a-zA-Z]*$/', $_POST['login']['username'])) {
        		echo "Please, check input";
            } else { //hasha och kolla om lösenord matchar
            			$username = $_POST['login']['username'];
						$hashedPassword = md5($_POST['login']['password']);
						
						$this->sql = "SELECT username, account.uid, password, level_id FROM account 
						JOIN user ON account.uid = user.uid WHERE username = :username AND password = :password";
						$paramBinds = [':username' => $username, ':password' => $hashedPassword];
						$this->prepQuery($this->sql, $paramBinds);
						$result = $this->getOne();
						if ($result == 0) { //om det är fel så omdirigera användaren tillbaka till formuläret
							echo "Username or password is incorrect";
							header("Location: {$_SERVER['HTTP_REFERER']}");
						} else { //om rätt användare finns i db, logga in användaren 
							if ($result['username'] === $username && $result['password'] === $hashedPassword) {
								$_SESSION['loggedIn']['username'] = $username;
								$_SESSION['loggedIn']['uid'] = $result['uid'];
								$_SESSION['loggedIn']['level'] = $result['level_id'];
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