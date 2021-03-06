<?php

class EmployeManager extends Model
{
    public function getEmployes()
    {
        $this->getBdd();
        return $this->getAll('employee','Employe');
    }
    public function getEmployeDetail()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->details('employee','Employe','id',$id);
        }
    }
    public function addemploye()
    {
        $this->getBdd();
        if(isset($_POST["add"]) && !empty($_POST))
        {
            echo "<script>window.location.href = '/HMS_PROJECT/liste_employe';</script>";
            return $this->addEmployes('employee',$_POST["nom"],
            $_POST["prenom"],$_POST["ddn"],$_POST["fonction"],$_FILES['photo']['name'],
            $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
            $_POST["ville"],$_POST["province"],$_POST["telephone"],
            $_FILES['cv']['name'],$_POST["mdp"],'Employe');
        }
    }
    public function updateemploye()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            if(isset($_POST["update"]))
            {
                if(!empty($_POST))
                {
                    $id = $_GET["id"];
                    echo "<script>window.location.href = '/HMS_PROJECT/liste_employe';</script>";
                    return $this->updateEmployes('employee',$_POST["nom"],
                    $_POST["prenom"],$_POST["ddn"],$_POST["fonction"],
                    $_POST["email"],$_POST["adresse"],$_POST["code_postal"],
                    $_POST["ville"],$_POST["province"],$_POST["telephone"],
                    'Employe',$id);
                    //$confirm = "La modification du médecin a été effectué avec succès!";
                }  
            }
        }
    }
    public function deleteemploye()
    {
        $this->getBdd();
        if(isset($_GET["id"]))
        {
            $id = $_GET["id"];
            return $this->delete('employee','Employe',$id);
        }
    }
}