<x-layout>
 <x-navbar />

 

      <div class="card text-center">
        <div class="card-header">
          
        </div>
        <div class="card-body">
          <h5 class="card-title">{{$titolo}}</h5>
          <p class="card-text"></p>
         
        </div>
        <div class="card-footer text-body-secondary">
         
        </div>
      </div>


      <div class="container gap-2 d-flex">


  
        @foreach ($articlelist as $article )
        <x-card :article="$article"/> 
       
         
        @endforeach
        
       
        </div>
 
</x-layout>       