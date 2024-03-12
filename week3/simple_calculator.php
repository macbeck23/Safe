<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <script>
        function performAddition() {
            var num1 = parseFloat(document.getElementById("num1").value);
            var num2 = parseFloat(document.getElementById("num2").value);
            var sum = num1 + num2;
            alert("The sum is: " + sum);
        }
    </script>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form>
        <label for="num1">Number 1:</label>
        <input type="text" id="num1" name="num1"><br><br>
        
        <label for="num2">Number 2:</label>
        <input type="text" id="num2" name="num2"><br><br>
        
        <button type="button" onclick="performAddition()">Add</button>
    </form>
</body>
</html>
