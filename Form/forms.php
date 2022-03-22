<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<title>Form class exercise</title>
<link href="css/forms.css" type="text/css" rel="stylesheet">
 </head>
    
    
<body>
    
<form action="formhandler.php" method="post">
<fieldset><label>Name</label>
<input type="text" name="name">
<span> <?php echo $nameErr; ?>        </span>    
    
    
 <label>Email</label>
<input type="email" name="email"> 
<span> <?php echo $emailErr; ?>        </span>  
    
 <label>Your Payment</label>
   
    <ul>
   <li><input type="radio" name="payment" value="amx">AMX </li>
    <li><input type="radio" name="payment" value="mc">Mastercard </li>
    <li><input type="radio" name="payment" value="visa">Visa </li>
     <li><input type="radio" name="payment" value="discover">Discover </li>
        
         
 </ul>
   <span> <?php echo $paymentErr; ?>        </span> 
    
    
  <label>Your Wines</label>
    <ul>
   <li><input type="checkbox" name="wines[]" value="cab">Cabernet </li>
     <li><input type="checkbox" name="wines[]" value="merlot">Merlot </li>    
     <li><input type="checkbox" name="wines[]" value="syrah">Syrah </li>
     <li><input type="checkbox" name="wines[]" value="malbec">Malbec </li>
     <li><input type="checkbox" name="wines[]" value="red">Red Blend</li>
    
    </ul>
  <span> <?php echo $wineErr; ?>        </span>   
    
<label>Your Region</label>    
<select name="regions">
<option value="NULL">Select one</option>
 <option value="nw">Northwest</option>   
 <option value="sw">Southwest</option>   
 <option value="mw">Midwest</option>   
  <option value="south">South</option>
    <option value="west">West</option>
    <option value="north">North</option>
    
    
</select>
    
 <span> <?php echo $regionsErr; ?>        </span>    
    
<label>Comments</label>
<textarea name="comments"></textarea>
<span> <?php echo $commentsErr; ?>        </span>     
<input type="submit" name="submit" value="Confirm">
    
    
</fieldset>

</form> 
</body>
</html>
