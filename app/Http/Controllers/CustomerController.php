<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = [
            'john doe',
            'jone doe',
            'bob the builder',
            'Anothername'
        ];
        return view('internals.customers', [
            //'customers' dikirim trus diterima sebagai foreach('$customers' as xx$customersxx) di halaman customers.blade
            'customers' => $customers,
        ]);
    }
}
