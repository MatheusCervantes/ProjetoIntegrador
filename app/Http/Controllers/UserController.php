<?php

namespace App\Http\Controllers;

use App\Mail\Usuario;
use App\Models\User;
use App\Models\medico\InformacaoProfissional;
use App\Models\medico\Medicos;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class UserController extends Controller
{
    protected $userController;
    protected $senhaAleatoria;

    public function store($nomeuser, $type)
    {
        //Criando usuário
        $user = new User();
        $user->username = $nomeuser;
        $user->password = hash('sha512', $this->senhaAleatoria = Str::random(12)); // Gerar senha aleatória gerada
        $user->type = $type;
        $user->firstlogin = true;
        $user->save();

        return $user;
    }

    public function sendemail($nome, $nomeuser, $email)
    {
        $username = $nomeuser;
        $password = $this->senhaAleatoria;

        Mail::to($email, $nome)->send(new Usuario([
            'fromName' => 'Clinica',
            'fromEmail' => 'from@example.com',
            'subject' => 'Login',
            'username' => $username,
            'password' => $password,
            'nome' => $nome
        ]));
    }

    //Método utilizado apenas para cadastrar um admin
    public function cadastraradmin()
    {
        $user = new User();
        $user->username = 'admin';
        $user->password = hash('sha512', '123456');
        $user->type = 'admin';
        $user->firstlogin = true;
        $user->save();
        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        $user = User::where('username', $credentials['username'])->first();

        if ($user && hash('sha512', $credentials['password']) === $user->password) {
            Auth::login($user);

            if ($user->type === 'admin') {
                if ($user->firstlogin == true) {
                    return redirect('/painel-adm')->with('warn', 'Atualize sua senha.');
                } else {
                    return redirect('/painel-adm');
                }
            }
            if ($user->type === 'medico') {
                $medico = Medicos::where('user_id', $user->id)->first();
                $informacaoprof = InformacaoProfissional::where('medico_id', $medico->id)->first();
                if ($user->firstlogin == true) {
                    if (!$informacaoprof) {
                        return redirect('/painel-medico')->with('warn', 'Atualize sua senha')->with('warn2', 'Adicione suas informações profissionais, para utilizar o sistema.');
                    }
                    return redirect('/painel-medico')->with('warn', 'Atualize sua senha');
                } else {
                    if (!$informacaoprof) {
                        return redirect('/painel-medico')->with('warn', '.')->with('warn2', 'Adicionar suas informações profissionais, para utilizar o sistema.');
                    }
                    return redirect('/painel-medico');
                }
            }
            if ($user->type === 'recepcionista') {
                return redirect('');
            }
        } else {
            return redirect('/')->with('msg', 'Os dados fornecidos são inválidos. Por favor, verifique seu login e/ou senha e tente novamente.');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function alterar_senha_adm(Request $request)
    {
        try {
            $usuario = Auth::user();

            // Verifica se a senha atual está correta
            if (hash('sha512', $request->senha_atual) !== $usuario->password) {
                return redirect('/painel-adm')->with('msg', 'Senha atual inválida.');
            }

            // Atualiza a senha
            $usuario->password = hash('sha512', $request->nova_senha);
            $usuario->firstlogin = false;
            $usuario->save(); // Salva as alterações

            return redirect('/painel-adm')->with('success', 'Senha alterada com sucesso.');
        } catch (QueryException $qe) {
            // Trata exceções relacionadas a consultas SQL
            return redirect('/painel-adm')->with('error', 'Ocorreu um erro ao alterar a senha: ' . $qe->getMessage());
        } catch (\Exception $e) {
            // Trata outras exceções genéricas
            return redirect('/painel-adm')->with('error', 'Ocorreu um erro ao alterar a senha: ' . $e->getMessage());
        }
    }

    public function alterar_usuario_medico(Request $request)
    {
        try {
            $usuario = Auth::user();

            // Verifica se a senha atual está correta
            if (hash('sha512', $request->senha_atual) !== $usuario->password) {
                return redirect('/painel-medico')->with('msg', 'Senha atual inválida.');
            }

            // Atualiza a senha
            $usuario->username = $request->nome_usuario;
            $usuario->password = hash('sha512', $request->nova_senha);
            $usuario->firstlogin = false;
            $usuario->save(); // Salva as alterações

            return redirect('/painel-medico')->with('success', 'Senha alterada com sucesso.');
        } catch (QueryException $qe) {
            // Trata exceções relacionadas a consultas SQL
            return redirect('/painel-medico')->with('error', 'Ocorreu um erro ao alterar a senha: ' . $qe->getMessage());
        } catch (\Exception $e) {
            // Trata outras exceções genéricas
            return redirect('/painel-medico')->with('error', 'Ocorreu um erro ao alterar a senha: ' . $e->getMessage());
        }
    }
}
