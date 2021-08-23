<?php
 
require('fpdf/fpdf.php');

 
 require 'phpmailer/PHPMailerAutoload.php';
if(! empty($_POST['submit'])){
 $name=$_POST['name'];
 $telephone=$_POST['telephone'];
 $email=$_POST['email'];
 $position=$_POST['position'];
 
 
 //referral source
 $referral=$_POST['referral'];
 //age
  $years=$_POST['years'];
  //applied before
  $applied=$_POST['applied'];
  //elegibility
 $elegibility=$_POST['elegibility'];
// most recent work
  $wrefname1=$_POST['wrefname1'];
   $wrefaddress1=$_POST['wrefaddress1'];
    $refposition1=$_POST['refposition1'];
	
	$wrefskills1=$_POST['wrefskills1'];
	
	$wrefsupervisor1=$_POST['wrefsupervisor1'];
	$wrefphone1=$_POST['wrefphone1'];
	$warrival2=$_POST['warrival2'];
	$wrefleave2=$_POST['wrefleave2'];
	$wrefreson2=$_POST['wrefreson2'];
	
//Education
$highschoolname=$_POST['highschoolname'];
$highyears=$_POST['highyears'];
$highmajor=$_POST['highmajor'];
$highgraduated=$_POST['highgraduated'];

$collageschoolname=$_POST['collageschoolname'];
$collageyears=$_POST['collageyears'];
$collegemajor=$_POST['collegemajor'];
$collegegraduated=$_POST['collegegraduated'];

$tradeSchool=$_POST['tradeSchool'];
$tradeschoolyears=$_POST['tradeschoolyears'];
$tradeschoolymajor=$_POST['highschoolname'];
$tradeschooldegree=$_POST['tradeschooldegree'];

$aditionalinstitudschoolname=$_POST['aditionalinstitudschoolname'];
$aditionalinstitudyears=$_POST['aditionalinstitudyears'];
$aditionalinstitudschoolmajor=$_POST['aditionalinstitudschoolmajor'];
$aditionalinstitudschooldegree=$_POST['aditionalinstitudschooldegree'];

// Skills and Qualification
$Otherqualifications=$_POST['skillabilitieshonor'];
$equipqualifyoperate=$_POST['equipqualifyoperate'];
$certification=$_POST['certification'];
$aditionalskills=$_POST['aditionalskills'];


//References

$prefname1=$_POST['prefname1'];
$prefocupation1=$_POST['prefocupation1'];
$Companie1=$_POST['Companie1'];
$prefphone1=$_POST['prefphone1'];

$prefname2=$_POST['prefname2'];
$prefocupation2=$_POST['prefocupation2'];
$Companie2=$_POST['Companie2'];
$prefphone2=$_POST['prefphone2'];




//create a new pdf instance
$pdf=new FPDF();
//add a page to the pdf
$pdf->AddPage(); 

$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"Aplicant Information",1,1,C);

