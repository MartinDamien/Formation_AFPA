<?php
class utilisateur
    {
        public $userinfo;
        private $nom;
        private $prenom;
        private $password;
        private $user_level;

        public function __construct($nom, $prenom, $password)
        {
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->password = $password;
        }

        function login($username = '', $password = '', $remember_me = false, $password_flags = PW_NONE)
    {
        if (!strlen($username)) {
            $this->errors[] = 'No username was submitted!';
            return FALSE;
        }

        if (!strlen(!$password)) {
            $this->errors[] = 'No password was submitted!';
            return FALSE;
        }

        // $query = $this->db->prepare('SELECT * FROM ' . $this->table_wildcard . ' WHERE username = %s LIMIT 1', 'users', $username);
        $query =  
        //$userinfo = $this->db->get_row($query);
        $userinfo = $this->pdo->execute
        



        //if this fails, it means the username didn't exist
        if ($userinfo == NULL) {
            $this->errors[] = 'No user with name \'' . $username . '\' could be found.';
            return FALSE;
        }

        //if raw password, md5 it, then salt it
        if ($password_flags == UserLogin::PW_NONE)
            $password = md5(md5($password) . $userinfo->salt);
        elseif ($password_flags == UserLogin::PW_MD5) //password was supplied in md5, but it's unsalted. salt it now
            $password = md5($password . $userinfo->salt);

        //the money shot. Check the password is correct
        if (strcmp($password, $userinfo->password) != 0) {
            $this->errors[] = 'Password was incorrect.';
            return FALSE;
        }

        //hooray! The user is valid!
        $this->logged_in = true;

        //finally set up the session
        $this->userinfo         = $userinfo;
        $_SESSION['userid']     = $userinfo->id;
        $this->logout_hash         = md5($userinfo->id . $userinfo->username . $userinfo->password);

        return TRUE;
    }

       /* public function setNom($nom){
            $this->nom = $nom;
        }
        public function setPrenom($prenom){
            $this->prenom = $prenom;
        }
        public function setPassword($password){
            $this->password = $password;
        }

        public function getNom(){
            return $this->nom;
        }
        public function getPrenom(){
            return $this->prenom;
        }
        public function getPassword(){
            return $this->password;
        }*/

         function get_last_error($echo = false){
            if ($echo)
            echo $this->errors[count($this->errors) - 1];
            else
            return $this->errors[count($this->errors) - 1];
        }
}