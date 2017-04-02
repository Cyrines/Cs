<div data-role= "page"  id = "pagevisites">

  <div data-role="header" >
  <?php
      include "vues/enteteavecboutons.html"
    ?>
    <h1> Rapports de visite </h1>


    <div role="main" class="ui-content">
      <a href="#mypanel" data-role="button" data-icon="bars" data-iconpos="notext">Ajouter un rapport</a>
    </div><!-- /fin panel -->
  </div><!-- /fin header -->

    <div data-role="panel" id="mypanel">
      <div class="panel-content">
        <a href="#pageajouterrapport.php" data-role="button" data-icon="plus">Ajouter un rapport</a>
        <a href="#pagechoisirrapportamodifier.php" data-role="button" >Modifier un rapport</a>
        <a data-rel="close" data-role="button" data-icon="delete">Fermer le panneau</a>
      </div>
    </div><!-- /fin panel-content -->

  <div data-role = "content">
    <?php
      include "vues/pagechoisirrapportamodifier.php";

    ?>
  </div> <!-- /fin content -->

    <?php
      include "vues/piedpage.html";
    ?>
</div> <!-- /fin page -->
