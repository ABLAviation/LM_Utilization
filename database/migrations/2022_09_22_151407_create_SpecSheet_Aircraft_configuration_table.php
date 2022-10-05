<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpecSheetAircraftConfigurationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SpecSheet_Aircraft_configuration', function (Blueprint $table) {
            $table->increments('ID_SpecSheet_Aircraft_configuration');
            $table->integer('MSN');
            $table->integer('Source_ID');
            $table->integer('Operator_ID')->nullable();
            $table->string('ACType', 250)->nullable();
            $table->string('Cabin_Configuration', 250)->nullable();
            $table->integer('Total_Economy_Seats')->nullable();
            $table->string('Economy_Seat_Pitch', 250)->nullable();
            $table->string('Economy_Seat_Manufacturer', 250)->nullable();
            $table->integer('Total_Premium_Economy_Seats')->nullable();
            $table->string('Premium_Economy_Seat_Pitch', 250)->nullable();
            $table->string('Premium_Economy_Seat_Manufacturer', 250)->nullable();
            $table->integer('Total_Business_Class_Seats')->nullable();
            $table->string('Business_Class_Seat_Pitch', 250)->nullable();
            $table->string('Business_Class_Seat_Manufacturer', 250)->nullable();
            $table->integer('Total_FirstClass_Seats')->nullable();
            $table->string('FirstClass_Seat_Pitch', 250)->nullable();
            $table->string('FirstClass_Seat_Manufacturer', 250)->nullable();
            $table->integer('Total_Passenger_Seats_Current')->nullable();
            $table->integer('Total_Passenger_Seats_Redelivery')->nullable();
            $table->string('Cabin_Crew_RestArea', 250)->nullable();
            $table->string('Lie_Flat_Seats', 250)->nullable();
            $table->string('Captain_Seat_Manufacturer', 250)->nullable();
            $table->integer('Cockpit_Seats')->nullable();
            $table->string('Flight_Deck_Observers', 250)->nullable();
            $table->string('Cockpit_Configuration', 250)->nullable();
            $table->string('Cockpit_Seat', 250)->nullable();
            $table->string('Cockpit_Security_Door', 250)->nullable();
            $table->string('Cockpit_Door_Surveillance_System', 250)->nullable();
            $table->string('Flight_Deck_Entry_VSS', 250)->nullable();
            $table->integer('Total_Cabin_Attendant_Seats')->nullable();
            $table->string('Location_Cabin_Attendant_Seats', 250)->nullable();
            $table->string('Cabin_Attendant_Seats_Manufacturer', 250)->nullable();
            $table->integer('Total_Galleys')->nullable();
            $table->string('Galley_Manufacturer', 250)->nullable();
            $table->string('Location_Galley', 250)->nullable();
            $table->string('Catering_Standard', 250)->nullable();
            $table->integer('Total_Lavatories')->nullable();
            $table->string('Type_Lavatories', 250)->nullable();
            $table->string('Location_Lavatories', 250)->nullable();
            $table->string('Exterior_Placards_Markings', 250)->nullable();
            $table->string('Cabin_Placards_Markings', 250)->nullable();
            $table->string('Predictive_Windshear', 250)->nullable();
            $table->string('IFE_Airshow', 250)->nullable();
            $table->string('Winglets_Sharklets', 250)->nullable();
            $table->string('ETOPS_Provision', 250)->nullable();
            $table->string('ETOPS_Configuration', 250)->nullable();
            $table->string('VHF_Configuration', 250)->nullable();
            $table->string('ADIRS', 250)->nullable();
            $table->string('Nitrogen_Generation_System', 250)->nullable();
            $table->string('Khz_Channel_Spacing', 250)->nullable();
            $table->string('HF_Configuration', 250)->nullable();
            $table->string('FANS_Capability', 250)->nullable();
            $table->string('Area_Navigation', 250)->nullable();
            $table->string('RNAV_RNP', 250)->nullable();
            $table->string('TCAS_71_Capable', 250)->nullable();
            $table->string('SATCOM', 250)->nullable();
            $table->string('ACARS', 250)->nullable();
            $table->string('ELT', 250)->nullable();
            $table->string('FMS_Configuration', 250)->nullable();
            $table->string('GPS_Configuration', 250)->nullable();
            $table->string('Weather_Radar', 250)->nullable();
            $table->string('Instrument_Landing_Capability', 250)->nullable();
            $table->string('EGPWS', 250)->nullable();
            $table->string('ADF_Configuration', 250)->nullable();
            $table->string('EFIS', 250)->nullable();
            $table->string('HeadUp_Display_System', 250)->nullable();
            $table->string('RVSM', 250)->nullable();
            $table->string('QAR_installation', 250)->nullable();
            $table->string('ADS_B', 250)->nullable();
            $table->string('FuelTank_Inerting_System', 250)->nullable();
            $table->string('Auxilliary_Tanks', 250)->nullable();
            $table->string('VOR_ILS', 250)->nullable();
            $table->string('ATC', 250)->nullable();
            $table->string('MNPS', 250)->nullable();
            $table->string('WifiStreaming', 250)->nullable();
            $table->string('MPC_Modification', 250)->nullable();
            $table->string('Enhanced_ModeS', 250)->nullable();
            $table->string('Airstairs', 250)->nullable();
            $table->string('C_R_Validity', 250)->nullable();
            $table->string('C_A_Validity', 250)->nullable();
            $table->string('Type_Certificate', 250)->nullable();
            $table->string('Certification_Base', 250)->nullable();
            $table->string('Swing_Compass', 250)->nullable();
            $table->string('Radio_Permit_Validity', 250)->nullable();
            $table->string('Escape_Slide_AFTDoor', 250)->nullable();
            $table->string('Escape_Slide_FWDDoor', 250)->nullable();
            $table->string('Forward_cargo_capacity_Kg', 250)->nullable();
            $table->string('Forward_cargo_capacity_lbs', 250)->nullable();
            $table->string('Forward_cargo_capacity_m3', 250)->nullable();
            $table->string('Forward_cargo_capacity_ft3', 250)->nullable();
            $table->string('Aft_cargo_capacity_Kg', 250)->nullable();
            $table->string('Aft_cargo_capacity_lbs', 250)->nullable();
            $table->string('Aft_cargo_capacity_m3', 250)->nullable();
            $table->string('Aft_cargo_capacity_ft3', 250)->nullable();
            $table->string('Bulk_cargo_capacity_Kg', 250)->nullable();
            $table->string('Bulk_cargo_capacity_lbs', 250)->nullable();
            $table->string('Bulk_cargo_capacity_m3', 250)->nullable();
            $table->string('Bulk_cargo_capacity_ft3', 250)->nullable();
            $table->string('Cargo_Compartment', 250)->nullable();
            $table->string('Cargo_loading_System', 250)->nullable();
            $table->string('Bulk_Cargo_Door', 250)->nullable();
            $table->string('Approach_Category', 250)->nullable();
            $table->string('Tailwind_Certification', 250)->nullable();
            $table->string('Operation_Runways', 250)->nullable();
            $table->string('Ownership_Placards', 250)->nullable();
            $table->string('Noise_Category', 250)->nullable();
            $table->string('COMMENTS', 2500)->nullable();
            $table->string('CreatedBy', 20);
            $table->dateTime('CreationDate');
            $table->string('ModifiedBy', 20);
            $table->dateTime('ModificationDate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('SpecSheet_Aircraft_configuration');
    }
}
