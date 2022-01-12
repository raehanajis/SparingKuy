<?php

namespace App\Http\Controllers;

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;
use \Kreait\Firebase\Database;
use Google\Cloud\Firestore\FirestoreClient;
use Illuminate\Http\Request;

class homeController extends Controller
{
    //index

    public function index(Request $request){

        return view('home');
    }

    public function fitur(Request $request){

        return view('fitur');
    }

    public function download(Request $request){

        return view('download');
    }

    public function signup(Request $request){

        return view('signup');
    }
    public function signin(Request $request){

        return view('signin');
    }
    public function history(Request $request){
        $firestore = app('firebase.firestore');
        $db = $firestore->database();
        $doctorRef = $db->collection('room');

        $myArray = [];
        $data = $doctorRef->documents();
        foreach ($data as $document=>$v) {
            if ($v->exists()) {
                $myArray['room'][] = [
                    'category' => $v->data()['category'],
                    'title' => $v->data()['title'],
                    'location' => $v->data()['location'],
                    'hour' => $v->data()['hour'],
                    'date' => $v->data()['date'],
                    'joined' => $v->data()['joined'],
                    'total' => $v->data()['total'],
                ];
            }
        }
        
        return view('history', $myArray);
    }
    public function dashboard(Request $request){
        $firestore = app('firebase.firestore');
        $db = $firestore->database();
        $doctorRef = $db->collection('order');

        $myArray = [];
        $data = $doctorRef->documents();
        foreach ($data as $document=>$v) {
            if ($v->exists()) {
                $myArray['orders'][] = [
                    'idRoom' => $v->data()['idRoom'],
                    'namaSparring' => $v->data()['namaSparring'],
                    'location' => $v->data()['location'],
                    'hour' => $v->data()['hour'],
                    'date' => $v->data()['date'],
                    'joined' => $v->data()['joined'],
                    'total' => $v->data()['total'],
                ];
            }
        }
        return view('dashboard', $myArray);
    }
    public function profile(Request $request){

        return view('profile');
    }
}
