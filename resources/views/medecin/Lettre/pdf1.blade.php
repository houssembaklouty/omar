<html lang="en"><head>
    <meta charset="utf-8">
    <title>lettre</title>
    <link rel="stylesheet"  media="all">
  </head>
 
  <body>
    <div class="border"> 
      <header class="clearfix">
      
   
      <div style id="company" class="border">
          

        <div class="center">Dr Mohamed Mssedi</div>
        <div class="center">Ancien Professeur en Médecine à l'hopital Sahloul <br />Churigie orthopédique et traumatologique </div>
          ------------------------
        <div class="center"><span>Numero :</span>+216 747 474 74</div>
          
          
        <div class="center"><span>EMAIL :</span> <a>dr.mseddi.mohamed@gmail.com</a></div>
          -------------------------
        <div><span>DATE :</span> 12/17/2015</div>
      </div>
      <div id="project">
           <center><h1>Lettre de liaison </h1></center> 
        <div><span>PATIENT :</span> mmm</div>
        
        
      </div>
    </header>

 
  Mon cher confrère,
Je vous adresse M,X, âgé de ……………… qui m'a consulté pour
………………………………………………………………………………………………
L'interrogatoire a précisé les antécédents suivants
L'histoire de la maladie fait noter

L'examen clinique ,ce jour( {{$lettre->created_at }} ) Trouve …………………
…………………..localisation(s), stade(s) inflammatoire(s),lésion(s)
dont les plus grandes dimensions sont ………………………………..
……………………………………………………………………………………………..
L'état ganglionnaire est le suivant :…………………………………..
…………………………………………………………………………………………….
…………………………………………………………………………………………….
Les examens radiologiques dont je dispose ce jour, montrent
……………………………………………………………………………………………..
……………………………………………………………………………………………..
Je vous le confie pour avis et traitement
ou
Je vous l'adresse pour avis,
je vous remercie de l'attention que vous lui portez et vous prie
se croire, Mon cher confrère, en l'expression de mes sentiments 
confraternels, 

 <table class="table table-bordered">
      <tr>
        <td>
          {{$lettre->created_at }}
        </td>
        <td>
          {{$lettre->SpecConf}}
        </td>
      </tr>
      <tr>
        <td>
          {{$lettre->descSante}}
        </td>
        <td>
          {{$lettre->id}}
        </td>
      </tr>
    </table>
 </div>

    <footer>
    <div class="center" style="position:absolute;left:47.28px;top:900px"><span>ADDRESSE : </span> Centre medical el bassatine 2éme étage num 21 devant clinique el basatine</div>
      <div style="position:absolute;left:28.56px;top:850.72px" ></div>

<div style="position:absolute;left:47.28px;top:900px" ><span></span></div>    </footer>
 
</body></html>

