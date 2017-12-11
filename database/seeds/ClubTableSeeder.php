<?php

use Illuminate\Database\Seeder;
use App\club;

class ClubTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        club::truncate();
        
        club::create([
            'name' => "Brøndby IF",
            'points' => 42,
            'matchesPlayed' => 18,
            'wins' => 13,
            'losses' => 2,
            'draws' => 3,
            'goalsFor' => 40,
            'goalsAgainst' => 16,
            'iconPath' => "bif-icon.png"
        ]);

        club::create([
            'name' => "FC Midtjylland",
            'points' => 41,
            'matchesPlayed' => 18,
            'wins' => 13,
            'losses' => 3,
            'draws' => 2,
            'goalsFor' => 44,
            'goalsAgainst' => 23,
            'iconPath' => "fcm-icon.png"
        ]);

        club::create([
            'name' => "FC Nordsjælland",
            'points' => 36,
            'matchesPlayed' => 18,
            'wins' => 11,
            'draws' => 3,
            'losses' => 4,            
            'goalsFor' => 48,
            'goalsAgainst' => 32,
            'iconPath' => "fc-nordsjaelland-icon.png"
        ]);
        
        club::create([
            'name' => "Hobro",
            'points' => 27,
            'matchesPlayed' => 18,
            'wins' => 7,
            'draws' => 6,
            'losses' => 5,            
            'goalsFor' => 25,
            'goalsAgainst' => 22,
            'iconPath' => "nik-icon.png"
        ]);

        club::create([
            'name' => "AC Horsens",
            'points' => 25,
            'matchesPlayed' => 19,
            'wins' => 6,
            'draws' => 9,
            'losses' => 4,            
            'goalsFor' => 25,
            'goalsAgainst' => 27,
            'iconPath' => "ac-horsens-icon.png"
        ]);

        club::create([
            'name' => "FC København",
            'points' => 25,
            'matchesPlayed' => 18,
            'wins' => 7,
            'draws' => 4,
            'losses' => 7,            
            'goalsFor' => 32,
            'goalsAgainst' => 24,
            'iconPath' => "fck-icon.png"
        ]);

        club::create([
            'name' => "Odense Boldklub",
            'points' => 25,
            'matchesPlayed' => 18,
            'wins' => 6,
            'draws' => 7,
            'losses' => 5,            
            'goalsFor' => 19,
            'goalsAgainst' => 17,
            'iconPath' => "ob-icon.png"
        ]);


        club::create([
            'name' => "AaB",
            'points' => 25,
            'matchesPlayed' => 18,
            'wins' => 6,
            'draws' => 7,
            'losses' => 5,            
            'goalsFor' => 17,
            'goalsAgainst' => 20,
            'iconPath' => "aab-icon.png"
        ]);

        club::create([
            'name' => "SønderjyskE",
            'points' => 21,
            'matchesPlayed' => 19,
            'wins' => 5,
            'draws' => 6,
            'losses' => 8,            
            'goalsFor' => 30,
            'goalsAgainst' => 28,
            'iconPath' => "sje-icon.png"
        ]);

        club::create([
            'name' => "Lyngby FC",
            'points' => 18,
            'matchesPlayed' => 18,
            'wins' => 4,
            'draws' => 6,
            'losses' => 8,            
            'goalsFor' => 26,
            'goalsAgainst' => 39,
            'iconPath' => "lynby-icon.png"
        ]);

        club::create([
            'name' => "AGF",
            'points' => 18,
            'matchesPlayed' => 18,
            'wins' => 5,
            'draws' => 3,
            'losses' => 10,            
            'goalsFor' => 18,
            'goalsAgainst' => 32,
            'iconPath' => "agf-icon.png"
        ]);

        club::create([
            'name' => "Silkeborg",
            'points' => 27,
            'matchesPlayed' => 18,
            'wins' => 5,
            'draws' => 2,
            'losses' => 11,            
            'goalsFor' => 21,
            'goalsAgainst' => 36,
            'iconPath' => "silkeborg-icon.png"
        ]);

        club::create([
            'name' => "Randers FC",
            'points' => 14,
            'matchesPlayed' => 18,
            'wins' => 3,
            'draws' => 5,
            'losses' => 10,            
            'goalsFor' => 28,
            'goalsAgainst' => 39,
            'iconPath' => "randers-fc-icon.png"
        ]);

        club::create([
            'name' => "FC Helsingør",
            'points' => 13,
            'matchesPlayed' => 18,
            'wins' => 4,
            'draws' => 1,
            'losses' => 13,            
            'goalsFor' => 13,
            'goalsAgainst' => 31,
            'iconPath' => "fc-helsingoer-icon.png"
        ]);  
    }
}
