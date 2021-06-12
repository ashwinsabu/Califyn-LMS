<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certificate;
use App\student;
use App\categorie;
use DB;
use Validator;

class certificateController extends Controller
{
    function getData(){
        $result= certificate::with('studentRelation','categoryRelation','levelRelation')->get();
        return(response()->json(array( "data" => $result)));
    }

    function getData1($id){
        $result= certificate::find($id);
        return(response()->json(array( "data" => $result)));
    }

    function add(Request $req){
        $cert=new certificate;
        $val = Validator::make($req->all(),$cert->createRules);
        if ($val->fails()) {
            return response()->json($val->errors(),422);
        }

        $cal=categorie::find($req->category_id);
        $point = DB::table('points')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->where('category_id',$req->category_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'cat')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('points')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->where('category_id',$req->category_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                    if($total <= $max){
                        $cert->prize=$req->prize;
                        $cert->name=$req->name;
                        if($req->file('image') != null){
                            $image=$req->file('image')->store('certificates');
                            $cert->image='storage/'.$image;
                        }
                        
                        $cert->semester=$req->semester;
                        $cert->student_id=$req->student_id;
                        $cert->organized_by=$req->organized_by;
                        $cert->day=$req->day;
                        $cert->points=$point;
                        $cert->activity_id=$req->activity_id;
                        $cert->status=0;
                        $cert->category_id=$req->category_id;
                        $cert->staff_id=$req->staff_id;
                        $cert->level_id=$req->level_id;
                        $result=$cert->save();
                        if($result){
                            return["message"=>"Success"];
                        }
                        else{
                            return response()->json([
                            'message' => 'Request failed.'], 404);
                        }
                    }
                    else{
                        return response()->json([
                            'message' => 'Point is above the limit'], 403);
                    }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
    }

    function add2(Request $req){
        $cert=new certificate;
        $val = Validator::make($req->all(),$cert->createRules);
        if ($val->fails()) {
            return response()->json($val->errors(),422);
        };
        $cert->prize=$req->prize;
        $cert->name=$req->name;
        if($req->file('image') != null){
            $image=$req->file('image')->store('certificates');
            $cert->image='storage/'.$image;
        }
        $cert->semester=$req->semester;
        $cert->student_id=$req->student_id;
        $cert->organized_by=$req->organized_by;
        $cert->day=$req->day;
        $cert->points=10;
        $cert->activity_id=$req->activity_id;
        $cert->status=0;
        $cert->category_id=$req->category_id;
        $cert->staff_id=$req->staff_id;
        $cert->level_id=$req->level_id;
        $result=$cert->save();
        if($result){
            return["message"=>"Success"];
        }
        else{
            return response()->json([
            'message' => 'Request failed.'], 404);
        }
    }

    function update(Request $req){
        $cert=certificate::find($req->id);
        $cert->prize=$req->prize;
        $cert->name=$req->name;
        $image=$req->file('image')->store('certificates');
        if($image != null){
            
        }
        
        $cert->semester=$req->semester;
        $cert->student_id=$req->student_id;
        $cert->organized_by=$req->organized_by;
        $cert->day=$req->day;
        $cert->points=$req->points;
        $cert->activity_id=$req->activity_id;
        $cert->status=$req->status;
        $cert->category_id=$req->category_id;
        $cert->staff_id=$req->staff_id;
        $cert->level_id=$req->level_id;
        $result=$cert->save();
        if($result){
            return["message"=>"Success"];
        }
        else{
            return["Result"=>"Failed"];
        }
    }

    function delete($id){
        try{
        $cert=certificate::find($id);
        if($cert==null){
            return["message"=>"No row found"];
        }
        else{
        $result=$cert->delete();
        if($result){
            return["message"=>"Deleted"];
        }
        else{
            return["message"=>"Not deleted"];
        }}
    }
    catch(\Exception $exception){
        $successStatus=400;
        return response()->json(['message'=>'failed', 'status'=>$successStatus]);
    }
    }


    function  calculate(Request $req){
        $cal=categorie::find($req->category_id);
        if($cal){
            switch($cal->code){
                case 'cat':
                    $point = DB::table('cultural_acitivities_participations')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'cat')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('cultural_acitivities_participations')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                    if($total <= $max){
                        $cert=new certificate;
                        $cert->prize=$req->prize;
                        $cert->name=$req->name;
                        if($req->file('image') != null){
                            $image=$req->file('image')->store('certificates');
                            $cert->image='storage/'.$image;
                        }
                        
                        $cert->semester=$req->semester;
                        $cert->student_id=$req->student_id;
                        $cert->organized_by=$req->organized_by;
                        $cert->day=$req->day;
                        $cert->points=$point;
                        $cert->activity_id=$req->activity_id;
                        $cert->status=0;
                        $cert->category_id=$req->category_id;
                        $cert->staff_id=$req->staff_id;
                        $cert->level_id=$req->level_id;
                        $result=$cert->save();
                        if($result){
                            return["message"=>"Success"];
                        }
                        else{
                            return response()->json([
                            'message' => 'Request failed.'], 404);
                        }
                    }
                    else{
                        return response()->json([
                            'message' => 'Point is above the limit'], 403);
                    }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
                    break;




                case 'ei':
                    $point = DB::table('entrepreneurship_innovations')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'ei')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('entrepreneurship_innovations')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                    if($total <= $max){
                        $cert=new certificate;
                        $cert->prize=$req->prize;
                        $cert->name=$req->name;
                        if($req->file('image') != null){
                            $image=$req->file('image')->store('certificates');
                            $cert->image='storage/'.$image;
                        }
                        
                        $cert->semester=$req->semester;
                        $cert->student_id=$req->student_id;
                        $cert->organized_by=$req->organized_by;
                        $cert->day=$req->day;
                        $cert->points=$point;
                        $cert->activity_id=$req->activity_id;
                        $cert->status=0;
                        $cert->category_id=$req->category_id;
                        $cert->staff_id=$req->staff_id;
                        $cert->level_id=$req->level_id;
                        $result=$cert->save();
                        if($result){
                            return["message"=>"Success"];
                        }
                        else{
                            return response()->json([
                            'message' => 'Request failed.'], 404);
                        }
                    }
                    else{
                        return response()->json([
                            'message' => 'Point is above the limit'], 403);
                    }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
                    break;




                case 'lm':
                    $point = DB::table('leadership_managements')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'lm')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('leadership_managements')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                    if($total <= $max){
                        $cert=new certificate;
                        $cert->prize=$req->prize;
                        $cert->name=$req->name;
                        if($req->file('image') != null){
                            $image=$req->file('image')->store('certificates');
                            $cert->image='storage/'.$image;
                        }
                        
                        $cert->semester=$req->semester;
                        $cert->student_id=$req->student_id;
                        $cert->organized_by=$req->organized_by;
                        $cert->day=$req->day;
                        $cert->points=$point;
                        $cert->activity_id=$req->activity_id;
                        $cert->status=0;
                        $cert->category_id=$req->category_id;
                        $cert->staff_id=$req->staff_id;
                        $cert->level_id=$req->level_id;
                        $result=$cert->save();
                        if($result){
                            return["message"=>"Success"];
                        }
                        else{
                            return response()->json([
                            'message' => 'Request failed.'], 404);
                        }
                    }
                    else{
                        return response()->json([
                            'message' => 'Point is above the limit'], 403);
                    }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
                    break;




                case 'ni':
                    return response()->json([
                        'message' => 'Under maintenance'], 503);



                case 'psi':
                    $point = DB::table('professional_self_initiatives')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'psi')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('professional_self_initiatives')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                    if($total <= $max){
                        $cert=new certificate;
                        $cert->prize=$req->prize;
                        $cert->name=$req->name;
                        if($req->file('image') != null){
                            $image=$req->file('image')->store('certificates');
                            $cert->image='storage/'.$image;
                        }
                        $cert->semester=$req->semester;
                        $cert->student_id=$req->student_id;
                        $cert->organized_by=$req->organized_by;
                        $cert->day=$req->day;
                        $cert->points=$point;
                        $cert->activity_id=$req->activity_id;
                        $cert->status=0;
                        $cert->category_id=$req->category_id;
                        $cert->staff_id=$req->staff_id;
                        $cert->level_id=$req->level_id;
                        $result=$cert->save();
                        if($result){
                            return["message"=>"Success"];
                        }
                        else{
                            return response()->json([
                            'message' => 'Request failed.'], 404);
                        }
                    }
                    else{
                        return response()->json([
                            'message' => 'Point is above the limit'], 403);
                    }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
                    break;




