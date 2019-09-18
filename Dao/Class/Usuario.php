<?php
    class Usuario 
    {
        private $idusuario;
        private $deslogin;
        private $dessenha;
        private $dtcadastro;

        //id
        public function getId()
        {
            return $this->idusuario;
        }

        public function setIdusuario($value)
        {
            $this->idusuario = $value;
        }

        //login
        public function getLogin()
        {
            return $this->deslogin;
        }

        public function setLogin($value)
        {
            $this->deslogin = $value;
        }

        //senha
        public function getSenha()
        {
            return $this->dessenha;
        }

        public function setSenha($value)
        {
            $this->dessenha = $value;
        }

        //dtcadastro
        public function getDtcadastro()
        {
            return $this->dtcadastro;
        }

        public function setDtcadastro($value)
        {
            $this->dtcadastro = $value;
        }

        public function loadById($id)
        {
            $sql = new SQL();

            $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));
            if(count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        
        public static function getList()
        {
            $sql = new SQL();

            return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
        }

        public static function search($Login)
        {
            $sql = new SQL();
            return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(':SEARCH'=>"%".$Login."%"));
        }

        public function login($login,$password)
        {
            $sql = new SQL();

            $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(":LOGIN"=>$login,":PASSWORD"=>$password));
            if(count($results)>0)
            {
                $this->setData($results[0]);

            }
            else
            {
                throw new Exception("Login e/ou senha inválidos.");
            }
        }

        public function setData($data)
        {
            $this->setIdusuario($data['idusuario']);
            $this->setLogin($data['deslogin']);
            $this->setSenha($data['dessenha']);
            $this->setDtcadastro(new DateTime($data['dtcadastro']));

        }

        //CALL sql EXECUTE sqlserver
        public function insert()
        {
            $sql = new SQL();
            $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
                ':LOGIN'=>$this->getLogin(),
                ':PASSWORD'=>$this->getSenha()  
        ));
            if (count($results)>0)
            {
                $this->setData($results[0]);
            }
        }

        public function update($login,$password)
        {
            $this->setLogin($login);
            $this->setSenha($password);

            $sql = new SQL();
            $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID",array(
                ':LOGIN'=>$this->getLogin(),
                ':PASSWORD'=>$this->getSenha(),
                ':ID'=>$this->getId()

            ));
        }

        public function delete()
        {
            $sql = new SQL();
            $sql->query("DELETE FROM tb_usuarios WHERE idusuario =:ID", array(
                ':ID'=>$this->getId()

            ));
            $this->setIdusuario(0);
            $this->setLogin("");
            $this->setSenha("");
            $this->setDtcadastro(new DateTime());
        }

        public function __construct($login="",$password="")
        {
            $this->setLogin($login);
            $this->setSenha($password);

        }

        public function __toString()
        {
            return json_encode(array(
                "idusuario"=>$this->getId(),
                "deslogin"=>$this->getLogin(),
                "dessenha"=>$this->getSenha(),
                "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
            ));


        }



    }





?>