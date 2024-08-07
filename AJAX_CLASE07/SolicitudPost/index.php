<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Ejemplo AJAX - POST </title>
    <script>
        function sendData(){
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'https://jsonplaceholder.typicode.com/posts', true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 201){
                    var post = JSON.parse(xhr.responseText);
                    document.getElementById('result').innerHTML = 'ID: ' + post.id + '<br>Título: ' + post.title + '<br>Contenido: ' + post.body;
                }
            };
            var data = JSON.stringify({title: 'foo', body: 'bar', userId: 1});
            xhr.send(data);
        }
    </script>
</head>
<body>
    <h1>Ejemplo AJAX - Solicitud POST</h1>
    <button onclick="sendData()">Enviar Datos</button>
    <div id="result"></div>
    
</body>
</html>