                case 'sg':
                    $point = DB::table('sports_games')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('points');
                    $tpoint = DB::table('certificates')
                                ->join('categories', 'certificates.category_id', '=', 'categories.id')
                                ->where('categories.code', '=', 'sg')
                                ->where('certificates.student_id', '=', $req->student_id)
                                ->sum('certificates.points');
                    $max = DB::table('sports_games')
                                ->where('activity_id',$req->activity_id)
                                ->where('level_id',$req->level_id)
                                ->value('max_points');
                    $total=$point + $tpoint;
                    $a=$point * $max;
                    if($a != 0){
                        if($total <= $max){
                            $cert=new certificate;
                            $cert->prize=$req->prize;
                            $cert->name=$req->name;
                            $image=$req->file('image')->store('certificates');
                            if($image != null){
                                $cert->image='storage/'.$image;
                            }
                            $cert->semester=$req->semester;
                            $cert->student_id=$req->student_id;
                            $cert->organized_by=$req->organized_by;
                            $cert->day=$req->day;
                            $cert->points=$point;
                            $cert->activity_id=$req->activity_id;
                            $cert->status=0;
                            $cert->category_id=$req->category_id;
                            $cert->staff_id=$req->staff_id;
                            $cert->level_id=$req->level_id;
                            $result=$cert->save();
                            if($result){
                                return["message"=>"Success"];
                            }
                            else{
                                return response()->json([
                                'message' => 'Request failed.'], 404);
                            }
                        }
                        else{
                            return response()->json([
                            'message' => 'Point is above the limit'], 403);
                        }}
                    else{
                        return response()->json([
                        'message' => 'Passed value contain error.'], 404);
                    }
                    break;

