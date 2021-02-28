<?php

namespace App\Repositories;

use App\Models\Exco;
use App\Interfaces\ExcoInterface;
use App\Http\Requests\ExcoRequest;
use App\Http\Requests\ExcoUpdateRequest;
use Illuminate\Support\Facades\DB;

class ExcoRepository implements ExcoInterface
{
    public function getExcos()
    {
        return Exco::orderBy('created_at', 'desc')->with('department')->get();
    }
    public function storeExcos(ExcoRequest $request)
    {
        DB::beginTransaction();
        try {
            $exco = Exco::create([
                'exco_name' => trim($request['exco_name']),
                'exco_email' => trim($request['exco_mail']),
                'position' => $request['exco_position'],
                'bosses' => $request['exco_leadership'],
                'twitter_link' => trim($request['exco_twitter']),
                'instagram_link' => trim($request['exco_instagram']),
                'exco_image' => $request['exco_image'],
                'department_id' => trim($request['dept_college']),
            ]);
            DB::commit();
            // dd($exco);
            return $exco;
        } catch (\Exception $e) {
            // dd($e->getMessage());
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function getExcoById()
    {
        return 1;
    }

    public function updateExco(ExcoUpdateRequest $request, $excoId)
    {
        $exco = Exco::findOrFail($excoId);
        DB::beginTransaction();
        try {
            $exco->update([
                'exco_name' => trim($request['exco_name']),
                'exco_level' => trim($request['exco_level']),
                'position' => trim($request['position']),
                'bosses' => $request['boss_status'],
                'twitter_link' => trim($request['twitter_link']),
                'instagram_link' => trim($request['instagram_link']),
                'exco_image' => $request['exco_image'],
                'department_id' => trim($request['department_id']),
            ]);
            DB::commit();
            return $exco;
        } catch (\Exception $e) {
            DB::rollback();
            return $e->getMessage();
        }
    }

    public function deleteExco($excoId)
    {
        return 0;
    }
}
