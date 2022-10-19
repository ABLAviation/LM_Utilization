<?php

namespace App\Http\Import;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DataImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            try {
                unset($row[129]);
                $data = $row->each(function ($item, $key) {
                    return [$key => $item];
                })->toArray();
                \DB::table('LM_UTILIZATION_New')->insert($data);
            } catch (\Exception $e) {
//                dump($e->getMessage());
//                dd($row);
            }
        }
    }

    public function headingRow()
    {
        return 1;
    }
}