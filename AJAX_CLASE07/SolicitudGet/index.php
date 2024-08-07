<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Ejemplo AJAX - GET </title>
    <script>
        function loadData() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'https://jsonplaceholder.typicode.com/posts/1', true);
            xhr.onreadystatechange = function(){
                if (xhr.readyState == 4 && xhr.status == 200){
                    var post = JSON.parse(xhr.responseText);
                    document.getElementById('result').innerHTML = 'Titulo: ' + post.title + '<br>Contenido: ' + post.body;
                }
            };
            xhr.send();
        }
    </script>
</head>
<body>
    <h1>Ejemplo AJAX - Solicitud GET</h1>
    <button onclick="loadData()">Cargar Datos</button>
    <div id="result"></div>
    
</body>
</html>