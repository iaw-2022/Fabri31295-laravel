<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Fecha</th>\
        </tr>
    </thead>
    <tbody>
    @foreach ($files as $file)
        <tr>
            <td>{{ $file->id }}</td>
            <td>{{ $file->name }}</td>
            <td>{{ $file->date }} KB</td>
        </tr>
    @endforeach
    </tbody>
</table>
