<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Users
        Permission::create([

            'name' =>'Navegar usuarios',
            'slug' =>'users.index',
            'description' =>'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle usuario',
            'slug' =>'users.show',
            'description' =>'Ver en detalle cada usuario del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de usuarios',
            'slug' =>'users.edit',
            'description' =>'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar usuario',
            'slug' =>'users.destroy',
            'description' =>'Eliminar cualquier usuario del sistema',

        ]);

        //Roles

        Permission::create([

            'name' =>'Navegar roles',
            'slug' =>'roles.index',
            'description' =>'Lista y navega todos los roles del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle rol',
            'slug' =>'roles.show',
            'description' =>'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de roles',
            'slug' =>'roles.create',
            'description' =>'Crear un rol del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de roles',
            'slug' =>'roles.edit',
            'description' =>'Editar cualquier dato de un rol del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar rol',
            'slug' =>'roles.destroy',
            'description' =>'Eliminar cualquier rol del sistema',

        ]);


        //Agrupaciones Politicas

        Permission::create([

            'name' =>'Navegar Agrupaciones politicas',
            'slug' =>'agrupacionespoliticas.index',
            'description' =>'Lista y navega todos los Agrupaciones politicas del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Agrupacion Politica',
            'slug' =>'agrupacionespoliticas.show',
            'description' =>'Ver en detalle cada Agrupacion Politica del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Agrupaciones politicas',
            'slug' =>'agrupacionespoliticas.create',
            'description' =>'Crear un Agrupacion Politica del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Agrupaciones politicas',
            'slug' =>'agrupacionespoliticas.edit',
            'description' =>'Editar cualquier dato de un Agrupacion Politica del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Agrupacion Politica',
            'slug' =>'agrupacionespoliticas.destroy',
            'description' =>'Eliminar cualquier Agrupacion Politica del sistema',

        ]);


        //Tipos de Comicios

        Permission::create([

            'name' =>'Navegar Tipos de Comicios',
            'slug' =>'tiposcomicios.index',
            'description' =>'Lista y navega todos los Tipos de Comicios del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Tipo de Comicio',
            'slug' =>'tiposcomicios.show',
            'description' =>'Ver en detalle cada Tipo de Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Tipos de Comicios',
            'slug' =>'tiposcomicios.create',
            'description' =>'Crear un Tipo de Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Tipos de Comicios',
            'slug' =>'tiposcomicios.edit',
            'description' =>'Editar cualquier dato de un Tipo de Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Tipo de Comicio',
            'slug' =>'tiposcomicios.destroy',
            'description' =>'Eliminar cualquier Tipo de Comicio del sistema',

        ]);

        //Comicio

        Permission::create([

            'name' =>'Navegar Comicios',
            'slug' =>'comicios.index',
            'description' =>'Lista y navega todos los Comicios del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Comicio',
            'slug' =>'comicios.show',
            'description' =>'Ver en detalle cada Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Comicios',
            'slug' =>'comicios.create',
            'description' =>'Crear un Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Comicios',
            'slug' =>'comicios.edit',
            'description' =>'Editar cualquier dato de un Comicio del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Comicio',
            'slug' =>'comicios.destroy',
            'description' =>'Eliminar cualquier Comicio del sistema',

        ]);

        //Cargo Electivo

        Permission::create([

            'name' =>'Navegar Cargos Electivos',
            'slug' =>'cargosElectivos.index',
            'description' =>'Lista y navega todos los Cargos Electivos del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Cargos Electivos',
            'slug' =>'cargosElectivos.show',
            'description' =>'Ver en detalle cada Cargos Electivos del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Cargos Electivos',
            'slug' =>'cargosElectivos.create',
            'description' =>'Crear un Cargos Electivos del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Cargos Electivos',
            'slug' =>'cargosElectivos.edit',
            'description' =>'Editar cualquier dato de un Cargos Electivos del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Cargos Electivos',
            'slug' =>'cargosElectivos.destroy',
            'description' =>'Eliminar cualquier Cargos Electivos del sistema',

        ]);

        //Agrupaciones Politicas Listas

        Permission::create([

            'name' =>'Navegar Agrupaciones Politicas Listas',
            'slug' =>'agruPoliticasListas.index',
            'description' =>'Lista y navega todos los Agrupaciones Politicas Listas del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Agrupacion Politica Lista',
            'slug' =>'agruPoliticasListas.show',
            'description' =>'Ver en detalle cada Agrupacion Politica Lista del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Agrupaciones Politicas Listas',
            'slug' =>'agruPoliticasListas.create',
            'description' =>'Crear un Agrupacion Politica Lista del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Agrupaciones Politicas Listas',
            'slug' =>'agruPoliticasListas.edit',
            'description' =>'Editar cualquier dato de un Agrupacion Politica Lista del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Agrupacion Politica Lista',
            'slug' =>'agruPoliticasListas.destroy',
            'description' =>'Eliminar cualquier Agrupacion Politica Lista del sistema',

        ]);

        //Tipos Cargos Electivos

        Permission::create([

            'name' =>'Navegar Tipos Cargos Electivos',
            'slug' =>'tiposCargosElectivos.index',
            'description' =>'Lista y navega todos los Tipos Cargos Electivos del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Tipo Cargo Electivo',
            'slug' =>'tiposCargosElectivos.show',
            'description' =>'Ver en detalle cada Tipo Cargo Electivo del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Tipos Cargos Electivos',
            'slug' =>'tiposCargosElectivos.create',
            'description' =>'Crear un Tipo Cargo Electivo del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Tipos Cargos Electivos',
            'slug' =>'tiposCargosElectivos.edit',
            'description' =>'Editar cualquier dato de un Tipo Cargo Electivo del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Tipo Cargo Electivo',
            'slug' =>'tiposCargosElectivos.destroy',
            'description' =>'Eliminar cualquier Tipo Cargo Electivo del sistema',

        ]);

        //Provincias

        Permission::create([

            'name' =>'Navegar Provincias',
            'slug' =>'provincias.index',
            'description' =>'Lista y navega todos las Provincias del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Provincia',
            'slug' =>'provincias.show',
            'description' =>'Ver en detalle cada Provincia del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Provincias',
            'slug' =>'provincias.create',
            'description' =>'Crear un Provincia del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Provincias',
            'slug' =>'provincias.edit',
            'description' =>'Editar cualquier dato de un Provincia del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Provincia',
            'slug' =>'provincias.destroy',
            'description' =>'Eliminar cualquier Provincia del sistema',

        ]);

        //Secciones

        Permission::create([

            'name' =>'Navegar Secciones',
            'slug' =>'secciones.index',
            'description' =>'Lista y navega todos las Secciones del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Seccion',
            'slug' =>'secciones.show',
            'description' =>'Ver en detalle cada Seccion del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Secciones',
            'slug' =>'secciones.create',
            'description' =>'Crear un Seccion del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Secciones',
            'slug' =>'secciones.edit',
            'description' =>'Editar cualquier dato de un Seccion del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Seccion',
            'slug' =>'secciones.destroy',
            'description' =>'Eliminar cualquier Seccion del sistema',

        ]);
        
        //Circuitos

        Permission::create([

            'name' =>'Navegar Circuitos',
            'slug' =>'circuitos.index',
            'description' =>'Lista y navega todos las Circuitos del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Circuito',
            'slug' =>'circuitos.show',
            'description' =>'Ver en detalle cada Circuito del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Circuitos',
            'slug' =>'circuitos.create',
            'description' =>'Crear un Circuito del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Circuitos',
            'slug' =>'circuitos.edit',
            'description' =>'Editar cualquier dato de un Circuito del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Circuito',
            'slug' =>'circuitos.destroy',
            'description' =>'Eliminar cualquier Circuito del sistema',

        ]);

        //Local

        Permission::create([

            'name' =>'Navegar Locales',
            'slug' =>'locales.index',
            'description' =>'Lista y navega todos las Locales del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Local',
            'slug' =>'locales.show',
            'description' =>'Ver en detalle cada Local del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Locales',
            'slug' =>'locales.create',
            'description' =>'Crear un Local del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Locales',
            'slug' =>'locales.edit',
            'description' =>'Editar cualquier dato de un Local del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Local',
            'slug' =>'locales.destroy',
            'description' =>'Eliminar cualquier Local del sistema',

        ]);

        //Mesas

        Permission::create([

            'name' =>'Navegar Mesas',
            'slug' =>'mesas.index',
            'description' =>'Lista y navega todos las Mesas del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Mesa',
            'slug' =>'mesas.show',
            'description' =>'Ver en detalle cada Mesa del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Mesas',
            'slug' =>'mesas.create',
            'description' =>'Crear un Mesa del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Mesas',
            'slug' =>'mesas.edit',
            'description' =>'Editar cualquier dato de un Mesa del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Mesa',
            'slug' =>'mesas.destroy',
            'description' =>'Eliminar cualquier Mesa del sistema',

        ]);

        //Escrutinios

        Permission::create([

            'name' =>'Navegar Escrutinios',
            'slug' =>'escrutinio.index',
            'description' =>'Lista y navega todos las Escrutinios del sistema',

        ]);

        Permission::create([

            'name' =>'Ver detalle Escrutinio',
            'slug' =>'escrutinio.show',
            'description' =>'Ver en detalle cada Escrutinio del sistema',

        ]);

        Permission::create([

            'name' =>'Creacion de Escrutinios',
            'slug' =>'escrutinio.create',
            'description' =>'Crear un Escrutinio del sistema',

        ]);

        Permission::create([

            'name' =>'Edicion de Escrutinios',
            'slug' =>'escrutinio.edit',
            'description' =>'Editar cualquier dato de un Escrutinio del sistema',

        ]);

        Permission::create([

            'name' =>'Eliminar Escrutinio',
            'slug' =>'escrutinio.destroy',
            'description' =>'Eliminar cualquier Escrutinio del sistema',

        ]);
        
    }
}

