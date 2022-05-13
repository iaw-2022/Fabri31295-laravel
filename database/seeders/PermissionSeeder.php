<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            //Operaciones sobre tabla roles
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',

            //Operaciones sobre tabla permisos
            'ver-permiso',
            'crear-permiso',
            'editar-permiso',
            'borrar-permiso',

            //Operaciones sobre tabla categorias
            'ver-categoria',
            'crear-categoria',
            'editar-categoria',
            'borrar-categoria',

            //Operaciones sobre tabla resoluciones
            'ver-resolucion',
            'crear-resolucion',
            'editar-resolucion',
            'borrar-resolucion',

            //Operacions sobre tabla imagenes
            'ver-imagen',
            'crear-imagen',
            'editar-imagen',
            'borrar-imagen',

            //Operaciones sobre tabla usuarios
            'ver-usuario',
            'crear-usuario',
            'editar-usuario',
            'borrar-usuario',
        ];

        foreach($permissions as $permission) {
            Permission::create(['name'=>$permission]);
        }
    }
}
