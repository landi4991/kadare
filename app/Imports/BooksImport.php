<?php

namespace App\Imports;

use App\Models\Books;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithCustomCsvSettings;
use Maatwebsite\Excel\Concerns\WithChunkReading;

use Maatwebsite\Excel\Concerns\WithLimit;

class BooksImport implements ToModel,WithLimit
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    

 public function limit(): int
    {
        return 2000; // only take 100 rows
    }
    public function model(array $row)
    {
        return new Books([
            'book_title'     => $row[0],
            'author_1'    => $row[1],
            'author_2'    => $row[2],
            'description'    => $row[3],
            'publication_year'  => $row[4],



            //
        ]);
    }
}
