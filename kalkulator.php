<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form> 
            <input type="text" name="uno" placeholder="uno">
            <input type="text" name="dos" placeholder="dos">        
            <select name="operacija">
                <option>Zbroji</option>
                <option>Oduzmi</option>
                <option>Monozi</option>
                <option>Podjeli</option>
            <select>  
                <br> 
               <button type="submit" name="submit" value="submit">Rjesi ga!</button>    
                <form>
                    <p> Rezultat:</p>
                    
                    
                    <?php
        if (isset($_GET[`submit`])){
                $broj1 = filter_input(uno);
                $broj2 = filter_input(dos)[`dos`];
                $rezultat = filter_input(rezultat)[`rezultat`];
        switch($rezultat){
            case "Zbroji":
            echo $broj1 + $broj2;
            break;    
            case "Oduzmi":
            echo $broj1 - $broj2;
            break;
            case "Mnozi":
            echo $broj1 * $broj2;
            break;  
            case "Podjeli":
            if ($broj2==0){;
                echo Neces majku ti jebem, neces;
            }
            else echo $broj1 / $broj2;  
                
            break;  
            }
        }
?>