sistema_escolar_laravel

php artisan tinker
php artisan make:policy ChamadoPolicy
php artisan make:policy ChamadoTestePolicy --model=Chamado
php artisan make:seeder UserTable

php artisan db:seed --class=PapelSeeder /* roda uma tabelas */
php artisan db:seed   /* roda todas tabelas */


/*******************************
recuperar informaçoes do usuario
/********************************

$user = Auth::user();
$chamados = Chamado::where('user_id','=',$user->id)->get();;
return view('home', compact('chamados'));


/*******************************
Links
/********************************

{{ url('/home/'.$value->id)  }} ou
/home/{{ $value->id }}
