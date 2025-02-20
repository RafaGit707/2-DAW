<?php
class Usuario {
    private $id;
    private $nick;
    private $password;
    private $avatar;

    public function __construct($id, $nick, $password, $avatar) {
        $this->id = $id;
        $this->nick = $nick;
        $this->password = $password;
        $this->avatar = $avatar;
    }

    public function getId() {
        return $this->id;
    }

    public function getNick() {
        return $this->nick;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getAvatar() {
        return $this->avatar;
    }

    public function setNick($nick) {
        $this->nick = $nick;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setAvatar($avatar) {
        $this->avatar = $avatar;
    }
}
?>
