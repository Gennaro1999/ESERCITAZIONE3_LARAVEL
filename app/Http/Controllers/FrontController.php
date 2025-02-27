<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    
    
    
    public static $articlelist = [
        ['title' => 'Guida cucina Italiana','slug' =>'guida-cucina-italiana', 'description' =>'Scopri i segreti della cucina italiana tradizionale con ricette autentiche dalle diverse regioni italiane.','image' => 'https://picsum.photos/id/12/1080/1920'],
        ['title' => 'Viaggio Toscana', 'slug' =>'viaggio-toscana','description' =>'Un itinerario di 7 giorni per esplorare le meraviglie artistiche e paesaggistiche della Toscana.','image' => 'https://picsum.photos/id/112/1080/1920'],
        ['title' => 'Storia arte rinascimentale', 'slug' =>'storia-arte-rinascimentale','description' =>'Un approfondimento sui grandi maestri del Rinascimento italiano e le loro opere più celebri.','image' => 'https://picsum.photos/id/9/1080/1920'],
        ['title' => 'Vini italiani degustazione','slug' =>'vini-italiani-degustazione', 'description' =>'Come riconoscere e apprezzare le diverse varietà di vini italiani, dalle tecniche di degustazione agli abbinamenti.','image' => 'https://picsum.photos/id/209/1080/1920'],
        ['title' => 'Festival estate2025', 'slug' =>'festival-estate-2025','description' =>'Calendario completo dei più importanti eventi musicali e culturali previsti per l\'estate 2025 in Italia.','image' => 'https://picsum.photos/id/1/1080/1920'],
    
    
       ];
    
    
    
    public function welcome(){
    return  view('welcome');
}
    public function homepage(){
    return view('pagehome');
}

  public function lista_articoli(){
  
    
  
       
    $titolo ='I Nostri Servizi';
 
     return view('articlelist',['articlelist' => self::$articlelist, 'titolo'=>$titolo]);
 
 
 }
  public function article ($articolo){
    
    
    $articlelist = [
     ['title' => 'Guida cucina Italiana', 'description' =>'Scopri i segreti della cucina italiana tradizionale con ricette autentiche dalle diverse regioni italiane.','image' => 'https://picsum.photos/id/12/1080/1920'],
     ['title' => 'Viaggio Toscana', 'description' =>'Un itinerario di 7 giorni per esplorare le meraviglie artistiche e paesaggistiche della Toscana.','image' => 'https://picsum.photos/id/112/1080/1920'],
     ['title' => 'Storia arte rinascimentale', 'description' =>'Un approfondimento sui grandi maestri del Rinascimento italiano e le loro opere più celebri.','image' => 'https://picsum.photos/id/9/1080/1920'],
     ['title' => 'Vini italiani degustazione', 'description' =>'Come riconoscere e apprezzare le diverse varietà di vini italiani, dalle tecniche di degustazione agli abbinamenti.','image' => 'https://picsum.photos/id/209/1080/1920'],
     ['title' => 'Festival estate2025', 'description' =>'Calendario completo dei più importanti eventi musicali e culturali previsti per l\'estate 2025 in Italia.','image' => 'https://picsum.photos/id/1/1080/1920'],
 
 
    ];
 
    foreach (self::$articlelist as $article){
     
     if($articolo == $article['slug']){
         return view('detail',['article' => $article]);
     }
 }
 
    
     
     
     
     
     
     
     
     
     
     
    
 }




} 