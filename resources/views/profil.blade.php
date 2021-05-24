@include('layouts.app')

<title>74You - Profil</title>
<div class="row header" style="text-align:center;color:white;font-weight:bold;">
    <h3>VOTRE PROFIL</h3>
</div>

<nav aria-label="breadcrumb" class="main-breadcrumb">
</nav>
<!-- /Breadcrumb -->

<div class="row gutters-sm">
    <div class="col-md-8">
        <div class="card top">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="git remote mb-0">Nom / Prénom</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Nom
                        Prénom
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Email
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Mot de passe</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Mot de PASSE
                    </div>
                    <input class="favorite styled"
                           type="button"
                           value="Modifier"
                    >

                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-1">Raison sociale de son organisation</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        Raison Social
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .top{
        margin-top: 50px;
    }
</style>


