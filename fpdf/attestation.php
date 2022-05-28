<?php
require('fpdf.php');
require('../db_connect.php');

mysqli_select_db($conn,'phppdf');
class PDF extends FPDF
{
  

// En-tête
function Header()
{
    
     // Logo
     $this->Image('ensa.png',10,6,30);
     $this->Image('ucd.png',170,15,30);
     // Police Arial gras 15
     $this->SetFont('Arial','B',15);
     
     $this->Ln(30);
     
     // Titre
     $this->Cell(0,10,'ATTESTATION','TB',0,'C');
     // Saut de ligne
     $this->Ln(40);


    
// Début en police Arial normale taille 10

$this->SetFont('Arial', '', 15);
$h = 7;
$retrait = "           ";

$this->Write($h, "Je soussigne     	: Aziz DAHBI   \n");
$this->Ln(10);
$this->Write($h,"Fonction : Chef de departement Telecommunications, Reseaux et Informatique (TRI)  a l'ENSA d'El Jadida ");

$this->SetFont('Arial', '', 15);
$this->Write($h,"Atteste que le professeur ");
$this->SetFont('Arial', 'B', 15);
$this->Write($h," Asmaa Hannani ");
$this->SetFont('Arial', '', 15);
$this->Write($h," a assure la responsabilite modules mentionnes dans le tableau ci-dessous : \n");
$this->Ln(5);

//cell with left and right borders
$this->SetFillColor(180,180,255);
$this->SetDrawColor(50,50,100);
$this->cell(50,10,'Intitule du module',1,0,'TB',true);
$this->cell(50,10,'Filiere d attache',1,0,'TB',true);
$this->cell(50,10,'Annee',1,1,'TB',true);
$this->cell(50,10,'JAVA',1,0,'TB',0);
$this->cell(50,10,'ISIC',1,0,'TB',0);
$this->cell(50,10,'2020-2022',1,1,'TB',0);
}


// Pied de page
function Footer()
{
    // Positionnement à 1,5 cm du bas
    $this->SetY(260);

    // Police Arial italique 8
    $this->SetFont('Arial','B',8);
    $h = 7;
    $this->Cell(55);
    $this->Write($h, "Route Nationale N1 ( Route AZZEMOUR ) , KM 6 , ELHAOUZIA \n");
    $this->Cell(70);
    $this->Write($h, "BP :1166 El jadida Plateau 24002. MAROC \n");
    $this->Cell(50);
    $this->Write($h, "Telephone :+212 523 39 56 79  +212 523 3448 22 fax: +212 523 39 49 15 \n");
    $this->Cell(85);
    $this->Write($h, "www.ensaj.ac.ma \n");



    
}
}
// Instanciation de la classe dérivée
$pdf = new PDF();
$pdf->addpage();
$query=mysqli_query($conn,'select intitule,responsable from module where responsable = 9');
while($data=mysqli_fetch_array($query)){

}
$pdf->Output();
?>