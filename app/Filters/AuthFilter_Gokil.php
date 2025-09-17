<?php

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter_Gokil implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $session = session();

        // kalau belum login
        if (!$session->get('logged_in')) {
            return redirect()->to('/');
        }

        // kalau filter punya argument role khusus
        // if ($arguments && isset($arguments[0])) {
        //     $requiredRole = $arguments[0];

        //     if ($session->get('role') !== $requiredRole) {
        //         return redirect()->to('/'); // atau forbidden page
        //     }
        // }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // opsional
    }
}
