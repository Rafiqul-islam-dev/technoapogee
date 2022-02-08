<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Backend\ClientsController;
use App\Http\Controllers\Backend\NewsEventController;
use App\Http\Controllers\Backend\FontendContact;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\ProjectController;
use App\Models\NewsEvent;
use App\Models\Clients;
use App\Models\Menu;
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

Route::get('/dashboard', function () {
    $counter = [
        'clients' => count(Clients::all()),
        'news' => count(NewsEvent::all()),
    ];
    return view('dashboard', compact('counter'));
})->middleware(['auth'])->name('dashboard');

// About Us
Route::get('/', [FontendController::class, 'index'])->name('home');
Route::get('/our-mission-vision', [FontendController::class, 'missionVission'])->name('our-mission-vision');
Route::get('/our-team', [FontendController::class, 'ourTeam'])->name('our-team');
Route::get('/our-expertise', [FontendController::class, 'ourExpertise'])->name('our-expertise');
Route::get('/strategic-partners', [FontendController::class, 'strategicPartners'])->name('strategic-partners');
Route::get('/enlistment', [FontendController::class, 'enlistment'])->name('enlistment');
Route::get('/contact-us', [FontendController::class, 'contactUs'])->name('contact-us');

Route::get('/portfolio/{slug}', [FontendController::class, 'portfolio'])->name('portfolio');


// Mani Menu
Route::get('/electrical-solution', [FontendController::class, 'electrical'])->name('electrical-solution');
Route::get('/automation-solution', [FontendController::class, 'automationSolution'])->name('automation-solution');
Route::get('/fire-electrical-solution', [FontendController::class, 'fireSoluion'])->name('fire-electrical-solution');
Route::get('/design-consultancy-services', [FontendController::class, 'designConsultancy'])->name('design-consultancy-services');
// Route::get('/electrical-fire-safety-audit-consultancy-dife', [FontendController::class, 'electricalFireAudit'])->name('electrical-fire-safety-audit-consultancy-dife');


Route::get('{slug}', [ProductController::class, 'index']);


// //Fontend Page route
// Route::get('/noc-fire-safety-plan-for-fscd', [FontendController::class, 'noc'])->name('noc-fire-safety-plan-for-fscd');
// Route::get('/others-design-consultancy-support', [FontendController::class, 'otherDesign'])->name('others-design-consultancy-support');


// Route::get('/substation', [FontendController::class, 'substation'])->name('substation');
// Route::get('/breakers', [FontendController::class, 'breakers'])->name('breakers');
// Route::get('/all-type-distribution-board', [FontendController::class, 'distributionBoard'])->name('all-type-distribution-board');
// Route::get('/busbar-trunking-bbt-systems', [FontendController::class, 'bbt'])->name('busbar-trunking-bbt-systems');

// Route::get('/fire-detection-system-in-banglades', [FontendController::class, 'fireDetection '])->name('fire-detection-system-in-banglades');
// Route::get('/active-fire-protection-systems', [FontendController::class, 'fireProtection'])->name('active-fire-protection-systems');
// Route::get('/passive-fire-protection', [FontendController::class, 'passFireProtection'])->name('passive-fire-protection');
// Route::get('/lightning-protection-system-lps-design', [FontendController::class, 'lightingProection'])->name('lightning-protection-system-lps-design');



