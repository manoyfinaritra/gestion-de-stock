   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">materiel informatique</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <h3>AJOUTER UN <small class="text-body-secondary">MATERIEL</small></h3> -->
                    <form class="row g-3" id="materielForm" method="POST">
                        <!-- Formulaire pour ajouter les détails du matériel -->
                        <div class="col-md-6">
                            <label for="select" class="form-label">ARTICLE</label>
                            <select class="form-select" id="select" required name="article">
                                <option selected>selectionner</option>
                                <option value="bureau">ordinateur</option>
                                <option value="portable">portable</option>
                                <option value="switch">switch</option>
                                <option value="cameras">cameras</option>
                                <option value="cable">cable</option>
                                <option value="imprimente">imprimente</option>
                                <option value="routeur">routeur</option>
                                <option value="modem">modem</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date" required name="date">
                        </div>
                        <div class="col-md-6">
                            <label for="marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="marque" required
                                placeholder="veillez saisir la marque" name="marque">
                        </div>
                        <div class="col-md-6">
                            <label for="modele" class="form-label">Modéle</label>
                            <input type="text" class="form-control" id="modele" required
                                placeholder="veillez saisir le modéle" name="modele">
                        </div>
                        <div class="col-md-6">
                            <label for="processeur" class="form-label">Processeur</label>
                            <input type="text" class="form-control" id="processeur" required
                                placeholder="veillez saisir le processeur" name="processeur">
                        </div>

                        <div class="col-md-6">
                            <label for="ram" class="form-label">Ram</label>
                            <select class="form-select" id="ram" required name="ram">
                                <option selected>selectionner</option>
                                <option value="2">2</option>
                                <option value="4">4</option>
                                <option value="6">6</option>
                                <option value="8">8</option>
                                <option value="12">12</option>
                                <option value="16">16</option>
                                <option value="24">24</option>
                                <option value="32">32</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="etat" class="form-label">Etat</label>
                            <select class="form-select" id="etat" name="etat">
                                <option selected>selectionner</option>
                                <option value="operationnel">operationnel</option>
                                <option value="en panne">en panne</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="etablissement" class="form-label">Etablissement</label>
                            <select class="form-select" id="etablissement" name="etablissement">
                                <option selected>selectionner</option>
                                <option value="manoy">manoy</option>
                                <option value="finaritra">finaritra</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                            <button type="submit" class="btn btn-primary">enrgistrer</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- Modal pour modifier un matériel -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Modifier Matériel</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editMaterielForm" method="POST" class="gp-3 row">
                        <input type="hidden" id="edit_id" name="id">
                        <!-- Identique au formulaire d'ajout mais avec des valeurs préremplies -->
                        <div class="col-md-6">
                            <label for="edit_article" class="form-label">ARTICLE</label>
                            <select class="form-select" id="edit_article" name="article">
                                <option>choisir</option>
                                <option value="bureau">ordinateur</option>
                                <option value="portable">portable</option>
                                <option value="switch">switch</option>
                                <option value="cameras">cameras</option>
                                <option value="cable">cable</option>
                                <option value="imprimente">imprimente</option>
                                <option value="routeur">routeur</option>
                                <option value="modem">modem</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="edit_date" class="form-label">Date</label>
                            <input type="date" class="form-control" id="edit_date" name="date">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_marque" class="form-label">Marque</label>
                            <input type="text" class="form-control" id="edit_marque" name="marque">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_modele" class="form-label">Modéle</label>
                            <input type="text" class="form-control" id="edit_modele" name="modele">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_processeur" class="form-label">Processeur</label>
                            <input type="text" class="form-control" id="edit_processeur" name="processeur">
                        </div>
                        <div class="col-md-6">
                            <label for="edit_ram" class="form-label">Ram</label>
                            <input type="number" class="form-control" id="edit_ram" name="ram">
                        </div>

                        <div class="col-md-6">
                            <label for="edit_etat" class="form-label">Etat</label>
                            <!-- <input class="form-control" id="edit_etat" name="etat"> -->
                            <select class="form-select" id="edit_etat" name="etat">
                                <option selected>selectionner</option>
                                <option value="operationnel">operationnel</option>
                                <option value="en panne">en panne</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="edit_etablissement" class="form-label">Etablissement</label>
                            <!-- <input type="text" id="edit_etablissement" name="etablissement"> -->
                            <select class="form-select" id="edit_etablissement" name="etablissement">
                                <option selected>selectionner</option>
                                <option value="manoy">manoy</option>
                                <option value="finaritra">finaritra</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">fermer</button>
                            <button type="submit" class="btn btn-primary">modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>