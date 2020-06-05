<?php
use App\Respuesta; // Tiene que usar al modelo para que seed funcione
use Illuminate\Database\Seeder;

class SeederRespuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Respuesta::truncate(); // Evita duplicar datos
    
        //Futbol

        $respuestas = new Respuesta();
        $respuestas->id = "1";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Uruguay";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "2";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Argentina";
        $respuestas->is_correct = "0";
        $respuestas->save();
        
        $respuestas = new Respuesta();
        $respuestas->id = "3";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Brasil";
        $respuestas->is_correct = "0";
        $respuestas->save(); 

        $respuestas = new Respuesta();
        $respuestas->id = "4";
        $respuestas->pregunta_id = "1";
        $respuestas->respuesta = "Inglaterra";
        $respuestas->is_correct = "0";
        $respuestas->save();
    
        $respuestas = new Respuesta();
        $respuestas->id = "5";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Belgica";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "6";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Colombia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "7";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Holanda";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "8";
        $respuestas->pregunta_id = "2";
        $respuestas->respuesta = "Croacia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "9";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "5 balones de oro";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "10";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "7 balones de oro";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "11";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "6 balones de oro";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "12";
        $respuestas->pregunta_id = "3";
        $respuestas->respuesta = "5 balones de oro";
        $respuestas->is_correct = "0";
        $respuestas->save();  
        
        $respuestas = new Respuesta();
        $respuestas->id = "13";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "20 goles";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "14";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "15 goles";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "15";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "18 goles";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "16";
        $respuestas->pregunta_id = "4";
        $respuestas->respuesta = "16 goles";
        $respuestas->is_correct = "1";
        $respuestas->save();
        
        $respuestas = new Respuesta();
        $respuestas->id = "17";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "Cristiano Ronaldo";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "18";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "Lionel Messi";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "19";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "Wayne Rooney";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "20";
        $respuestas->pregunta_id = "5";
        $respuestas->respuesta = "Ronaldo Nazario";
        $respuestas->is_correct = "0";
        $respuestas->save(); 
        
        $respuestas = new Respuesta();
        $respuestas->id = "21";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "Ubaldo Matildo Fillol";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "22";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "Esteban Andrada";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "23";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "José Luis Chilavert";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "24";
        $respuestas->pregunta_id = "6";
        $respuestas->respuesta = "Roberto Abondanzieri";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //Boxeo

        $respuestas = new Respuesta();
        $respuestas->id = "25";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "Nocaut Tecnico";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "26";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "Nocaut Total";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "27";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "Nocaut Final";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "28";
        $respuestas->pregunta_id = "7";
        $respuestas->respuesta = "Nocaut Tentativo";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "29";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "Tres";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "30";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "Cuatro";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "31";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "Cinco";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "32";
        $respuestas->pregunta_id = "8";
        $respuestas->respuesta = "Dos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "33";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "Peso Semipesado";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "34";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "Peso Superwelter";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "35";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "Peso Crucero";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "36";
        $respuestas->pregunta_id = "9";
        $respuestas->respuesta = "Peso Supermediano";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "37";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "120 lbs";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "38";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "200 lbs";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "39";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "No existe peso limite";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "40";
        $respuestas->pregunta_id = "10";
        $respuestas->respuesta = "250 lbs";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "41";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Mike Tyson";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "42";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Oscar De La Hoya";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "43";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Jake LaMotta";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "44";
        $respuestas->pregunta_id = "11";
        $respuestas->respuesta = "Joe Frazier";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "45";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Oscar Bonavena";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "46";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Carlos Monzón";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "47";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Jose Maria Gatica";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "48";
        $respuestas->pregunta_id = "12";
        $respuestas->respuesta = "Nicolino Locche";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //Tenis

        $respuestas = new Respuesta();
        $respuestas->id = "49";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Roger Federer";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "50";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Guillermo Vilas";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "51";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "Andre Agassi";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "52";
        $respuestas->pregunta_id = "13";
        $respuestas->respuesta = "John McEnroe";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "53";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Masters de Roma";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "54";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "U.S.Open";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "55";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Roland Garros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "56";
        $respuestas->pregunta_id = "14";
        $respuestas->respuesta = "Australian Open";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "57";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "Deuce";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "58";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "Breakpoint";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "59";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "Out";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "60";
        $respuestas->pregunta_id = "15";
        $respuestas->respuesta = "Gamepoint";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "61";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Australia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "62";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Francia";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "63";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Estados Unidos";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "64";
        $respuestas->pregunta_id = "16";
        $respuestas->respuesta = "Gran Bretaña";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "65";
        $respuestas->pregunta_id = "17";
        $respuestas->respuesta = "Dos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "66";
        $respuestas->pregunta_id = "17";
        $respuestas->respuesta = "Una";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "67";
        $respuestas->pregunta_id = "17";
        $respuestas->respuesta = "Tres";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "68";
        $respuestas->pregunta_id = "17";
        $respuestas->respuesta = "Cuatro";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "69";
        $respuestas->pregunta_id = "18";
        $respuestas->respuesta = "11 Horas";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "70";
        $respuestas->pregunta_id = "18";
        $respuestas->respuesta = "5 Horas";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "71";
        $respuestas->pregunta_id = "18";
        $respuestas->respuesta = "4 Horas";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "72";
        $respuestas->pregunta_id = "18";
        $respuestas->respuesta = "8 horas";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //Basketball

        $respuestas = new Respuesta();
        $respuestas->id = "73";
        $respuestas->pregunta_id = "19";
        $respuestas->respuesta = "24 segundos";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "74";
        $respuestas->pregunta_id = "19";
        $respuestas->respuesta = "20 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "75";
        $respuestas->pregunta_id = "19";
        $respuestas->respuesta = "26 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "76";
        $respuestas->pregunta_id = "19";
        $respuestas->respuesta = "22 segundos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "77";
        $respuestas->pregunta_id = "20";
        $respuestas->respuesta = "3.05 metros";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "78";
        $respuestas->pregunta_id = "20";
        $respuestas->respuesta = "3 metros exactos";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "79";
        $respuestas->pregunta_id = "20";
        $respuestas->respuesta = "4.10 metros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "80";
        $respuestas->pregunta_id = "20";
        $respuestas->respuesta = "2.80 metros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "81";
        $respuestas->pregunta_id = "21";
        $respuestas->respuesta = "Beijing 2008";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "82";
        $respuestas->pregunta_id = "21";
        $respuestas->respuesta = "Londres 2012";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "83";
        $respuestas->pregunta_id = "21";
        $respuestas->respuesta = "Atenas 2004";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "84";
        $respuestas->pregunta_id = "21";
        $respuestas->respuesta = "Sidney 2000";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "85";
        $respuestas->pregunta_id = "22";
        $respuestas->respuesta = "Los Angeles Lakers";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "86";
        $respuestas->pregunta_id = "22";
        $respuestas->respuesta = "Chicago Buls";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "87";
        $respuestas->pregunta_id = "22";
        $respuestas->respuesta = "Boston Celtics";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "88";
        $respuestas->pregunta_id = "22";
        $respuestas->respuesta = "San Antonio Spurs";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "89";
        $respuestas->pregunta_id = "23";
        $respuestas->respuesta = "Michael Jordan";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "90";
        $respuestas->pregunta_id = "23";
        $respuestas->respuesta = "Kareem Abdul-Jabbar";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "91";
        $respuestas->pregunta_id = "23";
        $respuestas->respuesta = "LeBron James";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "92";
        $respuestas->pregunta_id = "23";
        $respuestas->respuesta = "Magic Johnson";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "93";
        $respuestas->pregunta_id = "24";
        $respuestas->respuesta = "Escolta";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "94";
        $respuestas->pregunta_id = "24";
        $respuestas->respuesta = "Base";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "95";
        $respuestas->pregunta_id = "24";
        $respuestas->respuesta = "Pivot";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "96";
        $respuestas->pregunta_id = "24";
        $respuestas->respuesta = "Alero";
        $respuestas->is_correct = "0";
        $respuestas->save();
        
        //Hockey

        $respuestas = new Respuesta();
        $respuestas->id = "97";
        $respuestas->pregunta_id = "25";
        $respuestas->respuesta = "tiro libre o autopase";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "98";
        $respuestas->pregunta_id = "25";
        $respuestas->respuesta = "pasar o saque de arco";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "99";
        $respuestas->pregunta_id = "25";
        $respuestas->respuesta = "sacar del lateral o tiro libre";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "100";
        $respuestas->pregunta_id = "25";
        $respuestas->respuesta = "saque de arco o autopase";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "101";
        $respuestas->pregunta_id = "26";
        $respuestas->respuesta = "Futbol";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "102";
        $respuestas->pregunta_id = "26";
        $respuestas->respuesta = "Rugby";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "103";
        $respuestas->pregunta_id = "26";
        $respuestas->respuesta = "Basquet";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "104";
        $respuestas->pregunta_id = "26";
        $respuestas->respuesta = "Handball";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "105";
        $respuestas->pregunta_id = "27";
        $respuestas->respuesta = "Desde cualquier parte de la cancha";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "106";
        $respuestas->pregunta_id = "27";
        $respuestas->respuesta = "Despues de sacar un corner o tiro libre";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "107";
        $respuestas->pregunta_id = "27";
        $respuestas->respuesta = "Desde dentro del area";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "108";
        $respuestas->pregunta_id = "27";
        $respuestas->respuesta = "Desde los laterales";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "109";
        $respuestas->pregunta_id = "28";
        $respuestas->respuesta = "2 tiempos de 45 min.";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "110";
        $respuestas->pregunta_id = "28";
        $respuestas->respuesta = "4 tiempos de 10 min.";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "111";
        $respuestas->pregunta_id = "28";
        $respuestas->respuesta = "2 tiempos de 35 min.";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "112";
        $respuestas->pregunta_id = "28";
        $respuestas->respuesta = "S3 tiempos de 15 min.";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "113";
        $respuestas->pregunta_id = "29";
        $respuestas->respuesta = "9";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "114";
        $respuestas->pregunta_id = "29";
        $respuestas->respuesta = "11";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "115";
        $respuestas->pregunta_id = "29";
        $respuestas->respuesta = "8";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "116";
        $respuestas->pregunta_id = "29";
        $respuestas->respuesta = "6";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "117";
        $respuestas->pregunta_id = "30";
        $respuestas->respuesta = "Con la parte plana";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "118";
        $respuestas->pregunta_id = "30";
        $respuestas->respuesta = "Con los pies";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "119";
        $respuestas->pregunta_id = "30";
        $respuestas->respuesta = "Con el pecho";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "120";
        $respuestas->pregunta_id = "30";
        $respuestas->respuesta = "Con el mango";
        $respuestas->is_correct = "0";
        $respuestas->save();

        //JJOO

        $respuestas = new Respuesta();
        $respuestas->id = "121";
        $respuestas->pregunta_id = "31";
        $respuestas->respuesta = "Florete";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "122";
        $respuestas->pregunta_id = "31";
        $respuestas->respuesta = "Estilo Libre";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "123";
        $respuestas->pregunta_id = "31";
        $respuestas->respuesta = "Agresivo";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "124";
        $respuestas->pregunta_id = "31";
        $respuestas->respuesta = "Estoque";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "125";
        $respuestas->pregunta_id = "32";
        $respuestas->respuesta = "Michael Phelps";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "126";
        $respuestas->pregunta_id = "32";
        $respuestas->respuesta = "Usain Bolt";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "127";
        $respuestas->pregunta_id = "32";
        $respuestas->respuesta = "Carl Lewis";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "128";
        $respuestas->pregunta_id = "32";
        $respuestas->respuesta = "Mark Spitz";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "129";
        $respuestas->pregunta_id = "33";
        $respuestas->respuesta = "120 metros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "130";
        $respuestas->pregunta_id = "33";
        $respuestas->respuesta = "100 metros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "131";
        $respuestas->pregunta_id = "33";
        $respuestas->respuesta = "50 metros";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "132";
        $respuestas->pregunta_id = "33";
        $respuestas->respuesta = "80 metros";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "133";
        $respuestas->pregunta_id = "34";
        $respuestas->respuesta = "Drop";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "134";
        $respuestas->pregunta_id = "34";
        $respuestas->respuesta = "Try";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "135";
        $respuestas->pregunta_id = "34";
        $respuestas->respuesta = "Scrum";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "136";
        $respuestas->pregunta_id = "34";
        $respuestas->respuesta = " Knock-on";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "137";
        $respuestas->pregunta_id = "35";
        $respuestas->respuesta = "9";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "138";
        $respuestas->pregunta_id = "35";
        $respuestas->respuesta = "8";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "139";
        $respuestas->pregunta_id = "35";
        $respuestas->respuesta = "6";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "140";
        $respuestas->pregunta_id = "35";
        $respuestas->respuesta = "7";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "141";
        $respuestas->pregunta_id = "36";
        $respuestas->respuesta = "Libero";
        $respuestas->is_correct = "1";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "142";
        $respuestas->pregunta_id = "36";
        $respuestas->respuesta = "Base";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "143";
        $respuestas->pregunta_id = "36";
        $respuestas->respuesta = "Zaguero";
        $respuestas->is_correct = "0";
        $respuestas->save();

        $respuestas = new Respuesta();
        $respuestas->id = "144";
        $respuestas->pregunta_id = "36";
        $respuestas->respuesta = "Rematador";
        $respuestas->is_correct = "0";
        $respuestas->save();
    }
}
