<div class="container h-100 mt-5">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Modifier l'utilisateur</h3>
      <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" id="nom" name="nom" value="{{ $user->nom }}" required>
        </div>
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $user->prenom }}" required>
        </div>
        <!-- Ajoutez d'autres champs utilisateur ici -->

        <button type="submit" class="btn mt-3 btn-primary">Modifier l'utilisateur</button>
      </form>
    </div>
  </div>
</div>
