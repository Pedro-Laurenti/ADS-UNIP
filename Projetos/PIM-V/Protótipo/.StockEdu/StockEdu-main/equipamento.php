<?php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<link rel="icon" type="image/x-icon" href="img\2 - logo.png">
	<link rel="stylesheet" href="style-main.css">
	<meta charset="UTF-16">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://kit.fontawesome.com/09b3ced86b.js" crossorigin="anonymous"></script>
	<title>StockEdu - Equipamentos</title>
</head>
<body>
	<header id="header">
        <div class="centro">
            <a href="main.php">
                <img src="img/5 - logo-deitada.png" class="logo-hor" title="Logo StockEdu">
            </a>
        </div>
        <nav id="nav">
            <button id="btn-mobile"><i class="fa-solid fa-bars"></i>
            </button>
            <ul id="menu" role="menu">
                <li><a href="main.php">Equipamentos</a></li>
                <li><a href="main.php">Minhas aquisições</a></li>
            </ul>
        </nav>
    </header>
	<div id="wrapper">
        <main>
            <div id="wrapper-galer-prod">
                <div class="product-inside">
                    <img src="img\8 - produto-2.png" alt="Notebook">
                    <div class="description">
                    <h2>Notebook ABC123</h2>
                    <p>Este é um notebook com processador Intel Core i5, 8GB de RAM e 512GB de armazenamento SSD.</p>
                    <h3>Especificações técnicas:</h3>
                    <ul>
                        <li>Processador: Intel Core i5</li>
                        <li>Memória RAM: 8GB DDR4</li>
                        <li>Armazenamento: 512GB SSD</li>
                        <li>Tela: 14 polegadas</li>
                        <li>Resolução da tela: Full HD (1920 x 1080)</li>
                        <li>Placa de vídeo: Integrada Intel UHD Graphics</li>
                        <li>Sistema Operacional: Windows 10</li>
                        <li>Conectividade: Wi-Fi, Bluetooth, 3x USB, 1x HDMI, 1x RJ45, 1x entrada para fone de ouvido</li>
                        <li>Bateria: 3 células, 45Wh</li>
                        <li>Dimensões: 32,5 x 22,7 x 1,8 cm</li>
                        <li>Peso: 1,5 kg</li>
                    </ul>
                    </div>
                    <br>
                    <button class="add-to-cart">Adicionar ao carrinho</button>
                </div>
            </div>
            <div id="wrapper-galer-prod">
                <h2>Equipamentos disponíveis</h2>
                <hr>
                <br>
                <div class="product-grid">
                    <div class="product">
                        <a href="#" class="prod-cont">
                        <img src="img\7 - produto-1.png" alt="Produto 1">
                        <div class="product-details">
                            <h3>Datashow ProjeX</h3>
                            <li>Resolução: Full HD (1920x1080 pixels)</li>
                            <li>Luminosidade: 3500 lúmens</li>
                            <li>Contraste: 10000:1</li>
                            <u id="dash-do-prod">ver mais...</u>
                        </div>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#" class="prod-cont">
                        <img src="img\8 - produto-2.png" alt="Produto 2">
                        <div class="product-details">
                            <h3>Notebook InfinitoBook 5</h3>
                            <li>Processador: Intel Core i7</li>
                            <li>Armazenamento: SSD de 512 GB</li>
                            <li>Placa de vídeo: NVIDIA GeForce MX350</li>
                            <u id="dash-do-prod">ver mais...</u>
                        </div>
                        </a>
                    </div>
                    <div class="product">
                        <a href="#" class="prod-cont">
                            <img src="img\9 - produto-3.png" alt="Produto 3">
                            <div class="product-details">
                                <h3>Caixa de som BoomPod</h3>
                                <li>Potência de saída: 50W RMS</li>
                                <li>Resposta de frequência: 40Hz - 20kHz</li>
                                <li>Resistência à água: IPX5</li>
                                <u id="dash-do-prod">ver mais...</u>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="wrapper-galer-prod">
                <h2>Meus empréstimos</h2>
                <hr>
                <div id="minhas-requisicoes">
                    <div class="limite-cota">
                        <div class="progress-bar">
                            <div class="fill"></div>
                        </div>
                    </div>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th>Nome do item</th>
                                <th>Data de aquisição</th>
                                <th>Data de entrega</th>
                            </tr>
                        </thead>
                        <tbody class="lista-requisicoes">
                            <tr>
                                <td>Notebook</td>
                                <td>01/04/2023</td>
                                <td>05/04/2023</td>
                            </tr>
                            <tr>
                                <td>Caixa de som</td>
                                <td>02/04/2023</td>
                                <td>06/04/2023</td>
                            </tr>
                            <tr>
                                <td>Datashow</td>
                                <td>03/04/2023</td>
                                <td>07/04/2023</td>
                            </tr>
                            <tr>
                                <td>Câmera fotográfica</td>
                                <td>04/04/2023</td>
                                <td>08/04/2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
	<footer>
        <div id="wrapper-footer">
            <div id="col-1">
                <h2>Redes Sociais</h2>
                <div id="icons-footer">
                    <a href="" target="" rel=""><i class="fa-brands fa-facebook"></i></a>
                    <a href="" target="" rel=""><i class="fa-brands fa-twitter"></i></a>
                    <a href="" target="" rel=""><i class="fa-brands fa-instagram"></i></a>
                    <a href="" target="" rel=""><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
            <div id="col-2">

                <div>
                    <img src="img/3 - Logo-Completa.png" class="logo-rodape" title="Logo Magnificat">
                </div>

                <div>
                    Este aplicativo foi desenvolvido para um projeto científico promovido pela faculdade UNIP, ele NÃO FUNCIONA e não tem fins lucrativos.
                    <p id="estaeditoraetc">
                        <a href="http://stockedu.orbytesistemas.com/documentacao/" target="_blank" rel="site capela">
                            <u>Acesse aqui e saiba mais</u></a>
                    </p>
                </div>
            </div>
            <div id="col-3">
                <h2>Atendimento</h2>
                <div id="links-footer">
                    <div><i class="fa-brands fa-whatsapp"></i>&nbsp;&nbsp;&nbsp;<a
                            href="https://api.whatsapp.com/send?phone=5500000000" target="_blank"
                            rel="(62) 99433-1789">(00) 00000-0000</a></div>
                    <div id="mail-lign"><i class="fa-regular fa-envelope"></i>&nbsp;&nbsp;&nbsp;<a
                            href="mailto:orbyte.sistemas@gmail.com">contato.de.email@gmail.com</a></div>
                </div>
            </div>
        </div>
    </footer>
	<script src="script-main.js"></script>
</body>
</html>