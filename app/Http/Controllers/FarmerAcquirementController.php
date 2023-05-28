<?php

namespace App\Http\Controllers;

use App\Models\Acquirement;
use App\Models\Farmer;
use App\Models\RstSettlement;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FarmerAcquirementController extends Controller
{
    public function records($FAMER_ID)
    {
        $farmer = Farmer::find($FAMER_ID);
        // return $farmer;
        return view('backend.rst_settlements.records', compact('farmer'));
    }

    public function recordsStore(Request $request)
    {
        $acquirementsIds = explode(',', $request->acquirement_ids);
        $acquirements = Acquirement::find($acquirementsIds);
        $transaction_id = Carbon::now()->timestamp;

        $farmerName = $acquirements[0]->farmer->name . ' (' . $acquirements[0]->farmer->kisan_id . ') acquirements with RST (';
        foreach ($acquirements as $key => $acquirement) {
            // Updating Individual acquirement status: cleared
            $acquirement->is_cleared = 1;
            $acquirement->save();
            $farmerName .= $acquirement->rst . ',';

            // Maintaining History
            $rst_sett = RstSettlement::create([
                'transaction_id' => $transaction_id,
                'user_id' => auth()->id(),
                'farmer_id' => $acquirement->farmer->id,
                'acquirement_id' => $acquirement->id,
                'weight' => $acquirement->weight,
                'percentage' => $request->weight_percentage,
                // After Deduction of % Weight
                'calculated_weight' => (($acquirement->weight * (100 - $request->weight_percentage)) / 100),
                // How much wait is deducted after % pertage of calculation
                'deducted_weight' => (($acquirement->weight * ($request->weight_percentage)) / 100),
            ]);
        }
        $farmerName .= ") has been updated";

        notify()->success($farmerName);

        return redirect()->route('farmers.show', $acquirements[0]->farmer->id);
    }
}
