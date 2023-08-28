<!DOCTYPE html>
<html>
<head>
    <title>Sistema de Avaliação com Estrelas</title>
    <link rel="stylesheet" href="styles.css">
    <script src="script.js"></script>
</head>
<body>
    <div class="rating">
        <h2>Item para Avaliar</h2>
        <p>Descrição do item...</p>
        <div class="stars">
            <form action="submit_rating.php" method="post">
                <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5" title="5 estrelas"></label>
                    <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4" title="4 estrelas"></label>
                    <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3" title="3 estrelas"></label>
                    <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="2 estrelas"></label>
                    <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1" title="1 estrela"></label>
                </fieldset>
                <button type="submit">Enviar Avaliação</button>
            </form>
        </div>
    </div>
</body>
</html>
