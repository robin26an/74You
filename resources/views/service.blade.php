@include('layouts.app')
<title>74You - Tableau de bord</title>
<div class="row header" style="text-align:center;color:dark;font-weight:bold;margin-top:30px">
    <h3>Services</h3>
</div>
<table id="example" class="table table-striped table-bordered" style="width:100%; text-align: center;margin-top:30px">
    <thead class="thead-white">
    <tr>
        <th scope="col">N°</th>
        <th scope="col">Nom</th>
        <th scope="col">Entreprise</th>
    </tr>
    </thead>
    <tbody>
    @forelse($services as $service)
        <tr>
            <td class="text-active" >{{$service->id}}</td>
            <td class="text-active" >{{$service->name}}</td>
            <td class="text-active" >{{$service->users_id}}</td>
        </tr>
    @empty
    @endforelse
    </tbody>
</table>


