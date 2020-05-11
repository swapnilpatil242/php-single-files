
# armstrong number :

function arm($num)
{
 $sum=0;
 //temp variable to store the real value
 $temp=$num;
 while($temp!=0)
 {
  //to extract the last digit of the number
  $rem=$temp%10;
  //to make power of the digit adding the value to sum, which is calculate in the before iteration
  //strlen function returns the length of the number 
  $sum=$sum+$rem**strlen($num);
  //to extract the first n-1 digits as a number
  $temp=$temp/10;
 }
 //if the sum value is equal to number, then armstrong
 if($num==$sum)
  return TRUE;
 else
  return FALSE;
}
$msg="Enter a number:";
echo $msg;
//takes input of a number to check whether it is armstrong
$num=trim(fgets(STDIN, 1024));
//calling arm function
if(arm($num))
 echo "armstrong number\n";
else
 echo "not a armstrong number\n";
?>
====================================================
# Factorial ::

function factorial($number)
{ 
  if ($number ==1 || $number==0) 
   return 1; 
  else 
   //recursive function
   return ($number * factorial($number-1)); 
}
echo "Enter a number to find its factorial:";
//number to find the factorial
$k=trim(fgets(STDIN, 1024)); 
//calling factorial function 
echo "factorial is:".factorial($k)."\n";
====================================================




====================================================




====================================================




====================================================

