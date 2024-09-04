<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

//        $data_array = [
//            'name' =>
//        ]

            $cars = array (
                array("name" => 'telefone', "value" => '(21) 9 80630330 / 9 79489067'),
                array("name" => 'email', "value" => 'contato@erproserv.com.br'),
                array("name" => 'horario', "value" => 'Seg - Sexta : 09 AM - 18 PM'),
                array("name" => 'facebook', "value" => '#'),
                array("name" => 'linkedin', "value" => '#'),
                array("name" => 'instagram', "value" => 'https://www.instagram.com/erproserv/'),
                array("name" => 'endereco', "value" => 'Rua Alaide Froes, 85 Campo Grande - RJ'),
                array("name" => 'rodape_descricao', "value" => 'Na ER ProServ, somos mais do que uma empresa de prestação de serviços de manutenção para comércios, Empresas e Industrias. Somos parceiros dedicados ao sucesso e à satisfação dos nossos clientes.'),
                array("name" => 'pagina_contato_info', "value" => 'Estamos em busca de talentos excepcionais como você para fazer parte da nossa equipe de elite na ER ProServ. Estamos comprometidos em oferecer soluções inovadoras e de alta qualidade aos nossos clientes, e acreditamos que você pode ser a peça-chave para o nosso sucesso contínuo.'),
                array("name" => 'google_maps', "value" => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3675.3635635727587!2d-43.55393822390296!3d-22.899957337628507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be15b4a295aa7%3A0x351f3b9a6ced9508!2sR.%20Ala%C3%ADde%20Fr%C3%B3es%2C%2085%20-%20Campo%20Grande%2C%20Rio%20de%20Janeiro%20-%20RJ%2C%2023085-370%2C%20Brazil!5e0!3m2!1sen!2sus!4v1725415657341!5m2!1sen!2sus'),
                array("name" => 'pagina_quem_somos_titulo', "value" => 'Soluções para Residencias, Empresas, Comércios e Industrias'),
                array("name" => 'pagina_quem_somos_descricao', "value" => 'Na ER ProServ, somos mais do que uma empresa de prestação de serviço, manutenção e gestão. Somos parceiros dedicados ao sucesso e à satisfação dos nossos clientes. Com anos de experiência no mercado, nossa equipe de profissionais altamente qualificados, possui um vasto conhecimento em Tecnologia e prestação de serviço, desenvolvendo soluções de gestão com auxilio de tecnologia e expertise.'),
            );

        DB::table('settings')->insert($cars);
    }
}
