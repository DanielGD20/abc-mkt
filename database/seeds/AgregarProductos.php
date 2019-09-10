<?php

use App\combos;
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
            'detalle' => 'Opciones que no se encuentran dentro de nuestro catalogo',
            'precio' => 0,
            'descripcion' => '',
            'categoria' => 'Otros',
            'tipo' => 'Otros',
            'imagen' => 'otros.jpg'
        ]);


        // final de artes

        productos::create([
            'nombre' => 'Funda de regalo',
            'slug' => 'funda-regalo',
            'detalle' => 'Funda utilizada para almacenar productos',
            'precio' => 1.05,
            'descripcion' => 'Funda utilizada para almacenar productos',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'funda-de-regalo.jpg'
        ]);

        productos::create([
            'nombre' => 'Esfero',
            'slug' => 'esfero',
            'detalle' => 'Esfero con logo UEES',
            'precio' => 0.37,
            'descripcion' => 'Esfero con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'esfero.jpg'
        ]);

        productos::create([
            'nombre' => 'Taza',
            'slug' => 'taza',
            'detalle' => 'Taza conmemorativa con logo UEES',
            'precio' => 3.80,
            'descripcion' => 'Taza conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'taza.jpg'
        ]);

        productos::create([
            'nombre' => 'Libreta Roja',
            'slug' => 'libreta-roja',
            'detalle' => 'Libreta roja básica conmemorativa con logo UEES',
            'precio' => 1.25,
            'descripcion' => 'Libreta roja básica conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-roja.jpg'
        ]);

        productos::create([
            'nombre' => 'Libreta Negra',
            'slug' => 'libreta-negra',
            'detalle' => 'Libreta negra premium conmemorativa con logo UEES',
            'precio' => 1.25,
            'descripcion' => 'Libreta negra premium conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-negra.jpg'
        ]);

        productos::create([
            'nombre' => 'Libreta engomada A4',
            'slug' => 'libreta-engomada-a4',
            'detalle' => 'Libreta engomada A4 conmemorativa con logo UEES',
            'precio' => 0.6,
            'descripcion' => 'Libreta engomada A4 conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-engomada-a4.jpg'
        ]);

        productos::create([
            'nombre' => 'Libreta engomada A5',
            'slug' => 'libreta-engomada-a5',
            'detalle' => 'Libreta engomada A5 conmemorativa con logo UEES',
            'precio' => 0.45,
            'descripcion' => 'Libreta engomada A5 conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-engomada-a5.jpg'
        ]);

        productos::create([
            'nombre' => 'Libreta Anillada',
            'slug' => 'libreta-anillada',
            'detalle' => 'Libreta anillada conmemorativa con logo UEES',
            'precio' => 1.25,
            'descripcion' => 'Libreta anillada conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-anillada.jpg'
        ]);

        productos::create([
            'nombre' => 'Carpetas',
            'slug' => 'carpetas',
            'detalle' => 'Carpetas conmemorativas con logo UEES',
            'precio' => 0.65,
            'descripcion' => 'Libreta anillada conmemorativa con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'libreta-anillada.jpg'
        ]);

        productos::create([
            'nombre' => 'Sobres membretados',
            'slug' => 'sobres',
            'detalle' => 'Sobres membretados conmemorativas con logo UEES',
            'precio' => 0.12,
            'descripcion' => 'Sobres membretados conmemorativas con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'sobres-membretados.jpg'
        ]);

        productos::create([
            'nombre' => 'Hojas membretadas',
            'slug' => 'hojas',
            'detalle' => 'Hojas membretadas conmemorativas con logo UEES',
            'precio' => 0.06,
            'descripcion' => 'Hojas membretadas conmemorativas con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'hojas-membretadas.jpg'
        ]);

        productos::create([
            'nombre' => 'Cartolas / Credenciales',
            'slug' => 'cartolas',
            'detalle' => 'Cartolas y credenciales con diseño UEES',
            'precio' => 0.4,
            'descripcion' => 'Cartolas y credenciales con diseño UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'cartolas.jpg'
        ]);

        productos::create([
            'nombre' => 'Lanyers',
            'slug' => 'lanyers',
            'detalle' => 'Lanyers para el uso de credenciales con logo UEES',
            'precio' => 0.45,
            'descripcion' => 'Lanyers para el uso de credenciales con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'lanyers.jpg'
        ]);

        productos::create([
            'nombre' => 'Gorras',
            'slug' => 'gorras',
            'detalle' => 'Gorras conmemorativas con logo UEES',
            'precio' => 3.80,
            'descripcion' => 'Gorras conmemorativas con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'gorras.jpg'
        ]);

        productos::create([
            'nombre' => 'Camisetas Polo',
            'slug' => 'camisetas-polo',
            'detalle' => 'Camisetas Polo con diseño UEES en diferentes colores',
            'precio' => 7.90,
            'descripcion' => 'Camisetas Polo con diseño UEES en diferentes colores',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'camisetas-polo.jpg'
        ]);

        productos::create([
            'nombre' => 'Bolsos Cambrela',
            'slug' => 'bolsos-cambrela',
            'detalle' => 'Bolsos multiuso con logo UEES',
            'precio' => 0.45,
            'descripcion' => 'Bolsos multiuso con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'bolsos.jpg'
        ]);

        productos::create([
            'nombre' => 'Pines',
            'slug' => 'pines',
            'detalle' => 'Pines elegantes con logo UEES',
            'precio' => 5.23,
            'descripcion' => 'Pines elegantes con logo UEES',
            'categoria' => 'Articulos-Promocionales',
            'tipo' => 'Fisico',
            'imagen' => 'pines.jpg'
        ]);

        combos::create([
            'codigo_combo' => 1,
            'nombre_combo' => 'Combo Premium',
            'id_producto' => 13,
        ]);

        combos::create([
            'codigo_combo' => 1,
            'nombre_combo' => 'Combo Premium',
            'id_producto' => 14,
        ]);

        combos::create([
            'codigo_combo' => 1,
            'nombre_combo' => 'Combo Premium',
            'id_producto' => 15,
        ]);

        combos::create([
            'codigo_combo' => 1,
            'nombre_combo' => 'Combo Premium',
            'id_producto' => 17,
        ]);

        combos::create([
            'codigo_combo' => 2,
            'nombre_combo' => 'Combo Básico',
            'id_producto' => 13,
        ]);

        combos::create([
            'codigo_combo' => 2,
            'nombre_combo' => 'Combo Básico',
            'id_producto' => 14,
        ]);

        combos::create([
            'codigo_combo' => 2,
            'nombre_combo' => 'Combo Básico',
            'id_producto' => 15,
        ]);

        combos::create([
            'codigo_combo' => 2,
            'nombre_combo' => 'Combo Básico',
            'id_producto' => 16,
        ]);
    }
}
