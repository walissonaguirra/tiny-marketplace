<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">
        <style>
            form {
                margin-bottom: 0px;
            }

            .d-flex {
                display: flex;
            }

            .flex-column {
                flex-direction: column;
            }

            .align-items-center {
                align-items: center
            }

            .justify-content-center {
                justify-content: center;
            }

            .justify-content-between {
                justify-content: space-between;
            }

            .gap-10 {
                gap: 10px;
            }

            .gap-15 {
                gap: 15px;
            }

            .products {
                display: flex;
                flex-flow: row wrap;
                flex: 1 1 1 1;
                gap: 30px;
            }
        </style>
    </head>
    <body>
        <header class="container">
            {{ $header ?? '' }}
        </header>
        <main class="container">
            {{ $slot }}
        </main>
    </body>
</html>
