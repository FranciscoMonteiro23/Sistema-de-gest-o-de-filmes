<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinema Digital</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            padding: 20px;
        }

        .container {
            text-align: center;
            padding: 50px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 30px;
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 32px rgba(31, 38, 135, 0.37);
            max-width: 800px;
            width: 100%;
        }

        .cinema-icon {
            font-size: 100px;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 60px;
            margin-bottom: 20px;
            font-weight: 800;
        }

        .subtitle {
            font-size: 24px;
            margin-bottom: 60px;
            opacity: 0.9;
        }

        .main-buttons {
            display: flex;
            gap: 30px;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 60px;
        }

        .btn-main {
            padding: 25px 60px;
            text-decoration: none;
            color: white;
            border-radius: 50px;
            font-size: 24px;
            font-weight: bold;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
            display: block;
            cursor: pointer;
        }

        .btn-movies {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        }

        .btn-movies:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(245, 87, 108, 0.6);
        }

        .btn-genres {
            background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
        }

        .btn-genres:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 242, 254, 0.6);
        }

        .features {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
            margin-top: 20px;
        }

        .feature {
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 20px;
            text-decoration: none;
            color: white;
            display: block;
            transition: all 0.3s ease;
            cursor: pointer;
            border: 2px solid transparent;
        }

        .feature:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-5px);
            border: 2px solid rgba(255, 255, 255, 0.3);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        .feature-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .feature h3 {
            font-size: 22px;
            margin-bottom: 10px;
        }

        .feature p {
            font-size: 16px;
            opacity: 0.85;
        }

        @media (max-width: 768px) {
            h1 { font-size: 40px; }
            .subtitle { font-size: 18px; }
            .btn-main { 
                padding: 20px 40px;
                font-size: 20px;
            }
            .features {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="cinema-icon">🎬</div>
        <h1>Cinema Digital</h1>
        <p class="subtitle">Sistema de Gestão de Filmes e Géneros</p>
        
        <div class="main-buttons">
            <a href="{{ route('movies.index') }}" class="btn-main btn-movies">
                🎥 Ver Filmes
            </a>
            <a href="{{ route('genres.index') }}" class="btn-main btn-genres">
                📂 Gerir Géneros
            </a>
        </div>

        <div class="features">
            <a href="{{ route('movies.create') }}" class="feature">
                <div class="feature-icon">✨</div>
                <h3>Criar</h3>
                <p>Adicionar novos filmes</p>
            </a>
            
            <a href="{{ route('movies.index') }}" class="feature">
                <div class="feature-icon">✏️</div>
                <h3>Editar</h3>
                <p>Atualizar informações</p>
            </a>
            
            <a href="{{ route('movies.index') }}" class="feature">
                <div class="feature-icon">🗑️</div>
                <h3>Remover</h3>
                <p>Apagar registos</p>
            </a>
        </div>
    </div>
</body>
</html>