<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'    => ['required', 'string', 'min:2', 'max:255'],
            'email'   => ['required', 'email:rfc,dns', 'max:255'],
            'service' => ['required', 'string', 'in:web-gelistirme,mobil-uygulama,ui-ux-tasarim,danismanlik'],
            'message' => ['required', 'string', 'min:10', 'max:1000'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'    => 'Lütfen adınızı ve soyadınızı giriniz.',
            'name.min'         => 'Adınız en az 2 karakterden olmalıdır.',
            'email.required'   => 'E-posta adresini girmek zorunludur.',
            'email.email'      => 'Lütfen geçerli bir e-posta adresi giriniz.',
            'service.required' => 'Lütfen sunulan hizmetlerimizden birini seçiniz.',
            'service.in'       => 'Seçtiğiniz hizmet listede bulunmamaktadır.',
            'message.required' => 'Lütfen projeniz veya talebiniz hakkında detay yazın.',
            'message.min'      => 'Açıklama alanı en az 10 karakter olmalıdır.',
        ];
    }
}