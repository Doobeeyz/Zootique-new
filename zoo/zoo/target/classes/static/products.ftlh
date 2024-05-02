<!DOCTYPE html>
<html>
<head>
    <title>Zoo</title>
</head>
<body>
<#list products as product>
    <div>
        <p><b>${product.title]}</b>${product.price}| <a href="/product/${product.id}">Подробнее...</a></p>
    </div>
</#list>
<hr>
<h3>Создать новый товар</h3>
</body>
</html>