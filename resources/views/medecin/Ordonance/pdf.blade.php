<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ordonance</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
    <div style="position:absolute;top:0px;overflow:hidden">


  <body>
    <header class="clearfix">
      
   
      <div style id="company" class="clearfix">
          

        <div class="center">Dr Mohamed Mssedi</div>
        <div class="center">Ancien Professeur en Médecine à l'hopital Sahloul <br />Churigie orthopédique et traumatologique </div>
          ------------------------
        <div class="center"><span>Numero :</span>+216 747 474 74</div>
          
          
        <div class="center"><span>EMAIL :</span> <a>dr.mseddi.mohamed@gmail.com</a></div>
          -------------------------
        <div><span>DATE :</span> 12/17/2015</div>
      </div>
      <div id="project">
           <center><h1>Ordonance Médical </h1></center> 
        <div><span>PATIENT :</span> aaa aaaa</div>
        
        
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">nom du medicament</th>
            <th class="desc">dosage du medicament</th>
            <th>forme du medicament</th>
            <th>quantite medicament prise</th>
            <th>nombre de fois/jour</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="service">D</td>
            <td class="desc">C</td>
            <td class="unit">00</td>
            <td class="qty">26</td>
            <td class="total">1</td>
          </tr>
          <tr>
            <td class="service">D</td>
            <td class="desc">De</td>
            <td class="unit">0</td>
            <td class="qty">80</td>
            <td class="total">00</td>
          </tr>
          <tr>
            <td class="service">S</td>
            <td class="desc">Op</td>
            <td class="unit">00</td>
            <td class="qty">20</td>
            <td class="total">00</td>
          </tr>
          <tr>
            <td face="Verdana" class="service">T</td>
            <td class="desc">t</td>
            <td class="unit">00</td>
            <td class="qty">4</td>
            <td class="total">00</td>
          </tr>
         
        
   
        
        </tbody>
      </table>
   
    </main>
              </body></div>

    <footer>
      <div class="center" style="position:absolute;left:47.28px;top:900px"><span>ADDRESSE : </span> Centre medical el bassatine 2éme étage num 21 devant clinique el basatine</div>
      <div style="position:absolute;left:28.56px;top:850.72px" class="cls_004"></div>

<div style="position:absolute;left:47.28px;top:900px" ><span></span></div>
    </footer>
</html>


----------------------------------------
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      
    <table class="table table-bordered">
      <tr>
        <td>
          {{$ord->dos_medic}}
        </td>
        <td>
          {{$ord->formMedic}}
        </td>
      </tr>
      <tr>
        <td>
          {{$ord->QuantiteMedic}}
        </td>
        <td>
          {{$ord->nbrFoisMedic}}
        </td>
      </tr>
    </table>
  </body>
</html>