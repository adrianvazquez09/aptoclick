<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\catalogoPrestamoInfonavit;

class prestamosInfonavitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $p1= new catalogoPrestamoInfonavit(); $p1->rango = 2750; $p1->prestamo = 158000; $p1->save();
        $p2= new catalogoPrestamoInfonavit(); $p2->rango = 3600; $p2->prestamo = 190000; $p2->save();
        $p3= new catalogoPrestamoInfonavit(); $p3->rango = 4000; $p3->prestamo = 199000; $p3->save();
        $p4= new catalogoPrestamoInfonavit(); $p4->rango = 5000; $p4->prestamo = 348000; $p4->save();
        $p5= new catalogoPrestamoInfonavit(); $p5->rango = 6000; $p5->prestamo = 373000; $p5->save();
        $p6= new catalogoPrestamoInfonavit(); $p6->rango = 7000; $p6->prestamo = 406000; $p6->save();
        $p7= new catalogoPrestamoInfonavit(); $p7->rango = 8000; $p7->prestamo = 419000; $p7->save();
        $p8= new catalogoPrestamoInfonavit(); $p8->rango = 9000; $p8->prestamo = 436000; $p8->save();
        $p9= new catalogoPrestamoInfonavit(); $p9->rango = 10000; $p9->prestamo = 457000; $p9->save();
        $p10= new catalogoPrestamoInfonavit(); $p10->rango = 11000; $p10->prestamo = 474000; $p10->save();
        $p11= new catalogoPrestamoInfonavit(); $p11->rango = 12000; $p11->prestamo = 485000; $p11->save();
        $p12= new catalogoPrestamoInfonavit(); $p12->rango = 13000; $p12->prestamo = 498000; $p12->save();
        $p13= new catalogoPrestamoInfonavit(); $p13->rango = 14000; $p13->prestamo = 512000; $p13->save();
        $p14= new catalogoPrestamoInfonavit(); $p14->rango = 15000; $p14->prestamo = 520000; $p14->save();
        $p15= new catalogoPrestamoInfonavit(); $p15->rango = 16000; $p15->prestamo = 531000; $p15->save();
        $p16= new catalogoPrestamoInfonavit(); $p16->rango = 17000; $p16->prestamo = 539000; $p16->save();
        $p17= new catalogoPrestamoInfonavit(); $p17->rango = 18000; $p17->prestamo = 572000; $p17->save();
        $p18= new catalogoPrestamoInfonavit(); $p18->rango = 19000; $p18->prestamo = 607000; $p18->save();
        $p19= new catalogoPrestamoInfonavit(); $p19->rango = 20000; $p19->prestamo = 643000; $p19->save();
        $p20= new catalogoPrestamoInfonavit(); $p20->rango = 25000; $p20->prestamo = 798000; $p20->save();
        $p21= new catalogoPrestamoInfonavit(); $p21->rango = 30000; $p21->prestamo = 964000; $p21->save();
        $p22= new catalogoPrestamoInfonavit(); $p22->rango = 35000; $p22->prestamo = 1122000; $p22->save();
        $p23= new catalogoPrestamoInfonavit(); $p23->rango = 40000; $p23->prestamo = 1277000; $p23->save();
        $p24= new catalogoPrestamoInfonavit(); $p24->rango = 45000; $p24->prestamo = 1444000; $p24->save();
        $p25= new catalogoPrestamoInfonavit(); $p25->rango = 50000; $p25->prestamo = 1600000; $p25->save();
        $p26= new catalogoPrestamoInfonavit(); $p26->rango = 60000; $p26->prestamo = 1904000; $p26->save();
    }
}
