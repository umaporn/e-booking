<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call( [
                         BannerFieldsSeeder::class,
                         UsersFieldsSeeder::class,
                         BookingHistoryFieldsSeeder::class,
                         CartFieldsSeeder::class,
                         FAQFieldsSeeder::class,
                         GalleryFieldsSeeder::class,
                         PaymentGatewayFieldsSeeder::class,
                         HowToBookingFieldsSeeder::class,
                         BuildingLayoutFieldsSeeder::class,
                         FloorLayoutFieldsSeeder::class,
                         UnitLayoutFieldsSeeder::class,
                         ProjectStatusFieldsSeeder::class,
                         ProjectTypeFieldsSeeder::class,
                         PromotionFieldsSeeder::class,
                         UnitFieldsSeeder::class,
                         UnitLabelFieldsSeeder::class,
                         UnitLabelFieldsSeeder::class,
                         SaleManagementFieldsSeeder::class,
                         ProjectPreviewFieldsSeeder::class,
                         ProjectLocationFieldsSeeder::class,
                         RelationFieldsSeeder::class,
                         ProjectManagementFieldsSeeder::class,
                     ] );

    }
}
