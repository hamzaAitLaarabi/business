<?php

namespace App\Http\Controllers;
use App\Models\Stock ;
use Illuminate\Http\Request;
class SettingsController extends Controller
{
    public function add_stock(Request $req)
    {

        $v = $req->input('val');
        // $message_ar = $req->input('stock_ar');
        $i=[
'Perfect',
'Veri Good',
'Good',
'Broken Screen ',
'Pieces',

];









// brouillion    parantes  #########################################   
//if((str_starts_with($j, ''))){ 
$c = count($i);
$res = [];
$d = 0;
foreach($i as $j){ $res[$d] = trim($j); $d++;}
$r = array_unique($res);
$n = count($r);
 $d = 1;
 foreach($r as $j){  
    if($d){
        if($j){
            $stock[$d] = $j;
            $d++; 
            }       
        }else{$d++;}
    }
    
     // return dd($stock);


           
                $id = 1;
            foreach($stock as $j){          
                $stock = Stock::find($id);
                
                    while(!$stock){
                        $id++;
                        $stock = Stock::find($id);
                    }
                    if(strlen($j)>1){
                        if($j){
                            $stock->etate = $j;
                            $stock->save();$id++; 
                            }       
                    }
                    
            }
                                               
                return redirect()->back()->with('stock',"This has been added : old $c - new $n - id : $id");

#######################################################
        $c = count($i);
        $r =array_unique($i);
        $n = count($r);
                   
                        $id = 1;
                    foreach($i as $j){          
                        $stock = Stock::find($id);
                        while(!$stock){
                            $id++;
                            $stock = Stock::find($id);
                        }
                                if(strlen($j)>1){
                                      $stock->company_auto = NULL;
                                      //    $test[$id] = $j;$id++;
                                    $stock->save();$id++;                                           
                                    }
                            
                    }
                       // return dd($test);                             
                        return redirect()->back()->with('stock',"This has been added : $c - $n - $id");
         
        


       

############################################################

$c = count($i);
$r =array_unique($i);
$n = count($r);
           
                $id = 1;
            foreach($i as $j){          
                $stock = Stock::find($id);
                while(!$stock){
                    $id++;
                    $stock = Stock::find($id);
                }
                        if($j){
                            if(!($j[0]=='(')){
                                $stock->tv = $j;
                                $stock->save();$id++; 
                                }       
                            }
                    
            }
                                               
                return redirect()->back()->with('stock',"This has been added : $c - $n - $id");
 

       
    }
}