// Route::get('/home-hotel-automation', [FontendController::class, 'homeAutomation'])->name('home-hotel-automation');
// Route::get('/bms-ems', [FontendController::class, 'bms'])->name('bms-ems');
// Route::get('/security-automation', [FontendController::class, 'securityAutomation'])->name('security-automation');
// Route::get('/electrical-safety-audits-2', [FontendController::class, 'electricalSaftyAudit'])->name('electrical-safety-audits-2');
// Route::get('/fire-safety-audits-risk-assessments', [FontendController::class, 'riskAssessments'])->name('fire-safety-audits-risk-assessments');
// Route::get('/noc-no-objection-certificate', [FontendController::class, 'nocCertificate'])->name('noc-no-objection-certificate');
// Route::get('/fire-safety-plan', [FontendController::class, 'safetyPlan'])->name('fire-safety-plan');
// Route::get('/business-process-re-engineering', [FontendController::class, 'processEngineering'])->name('business-process-re-engineering');
// Route::get('/fire-safety-audits', [FontendController::class, 'fireAudits'])->name('fire-safety-audits');
// Route::get('/fire-hydrant-and-sprinkler-systems-design', [FontendController::class, 'sprinklerSystemsDesign'])->name('fire-hydrant-and-sprinkler-systems-design');
// Route::get('/fire-detection-alarm-systems-design', [FontendController::class, 'alarmSystemsDesign'])->name('fire-detection-alarm-systems-design');
// Route::get('/electrical-single-line-diagram-sld', [FontendController::class, 'sld'])->name('electrical-single-line-diagram-sld');
// Route::get('/lightning-protection-system-lps-design', [FontendController::class, 'lpsDesign'])->name('lightning-protection-system-lps-design');
// Route::get('/ul-listed-addressable-fire-detection-systems', [FontendController::class, 'ulListedDetection'])->name('ul-listed-addressable-fire-detection-systems');
// Route::get('/lpcb-approved-addressable-fire-detection-systems', [FontendController::class, 'lpcbDetection'])->name('lpcb-approved-addressable-fire-detection-systems');
// Route::get('/conventional-fire-detection-systems', [FontendController::class, 'conventionalDetection'])->name('conventional-fire-detection-systems');
// Route::get('/aspiration-smoke-detection-systems', [FontendController::class, 'aspirationDetection'])->name('aspiration-smoke-detection-systems');
// Route::get('/fire-hydrant-systems', [FontendController::class, 'hydrantSystems'])->name('fire-hydrant-systems');
// Route::get('/fire-sprinkler-systems', [FontendController::class, 'fireSprinkler'])->name('fire-sprinkler-systems');
// Route::get('/fire-suppression-systems', [FontendController::class, 'fireSuppression'])->name('fire-suppression-systems');
// Route::get('/fire-rated-door', [FontendController::class, 'ratedDoor'])->name('fire-rated-door');
// Route::get('/fire-rated-boards', [FontendController::class, 'firRatedBoards'])->name('fire-rated-boards');
// Route::get('/intumescent-coating', [FontendController::class, 'intumescentCoating'])->name('intumescent-Coating');
// Route::get('/cementitiouCoating', [FontendController::class, 'breakers'])->name('cementitious-coating');
// Route::get('/home-automation-systems', [FontendController::class, 'homeAutomation'])->name('home-automation-systems');
// Route::get('/hotel-automation-systems', [FontendController::class, 'hotelAutomation'])->name('hotel-automation-systems');
// Route::get('/digital-hotel-lock-systems', [FontendController::class, 'hotelLock'])->name('digital-hotel-lock-systems');
// Route::get('/lighting-management-systems', [FontendController::class, 'lightingManagement'])->name('lighting-management-systems');
// Route::get('/closed-circuit-television-cctv-systems', [FontendController::class, 'cctv'])->name('closed-circuit-television-cctv-systems');
// Route::get('/access-control-time-attendance-systems', [FontendController::class, 'accessControl'])->name('access-control-time-attendance-systems');
// Route::get('/pabx', [FontendController::class, 'pabx'])->name('pabx');
// Route::get('/networking', [FontendController::class, 'networking'])->name('networking');
// Route::get('/public-address-systems', [FontendController::class, 'publicAddress'])->name('public-address-systems');
// Route::get('/conference-systems', [FontendController::class, 'conference'])->name('conference-systems');
// Route::get('/emergency-lighting-systems', [FontendController::class, 'emergencyLighting'])->name('emergency-lighting-systems');
// Route::get('/burglar-alarm-systems', [FontendController::class, 'burglarAlarm'])->name('burglar-alarm-systems');
// Route::get('/queue-management-systems', [FontendController::class, 'queueManagement'])->name('queue-management-systems');
// Route::get('/turnstile-systems', [FontendController::class, 'turnstile'])->name('turnstile-systems');
// Route::get('/baggage-scanner-metal-detector', [FontendController::class, 'metalDetector'])->name('baggage-scanner-metal-detector');
// Route::get('/parking-management-systems', [FontendController::class, 'parkingManagement'])->name('parking-management-systems');
// Route::get('/automatic-manual-retractable-gate', [FontendController::class, 'retractableGate'])->name('automatic-manual-retractable-gate');
// Route::get('/video-management-systems', [FontendController::class, 'videoManagement'])->name('video-management-systems');

