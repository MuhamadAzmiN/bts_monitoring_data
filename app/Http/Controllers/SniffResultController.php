<?php
namespace App\Http\Controllers;

class SniffResultController extends Controller
{
    public function index()
    {

        $rows = [
            ['510011134589830', '20-07-2025 22:47', 'out', 'Starbuck Promo Hari Ini Diskon 30%'],
            ['510092029491462', '21-07-2025 07:38', 'out', 'Segera isi ulang uplsa anda!'],
            ['510092029491462', '21-07-2025 07:40', 'in', 'Jangan berikan Kode OTP ini'],
            ['510092029491462', '21-07-2025 07:40', 'in', 'Dikon 50% dari Tokopedia'],
        ];

        return view('sniff_result', compact('rows'));
    }
}
?>