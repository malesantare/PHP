<?php
require_once "team.php";

class Group extends Team
{ 
    public $nameofgroup,$stackname,$name,$nameofnation;
    public int $count = 0;

    function __construct($nameofgroup)
    {
        $this->nameofgroup = $nameofgroup;
    }
     
    function displayStack()
    {
      print_r ($this->stackname);
    }

    function addTeam(Team $team)
    {

     $this->count++;
     $this->stackname[$this->count]=$team;

    }

    function generatemass($count)
{
  for ($i=1; $i<=$count ; $i++)
  {
    $array[$i] = $i;
  }
  
  if ($count % 2 != 0)
  {
    $array[$count+1]=NULL;
  }
  return  $array;
}

    function generateCalendar()
{
  echo "<center>".' '.$this->nameofgroup. ' '."</center>";

   $array = $this->generatemass(count( $this->stackname));

    $userteam= $this->stackname;

   for ($tour= 1; $tour < count( $this->stackname); $tour++)
   {
    $array1 = $array;
    
    echo "<center>".'  Тур номер '.$tour. ' '."</center>";
    echo "<p></p>";
     $length = count( $this->stackname);
     if ( count( $this->stackname) %2 !=0){
     $length++;
     }
    for ($i= 1;$i <=intdiv($length,2);$i++)
    {

    $j = $length-$i+1;




      if (($array[$i]!=null ) && ($array[$j]!=null))
      {
      
       echo "<center>".$userteam[$array[$i]]->name.'('.$userteam[$array[$i]]->nameofcountry.')'.'=>'.$userteam[$array[$j]]
       ->name.'('.$userteam[$array[$j]]->nameofcountry.')'."</center>";
       echo "<p></p>";
      }
  
    }

     for ($i=2; $i<=count( $this->stackname) ; $i++)
    {
      if ($i==2)
      {
        $array[$i] = $array1[count( $this->stackname)];
      }
     else
      {
        $array[$i] = $array1[$i-1];
      }
     }
    }
}
}

?>