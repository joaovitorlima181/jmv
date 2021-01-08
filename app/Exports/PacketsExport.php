<?php

namespace App\Exports;

use App\Models\PacketHistory as ModelsPacketHistory;
use App\PacketHistory;
use Maatwebsite\Excel\Concerns\FromCollection;

class PacketsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ModelsPacketHistory::all();
    }
}
