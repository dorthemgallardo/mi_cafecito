<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    @yield('pestaña')
    <style>
        /* styles.css */
            * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            }

            :root{
            --bg: #f7f6fb;
            --card: #ffffff;
            --accent: #8b6fa6;
            --accent-2: #f6b8c6;
            --muted: #6b6b6b;
            --radius: 14px;
            --maxwidth: 1100px;
            }

            html, body {
            height: 100%;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial;
            background: linear-gradient(180deg, var(--bg), #fff);
            color: #222;
            -webkit-font-smoothing:antialiased;
            -moz-osx-font-smoothing:grayscale;
            line-height: 1.45;
            }

            main, header, footer {
            padding: 18px;
            }
            .container {
            max-width: var(--maxwidth);
            margin: 0 auto;
            padding: 8px;
            }

            header {
            background: rgba(255,255,255,0.6);
            backdrop-filter: blur(6px);
            border-bottom: 1px solid rgba(0,0,0,0.04);
            position: sticky;
            top: 0;
            z-index: 20;
            }
            nav .container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            }
            nav ul {
            list-style: none;
            display: flex;
            gap: 12px;
            align-items: center;
            padding: 6px 0;
            }
            nav a {
            text-decoration: none;
            padding: 8px 12px;
            border-radius: 10px;
            color: var(--accent);
            font-weight: 600;
            transition: all .18s ease;
            }
            nav a:hover,
            nav a:focus {
            background: linear-gradient(90deg, rgba(139,111,166,0.12), rgba(246,184,198,0.06));
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(139,111,166,0.06);
            }

            main > section {
            background: var(--card);
            margin: 20px auto;
            border-radius: var(--radius);
            padding: 26px;
            box-shadow: 0 8px 30px rgba(30,30,30,0.04);
            }

            h1 {
            font-size: 1.8rem;
            margin-bottom: 12px;
            color: #2b2b2b;
            text-align: center;
            letter-spacing: -0.3px;
            font-weight: 700;
            font-family: "Georgia", "Times New Roman", serif;
            }

            section img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 12px;
            margin-top: 12px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.06);
            }

            p {
            color: var(--muted);
            margin-top: 8px;
            font-size: 0.98rem;
            }

            form {
            display: grid;
            gap: 12px;
            margin-top: 8px;
            }
            label {
            font-weight: 600;
            color: #333;
            font-size: 0.95rem;
            }
            input[type="text"],
            textarea {
            width: 100%;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid rgba(0,0,0,0.08);
            background: linear-gradient(180deg,#fff, #fbfbfd);
            font-size: 0.95rem;
            transition: border-color .14s ease, box-shadow .14s ease;
            resize: vertical;
            }
            input[type="text"]:focus,
            textarea:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 6px 20px rgba(139,111,166,0.08);
            }

            button[type="submit"] {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            font-weight: 700;
            letter-spacing: .3px;
            background: linear-gradient(90deg, var(--accent), #6f9bd1);
            color: #fff;
            box-shadow: 0 8px 20px rgba(139,111,166,0.18);
            transition: transform .12s ease, box-shadow .12s ease;
            }
            button[type="submit"]:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 34px rgba(139,111,166,0.24);
            }

            footer {
            margin-top: 26px;
            padding: 18px;
            text-align: center;
            color: var(--muted);
            font-size: 0.9rem;
            }

            @media (max-width: 720px) {
            nav .container {
                flex-direction: column;
                align-items: flex-start;
            }
            nav ul {
                flex-wrap: wrap;
                gap: 8px;
            }
            h1 { font-size: 1.4rem; }
            main > section { padding: 18px; border-radius: 12px; }
            }

            a.brand {
            display: inline-flex;
            gap: 10px;
            align-items: center;
            font-weight: 800;
            color: var(--accent);
            }
            .small-note {
            display: inline-block;
            padding: 6px 10px;
            background: rgba(246,184,198,0.12);
            border-radius: 999px;
            font-size: 0.85rem;
            color: #6b4969;
            }

            a:focus, button:focus, input:focus, textarea:focus {
            outline: 3px solid rgba(139,111,166,0.12);
            outline-offset: 2px;
            }

    </style>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{url('index')}}">Presentación</a></li>
                <li><a href="{{url('formulario')}}">Formulario de Opinión</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section>
            @yield('titulo')
            @yield('contenido')
        </section>
    </main>

    <footer>
        <p>&copy;Sitio web de Mi Cafecito</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
