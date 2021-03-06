<!-- Modal Homepage-->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <div class="row">
                        <div class="col btn-modal">
                            <button id="mod-title-connexion">Connexion</button>
                        </div>

                        <div class="col btn-modal">
                            <button class="mod-title-inscription">Inscription</button>
                        </div>

                    </div>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <!-- CONNEXION -->

                <form id="form-connexion" action="connexion.php" method="post">

                    <span class="error" id="error-connexion"></span>

                    <div class="form-group">
                        <input type="email" class="form-control form-co-errors" id="co-email" name="co-email" placeholder="E-mail *">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control form-co-errors" id="co-password" name="co-password" placeholder="Mot de passe *">
                        <a href="forgotmdp.php">Mot de passe oublié ?</a>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control" id="submitted-co" name="submitted-co" value="Se connecter">
                    </div>

                    <a href="" class="mod-title-inscription">Vous n'êtes pas encore inscrit ? Cliquez ici</a>

                </form>

                <!-- INSCRIPTION -->

                <form id="form-inscription" action="inscription.php" method="post">

                    <div class="form-group">
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom *">
                                <span class="error" id="error-prenom"></span>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom *">
                                <span class="error" id="error-nom"></span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <input type="email" class="form-control" id="in-email" name="in-email" placeholder="E-mail *">
                        <span class="error" id="error-email-in"></span>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" id="in-password" name="in-password" placeholder="Mot de passe *">
                        <span class="error" id="error-password-in"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="in-confirm-password" name="in-confirm-password" placeholder="Confirmer *">
                        <span class="error" id="error-cpassword-in"></span>
                    </div>

                    <div class="form-group form-submit">
                        <input type="submit" class="form-control" id="submitted-in" name="submitted-in" value="S'inscrire">
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>