<?php

namespace App\Http\Controllers;

use App\Models\Utilidades;
use Illuminate\Http\Request;

class UtilidadesController extends Controller
{
    public function index()
    {
        $utilidadesUsers = Utilidades::all();

        // Obtener las propuestas únicas presentes en los datos de utilidades
        $propuestas = $utilidadesUsers->pluck('id_propuesta')->unique();

        // Obtener las fechas únicas presentes en los datos de utilidades
        $fechas = $utilidadesUsers->pluck('created_at')->map(function ($fecha) {
            return \Carbon\Carbon::parse($fecha)->toDateString();
        })->unique();

        $datasets = [];
        $datasetsPropuestas = [];
        $labels = [];

        foreach ($utilidadesUsers as $utilidad) {
            $fecha = \Carbon\Carbon::parse($utilidad->created_at)->format('M. d');

            // Agregar la fecha a las etiquetas si aún no está presente
            if (!in_array($fecha, $labels)) {
                $labels[] = $fecha;
            }
            // Inicializar el dataset para el usuario actual
            $dataUsuario = [
                'label' => 'Usuario ' . $utilidadesUsers[0]->id_user, // Nombre del dataUsuario
                'data' => [], // Datos del dataUsuario
                'borderColor' => 'rgba(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ', 0.8)', // Color de borde aleatorio
                'fill' => false,
                'tension' => 0.1
            ];
        
            // Calcular el monto total para cada fecha
            foreach ($fechas as $fecha) {
                $monto = Utilidades::where('id_user', $utilidad->id_user)
                    ->whereDate('created_at', $fecha)
                    ->sum('monto_total');
        
                $dataUsuario['data'][] = $monto;
                
            }
        
            $datasets[] = $dataUsuario;
        }
        // Iterar sobre cada propuesta para calcular los montos totales por fecha
        foreach ($propuestas as $propuesta) {
            // Inicializar el dataset para la propuesta actual
            $dataset = [
                'label' => 'Propuesta ' . $propuesta, // Nombre del dataset
                'data' => [], // Datos del dataset
                'borderColor' => 'rgba(' . rand(0, 255) . ', ' . rand(0, 255) . ', ' . rand(0, 255) . ', 0.8)', // Color de borde aleatorio
                'fill' => false,
                'tension' => 0.1
            ];

            // Calcular el monto total para cada fecha
            foreach ($fechas as $fecha) {
                $monto = Utilidades::where('id_propuesta', $propuesta)
                    ->whereDate('created_at', $fecha)
                    ->sum('monto_total');

                $dataset['data'][] = $monto;
            
            }

            $datasetsPropuestas[] = $dataset;
        }

        return view('administracion.utilidades')->with([
            'utilidadesUsers' => $utilidadesUsers,
            'labels' => $labels,
            'datasets' => $datasets,
            'datasetsPropuestas' => $datasetsPropuestas, // Pasar los datasets de las propuestas a la vista
        ]);
    }
    public function utilidadesForIdUser($id)
    {
        return Utilidades::where('id_user', $id)->get();
    }
}
