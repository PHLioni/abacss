<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="nav-tabs">
        <ul>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab1" checked>
                <label for="tab1">PHP cURL</label>
                <div class="content">
                    <code>
                        def Soma1aN(N):
                        if N==1: return(1)
                        else: return (N+Soma1aN(N-1)) # note-se a ativação recursiva

                        # Uso da função
                        N=int(input('Entre com o valor de N: '))
                        print('A soma de 1 a', N, 'é', Soma1aN(N))
                    </code>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab2">
                <label for="tab2">Python</label>
                <div class="content">
                    <article>
                        Ariane"
                    </article>

                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab3">
                <label for="tab3">Java</label>
                <div class="content">
                    <article>
                        Anthony
                    </article>
                </div>
            </li>
            <li>
                <input type="radio" name="tabs" class="rd_tabs" id="tab4">
                <label for="tab4">NodeJS</label>
                <div class="content">
                    <article>
                        Laura
                    </article>
                </div>
            </li>
        </ul>

    </nav>


</body>
<script src="abas.js"></script>

</html>