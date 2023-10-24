<?php
namespace App\Http\Controllers;
use App\Models\Condidat;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class condidatController extends Controller
{
    public function index(){
        return view('awrach');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => ['required','email','max:255','unique:'.Condidat::class],
            'phone' => ['required','string','max:10','unique:'.Condidat::class],
            'educationLevel' => 'required|string|max:50',
            'commune' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'cv' => 'required|mimes:pdf,jpeg,png,jpg|max:2048',
            'diplome' => 'required|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        // Handle file uploads using move method

        $photoFile = $request->file('photo');
        $cvFile = $request->file('cv');
        $diplomeFile = $request->file('diplome');

        if ($photoFile && $photoFile->isValid()) {
            $photoName = Str::random(20) . '.' . $photoFile->getClientOriginalExtension();
            $photoPath = $photoFile->move('uploads/photos', $photoName);
        }

        if ($cvFile && $cvFile->isValid()) {
            $cvName = Str::random(20) . '.' . $cvFile->getClientOriginalExtension();
            $cvPath = $cvFile->move('uploads/cv', $cvName);
        }

        if ($diplomeFile && $diplomeFile->isValid()) {
            $diplomeName = Str::random(20) . '.' . $diplomeFile->getClientOriginalExtension();
            $diplomePath = $diplomeFile->move('uploads/diplomes', $diplomeName);
        }
        $numDossier = Str::random(25);
        $inscription = Condidat::create(['fullName'=>$request->fullname,'email'=>$request->email,'phone'=>$request->phone,
            'educationLevel'=>$request->educationLevel,'commune'=>$request->commune,'photo'=>$photoName,'cv'=>$cvName,'diplome'=>$diplomeName,'Section'=>$request->section,'numDossier'=>$numDossier]);
        if($inscription){
                session()->flash('success_message', 'Condidat registered successfully.');
                session()->flash('Dossier', $numDossier);
                return redirect()->back();
        }
    }
    public function delete($id){
        $condidat = Condidat::find($id);

        if ($condidat) {
            $condidat->delete();
            return redirect()->back()->with('message','deleted');
        }
    }
    public function pdfCondidat($numDossier){
        $info = Condidat::where('numDossier',$numDossier)->first();
        $pdf = Pdf::loadView('pdf',compact('info'));
        if($pdf){
            return $pdf->download($numDossier.time().'.pdf');
        }
    }
}
