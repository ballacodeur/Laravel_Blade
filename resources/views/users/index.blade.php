<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-7osmf9uEMD0nDhWq7m63ydtSt9LHw9MVIw2tFJqDv/Adb5NF7ge53FAGrWxBG4zqoh/hfa81C1cCnXU3a+4lZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Liste des Utilisateurs</title>
</head>

<body>

  <div class="container mt-5">
    <div class="row">
      <div class="col">
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <h2>Liste des Utilisateurs</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Nom</th>
              <th scope="col">Prénom</th>
              <th scope="col">CNI</th>
              <th scope="col">Horaire</th>
              <th scope="col">QR Code</th>
              <th scope="col">CJM</th>
              <th scope="col">Email</th>
              <th scope="col">Téléphone</th>
              <th scope="col">Profil</th>
              <th scope="col">Statut Compte</th>
              <th scope="col">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td class="align-middle">{{ $user->nom }}</td>
              <td class="align-middle">{{ $user->prenom }}</td>
              <td class="align-middle">{{ $user->cni }}</td>
              <td class="align-middle">{{ $user->horaire }}</td>
              <td class="align-middle">{{ $user->qrcode }}</td>
              <td class="align-middle">{{ $user->cjm }}</td>
              <td class="align-middle">{{ $user->email }}</td>
              <td class="align-middle">{{ $user->telephone }}</td>
              <td class="align-middle">{{ $user->profil }}</td>
              <td class="align-middle">{{ $user->statusCompte }}</td>
              <td>
                <div class="btn-group" role="group">
                  <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i> Modifier</a>
                  <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i> Supprimer</button>
                  </form>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('users.create') }}" class="btn btn-success">Ajouter un Utilisateur</a>
      </div>
    </div>
  </div>
</body>

</html>