<?php

use App\productos;
use Illuminate\Database\Seeder;

class AgregarProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        productos::create([
            'nombre' => 'Redes Sociales / Carrusel',
            'slug' => 'redes-sociales',
            'detalle' => 'Imágenes creadas para publicitar productos o eventos en redes sociales',
            'precio' => 0,
            'descripcion' => 'Los Artes creados para redes sociales son las que los clientes Potenciales observarán al momento de su navegacion por las mismas',
            'categoria' => 'Artes',
            'tipo' => 'Online',
            'imagen' => 'red-social.jpg'
        ]);

        productos::create([
            'nombre' => 'Roll Up',
            'slug' => 'roll-up',
            'detalle' => 'Imágenes creadas para publicitar productos o eventos en modalidad presencial',
            'precio' => 0,
            'descripcion' => 'Los Artes creados para Roll Up son las que los clientes Potenciales observarán al momento de su movimiento por la institución',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'rollup.jpg'
        ]);

        productos::create([
            'nombre' => 'Backing',
            'slug' => 'backing',
            'detalle' => 'Imágenes creadas para publicitar productos o eventos en modalidad presencial',
            'precio' => 0,
            'descripcion' => 'Los Artes creados para Backing son las que los clientes Potenciales observarán al momento de su visita en algún evento, el objetivo es que los clientes se tomen fotos con ellas, usualmente se promocionan marcas',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'backing.jpg'
        ]);

        productos::create([
            'nombre' => 'Scrolling',
            'slug' => 'scrolling',
            'detalle' => 'Imágenes creadas para publicitar productos o eventos en modalidad presencial',
            'precio' => 0,
            'descripcion' => 'Los Artes creados para Scrolling son las que los clientes Potenciales observarán al momento de su movimiento por la institución',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'scrolling.jpg'
        ]);

        productos::create([
            'nombre' => 'Cartelera Digital',
            'slug' => 'cartelera-digital',
            'detalle' => 'Imágenes creadas para publicitar productos o eventos de manera digital',
            'precio' => 0,
            'descripcion' => 'Los Artes creados para Cartelera Digital son las que los clientes Potenciales observarán en las pantallas distribuidas por la institución',
            'categoria' => 'Artes',
            'tipo' => 'Online',
            'imagen' => 'cartelera.jpg'
        ]);

        productos::create([
            'nombre' => 'Invitaciones',
            'slug' => 'invitaciones',
            'detalle' => 'Imágenes creadas para difundir un evento especifico de manera digital U online',
            'precio' => 0,
            'descripcion' => 'Los Artes creados como Invitaciones son los que las personas observarán al momento de realizar un evento dentro de la institución',
            'categoria' => 'Artes',
            'tipo' => 'Online y Fisico',
            'imagen' => 'invitaciones.jpg'
        ]);

        productos::create([
            'nombre' => 'Dípticos',
            'slug' => 'dipticos',
            'detalle' => 'Imágenes consecutivas creadas para publicitar productos o eventos que serán impresos',
            'precio' => 0,
            'descripcion' => 'Los Artes creados como Dípticos son los que las personas observarán al momento de realizar una consulta acerca de mas información sobre un evento',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'dipticos.jpg'
        ]);

        productos::create([
            'nombre' => 'Folletos',
            'slug' => 'folletos',
            'detalle' => 'Imágenes consecutivas creadas para publicitar productos o eventos que serán vistos de manera digital',
            'precio' => 0,
            'descripcion' => 'Los Artes creados como Folletos son los que las personas observarán al momento de realizar una consulta acerca de mas información sobre un evento',
            'categoria' => 'Artes',
            'tipo' => 'Online y Fisico',
            'imagen' => 'folletos.jpg'
        ]);

        productos::create([
            'nombre' => 'Diplomas',
            'slug' => 'diplomas',
            'detalle' => 'Imágenes creadas para ser entregadas en ceremonias de graduación',
            'precio' => 0,
            'descripcion' => 'Los Artes creados como Diplomas son los que las personas observarán al momento de culminar sus estudios dentro de la institución',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'diplomas.jpg'
        ]);

        productos::create([
            'nombre' => 'Trípticos',
            'slug' => 'tripticos',
            'detalle' => 'Imágenes consecutivas creadas para publicitar productos o eventos que serán impresos',
            'precio' => 0,
            'descripcion' => 'Los Artes creados como Trípticos son los que las personas observarán al momento de realizar una consulta acerca de mas información sobre un evento',
            'categoria' => 'Artes',
            'tipo' => 'Online y Fisico',
            'imagen' => 'tripticos.jpg'
        ]);

        productos::create([
            'nombre' => 'Libros',
            'slug' => 'libros',
            'detalle' => 'Imágenes creadas para las portadas de libros',
            'precio' => 0,
            'descripcion' => 'Los Artes creados con categoría de Libro son los que las personas observarán al momento adquirir el libro en cuestión',
            'categoria' => 'Artes',
            'tipo' => 'Fisico',
            'imagen' => 'libros.jpg'
        ]);

        productos::create([
            'nombre' => 'Otros',
            'slug' => 'otros',
            'detalle' => 'Imágenes que no se encuentran dentro de nuestro catalogo',
            'precio' => 0,
            'descripcion' => '',
            'categoria' => 'Artes',
            'tipo' => 'Otros',
            'imagen' => 'otros.jpg'
        ]);
    }
}
