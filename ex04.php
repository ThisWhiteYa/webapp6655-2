<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function test($s){
            $ctr_aa = 0;
            $i = 0;
            while($i < (strlen($s)-1)){
                if($i < (strlen($s)-1)){
                    if (substr($s,$i,2) == "aa"){
                        $ctr_aa += 1;   
                        $i += 1;
                    }
                    else{
                        $i += 1;
                    } 
                }

                else{
                    break;}
                }
            return $ctr_aa;
        }
        echo(test("bbaaccaag"));
        echo(test("่jikoaaasew"));
        echo(test("JSaaakoiaa"));
    ?>
</body>
</html>