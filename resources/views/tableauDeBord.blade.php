@include('layouts.app')
<title>74You - Tableau de bord</title>
<div class="row header" style="text-align:center;color:white;font-weight:bold;">
    <h3>Réservations du jour</h3>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%; text-align: center">
    <thead class="thead-white">
    <tr>
        <th scope="col">Numéro véhicule</th>
        <th scope="col">Agence de départ</th>
        <th scope="col">Date de départ</th>
        <th scope="col">Agence d'arrivée</th>
        <th scope="col">Date d'arrivée</th>
        <th scope="col">Client</th>
    </tr>
    </thead>
    <tbody>
    @forelse($rentals as $rental)
        <tr>
            <td class="text-active" >{{$rental->vehicle_id}}</td>
            <td class="text-active" >{{$rental->startAgency_id}}</td>
            <td class="text-active" >{{$rental->startDate}}</td>
            <td class="text-active" >{{$rental->endAgency_id}}</td>
            <td class="text-active" >{{$rental->endDate}}</td>
            <td class="text-active" >{{$rental->customer_id}}</td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>

<div class="row header" style="text-align:center;color:white;font-weight:bold;">
    <h3>Réservations à venir</h3>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%; text-align: center">
    <thead class="thead-white">
    <tr>
        <th class="text-active" >Numéro véhicule</th>
        <th class="text-active" >Agence de départ</th>
        <th class="text-active" >Date de départ</th>
        <th class="text-active" >Agence d'arrivée</th>
        <th class="text-active" >Date d'arrivée</th>
        <th class="text-active" >Client</th>
    </tr>
    </thead>
    <tbody>
    @forelse($rentals as $rental)
        <tr>
            <td class="text-active" >{{$rental->vehicle_id}}</td>
            <td class="text-active" >{{$rental->startAgency_id}}</td>
            <td class="text-active" >{{$rental->startDate}}</td>
            <td class="text-active" >{{$rental->endAgency_id}}</td>
            <td class="text-active" >{{$rental->endDate}}</td>
            <td class="text-active" >{{$rental->customer_id}}</td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>

