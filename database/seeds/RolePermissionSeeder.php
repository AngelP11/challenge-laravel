<?php

use Illuminate\Database\Seeder;
use App\Permission;
use App\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PERMISOS

        //Permisos para User
        $crear_user = new Permission([
            'name' => 'crear_usuario',
            'display_name' => 'Crear Usuario',
            'description' => 'Con este permiso puedes crear nuevos usuarios'
        ]);
        $crear_user->save();

        $ver_user = new Permission([
            'name' => 'ver_usuario',
            'display_name' => 'Ver Usuario',
            'description' => 'Con este permiso puedes ver la lista de usuarios'
        ]);
        $ver_user->save();

        $editar_user = new Permission([
            'name' => 'editar_usuario',
            'display_name' => 'Editar Usuario',
            'description' => 'Con este permiso puedes editar usuarios'
        ]);
        $editar_user->save();

        $eliminar_user = new Permission([
            'name' => 'eliminar_usuario',
            'display_name' => 'Eliminar Usuario',
            'description' => 'Con este permiso puedes eliminar usuarios'
        ]);
        $eliminar_user->save();

        //Permisos para Student
        $crear_student = new Permission([
            'name' => 'crear_estudiante',
            'display_name' => 'Crear Estudiante',
            'description' => 'Con este permiso puedes crear nuevos estudiantes'
        ]);
        $crear_student->save();

        $ver_student = new Permission([
            'name' => 'ver_estudiante',
            'display_name' => 'Ver Estudiante',
            'description' => 'Con este permiso puedes ver la lista de estudiantes'
        ]);
        $ver_student->save();

        $editar_student = new Permission([
            'name' => 'editar_student',
            'display_name' => 'Editar Estudiante',
            'description' => 'Con este permiso puedes editar estudiantes'
        ]);
        $editar_student->save();

        $eliminar_student = new Permission([
            'name' => 'eliminar_estudiante',
            'display_name' => 'Eliminar Estudiante',
            'description' => 'Con este permiso puedes eliminar estudiantes'
        ]);
        $eliminar_student->save();

        //ROLES

        //Admin
        $admin = new Role([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Posee control del sistema'
        ]);
        $admin->save();

        $admin->attachPermissions([$crear_user, $crear_student, $editar_user, $editar_student, $eliminar_user, $eliminar_student]);

        //Student
        $student = new Role([
            'name' => 'student',
            'display_name' => 'Estudiante',
            'description' => 'Solo puede ver los usuarios y estudiantes registrados'
        ]);
        $student->save();

        $student->attachPermissions([$ver_user, $ver_student]);
    }
}
