
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<table class="table table-bordered table-hover table-dark ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Resolucion</th>
      <th scope="col">Relacion de aspecto</th>
    </tr>
  </thead>
  <tbody>
    @foreach($data as $item)
    <tr>
        <td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
        <td>{{$item->aspect_ratio}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
