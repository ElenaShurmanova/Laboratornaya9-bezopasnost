<!DOCTYPE html>
<html>
    <head>
    </head>
        <script>
            var k = +prompt("Введите обычное число");
            var c = +prompt("Введите модуль");
            
            for(var i = 0; i < c; i++){
                console.log(k);
                console.log(c);
                var r = (k * c)%c;
                console.log(k +" * " + i + " % " + c + " = "+ r +' s ' + " mod: "+ c);

                if(r == 1){
                    console.log("result: " + i);
                    break;    
                }
            }
        </script>
    <body>
    </body>
</html>