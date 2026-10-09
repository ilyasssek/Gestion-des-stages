<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home'); 
});
Route::get('/loginn', function () {
  return view('loginn'); 
});
Route::get('/home2', function () {
    return view('home2');
})->name('home2');

Route::get('/propos', function () {
  return view('propos'); 
});

Route::get('/contact2', function () {
  return view('contact2'); 
});
Route::get('/Admin', function () {
  return view('Admin'); 
});


Route::get('/ajouterstage', function () {
  return view('ajouterstage');
});

Route::get('/deposerrapport', function () {
  return view('deposerrapport');
});
Route::get('/espaceenseignant', function () {
  return view('espaceenseignant');
});
Route::get('/espaceadmin', function () {
  return view('espaceadmin');
});
Route::get('/espaceetudiant3', function () {
  return view('espaceetudiant3');
});


use App\Http\Controllers\SignupController;

Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup.show');
Route::post('/signup', [SignupController::class, 'handleSignup'])->name('signup.submit');




use App\Http\Controllers\EnseignantController;

Route::resource('enseignants', EnseignantController::class);

use App\Http\Controllers\espaceenseignantController;

Route::get('/espaceenseignant', [EspaceenseignantController::class, 'showForm'])->name('espaceenseignant.form');
Route::post('/espaceenseignant', [EspaceenseignantController::class, 'submitForm'])->name('espaceenseignant.submit');

Route::get('/enseigants', [EnseignantController::class, 'index'])->name('enseigants.index');
Route::get('/enseigants/create', [EnseignantController::class, 'create'])->name('enseigants.create');
Route::post('/enseigants', [EnseignantController::class, 'store'])->name('enseigants.store');
Route::get('/enseigants/{id}/edit', [EnseignantController::class, 'edit'])->name('enseigants.edit');
Route::put('/enseigants/{id}', [EnseignantController::class, 'update'])->name('enseigants.update');
Route::delete('/enseigants/{id}', [EnseignantController::class, 'destroy'])->name('enseigants.destroy');

use App\Http\Controllers\AdminController;

Route::resource('admins', AdminController::class);

use App\Http\Controllers\espaceadminController;

Route::get('/espaceadmin', [espaceadminController::class, 'showForm'])->name('espaceadmin.form');
Route::post('/espaceadmin', [espaceadminController::class, 'submitForm'])->name('espaceadmin.submit');

