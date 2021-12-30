<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="recursos\CSS\estilo.css">
    <title>Curso PHP</title>
</head>
<body>
    <header class="cabecalho">
        <h1>Curso PHP</h1>
        <h2>Índice dos Exercícios</h2>
    </header>
    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Básico</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=basico&file=ola">
                                Olá PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=html">
                                Integração HTML
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=css">
                                Integração CSS
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=comentarios">
                                Comentarios PHP
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=basico&file=desafio">
                                Desafio PHP
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Tipos</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=int">
                                Tipo Inteiro
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=tipos&file=float">
                                Tipo Float
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Variáveis</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=basico">
                                Variáveis
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=desafio_equacao">
                                Desafio Equação
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=variaveis&file=desafio_variaveis">
                                Desafio Variáveis
                            </a>
                        </li>                        
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>If Else</h3>
                    <ul>
                        <li>
                            <a href="exercicios.php?dir=controle&file=if_else">
                                If Else
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=controle&file=desafio_operadores_logicos">
                                Desafio Operadores Lógicos
                            </a>
                        </li>
                        <li>
                            <a href="exercicios.php?dir=controle&file=desafio_switch">
                                Desafio Switch
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        COD3R & ALUNOS <?= date('Y'); ?>
    </footer>
</body>
</html>