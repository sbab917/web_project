<?php include('../src/View/header.php') ?>

<?php if(isset($_GET['id'])){
        $pokemonRepository = new Model\Entity\Pokemon\PokemonRepository(\Db\Connection::get());
        $pokemon = $pokemonRepository->findById($_GET['id']);
      }else{
        header('Location: pokedex.php');
      }
      //var_dump($pokemon);
?>
<div class="container">

  <div class="row">
    <h1><?php echo $pokemon->getFrench_Name();?></h1>
  </div>

  <div class="row">
      <div class="col-sm-6 col-xs-12">
      </div>
      <div class="col-sm-6 col-xs-12">
        <div class="panel panel-info">
          <div class="panel-heading">Statistique</div>
          <table class="table table-condensed text-center">
            <tr>
              <td>Type</td>
              <td class="text-left"><img src="/img/<?php echo $pokemon->getType1();?>.png"></td>
              <td class="text-left"><?php if($pokemon->getType2()!=""){echo '<img src="/img/'.$pokemon->getType2().'.png">';}?></td>
            </tr>
            <tr>
              <td>HP</td>
              <td class="text-left"><?php echo $pokemon->getHp();?></td>
            </tr>
            <tr>
              <td>Attaque</td>
              <td class="text-left"><?php  echo $pokemon->getAttack();?></td>
            </tr>
            <tr>
              <td>Défensse</td>
              <td class="text-left"><?php echo $pokemon->getDefense();?></td>
            </tr>
            <tr>
              <td>Attaque spé	</td>
              <td class="text-left"><?php echo $pokemon->getSp_Attack();?></td>
            </tr>
            <tr>
              <td>Défense spé</td>
              <td class="text-left"><?php echo $pokemon->getSp_Defense();?></td>
            </tr>
            <tr>
              <td>Vitesse</td>
              <td class="text-left"><?php echo $pokemon->getSpeed();?></td>
            </tr>
            <tr>
              <td><b>Total base state</b></td>
              <td class="text-left"><?php echo $pokemon->getBase_Total();?></td>
            </tr>
          </table>

        </div>
      </div>
  </div>

  <br><br><br>

  <div class="row">
    <div class="col-md-12">
      <div class="table-container">
        <table class="table table-condensed table-responsive table-bordered2 text-center">
          <tbody>
            <tr>
              <th></th>
              <th class="text-center" colspan="18" > Faiblesse de <?php echo $pokemon->getFrench_Name();?></th>
            </tr>
            <tr>
              <td></td>
              <td><img src="/img/bug.png"></td>
              <td><img src="/img/dark.png"></td>
              <td><img src="/img/dragon.png"></td>
              <td><img src="/img/electric.png"></td>
              <td><img src="/img/fairy.png"></td>
              <td><img src="/img/fight.png"></td>
              <td><img src="/img/fire.png"></td>
              <td><img src="/img/flying.png"></td>
              <td><img src="/img/ghost.png"></td>
              <td><img src="/img/grass.png"></td>
              <td><img src="/img/ground.png"></td>
              <td><img src="/img/ice.png"></td>
              <td><img src="/img/normal.png"></td>
              <td><img src="/img/poison.png"></td>
              <td><img src="/img/psychic.png"></td>
              <td><img src="/img/rock.png"></td>
              <td><img src="/img/steel.png"></td>
              <td><img src="/img/water.png"></td>
            </tr>
            <tr>
              <td></td>
              <td <?php if($pokemon->getAgainst_Bug()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Bug()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Bug();?></td>
              <td <?php if($pokemon->getAgainst_Dark()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Dark()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Dark();?></td>
              <td <?php if($pokemon->getAgainst_Dragon()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Dragon()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Dragon();?></td>
              <td <?php if($pokemon->getAgainst_Electric()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Electric()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Electric();?></td>
              <td <?php if($pokemon->getAgainst_Fairy()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Fairy()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Fairy();?></td>
              <td <?php if($pokemon->getAgainst_Fight()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Fight()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Fight();?></td>
              <td <?php if($pokemon->getAgainst_Fire()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Fire()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Fire();?></td>
              <td <?php if($pokemon->getAgainst_Flying()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Flying()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Flying();?></td>
              <td <?php if($pokemon->getAgainst_Ghost()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Ghost()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Ghost();?></td>
              <td <?php if($pokemon->getAgainst_Grass()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Grass()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Grass();?></td>
              <td <?php if($pokemon->getAgainst_Ground()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Ground()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Ground();?></td>
              <td <?php if($pokemon->getAgainst_Ice()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Ice()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Ice();?></td>
              <td <?php if($pokemon->getAgainst_Normal()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Normal()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Normal();?></td>
              <td <?php if($pokemon->getAgainst_Poison()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Poison()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Poison();?></td>
              <td <?php if($pokemon->getAgainst_Psychic()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Psychic()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Psychic();?></td>
              <td <?php if($pokemon->getAgainst_Rock()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Rock()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Rock();?></td>
              <td <?php if($pokemon->getAgainst_Steel()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Steel()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Steel();?></td>
              <td <?php if($pokemon->getAgainst_Water()< 1){echo 'style="background-color:#aaffaa;"';}elseif($pokemon->getAgainst_Water()> 1){echo 'style="background-color:#ffaaaa;"';}?>><?php echo $pokemon->getAgainst_Water();?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>

<?php include('../src/View/footer.php') ?>
