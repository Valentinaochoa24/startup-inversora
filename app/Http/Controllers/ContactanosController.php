<?php

namespace App\Http\Controllers;

use App\Models\contactanos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use PHPMailer\PHPMailer\PHPMailer;

class ContactanosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contactanos.contactanos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validar los datos del formulario
            $request->validate([
                'fname' => 'required|string|max:255',
                'lname' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'subject' => 'required|numeric',
                'message' => 'required|string',
            ]);

            // Crear una nueva instancia de Contactanos
            $contactanos = new Contactanos();
            $contactanos->nombre = $request->input('fname');
            $contactanos->apellido = $request->input('lname');
            $contactanos->correo = $request->input('email');
            $contactanos->telefono = $request->input('subject');
            $contactanos->mensaje = $request->input('message');

            if($contactanos->save()){
                $html = View::make('mailContacto', [
                    'name' => $request->input('fname'),
                    // Otros datos que quieras pasar a la vista
                ])->render();
                // Envía el correo electrónico de confirmación aquí
                try {
                    $mail = new PHPMailer(true);
                    // Configura la conexión SMTP
                    $mail->isSMTP();
                    $mail->Host = 'mail.inverdoradasas.com';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'servicioalcliente@inverdoradasas.com';
                    $mail->Password = 'Chispitas2404*';
                    $mail->SMTPSecure = 'ssl';
                    $mail->Port = 465;
            
                    $mail->setFrom('servicioalcliente@inverdoradasas.com', 'Servicio al cliente');
                    $mail->addAddress($request->input('email'), $request->input('lname'));
            
                    $mail->isHTML(true);
                    $mail->Subject = 'Gracias por contactarnos';
                    $mail->Body    = $html;
            
                    $mail->send();
                } catch (\PHPMailer\PHPMailer\Exception $e) {
                    error_log('Error al enviar el correo: ' . $e->getMessage());
                    return redirect()->route('ingresar')->with('error', 'El correo electrónico ya ha sido registrado anteriormente.');
                }
            }

            // Redireccionar con un mensaje de éxito
            return redirect()->route('contactanos')->with('success', '¡Tu mensaje ha sido enviado con éxito!');
        } catch (\Exception $e) {
            error_log('Fatal error: ' . $e->getMessage());
            return redirect()->route('contactanos')->with('error', '¡Vaya!, ocurrió un problema y no se pudo almacenar la información, revisa los datos');
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(contactanos $contactanos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contactanos $contactanos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contactanos $contactanos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contactanos $contactanos)
    {
        //
    }
    
}
