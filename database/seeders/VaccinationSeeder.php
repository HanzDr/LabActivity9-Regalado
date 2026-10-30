<?php

namespace Database\Seeders;

use App\Models\Vaccination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rows = [
            ['patient_name' => 'Baby Juan Dela Cruz', 'purok' => 'Purok 3', 'vaccine' => 'BCG',
             'dose' => '1st dose', 'scheduled_at' => '2026-11-03', 'status' => 'Scheduled'],
            ['patient_name' => 'Lola Pacing Reyes', 'purok' => 'Purok 1', 'vaccine' => 'Anti-Flu',
             'dose' => 'Annual', 'scheduled_at' => '2026-10-20', 'status' => 'Overdue'],
            ['patient_name' => 'Mia Santos', 'purok' => 'Purok 4', 'vaccine' => 'Pentavalent',
             'dose' => '2nd dose', 'scheduled_at' => '2026-11-08', 'status' => 'Scheduled'],
            ['patient_name' => 'Noah Garcia', 'purok' => 'Purok 2', 'vaccine' => 'OPV',
             'dose' => 'Booster', 'scheduled_at' => '2026-11-15', 'status' => 'Scheduled'],
            ['patient_name' => 'Ana Reyes', 'purok' => 'Purok 5', 'vaccine' => 'MMR',
             'dose' => '1st dose', 'scheduled_at' => '2026-10-12', 'status' => 'Done'],
            ['patient_name' => 'Derren Hanz O. Regalado', 'purok' => 'Purok 2', 'vaccine' => 'COVID-19',
             'dose' => 'Booster', 'scheduled_at' => '2026-12-03', 'status' => 'Done'],
               ['patient_name' => 'Benjamin Asjali', 'purok' => 'Purok 12', 'vaccine' => 'COVID-19',
             'dose' => 'Booster', 'scheduled_at' => '2026-05-23', 'status' => 'Done'],
        ];

        foreach ($rows as $row) {
            Vaccination::updateOrCreate(
                [
                    'patient_name' => $row['patient_name'],
                    'vaccine' => $row['vaccine'],
                    'dose' => $row['dose'],
                ],
                $row,
            );
        }
    }
}