                    default:
                        return response()->json([
                        'message' => 'Does not satisfy any condition'], 404);
                    }

            }
        }

    function reject(Request $req){
        try{
            $cert= certificate::find($req->id);
            $cert->status=2;
            $cert->about=$req->about;
            $result=$cert->save();
            if($result){
                return response()->json([
                    'message' => 'Success'], 200);
            }
            else{
                return response()->json([
                    'message' => 'Failed to perform the action'], 404);
            }
        }
        catch(\Exception $e){
            $successStatus=400;
            return response()->json(['message'=>'failed', 'status'=>$successStatus]);
        }
    }

    function approve(Request $req){
        try{
            $cert= certificate::find($req->id);
            if($cert->status==0){
            $cert->status=1;
            $cert->about="Points are added";
            $stud= student::find($cert->student_id);
            $stud->points=$stud->points + $cert->points;
            if($cert->save() && $stud->save()){
                return response()->json([
                    'message' => 'Success'], 200);
            }
            else{
                return response()->json([
                    'message' => 'Failed to perform the action'], 404);
            }
        }
        else{
            return response()->json([
                'message' => 'Certificate already added'], 403);
        }
        }
        catch(\Exception $e){
            $successStatus=400;
            return response()->json(['message'=>'failed', 'status'=>$successStatus]);
        }
    }

}
