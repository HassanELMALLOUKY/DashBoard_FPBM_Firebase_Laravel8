<?php

namespace App\Http\Controllers;

use Google\Cloud\Storage\StorageClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Kreait\Firebase\Contract\Database;
use League\Flysystem\Exception;


class FirebaseController extends Controller
{
    public function __construct(Database $database, Storage $storage)
    {
        $this->database = $database;
        $this->storage = $storage;
    }
    public function showAvis(){
        $avis = $this->database->getReference('avis')->getValue();
        return view("avis")->with("avis",$avis);
    }
    public function updateAvis(){
        $avisUpdated = $this->database->getReference('avis')->getValue();
        return view("avis")->with("avis",$avisUpdated);
    }
    public function insertAvis(Request $request)

    {
        $postData = [
            'title'=>$request->title,
            'description'=>$request->description,
            'date'=>date("d/m/Y"),

        ];

        //$postRef = $this->database->getReference("avis/"."11111")->push($postData);
        $postRef = $this->database->getReference("avis")->push($postData);
        return redirect("avis")->with("msg","avis added");
    }
    public function insertEmplois(Request $request){
        $storage = app('firebase.storage'); // This is an instance of Google\Cloud\Storage\StorageClient from kreait/firebase-php library
        $defaultBucket = $storage->getBucket();
        $image = $request->file('emploiFile');
        $name = (string) Str::uuid().".".$image->getClientOriginalExtension(); // use Illuminate\Support\Str;
        $pathName = $image->getPathName();
        $file = fopen($pathName, 'r');
        $object = $defaultBucket->upload($file, [
            'name' => $name,
        ]);
        $imageReference = app('firebase.storage')->getBucket()->object($name);
        $image = $imageReference->signedUrl(new \DateTime('04/20/2024'));
        $postData = [
            "Name"=>$request->semestre,
            "PDF"=>$image,

        ];
        $postRef = $this->database->getReference("Emplois du temps/".$request->cycle."/".$request->filiere)->push($postData);

        return redirect("/emploie")->with("msg","emplois added");
    }
    public function insertStudent(Request $request)

    {
        $postData = [
            'fullName'=>$request->NomComplet,
            'cne'=>$request->cne,
            'password'=>$request->dateNaissance,
            'filiere' =>$request->filiere,

        ];

        //$postRef = $this->database->getReference("avis/"."11111")->push($postData);
        $postRef = $this->database->getReference("student")->push($postData);
        return redirect("/")->with("msg","student added");
    }

    public function home(){
        $numberStudent=$this->database->getReference('student');
        try {
            $snapshot = $numberStudent->getSnapshot()->numChildren();
            return view("home",compact("snapshot"));
        } catch (Exception $exception){
            return view("home")->with(["exception"=>$exception->getMessage()]);
        }
    }
    /*public function show(){
        $avis = $this->database->getReference('avis')->getValue();
        return redirect("avis")->with("avis",$avis);
    }*/
    public function showStudent()
    {
        $students = $this->database->getReference('student')->getValue();
        $numberStudent=$this->database->getReference('student');
        try {
            $snapshot = $numberStudent->getSnapshot()->numChildren();
            return view("note",compact("snapshot"))->with("students", $students);
        } catch (Exception $exception){
            return view("note")->with(["students" => $students,"exception"=>$exception->getMessage()]);
        }


    }
    public function showStudentHome()
    {
        $students = $this->database->getReference('student')->getValue();
        $numberStudent=$this->database->getReference('student');
        try {
            $snapshot = $numberStudent->getSnapshot()->numChildren();
            return view("home",compact("snapshot"))->with("students", $students);
        } catch (Exception $exception){
            return view("home")->with(["students" => $students,"exception"=>$exception->getMessage()]);
        }


    }
    public function insertNote(Request $request)

    {   $id=$request->id;
        $postData = [
            "Model1"=>[
                'name'=>$request->moduleName1,
                'note'=>$request->note1,
            ],
            "Model2"=>[
                'name'=>$request->moduleName2,
                'note'=>$request->note2,
            ],
            "Model3"=>[
                'name'=>$request->moduleName3,
                'note'=>$request->note3,
            ],
            "Model4"=>[
                'name'=>$request->moduleName4,
                'note'=>$request->note4,
            ],
            "Model5"=>[
                'name'=>$request->moduleName5,
                'note'=>$request->note5,
            ],
            "Model6"=>[
                'name'=>$request->moduleName6,
                'note'=>$request->note6,
            ],
            "sName"=>$request->semestre,
        ];

        $postRef = $this->database->getReference("markes/".$id)->push($postData);

        return redirect("note")->with("msg","note added");
    }



}
