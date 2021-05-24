@include('layouts.app')
<title>74You - Formulaire de réservation</title>
<div class="row header" style="text-align:center;color:white;font-weight:bold;">
    <h3>Formulaire de résérvation</h3>
</div>

<form action="" method="post">
    <p>Agence de départ : <label>
            <select name="agenceDepart">
                <option>--Séléctionner--</option>
                @forelse($agencies as $agency)
                    <option>{{$agency->ville}} ; {{$agency->address}} ; {{$agency->postcode}}</option>
                    @empty
                    @endforelse
            </select>
        </label></p>
    <p>Date départ: <input type="date" name="dateDepart" /></p>
    <p>Agence d'arrivée : <label>
            <select name="agenceArriver">
                <option>--Séléctionner--</option>
                @forelse($agencies as $agency)
                    <option>{{$agency->ville}} ; {{$agency->address}} ; {{$agency->postcode}}</option>
                @empty
                @endforelse
            </select>
        </label></p>
    <p>Date d'arrivée: <input type="date" name="dateArrivee" /></p>
    <p>Modèle de véhicule: <label>
            <select name="modelVehicule">
                <option>--Séléctionner--</option>
            </select>
        </label></p>
    <p>Nom du salarié conducteur: <input type="text" name="nomSalarie" /></p>
    <p>Son numéro de permis: <input type="text" name="numPermis" /></p>
    <p><input type="submit" value="Réserver"></p>
</form>
