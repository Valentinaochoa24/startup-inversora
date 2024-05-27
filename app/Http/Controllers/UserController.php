<?php

namespace App\Http\Controllers;

use App\Models\empresa;
use App\Models\eventos;
use App\Models\Testimonios;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }
    public function showRegister()
    {
        $testimonios = Testimonios::all();
        $eventos = eventos::where('tipo', 1)->get();
        return  view('administracion.formRegistro')->with([
            'testimonios' => $testimonios,
            'eventosVirtuales' => $eventos,
        ]);
    }
    public function register(Request $request)
    {
        try {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|string|email|unique:users,correo',
                'tipoId' => 'required',
                'numeroId' => 'required|unique:users,numero_id',
                'perfil' => 'required',
                'contrasena' => 'required|string|min:8',
            ]);
            if($request->perfil != 1 || $request->perfil != 2  || $request->perfil != 3)
            {
                return redirect()->route('ingresar')->with('error', 'El tipo de empresa solo puede ser las tres listadas.');
            }
            $html = View::make('mail', [
                'name' => $request->nombre,
                // Otros datos que quieras pasar a la vista
            ])->render();
            // Envía el correo electrónico de confirmación aquí
            $mail = new PHPMailer(true);
            // Configura la conexión SMTP
            $mail->isSMTP();
            $mail->Host = 'mail.inverdoradasas.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'seguridad@inverdoradasas.com';
            $mail->Password = 'Chispitas2404*';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('seguridad@inverdoradasas.com', 'Seguridad de la informaci&oacute;n');
            $mail->addAddress($request->email, $request->nombre);

            $mail->isHTML(true);
            $mail->Subject = 'Te damos la bienvenida a nuestra Inversora Era Dorada!';
            $mail->Body    = $html;

            if (!$mail->send()) {
                // Si el correo no se envía correctamente, redirige con un mensaje de error
                return redirect()->route('ingresar')->with('error', 'No se pudo enviar el correo de confirmación. Por favor, inténtelo de nuevo más tarde.');
            }

            // Si el correo se envía correctamente, guarda el usuario en la base de datos
            $user = new User();
            $user->nombre = $request->nombre;
            $user->correo = $request->email;
            $user->tipo_id = $request->tipoId;
            $user->numero_id = $request->numeroId;
            $user->perfil = $request->perfil;
            $user->password = bcrypt($request->contrasena);
            

            if ($user->save()) {
                if(isset($request->nombreEmpresa)){
                    $request->validate([
                        'nombreEmpresa' => 'required|string|max:255',
                        'rut' => 'required|unique:empresa,rut',
                    ]);
                    if($this->saveInitEmpresa($request, $user->id) == false){
                    return redirect()->route('ingresar')->with('error', 'No se pudo realizar el registro de la empresa.');
                    }
                }
                return redirect()->route('ingresar')->with('success', 'Usuario registrado exitosamente. Ya puedes ingresar');
            } else {
                return redirect()->route('ingresar')->with('error', 'No se pudo realizar el registro.');
            }
        } catch (\PHPMailer\PHPMailer\Exception $e) {
            error_log('Error al enviar el correo: ' . $e->getMessage());
            return redirect()->route('ingresar')->with('error', 'El correo electrónico ya ha sido registrado anteriormente.');
        } catch (\Exception $e) {
            error_log('Error inesperado: ' . $e->getMessage());
            return redirect()->route('ingresar')->with('error', 'Error al procesar la solicitud. Por favor, inténtelo de nuevo más tarde.');
        }
    }

    public function saveInitEmpresa($data, $idUser)
    {
        $empresa = new empresa;
        $empresa->nombre = $data["nombreEmpresa"];
        $empresa->rut = $data["rut"];
        $empresa->id_user = $idUser;

        if( $empresa->save() ){
            return true;
        }else{
            return false;
        }
    }

}
