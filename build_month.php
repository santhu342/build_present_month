<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class='row'>
<div class="col-sm-3 col-md-3" >
            
  <h3>Present Month Details</h3>
  <div class="panel panel-primary">
    <div class="panel-heading">Month & Year</div>
    <div class="panel-body"> 
    <?php 
    
    $month_start = strtotime('first day of this month', time());
    $st_day =  date('N', $month_start).'<br/>';
    
    $month_end = strtotime('last day of this month', time());
    $end_day = date('j', $month_end);
    
    if($st_day == 7)
    {
        $st_day = 0;
    }
    
    echo "<p>".date('F \& Y')."</p>";
    
    ?>
    <p> </p>
    
    <div class="table-responsive " style="border: 1px solid #c5c5c5; padding: .2em .2em 0;">
    <table style="width: 100%; margin: 0 0 .4em;  ">
    <tr align='center' ><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr>
    <?php 
    echo "<tr align='center' >";
    $j=0;$day =0;
    for($i=1;$i<=$end_day;$i++)
    {
        
        if($st_day == $j)
        {
            $day++;
            $st_day = 10;
        }
        if($day == 0)
        {
            echo "<td>&nbsp </td>"; 
            $i=0;
        }
        else
        {
            
            echo "<td>$day </td>"; 
            $day++;
            
        }
        
        
        $j++;
        if($j%7 == 0)
        {
            if($i == $end_day)
            {
                
            }
            else
            {
            echo "</tr><tr align='center'>";
            $j=0;
            }
        }
    }
    
echo "</tr>"
    ?>
</table>          
</div>
</div>
</div>
</div>
</div>
