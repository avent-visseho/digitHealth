@extends('layouts.dashboardLayout')

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Calendrier</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                                    <li class="breadcrumb-item active">Calendrier</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">

                        <div class="row">
                            <div class="col-xl-3 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-grid">
                                            <button class="btn font-16 btn-primary" id="btn-new-event"><i
                                                    class="mdi mdi-plus-circle-outline"></i> Créer un évènement
                                            </button>
                                        </div>

                                        <div id="external-events" class="mt-2">
                                            <br>
                                            <p class="text-muted">Glissez-déposez votre événement ou cliquez dans le
                                                calendrier</p>
                                            <div class="external-event fc-event text-success bg-soft-success"
                                                data-class="bg-success">
                                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Nouvelle
                                                planification d'événement
                                            </div>
                                            <div class="external-event fc-event text-info bg-soft-info"
                                                data-class="bg-info">
                                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Réunion
                                            </div>
                                            <div class="external-event fc-event text-warning bg-soft-warning"
                                                data-class="bg-warning">
                                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Création de
                                                rapports
                                            </div>
                                            <div class="external-event fc-event text-danger bg-soft-danger"
                                                data-class="bg-danger">
                                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Créer une
                                                nouvelle thématique
                                            </div>
                                            <div class="external-event fc-event text-dark bg-soft-dark"
                                                data-class="bg-dark">
                                                <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Réunion
                                                d'équipe
                                            </div>
                                        </div>

                                        <div class="row justify-content-center mt-5">
                                            <div class="col-lg-12 col-sm-6">
                                                <img src="{{ asset('dist/assets/images/undraw-calendar.svg') }}"
                                                    alt="" class="img-fluid d-block">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col-->

                            <div class="col-xl-9 col-lg-8">
                                <div class="card">
                                    <div class="card-body">
                                        <div id="calendar"></div>
                                    </div>
                                </div>
                            </div> <!-- end col -->

                        </div>
                        <!-- end row -->

                        <div style='clear:both'></div>

                        <!-- Add New Event MODAL -->
                        <div class="modal fade" id="event-modal" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4 border-bottom-0">
                                        <h5 class="modal-title" id="modal-title">Événement</h5>

                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-hidden="true"></button>

                                    </div>
                                    <div class="modal-body p-4">
                                        <form class="needs-validation" name="event-form" id="form-event" novalidate>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Nom de l'événement</label>
                                                        <input class="form-control" placeholder="Insert Event Name"
                                                            type="text" name="title" id="event-title" required
                                                            value="" />
                                                        <div class="invalid-feedback">Veuillez indiquer un nom d'événement
                                                            valide
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Catégories</label>
                                                        <select class="form-control form-select" name="category"
                                                            id="event-category">
                                                            <option selected> --Sélectionner... </option>
                                                            <option value="bg-danger">Danger</option>
                                                            <option value="bg-success">Succès</option>
                                                            <option value="bg-primary">Primaire</option>
                                                            <option value="bg-info">Informations</option>
                                                            <option value="bg-dark">Sombre</option>
                                                            <option value="bg-warning">Alerte</option>
                                                        </select>
                                                        <div class="invalid-feedback">Veuillez sélectionner une catégorie
                                                            d'événement valide
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-danger"
                                                        id="btn-delete-event">Supprimer</button>
                                                </div>
                                                <div class="col-6 text-end">
                                                    <button type="button" class="btn btn-light me-1"
                                                        data-bs-dismiss="modal">Fermer</button>
                                                    <button type="submit" class="btn btn-success"
                                                        id="btn-save-event">Sauvegarder</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div> <!-- end modal-content-->
                            </div> <!-- end modal dialog-->
                        </div>
                        <!-- end modal-->

                    </div>
                </div>

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="mt-4 mt-md-5 text-center">
                    <p class="mb-0">©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> DigitHealth<i class="mdi mdi-heart text-danger"></i>
                    </p>
                </div>
            </div>
        </footer>

    </div>
@endsection
<!-- end main content-->
