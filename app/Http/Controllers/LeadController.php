<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLeadRequest;
use App\Models\Lead;
use Illuminate\Http\JsonResponse;

class LeadController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function store(StoreLeadRequest $request): JsonResponse
    {
        try {
            $lead = Lead::create($request->validated());

            return response()->json([
                'success' => true,
                'message' => 'Talebiniz başarıyla alındı! Test kaydınız veritabanına başarıyla kaydedilmiştir.',
                'data'    => $lead
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Sunucu hatası: Kayıt oluşturulamadı. Lütfen tekrar deneyin.'
            ], 500);
        }
    }
}