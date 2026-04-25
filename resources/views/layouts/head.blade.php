<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Cafe</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 70px;
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
        }
        .navbar {
            background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1030;
            backdrop-filter: blur(10px);
            margin: 0;
            padding: 0;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: #fff !important;
        }
        .navbar-nav .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #fff !important;
        }
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            overflow: hidden;
            backdrop-filter: blur(10px);
            background: rgba(255,255,255,0.9);
        }
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        .card:hover .card-img-top {
            transform: scale(1.1);
        }
        .btn-primary {
            background: linear-gradient(45deg, #667eea, #764ba2);
            border: none;
            border-radius: 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary:hover {
            background: linear-gradient(45deg, #764ba2, #667eea);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        .hero-section {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 70vh;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>') repeat;
            animation: float 20s infinite linear;
        }
        @keyframes float {
            0% { transform: translateY(0); }
            100% { transform: translateY(-100px); }
        }
        .menu-section {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 50%, #4facfe 100%);
            padding: 60px 0;
            position: relative;
        }
        .menu-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(255,255,255,0.1);
            border-radius: 50% 50% 0 0;
            transform: scaleX(1.5) scaleY(0.5);
        }
        .category-header {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            padding: 15px 25px;
            margin-bottom: 40px;
            display: inline-block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            backdrop-filter: blur(10px);
        }
        .restaurant-card {
            background: linear-gradient(135deg, #a8edea 0%, #fed6e3 100%);
        }
        .category-card {
            background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
        }
        .footer {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 40px 0;
            text-align: center;
            margin-top: 50px;
        }
        .footer h5 {
            margin-bottom: 20px;
        }
        .footer p {
            margin: 0;
            opacity: 0.8;
        }
        .icon-large {
            font-size: 2rem;
            margin-right: 10px;
        }
        .hero-section h1, .hero-section h2, .hero-section p {
            animation: fadeInUp 1s ease-out;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')
    @yield("main-content")
    <footer class="footer">
        <div class="container">
            <h5><i class="bi bi-shop icon-large"></i>404 Cafe</h5>
            <p>Delicious foods from the best restaurants. Explore, order, and enjoy!</p>
            <p>&copy; 2026 404 Cafe. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>