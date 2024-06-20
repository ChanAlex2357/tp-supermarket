<div class="container">
    <h2 class="mt-3 mb-3">Caisse n° <?= $numero ?></h2>
    <form class="row g-3 needs-validation" novalidate>
        <div class="col-md-3">
            <label for="produits" class="form-label">Produits</label>
            <select class="form-select" id="produits" required>
                <option value="">Choose...</option>
                <option value="">Banane</option>
                <option value="">Citron</option>
            </select>

            <div class="invalid-feedback"></div>
        </div>

        <div class="col-md-4">
            <label for="qte" class="form-label">Quantité</label>
            <input type="number" class="form-control" id="qte" value="0" required>
            <div class="valid-feedback"></div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Inserer</button>
        </div>
    </form>

    <div class="resultats hide mt-5 mb-3">
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Produits</th>
                    <th scope="col">Prix Unit</th>
                    <th scope="col">Qté</th>
                    <th scope="col">Montant</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Banane</td>
                    <td>200</td>
                    <td>1</td>
                    <td>200</td>
                </tr>
                <tr>
                    <td>Banane</td>
                    <td>200</td>
                    <td>11</td>
                    <td>2200</td>
                </tr>
                <tr>
                    <td>Citron</td>
                    <td>100</td>
                    <td>1</td>
                    <td>100</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