Route::get('project/our-project', [FontendController::class, 'ourProject'])->name('project.our-project');
Route::get('project/ongoing-project', [FontendController::class, 'ongoingProject'])->name('project.ongoing-project');
Route::get('project/complete-project', [FontendController::class, 'completeProject'])->name('project.complete-project');
Route::get('project/industry-projects', [FontendController::class, 'industryProjects'])->name('project.industry-projects');
Route::get('project/bank-financial-projects', [FontendController::class, 'bankProjects'])->name('project.bank-financial-projects');
Route::get('project/ngo', [FontendController::class, 'ngo'])->name('project.ngo');
Route::get('project/club', [FontendController::class, 'club'])->name('project.club');
Route::get('project/hotel-resorts', [FontendController::class, 'hotelResorts'])->name('project.hotel-resorts');
Route::get('project/govt-projects', [FontendController::class, 'govtProjects'])->name('project.govt-projects');
Route::get('project/commercial-building-projects', [FontendController::class, 'commercialProjects'])->name('project.commercial-building-projects');


//BACKEND

//Backend Controller Clients
Route::get('admin/menu', [MenuController::class, 'index'])->name('admin.menu');
Route::post('admin/addmenu', [MenuController::class, 'addmenu'])->name('admin.addmenu');
Route::get('admin/editmenu/{id}', [MenuController::class, 'editmenu'])->name('admin.editmenu');
Route::post('admin/updateMenu/{id}', [MenuController::class, 'updateMenu'])->name('admin.updateMenu');
Route::get('admin/delet/{id}', [MenuController::class, 'delet'])->name('admin.delet');



// Backend Controller NewsEvent
Route::get('admin/newsEvent', [NewsEventController::class, 'index'])->name('admin.newsEvent');
Route::post('admin/addNewsEvent', [NewsEventController::class, 'addNewsEvent'])->name('admin.addNewsEvent');
Route::get('admin/editNewsEvent/{id}', [NewsEventController::class, 'editNewsEvent'])->name('admin.editNewsEvent');
Route::post('admin/updateNewsEvent/{id}', [NewsEventController::class, 'updateNewsEvent'])->name('admin.updateNewsEvent');
Route::get('admin/deletnews/{id}', [NewsEventController::class, 'deletnews'])->name('admin.deletnews');

// Backend Controller ComplitedProject
Route::get('admin/completeProject', [ProjectController::class, 'index'])->name('admin.completeProject');
Route::post('admin/addCompletedProject', [ProjectController::class, 'addCompletedProject'])->name('admin.addCompletedProject');
Route::get('admin/editNewsEvent/{id}', [NewsEventController::class, 'editNewsEvent'])->name('admin.editNewsEvent');
Route::post('admin/updateNewsEvent/{id}', [NewsEventController::class, 'updateNewsEvent'])->name('admin.updateNewsEvent');
Route::get('admin/deletnews/{id}', [NewsEventController::class, 'deletnews'])->name('admin.deletnews');

// Backend Controller ongoingProject
Route::get('admin/ongoingProject', [ProjectController::class, 'ongoingProject'])->name('admin.ongoingProject');
Route::post('admin/addongoingProject', [ProjectController::class, 'addongoingProject'])->name('admin.addongoingProject');
Route::get('admin/editNewsEvent/{id}', [NewsEventController::class, 'editNewsEvent'])->name('admin.editNewsEvent');
Route::post('admin/updateNewsEvent/{id}', [NewsEventController::class, 'updateNewsEvent'])->name('admin.updateNewsEvent');
Route::get('admin/deletnews/{id}', [NewsEventController::class, 'deletnews'])->name('admin.deletnews');





require __DIR__ . '/auth.php';

