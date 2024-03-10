<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-md-10">
      <div class="card-group shadow rounded py-2">
        <div class="card-body bg-dark text-white">
          <h3 class="card-title text-center">Ajouter un utilisateur</h3>
          <form action="{{ route('users.store') }}" method="post">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nom">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" required>
                </div>
                <div class="form-group">
                  <label for="prenom">Prénom</label>
                  <input type="text" class="form-control" id="prenom" name="prenom" required>
                </div>
                <div class="form-group">
                  <label for="cni">CNI</label>
                  <input type="text" class="form-control" id="cni" name="cni" required>
                </div>
                <div class="form-group">
                  <label for="horaire">Horaire</label>
                  <input type="text" class="form-control" id="horaire" name="horaire" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="qrcode">QR Code</label>
                  <input type="text" class="form-control" id="qrcode" name="qrcode" required>
                </div>
                <div class="form-group">
                  <label for="cjm">CJM</label>
                  <input type="text" class="form-control" id="cjm" name="cjm" required>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="mdp">Mot de passe</label>
                  <input type="password" class="form-control" id="mdp" name="mdp" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="telephone">Téléphone</label>
                  <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="profil">Profil</label>
                  <select class="form-control" id="profil" name="profil" required>
                    <option value="">Sélectionner un profil</option>
                    <option value="administrateur">Administrateur</option>
                    <option value="employe">Employe</option>

                    <!-- Ici, vous pouvez ajouter des options de sélection de profil -->
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <!-- <div class="col-md-6">
                <div class="form-group">
                  <label for="telephone">Téléphone</label>
                  <input type="text" class="form-control" id="telephone" name="telephone" required>
                </div>
              </div> -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="statusCompte">Statut compte</label>
                  <select class="form-control" id="statusCompte" name="statusCompte" required>
                    <option value="">Etat du compte</option>
                    <option value="active">Activite</option>
                    <option value="desactive">Desactive</option>

                    <!-- Ici, vous pouvez ajouter des options de sélection de profil -->
                  </select>
                </div>
              </div>
            </div>
            <div class="col-md-12 offset-5 mt-2">
              <button type="submit" class="btn btn-white bg-dark text-white ms-3"><strong>Ajouter</strong></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>