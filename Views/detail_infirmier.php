<?php
$this->_t = "Détail de l'infirmier";
    foreach($nurse as $d):
        ?>
        <style>
          .container{
            border-style:none;
            border-radius:10px;
            background-color:rgb(209, 255, 255)
          }
          .card-img-top{

          }
        </style>
        <br><br>
        <div class="container">
          <br>
        <div class="row">
          <div class="col-md-4">
            <img class="img-rounded" src="./Public/img/data/<?=$d->photo()?>" style="width:100%;height:100%" alt="Dr.<?=$d->prenom()?> <?=$d->nom()?>">
          </div>
          <div class="col-md-8">
          <table class="table">
          <tbody>
            <tr>
              <th>Nom complet de l'infirmier</th>
              <td>Dr.<?=$d->prenom()?> <?=$d->nom()?></td>
            </tr>
            <tr>
              <th>Date de naissance</th>
              <td><?=$d->date_naissance()?></td>
            </tr>
            <tr>
              <th>Adresse Email</th>
              <td><?=$d->email()?></td>
            </tr>
            <tr>
              <th>Adresse Courriel</th>
              <td><?=$d->adresse()?>, <?=$d->code_postal()?>, <?=$d->ville()?>, <?=$d->province()?></td>
            </tr>
            <tr>
              <th>Numéro de téléphone</th>
              <td><?=$d->telephone()?></td>
            </tr>
            <tr>
              <th>CV</th>
              <td><a href="./Public/doc/<?=$d->cv()?>" target="_blank"><button class="btn btn-info"><?=$d->cv()?></button></a></td>
            </tr>
          </tbody>
        </table>
        <a href="/HMS_PROJECT/liste_infirmier"><button class="btn btn-info">Retour</button></a>
          </div>
            </div>
            <br>
            </div>
        
<?php
    endforeach;
?>