Route::get('/admins', [AdminController::class, 'index'])->name('admins.index');
Route::get('/admins/create', [AdminController::class, 'create'])->name('admins.create');
Route::post('/admins', [AdminController::class, 'store'])->name('admins.store');
Route::get('/admins/{id}/edit', [AdminController::class, 'edit'])->name('admins.edit');
Route::put('/admins/{id}', [AdminController::class, 'update'])->name('admins.update');
Route::delete('/admins/{id}', [AdminController::class, 'destroy'])->name('admins.destroy');

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::resource('contact',ContactController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

use App\Http\Controllers\clientController;
Route::get('/clients', [clientController::class,'index']);


use App\Http\Controllers\UserController; 
Route::get('/users',[UserController::class,'loadAllUsers']);
Route::get('/add/user',[UserController::class,'loadAddUserForm']);

Route::post('/add/user',[UserController::class,'AddUser'])->name('AddUser');

Route::get('/edit1/{id}',[UserController::class,'loaddEditForm']);
Route::get('/delete1/{id}',[UserController::class,'deleteUser']);

Route::post('/edit/user',[UserController::class,'EditUser'])->name('EditUser');


use App\Http\Controllers\InfoetudiantController; 
Route::get('/infoetudiants',[InfoetudiantController::class,'loadAllInfoetudiants']);
Route::get('/espaceetudiant',[InfoetudiantController::class,'loaddAllInfoetudiants']);
Route::get('/add/infoetudiant',[InfoetudiantController::class,'loadAddInfoetudiantForm']);
Route::post('/add/infoetudiant',[InfoetudiantController::class,'AddInfoetudiant'])->name('Addinfoetudiant');
Route::get('/edit/{id}',[InfoetudiantController::class,'loaddEditForm']);
Route::get('/delete/{id}',[InfoetudiantController::class,'deleteinfoetudiant']);
Route::post('/edit/infoetudiant',[InfoetudiantController::class,'Editinfoetudiant'])->name('Editinfoetudiant');


Route::get('/login/formm',[InfoetudiantController::class,'loadLoginEtudiant']);
Route::post('/login/infoetudiant',[InfoetudiantController::class,'LoginInfoetudiant'])->name('LoginInfoetudiant');
Route::get('/espaceetudiant',[InfoetudiantController::class,'loadHomePage']);





use App\Http\Controllers\AjouterstageController; 
Route::get('/ajouterstages',[AjouterstageController::class,'loadAllAjouterstages']);
Route::get('/stagedesetudiant',[AjouterstageController::class,'loadAlllAjouterstages']);
Route::get('/ajouterstage',[AjouterstageController::class,'loaddAllAjouterstages']);
Route::get('/add/ajouterstage',[AjouterstageController::class,'loadAddAjouterstageForm']);
Route::post('/add/ajouterstage',[AjouterstageController::class,'AddAjouterstage'])->name('Addajouterstage');
Route::get('/edit5/{id}',[AjouterstageController::class,'loadddEditForm']);
Route::get('/delete5/{id}',[AjouterstageController::class,'deleteajouterstage']);
Route::post('/edit/ajouterstage',[AjouterstageController::class,'Editajouterstage'])->name('Editajouterstage');


use App\Http\Controllers\InfoencadrantController; 
Route::get('/infoencadrants',[InfoencadrantController::class,'loadAllInfoencadrants']);

Route::get('/infoencadrant',[InfoencadrantController::class,'loaddAllInfoencadrants']);
Route::get('/add/infoencadrant',[InfoencadrantController::class,'loadAddInfoencadrantForm']);
Route::post('/add/infoencadrant',[AjouterstageController::class,'AddInfoencadrant'])->name('Addinfoencadrant');
Route::get('/edit6/{id}',[InfoencadrantController::class,'loaddEditForm']);
Route::get('/delete6/{id}',[InfoencadrantController::class,'deleteinfoencadrant']);
Route::post('/edit/infoencadrant',[InfoencadrantController::class,'Editinfoencadrant'])->name('Editinfoencadrant');



use App\Http\Controllers\InfosetudiantController; 
Route::get('/infosetudiants',[InfosetudiantController::class,'loadAllllInfosetudiants']);

Route::get('/add/infosetudiant',[InfosetudiantController::class,'loadAddInfosetudiantForm']);
Route::post('/add/infosetudiant',[InfosetudiantController::class,'AddInfosetudiant'])->name('Addinfosetudiant');



use App\Http\Controllers\AuthController;

Route::get('/registration/form',[AuthController::class,'loadRegisterForm']);
// create an Authentication Controller
Route::post('/register/user',[AuthController::class,'registerUser'])->name('registerUser');
Route::get('/login/form',[AuthController::class,'loadLoginPage']);
Route::post('/login/user',[AuthController::class,'LoginUser'])->name('LoginUser');
Route::get('/Admin',[AuthController::class,'loadHomePage']);
Route::get('/logout',[AuthController::class,'LogoutUser']);

Route::get('/forgot/password',[AuthController::class,'forgotPassword']);
Route::post('/forgot',[AuthController::class,'forgot'])->name('forgot');
//log out
Route::post('/logout', [AuthController::class, 'LogoutUser'])->name('logout');



Route::get('/registration/formm',[InfosetudiantController::class,'loaddRegisterForm']);
// create an Authentication Controller
Route::post('/register/infosetudiant',[InfosetudiantController::class,'registerInfosetudiant'])->name('registerInfosetudiant');
Route::get('/login/formm',[InfosetudiantController::class,'loaddLoginPage2']);
Route::post('/login/infosetudiant',[InfosetudiantController::class,'LoginInfosetudiant'])->name('LoginInfosetudiant');
Route::get('/espaceetudiant',[InfosetudiantController::class,'loaddHomePage']);
Route::get('/infosetudiants',[InfosetudiantController::class,'loadAllInfosetudiants']);
Route::get('/emailadmin',[InfosetudiantController::class,'loaddddddAllInfosetudiants']);
Route::get('/edit4/{id}',[InfosetudiantController::class,'loadEditForm']);
Route::get('/delete4/{id}',[InfosetudiantController::class,'deleteinfosetudiant']);
Route::post('/edit/infosetudiant',[InfosetudiantController::class,'Editinfosetudiant'])->name('Editinfosetudiant');
//Route::get('/registration/formm',[InfosetudiantController::class,'loadAddInfosetudiantForm']);
Route::get('/choisiretudiant',[InfosetudiantController::class,'loadddAllInfosetudiants']);
Route::get('/choisir/{id}', [InfosetudiantController::class, 'choisir']);
Route::get('/listeetudiant', [InfosetudiantController::class, 'index'])->name('listeetudiant');
Route::get('/noterstage', [InfosetudiantController::class, 'inddex'])->name('noterstage');
Route::get('/emailencadrant', [InfosetudiantController::class, 'indddex'])->name('emailencadrant');
Route::post('/transferer-etudiant/{id}', [InfosetudiantController::class, 'transfererEtudiant'])->name('transferer.etudiant');
Route::get('/supprimer/{id}', [InfosetudiantController::class, 'supprimer'])->name('supprimer');
Route::get('/listeetudiantlibre',[InfosetudiantController::class,'loadddddAllInfosetudiants']);
Route::get('/choisiretudiant', [InfosetudiantController::class, 'afficherChoisirEtudiant'])->name('choisiretudiant');
Route::get('/listeetudiantlibre', [InfosetudiantController::class, 'afficherrChoisirEtudiant'])->name('listeetudiantlibre');


//login espace encadrant
Route::get('/registration/formmm',[InfoencadrantController::class,'loadddRegisterForm']);
Route::post('/register/infosencadrant',[InfoencadrantController::class,'registerInfoencadrant'])->name('registerInfoencadrant');
Route::get('/login/formmm',[InfoencadrantController::class,'loaddLoginPage3']);
Route::post('/login/infosencadrant',[InfoencadrantController::class,'LoginInfoencadrant'])->name('LoginInfoencadrant');
Route::get('/infoencadrant2',[InfoencadrantController::class,'loadddHomePage']);



//send email
use App\Http\Controllers\SendEmailController;
Route::get('/formm',[SendEmailController::class,'loadForm']);
Route::get('/emailencadrant',[SendEmailController::class,'loadFormm']);
Route::post('/sendd/email',[SendEmailController::class,'sendd'])->name('sendd');
Route::post('/send/email',[SendEmailController::class,'send'])->name('send');
Route::get('/emailadmin',[SendEmailController::class,'loadFormmm']);
Route::post('/senddd/email',[SendEmailController::class,'senddd'])->name('senddd');
Route::get('/contact2',[SendEmailController::class,'loadFormmmm']);
Route::post('/sendddd/email',[SendEmailController::class,'sendddd'])->name('sendddd');




use App\Http\Controllers\NoteController;

Route::post('/ajouter-note', [InfosetudiantController::class, 'ajouterNote'])->name('ajouter.note');
