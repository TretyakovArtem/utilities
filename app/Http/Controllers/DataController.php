<?php
/**
 * Created by PhpStorm.
 * User: artem
 * Date: 06.08.19
 * Time: 10:01
 */

namespace App\Http\Controllers;

use App\Service\Data as DataService;

class DataController extends Controller
{
    // метод для получения данных
    public function index(DataService $dataService)
    {
        $dataService->createMessages();
    }
}
