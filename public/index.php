<?php
// public/index.php

// Автозагрузка (если используем Composer и src/)
require_once __DIR__ . '/../vendor/autoload.php';

// Простая маршрутизация (опционально)
$requestUri = $_SERVER['REQUEST_URI'];
if ($requestUri !== '/' && $requestUri !== '/index.php') {
    http_response_code(404);
    echo 'Page not found';
    exit;
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>DESAN — Технологичные решения</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="header">
        <h1 class="logo">DESAN</h1>
        <div class="floating-circle" style="width:100px;height:100px;top:20%;left:10%; animation-duration:8s;"></div>
        <div class="floating-circle" style="width:60px;height:60px;bottom:15%;right:20%; animation-duration:5s;"></div>
        <div class="floating-circle" style="width:80px;height:80px;bottom:30%;left:30%; animation-duration:7s;"></div>
    </header>

    <section class="services">
        <div class="service-card scroll-fade">
            <div class="service-icon">🖥️</div>
            <div class="service-title">Веб‑разработка</div>
            <div class="service-desc">Сайты любой сложности: лендинги, порталы, SPA.</div>
        </div>
        <div class="service-card scroll-fade">
            <div class="service-icon">🤖</div>
            <div class="service-title">Telegram‑боты</div>
            <div class="service-desc">Информационные и CRM‑боты для Telegram.</div>
        </div>
        <div class="service-card scroll-fade">
            <div class="service-icon">💬</div>
            <div class="service-title">WhatsApp‑боты + CRM</div>
            <div class="service-desc">Автоматизация продаж и поддержки.</div>
        </div>
        <div class="service-card scroll-fade">
            <div class="service-icon">🧠</div>
            <div class="service-title">AI‑чатботы</div>
            <div class="service-desc">Нейросетевые решения для NLP.</div>
        </div>
        <div class="service-card scroll-fade">
            <div class="service-icon">🛍️</div>
            <div class="service-title">E‑commerce</div>
            <div class="service-desc">Магазины с рекомендациями и аналитикой.</div>
        </div>
    </section>

    <script src="js/script.js"></script>
</body>
</html>
