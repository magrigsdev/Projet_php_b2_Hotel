<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire Material Design Bootstrap</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="mb-3"> <h1 class="mb-h1"> commentaires </h1> </div>
                <form>
                    <div class="mb-3">
                        <label for="utilisateur" class="form-label">utilisateur </label>
                        <input type="text" class="form-control" id="utilisateur" placeholder="Entrez votre nom">
                    </div>
                    <div class="mb-3">
                        <label for="text" class="form-label"> chambre</label>
                        <input type="text" class="form-control" id="email" placeholder="entrer le nom de la chambre">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" rows="5"
                            placeholder="Entrez votre message"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary"><i class="material-icons">send</i>
                            Envoyer</button>
                        <button type="reset" class="btn btn-danger"><i class="material-icons">clear</i>
                            Effacer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>