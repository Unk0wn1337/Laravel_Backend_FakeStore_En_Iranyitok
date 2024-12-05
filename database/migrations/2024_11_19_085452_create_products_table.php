<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Create the products table
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 8, 2);
            $table->text('description');
            $table->string('photo');
            $table->boolean('availability')->default(true);
            $table->timestamps();
        });

        // Insert seed data directly into the products table
        DB::table('products')->insert([
            [
                'name' => 'Objektum',
                'price' => 69.00,
                'description' => 'A vízbú veszi ki a zoxigént',
                'photo' => 'objektum.webp',
                'availability' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Árvízűrő tükörfúrógép',
                'price' => 420.00,
                'description' => '**Bemutatjuk az ÁRÍZTŰRŐ TÜKÖRFÚRÓGÉPET – a FORRADALMI SZERSZÁMOT, ami a DUNA MÉLYÉN is KIFÉNYESÍTI az életét!** 🌊🔧✨  

Fárasztó, hogy a tükörfúrás közben mindig jön az árvíz? Elege van abból, hogy az átlagos fúrógépek feladják a küzdelmet, amint megérzik az első vízcseppet? Akkor Önnek az *ÁRÍZTŰRŐ TÜKÖRFÚRÓGÉP* kell!  

✅ **TELJESEN VÍZÁLLÓ!** Működik esőben, hóban, és még a szomszéd kertitavában is!  
✅ **TÜKÖRPONTOS PRECIZITÁS!** Nem csak lyukat fúr, hanem ragyogó felületet is hagy maga után!  
✅ **FÚR, VÁG, SIMÍT!** Mindezt egyetlen gombnyomásra!  

És most jön a BÓNUSZ! Ha MOST megrendeli, AJÁNDÉKBA adunk egy **vízlepergető védőszemüveget**, hogy Ön is olyan száraz maradjon, mint a humorunk!  

Ne várjon! Az árvíz közeleg, de Ön készen állhat az *ÁRÍZTŰRŐ TÜKÖRFÚRÓGÉPPEL*! Hívjon MOST – és kezdjen el fúrni, mint egy PROFI! ⏳📞',
                'photo' => 'attfg.png',
                'availability' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