$pdf->Cell(30,10,"Name : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$name,1,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"position : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$position,1,1); 
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Phone : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$telephone,1,1);
$pdf->SetFont("Arial","B",12);

 
$pdf->Cell(30,10,"Email : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$email,1,1);

$pdf->Ln();
$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Referral Source : ",0,0);
$pdf->SetFont("Arial","",12);
$pdf->Cell(50,10,$referral,0,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(70,10,"Are you 18 years of age older? :",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$years,0,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(120,10,"Have you ever applied with Republic-Foods before? :",0,0);
$pdf->SetFont("Arial","",12);


$pdf->Cell(30,10,$applied,0,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(130,10,"Are you legally authorized to work in the United States ?",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(30,10,$elegibility,0,1);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);

$pdf->Cell(0,10," List Most Recent Employer",1,1,C);

$pdf->Cell(50,10,"Companie Name: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefname1,0,1);


$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Address: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefaddress1,0,1);


$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Position Title : ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$refposition1,0,1);


$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Skills: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefskills1,0,1);


$pdf->SetFont("Arial","B",12);
$pdf->Cell(50,10,"Supervisor : ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefsupervisor1,0,1);


$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Phone : ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefphone1,0,1);


$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Arrival Date: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$warrival2,0,1);

$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Leaving Date: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefleave2,0,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Reason for leaving: ",0,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$wrefreson2,0,1);
$pdf->Ln();
//Education
$pdf->SetFont("Arial","B",12);

$pdf->Cell(0,10,"Education ",1,1,C);


//High School
$pdf->Cell(50,10,"High School Name",0,0);
$pdf->Cell(50,10,"Years Completed",0,0);
$pdf->Cell(30,10,"Major",0,0);
$pdf->Cell(50,10,"Graduated?",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$highschoolname,0,0);
$pdf->Cell(50,10,$highyears,0,0);
$pdf->Cell(30,10,$highmajor,0,0);
$pdf->Cell(30,10,$highgraduated,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
//College
$pdf->Cell(50,10,"College Name",0,0);
$pdf->Cell(50,10,"Years Completed",0,0);
$pdf->Cell(30,10,"Major",0,0);
$pdf->Cell(50,10,"Graduated?",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$collageschoolname,0,0);
$pdf->Cell(50,10,$collageyears,0,0);
$pdf->Cell(30,10,$collegemajor,0,0);
$pdf->Cell(30,10,$collegegraduated,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
//Trade School
$pdf->Cell(50,10,"Trade School Name",0,0);
$pdf->Cell(50,10,"Years Completed",0,0);
$pdf->Cell(30,10,"Major",0,0);
$pdf->Cell(50,10,"Graduated?",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$tradeSchool,0,0);
$pdf->Cell(50,10,$tradeschoolyears,0,0);
$pdf->Cell(30,10,$tradeschoolmajor,0,0);
$pdf->Cell(30,10,$tradeschooldegree,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
//Other School
$pdf->Cell(50,10,"Other",0,0);
$pdf->Cell(50,10,"Years Completed",0,0);
$pdf->Cell(30,10,"Major",0,0);
$pdf->Cell(50,10,"Graduated?",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$aditionalinstitudschoolname,0,0);
$pdf->Cell(50,10,$aditionalinstitudyears,0,0);
$pdf->Cell(30,10,$aditionalinstitudschoolmajor,0,0);
$pdf->Cell(30,10,$aditionalinstitudschooldegree,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);
//Other qualifications
$pdf->Cell(50,10,"Other qualifications such as special skills, abilities or honors that should be considered",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$Otherqualifications,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Type of computers, software and other equipment you are qualified to operate or repair",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$equipqualifyoperate,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Professional license, certification or registrations",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$certification,0,0);
$pdf->Ln();
$pdf->SetFont("Arial","B",12);

$pdf->Cell(50,10,"Additional skills",0,1);
$pdf->SetFont("Arial","",12);

$pdf->Cell(50,10,$aditionalskills,0,0);
$pdf->Ln();

//References
$pdf->SetFont("Arial","B",12);
$pdf->Cell(0,10,"References",1,1,C);

$pdf->Cell(30,10,"Name : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefname1,1,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Occupation : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefocupation1,1,1); 
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Companie : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$Companie1,1,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Phone : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefphone1,1,1);
$pdf->SetFont("Arial","B",12);
$pdf->Ln();

$pdf->Cell(30,10,"Name : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefname2,1,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Occupation : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefocupation2,1,1); 
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Companie : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$Companie2,1,1);
$pdf->SetFont("Arial","B",12);

$pdf->Cell(30,10,"Phone : ",1,0);
$pdf->SetFont("Arial","",12);

$pdf->Cell(0,10,$prefphone2,1,1);
$pdf->SetFont("Arial","B",12);


//output to the browser
$pdf->output('newapplication.pdf','F');
 
 //sendEmail($mypdf);
 



$mail = new PHPMailer;
try{

$mail->SMTPDebug =0;      


/*$mail->isSMTP();
$mail->Host = 'localhost';
$mail->SMTPAuth = false;
$mail->SMTPAutoTLS = false; 
$mail->Port = 25; */

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host ='a2plcpnl0823.prod.iad2.secureserver.net';  // Specify main and backup SMTP servers
$mail->SMTPAuth =false;                               // Enable SMTP authentication
$mail->Username ='sender@republic-foods.com';                // SMTP username
$mail->Password ='0717202@R';                           // SMTP password
$mail->SMTPSecure ='tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port =25;                                  // TCP port to connect to

$mail->setFrom('sender@republic-foods.com', 'Mailer');
$mail->addAddress('tcamara@republic-foods.com', 'Sanamba');     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML
$mail->addAttachment('newapplication.pdf');
$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';


 $mail->send();
    echo 'Message has been sent';
	header("Location: newjoin.html?mailsend");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	
}
 
} 
 

?>	 