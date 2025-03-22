<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function basicFunction(){
            alert("Javascript Demo");
        }
        function confirmExample(){
            const status = confirm("You want to delete data?");
            if(status){
                alert("data deleted");
            }
            else{
                alert("try again");
            }
        }
        function checkEvenOdd(){
            const num = prompt("Enter number",123);
           if(num%2==0){
            alert(num+" is Even")
           }
           else{
            alert(num+" is Odd")
           }
        }
    </script>
</head>
<body>
    <button onclick="basicFunction()">Click Me</button>
    <button onclick="confirmExample()">Check</button>
    <button onclick="checkEvenOdd()">CheckEven Or Odd</button>
</body>
</html>