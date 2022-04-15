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
            return view("dash",compact("snapshot"));
        } catch (Exception $exception){
            return view("dash")->with(["exception"=>$exception->getMessage()]);
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
            return view("dash",compact("snapshot"))->with("students", $students);
        } catch (Exception $exception){
            return view("dash")->with(["students" => $students,"exception"=>$exception->getMessage()]);
        }


    }
    public function insertNote(Request $request)

    {   $id=$request->id;
        $postData = [
            "Model".$request->moduleN=>[
                'name'=>$request->moduleName,
                'note'=>$request->note,
            ],
            "sName"=>$request->semestre,
        ];

        $postRef = $this->database->getReference("markes/".$id)->push($postData);

        return redirect("note")->with("msg","note added");
    }



}
