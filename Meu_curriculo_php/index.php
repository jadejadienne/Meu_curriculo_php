<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Currículo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <?php
    $nomeCompleto = "Jadienne Costa Silva"; // Substitua pelo seu nome
    $idade = 21; // Substitua pela sua idade
    $fotoPerfil = "imagens/img.jpg"; // Caminho para sua foto
    ?>

    <div class="perfil">
        <img src="<?php echo $fotoPerfil; ?>" alt="Foto de Perfil">
        <h1><?php echo $nomeCompleto; ?></h1>
        <p>Idade: <?php echo $idade; ?> anos</p>
    </div>

    </header>

    <section id="Experiencia">
        <h2>Experiências</h2>
    <?php
        $experiencias = [
            [
                "empresa" => "IFCE - Inclusão Digital Através do Software Livre ",
                "cargo" => "Bolsista",
                "periodo" => "Nov. de 2023 – Maio. de 2024",
                "descricao" => "O projeto Inclusão Digital Através do Software Livre teve como objetivo ensinar e aprimorar os conhecimentos dos estudantes do EJA (Educação de jovens e adultos). Utilizando ferramentas de software livre, como o Linux, Windows e aplicativos gratuitos. Durante o período de novembro de 2023 a maio de 2024, foram ofertados oficinas e treinamentos para desenvolver habilidades digitais essenciais."
            ],
            [
                "empresa" => "IFCE - Lógica de programação",
                "cargo" => "Participante",
                "periodo" => "Ago. de 2022 – Dez. de 2022",
                "descricao" => "Participação no curso de Lógica de Programação oferecido pelo IFCE, com carga horária de 60 horas. Desenvolvimento de habilidades básicas em programação, resolução de problemas computacionais e fundamentos de algoritmos. Aprendizado de conceitos essenciais para o desenvolvimento de software."
            ]
        ];
        ?>

        <?php if (!empty($experiencias)): ?>
            <ul>
                <?php foreach ($experiencias as $experiencia): ?>
                    <li>
                        <h3><?php echo $experiencia["cargo"]; ?></h3>
                        <h4><?php echo $experiencia["empresa"]; ?></h4>
                        <p class="periodo"><?php echo $experiencia["periodo"]; ?></p>
                        <p><?php echo $experiencia["descricao"]; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Sem experiência profissional para mostrar.</p>
    <?php endif; ?>
    </section>

    <section id="cursos">
        <h2>Cursos e Formações</h2>
        
        <?php
        $cursos = [
            [
                "nome" => "Técnico em Informática",
                "instituicao" => "IFCE",
                "periodo" => "2019 - 2022",
                "status" => "Concluído"
            ],
            [
                "nome" => "Sistemas de Informação",
                "instituicao" => "IFCE",
                "periodo" => "2022 - 2026",
                "status" => "Cursando"
            ],
            [
                "nome" => "Técnico em Energias Renováveis",
                "instituicao" => "IFCE",
                "periodo" => "2024",
                "status" => "Concluído"
            ],
            [
                "nome" => "Técnico em Administração",
                "instituicao" => "IFCE",
                "periodo" => "2025 - 2026",
                "status" => "Cursando"
            ]
        ];
        ?>

        <?php if (!empty($cursos)): ?>
            <ul>
                <?php foreach ($cursos as $curso): ?>
                    <li>
                        <h3><?php echo $curso["nome"]; ?> - <?php echo $curso["status"]; ?></h3>
                        <h4><?php echo $curso["instituicao"]; ?></h4>
                        <p class="periodo"><?php echo $curso["periodo"]; ?></p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nenhum curso ou formação para mostrar.</p>
        <?php endif; ?>

    </section>

    <section id="habilidades">
        <h2>Habilidades</h2>

        <?php
        $habilidades = [
            "PHP" => 9.5,
            "JavaScript" => 6,
            "CSS" => 8,
            "Banco de Dados" => 10
        ];

        $hobbies = [
            "Hobby 1" => 7,
            "Hobby 2" => 5,
            "Hobby 3" => 3
        ];
        ?>

        <h3>Habilidades</h3>
        <?php if (!empty($habilidades)): ?>
            <ul>
                <?php foreach ($habilidades as $habilidade => $nivel): ?>
                    <li>
                        <p><?php echo $habilidade; ?></p>
                        <div class="barra-nivel">
                            <?php for ($i = 1; $i <= $nivel; $i++): ?>
                                <span class="preenchida"></span>
                            <?php endfor; ?>
                            <?php for ($i = $nivel + 1; $i <= 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo $nivel; ?>/10</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h3>Hobbies</h3>
        <?php if (!empty($hobbies)): ?>
            <ul>
                <?php foreach ($hobbies as $hobby => $interesse): ?>
                    <li>
                        <p><?php echo $hobby; ?></p>
                        <div class="barra-nivel">
                            <?php for ($i = 1; $i <= $interesse; $i++): ?>
                                <span class="preenchida hobby"></span>
                            <?php endfor; ?>
                            <?php for ($i = $interesse + 1; $i <= 10; $i++): ?>
                                <span></span>
                            <?php endfor; ?>
                        </div>
                        <p><?php echo $interesse; ?>/10</p>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Jadienne</p>
    </footer>
</body>
</html>
