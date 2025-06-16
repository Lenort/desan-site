from flask import Flask

def create_app():
    app = Flask(__name__)

    # Импортируем маршруты здесь, чтобы они были зарегистрированы на app
    from app import routes

    return app
